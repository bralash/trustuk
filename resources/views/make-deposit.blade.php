@extends('admin.index')
@section('page_title','Make Deposit')
@section('title', 'Make Deposit')
@section('stats')
    <div class="deposit-wrapper">
        <form action="/admin/deposit" method="post">
            {{csrf_field()}}
            <div class="field">
                <label for="plan">Choose a plan</label>
                <select name="plan" id="plan">
                    <option value="TUF Exchange Traded Fund">TUF Exchange Traded Fund</option>
                    <option value="TUF Starter">TUF Starter</option>
                    <option value="TUF Fixed Maturity">TUF Fixed Maturity</option>
                    <option value="Equity Fund of Funds">Equity Fund of Funds</option>
                </select>
            </div>
            <div class="field">
                <label for="pm">Payment Method</label>
                <select name="payment_method" id="pm">
                    <option value="bitcoin">Bitcoin</option>
                </select>
            </div>
            <div class="field">
                <label for="amount">Amount</label>
                <input type="text" name="amount" id="amount">
            </div>

            <button class="button ui blue" type="submit">Deposit</button>
        </form>
    </div>
@endsection