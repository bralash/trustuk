@extends('layout.app')
@section('page_title', 'Deposit')
@section('panel_style','top_panel_style_7')
@section('hero')
    <section class="top_panel_image top_panel_image_1" style="background-image: url(../images/faq.jpg);">
        <div class="top_panel_image_hover"></div>
        <div class="top_panel_image_header">
            <h1 class="top_panel_image_title">Register</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{URL::to('/')}}">Home</a> <span class="breadcrumbs_delimiter"></span> <span class="breadcrumbs_item current">Register</span>
            </div>
        </div>
    </section>
@endsection
@section('welcome')
    <div class="sc_section custom_bg_2">
        <div class="content_wrap">
            <div class="sc_empty_space" data-height="2.2em"></div>
            <div class="sc_section margin_top_huge margin_bottom_huge">
                <h2 class="sc_section_title sc_item_title">Make a deposit</h2>
                <div class="login_form_wrapper">
                    <form action="/auth/register" method="post">
                        {{csrf_field()}}


                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" readonly>
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
                            <label for="amount">Amount (in USD)</label>
                            <input type="text" name="amount" id="amount">
                        </div>

                        <button type="submit">Deposit</button>
                    </form>
                </div>
            </div>
            <div class="sc_empty_space" data-height="2em"></div>
        </div>
    </div>
@endsection