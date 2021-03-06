@extends('layout.app')
@section('page_title', 'Register')
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
                <h2 class="sc_section_title sc_item_title">Create an account</h2>
                <div class="login_form_wrapper">
                    <form action="/auth/register" method="post" autocomplete="off">
                        {{csrf_field()}}

                        <div class="field">
                            <label for="name">Fullname</label>
                            <input type="text" name="fullname" id="name">
                        </div>

                        <div class="field">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </div>

                        <div class="field">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </div>
                        
                        <div class="field">
                            <label for="referral">Who did you hear about us?</label>
                            <textarea name="referral" id="referral" cols="30" rows="10"></textarea>
                        </div>

                        <div class="field">
                            <label for="referral_name">Referral Name (if available)</label>
                            <input type="text" name="referral_name" id="referral_name">
                        </div>

                        <div class="field">
                            <label for="plan">Choose plan</label>
                            <select name="plan" id="plan">
                                <option value="TUF Exchange Traded Fund">TUF Exchange Traded Fund</option>
                                <option value="TUF Starter">TUF Starter</option>
                                <option value="TUF Fixed Maturity">TUF Fixed Maturity</option>
                                <option value="Equity Fund of Funds">Equity Fund of Funds</option>
                            </select>
                        </div>

                        <div class="field">
                            <label for="amount">Amount to be deposited (in USD)</label>
                            <input type="text" name="amount" id="amount">
                        </div>

                        <button type="submit">Proceed</button>
                    </form>
                </div>
            </div>
            <div class="sc_empty_space" data-height="2em"></div>
        </div>
    </div>
@endsection