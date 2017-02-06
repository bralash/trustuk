<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IPNController extends Controller
{
    public function index(Request $request) {

        $cp_merchant_id = '42863d0d55797c9a02fa4318dae6a319';
        $cp_ipn_secret = 'trustukfund';
        $cp_debug_email = 'emmanuelasaber@gmail.com';

        //These would normally be loaded from your database, the most common way is to pass the Order ID through the 'custom' POST field.
        $order_currency = 'USD';
        $order_total = 10.00;

        function errorAndDie($error_msg) {
            global $cp_debug_email;
            if (!empty($cp_debug_email)) {
                $report = 'Error: '.$error_msg."\n\n";
                $report .= "POST Data\n\n";
                foreach ($_SERVER as $k => $v) {
                    $report .= "|$k| = |$v|\n";
                }
                mail($cp_debug_email, 'CoinPayments IPN Error', $report);
            }
            die('IPN Error: '.$error_msg);
        }

        if (!isset($_SERVER['ipn_mode']) || $_SERVER['ipn_mode'] != 'hmac') {
            errorAndDie('IPN Mode is not HMAC');
        }

        if (!isset($_SERVER['HTTP_HMAC']) || empty($_SERVER['HTTP_HMAC'])) {
            errorAndDie('No HMAC signature sent.');
        }

        $request = file_get_contents('php://input');
        if ($request === FALSE || empty($request)) {
            errorAndDie('Error reading POST data');
        }

        if (!isset($_SERVER['merchant']) || $_SERVER['merchant'] != trim($cp_merchant_id)) {
            errorAndDie('No or incorrect Merchant ID passed');
        }

        $hmac = hash_hmac("sha512", $request, trim($cp_ipn_secret));
        if ($hmac != $_SERVER['HTTP_HMAC']) {
            errorAndDie('HMAC signature does not match');
        }

        // HMAC Signature verified at this point, load some variables.

        $txn_id = $_SERVER['txn_id'];
        $item_name = $_SERVER['item_name'];
        $item_number = $_SERVER['item_number'];
        $amount1 = floatval($_SERVER['amount1']);
        $amount2 = floatval($_SERVER['amount2']);
        $currency1 = $_SERVER['currency1'];
        $currency2 = $_SERVER['currency2'];
        $status = intval($_SERVER['status']);
        $status_text = $_SERVER['status_text'];

        //depending on the API of your system, you may want to check and see if the transaction ID $txn_id has already been handled before at this point

        // Check the original currency to make sure the buyer didn't change it.
        if ($currency1 != $order_currency) {
            errorAndDie('Original currency mismatch!');
        }

        // Check amount against order total
        if ($amount1 < $order_total) {
            errorAndDie('Amount is less than order total!');
        }

        if ($status >= 100 || $status == 2) {
            // payment is complete or queued for nightly payout, success
        } else if ($status < 0) {
            //payment error, this is usually final but payments will sometimes be reopened if there was no exchange rate conversion or with seller consent
        } else {
            //payment is pending, you can optionally add a note to the order page
        }
        die('IPN OK');

    }
}
