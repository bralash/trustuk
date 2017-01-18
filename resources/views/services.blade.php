@extends('layout.app')
@section('page_title', 'Services')
@section('panel_style','top_panel_style_7')
@section('hero')
    <section class="top_panel_image top_panel_image_1" style="background-image: url(../images/faq.jpg);">
        <div class="top_panel_image_hover"></div>
        <div class="top_panel_image_header">
            <h1 class="top_panel_image_title">Our Services</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{URL::to('/')}}">Home</a> <span class="breadcrumbs_delimiter"></span> <span class="breadcrumbs_item current">Our Services</span>
            </div>
        </div>
    </section>
@endsection
@section('welcome')
    <div class="sc_section custom_bg_2">
        <div class="content_wrap">
            <div class="sc_empty_space" data-height="2.2em" style="height: 2.2em;"></div>
            <div class="sc_section margin_top_huge margin_bottom_huge">
                <div class="sc_section_inner">
                    <h2 class="sc_section_title sc_item_title">What We Do</h2>
                    <div class="sc_section_descr sc_item_descr">
                        Want to invest your spare money? Want to earn more than the banks <br>
                        give you? Stop searching; invest with Trustuk Fund Group LTD now
                    </div>
                    <div class="sc_empty_space" data-height="0.7em" style="height: 0.7em;"></div>
                    <div class="columns_wrap sc_columns margin_top_tiny">
                        <div class="column-1_2 sc_column_item">
                            <figure class="sc_image style_img">
                                <img alt="" class="first" src="images/home_1.jpg"> <img alt="" class="second" src="images/img1.jpg">
                            </figure>
                        </div>
                        <div class="column-1_2 sc_column_item">
                            <div class="sc_empty_space" data-height="1.5em" style="height: 1.5em;"></div>
                            <span>
                                We are working as an investment pool, collecting multiple lower value investments
                                and grouping them into one single HUGE investment, using those funds to invest
                                into securities with major concentration in mutual funds and generate outstanding
                                returns. We then share back a portion of our revenue to our customers, who made an
                                investment.
                            </span>
                            <h4 class="sc_title sc_title_regular margin_top_small margin_bottom_tiny">Need Further Explanation?</h4>
                            <span>
                                Still have questions that you would like answers to? Then leave us a message. <br></span> <a class="sc_button sc_button_style_filled sc_button_size_medium margin_top_small margin_bottom_small" href="{{URL::to('/contact')}}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sc_empty_space" data-height="2em" style="height: 2em;"></div>
        </div>
    </div>
@endsection