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
                <div class="sc_section_inner">
                    <h2 class="sc_section_title sc_item_title">Welcome to Trustuk Fund Group LTD</h2>
                    <div class="sc_section_descr sc_item_descr">
                        Welcome to Trustuk Fund Group, one of the few legal companies in <br>
                        the field of mutual fund investment.
                    </div>
                    <div class="sc_empty_space" data-height="0.7em"></div>
                    <div class="columns_wrap sc_columns margin_top_tiny">
                        <div class="sc_empty_space" data-height="1.5em"></div>
                        <span>
                            Welcome to Trustuk Fund Group, one of the few legal companies in the field of
                            mutual fund investment. In a world of dynamics and innovations, the online
                            investments are becoming easier and more accessible to everyone. Many
                            investors have been doubting the legitimacy of online investments, after all,
                            more than many are just scamming fund without punishments.
                        </span>
                        <p>
                            Meanwhile, thousands of investment programs are coming online every minute which
                            turns to be too difficult to judge. Trustuk Fund Group LTD is separated from those
                            sites and this is because Trustuk Fund Group LTD is a legally registered investment
                            company. All our business operations are monitored by both law and bank, which makes
                            all our capital stable and safe at the same time. That's what other online high-profit
                            companies can't beat.
                        </p>
                        <p>
                            Finally, we have local networked centers in Singapore, Washington DC, South Africa, Ghana,
                            Bukina Faso, Nigeria, France and Cyprus.
                        </p>
                    </div>
                </div>
            </div>
            <div class="sc_empty_space" data-height="2em"></div>
        </div>
    </div>
@endsection