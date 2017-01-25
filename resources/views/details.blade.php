@extends('layout.app')
@section('page_title', 'Personal Details')
@section('panel_style', 'top_panel_style_7')
@section('hero')
    <section class="top_panel_image top_panel_image_1" style="background-image: url(../images/faq.jpg);">
        <div class="top_panel_image_hover"></div>
        <div class="top_panel_image_header">
            <h1 class="top_panel_image_title">Personal Details</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{URL::to('/')}}">Home</a> <span class="breadcrumbs_delimiter"></span> <span class="breadcrumbs_item current">Personal Details</span>
            </div>
        </div>
    </section>
@endsection
@section('welcome')
    <div class="sc_section custom_bg_2">
        <div class="content_wrap">
            <div class="sc_empty_space" data-height="2.2em"></div>
            <div class="sc_section margin_top_huge margin_bottom_huge">
                <h2 class="sc_section_title sc_item_title">Personal Details</h2>
                <div class="login_form_wrapper">
                    <form action="/auth/details" method="post">
                        {{csrf_field()}}

                        <div class="fields two">
                            <div class="field">
                                <label for="title">Title</label>
                                <input type="email" name="title" id="title">
                            </div>

                            <div class="field">
                                <label for="fullname">Fullname</label>
                                <input type="text" name="fullname" id="fullname">
                            </div>
                        </div>


                        <button type="submit">Register</button>
                    </form>
                </div>
            </div>
            <div class="sc_empty_space" data-height="2em"></div>
        </div>
    </div>
@endsection