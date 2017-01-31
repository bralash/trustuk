@extends('layout.app')
@section('page_title','FAQs')
@section('panel_style','top_panel_style_7')
@section('hero')
    <section class="top_panel_image top_panel_image_1" style="background-image: url(../images/faq.jpg);">
        <div class="top_panel_image_hover"></div>
        <div class="top_panel_image_header">
            <h1 class="top_panel_image_title">Frequently Asked Questions</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{URL::to('/')}}">Home</a> <span class="breadcrumbs_delimiter"></span> <span class="breadcrumbs_item current">FAQ</span>
            </div>
        </div>
    </section>
@endsection

@section('welcome')
    <div class="sc_section custom_bg_2">
        <div class="content_wrap">
            <div class="sc_empty_space" data-height="2.2em"></div>
            <div class="sc_section margin_top_huge margin_bottom_huge">
                <div class="questions">
                    <h3>Which Countries are allowed to rgister with TUF Group?</h3>
                    <p>
                        Members from all countries in the world are eligible to
                        join, but you must be 18 years old in the time of joining.
                        In any suspect we may ask for the ID proof to verify your identity,
                        address and age. We are not liable for tax in country and
                        licensing to operate business with you.
                    </p>

                    <h3>How can I register? How much does it cost?</h3>
                    <p>
                        It's simple and comes with ready to deposit. You need to
                        enter your <b>Name</b> and <b>E-mail Address</b> in the
                        Invest now form and follow the instructions to complete
                        the registration process.
                    </p>

                    <h3>Can I have multiple accounts with TUF Group?</h3>
                    <p>
                        Yes, this is allowed. Each person can create multiple
                        accounts for themselves
                    </p>

                    <h3>Which Payment Methods do you accept?</h3>
                    <p>
                        We accept <b>Bitcoin</b> currently, but soon to add Perfect
                        Money, Payeer, AdvCash, OkPay, Neteller, Skrill and Payza.
                    </p>

                    <h3>
                        What are the minimum and maximum Investments that can be made?
                    </h3>
                    <p>
                        Minimum investment is <b>$500</b> and maximum depending on the
                        package chosen.
                    </p>

                    <h3>Other Investment Programs pays daily, why don't you?</h3>
                    <p>
                        We are a real company from the United Kingdom. Daily returns
                        are normally paid by HYIPs and no one knows when that company
                        will disappear. We are not an HYIP. We do private banking
                        investments in different areas and share those profits with
                        our members. Depending on your investment amount, you will
                        receive 30% - 170% of our profits made.
                    </p>
                </div>
            </div>
            <div class="sc_empty_space" data-height="2em"></div>
        </div>
    </div>
@endsection