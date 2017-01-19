@extends('layout.app')
@section('page_title', 'Contact Us')
@section('panel_style', 'top_panel_style_7')
@section('hero')
    <section class="top_panel_image top_panel_image_1" style="background-image: url(../images/faq.jpg);">
        <div class="top_panel_image_hover"></div>
        <div class="top_panel_image_header">
            <h1 class="top_panel_image_title">Contact Us</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{URL::to('/')}}">Home</a> <span class="breadcrumbs_delimiter"></span> <span class="breadcrumbs_item current">Contact Us</span>
            </div>
        </div>
    </section>
@endsection
@section('welcome')
    <div class="sc_section">
        <div class="content_wrap">
            <div class="sc_empty_space" data-height="0.8em" style="height: 0.8em;"></div>
            <div class="sc_section margin_top_huge margin_bottom_huge">
                <div class="sc_section_inner">
                    <h6 class="sc_section_subtitle sc_item_subtitle">Your Message</h6>
                    <div class="sc_section_content_wrap">
                        <h3 class="sc_title sc_title_underline sc_align_center margin_bottom_null text_align_center">Send Us a Message</h3>
                        <div class="sc_empty_space" data-height="0.4em" style="height: 0.4em;"></div>
                        <div class="sc_form_wrap">
                            <div class="sc_form sc_form_style_form_2 aligncenter margin_top_medium">
                                <div class="sc_form_fields">
                                    <form action="include/sendmail.php" class="sc_input_hover_default inited" data-formtype="form_2" method="post">
                                        <div class="sc_columns columns_wrap sc_form_info">
                                            <div class="sc_form_address column-1_3">
                                                <div class="sc_form_item sc_form_field label_over">
                                                    <input aria-required="true" class="sc_form_username" name="username" placeholder="Name *" type="text">
                                                </div>
                                            </div>
                                            <div class="column-1_3">
                                                <div class="sc_form_item sc_form_field label_over">
                                                    <input aria-required="true" class="sc_form_email" name="email" placeholder="E-mail *" type="text">
                                                </div>
                                            </div>
                                            <div class="sc_form_address column-1_3">
                                                <div class="sc_form_item sc_form_field label_over">
                                                    <input aria-required="true" class="sc_form_subj" name="subject" placeholder="Subject" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_form_item sc_form_message">
                                            <textarea aria-required="true" class="sc_form_message" name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="sc_form_item sc_form_button">
                                            <button class="sc_button sc_button_style_filled sc_button_size_medium sc_button_iconed icon-paper-plane-light">Leave a Message</button>
                                        </div>
                                        <div class="result sc_infobox"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sc_empty_space" data-height="11.19px" style="height: 11.19px;"></div>
        </div>
    </div>
@endsection
@section('main_services')
    <div class="sc_section">
        <div class="sc_googlemap" data-style="dark" data-zoom="12" id="sc_googlemap_2">
            <div class="sc_googlemap_marker" data-address="123 Cheetham Hill Rd, Manchester M8 8PZ, UK" data-description="123 Cheetham Hill Rd, Manchester M8 8PZ, UKo" data-latlng="" data-point="{{URL::asset('images/map_pointer_alt.png')}}" data-title="123 Cheetham Hill Rd, Manchester M8 8PZ, UK" id="sc_googlemap_890267402_1"></div>
        </div>
    </div>
@endsection