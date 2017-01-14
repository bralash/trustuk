@extends('layout')
@section('page_title', 'About Us')
@section('panel_style','top_panel_style_7')
@section('slider')

    <section class="top_panel_image top_panel_image_1">
        <div class="top_panel_image_hover"></div>
        <div class="top_panel_image_header">
            <h1 class="top_panel_image_title">About Us</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">Home</a> <span class="breadcrumbs_delimiter"></span> <span class="breadcrumbs_item current">About Us</span>
            </div>
        </div>
    </section>

    @section('intro_content')

        <div class="sc_section margin_top_huge margin_bottom_huge">
            <div class="sc_section_inner">
                <h2 class="sc_section_title sc_item_title">About Trustuk Fund Group LTD</h2>
                <div class="sc_section_descr sc_item_descr">
                    Trustuk Fund is an investment company uniting professional fund managers <br>
                    in the field of wealth management.
                </div>
                <div class="sc_empty_space" data-height="0.7em"></div>
                <div class="columns_wrap sc_columns margin_top_tiny">
                    <div class="column-1_2 sc_column_item">
                        <figure class="sc_image style_img">
                            <img alt="" class="first" src="images/2207x1686.jpg"> <img alt="" class="second" src="images/2348x2451.jpg">
                        </figure>
                    </div>
                    <div class="column-1_2 sc_column_item">
                        <div class="sc_empty_space" data-height="1.5em"></div><span>
                            Since its founding in 2006, Trustuk Fund has grown to become one of the leading investment
                            companies in the field. Trustuk Fund is an investment company uniting professional fund
                            managers in the field of wealth management. Complex world of real investment is our daily
                            concern.
                            <p>
                                Our mission is to obtain funds for further management. Ten years of successful development
                                for wealth management in private section ensured us that we are ready to open our service
                                to the whole world. Internet has become the most convenient and widespread communication
                                source, that's why in view of responsibility we decided to bring our service via internet
                                and attrat investors online.
                            </p>
                            <p>
                                Trustuk Fund Group is a legal company incorporated in the UK - it makes our company
                                considered as a reliable partner specialized in the highly profitable investment banking.
                            </p>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    @endsection

    @section('main_content')

        <div class="page_content_wrap page_paddings_no">
            <div class="sc_section custom_bg_2">
                <div class="content_wrap">
                    <div class="sc_empty_space" data-height="2.2em"></div>
                    @yield('intro_content')
                    <div class="sc_empty_space" data-height="2em"></div>
                </div>
            </div>
            <div class="sc_section">
                <div class="content_wrap">
                    <div class="sc_empty_space" data-height="2em"></div>
                    <div class="sc_services_wrap">
                        <div class="sc_services sc_services_style_services-1 sc_services_type_icons_img margin_top_huge margin_bottom_huge">
                            <h2 class="sc_services_title sc_item_title">Our Main Services</h2>
                            <div class="sc_services_descr sc_item_descr">
                                Economic services provided by the finance industry, which encompasses a broad<br>
                                range of businesses that manage money, including credit unions.
                            </div>
                            <div class="sc_columns columns_wrap">
                                <div class="column-1_3 column_padding_bottom">
                                    <div class="sc_services_item">
                                        <div class="top_post_image">
                                            <a href="single-service.html"><img alt="" class="services-post-image" src="images/service_01.png"></a>
                                        </div>
                                        <div class="sc_services_item_content">
                                            <h4 class="sc_services_item_title"><a href="single-service.html">Our Culture</a></h4>
                                            <div class="sc_services_item_description">
                                                <p>
                                                    Our values are not static. They guide everything we do, and how we do it. Our
                                                    clients' needs are at the core of our entire decision making. We are always
                                                    cognisant of the bigger picture and keep our responsibilities front of mind in
                                                    everything that we do.
                                                </p>
                                            </div>
                                            <div class="sc_services_item_decoration"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-1_3 column_padding_bottom">
                                    <div class="sc_services_item">
                                        <div class="top_post_image">
                                            <a href="single-service.html"><img alt="" class="services-post-image" src="images/service_02.png"></a>
                                        </div>
                                        <div class="sc_services_item_content">
                                            <h4 class="sc_services_item_title"><a href="single-service.html">Our Mission</a></h4>
                                            <div class="sc_services_item_description">
                                                <p>
                                                    Our mission is to be the leading investment company providing innovative and
                                                    socially responsible solutions to meet our clients' needs, achieving superior
                                                    returns for them.
                                                </p>
                                                <ul>
                                                    <li>To build a sustainable, profitable and socially responsible investment portfolio</li>
                                                    <li>To offer friendly and excellent customer service</li>
                                                    <li>
                                                        Take pride in what we do and take a collective, straightforward, and transparent
                                                        approach to all activity.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="sc_services_item_decoration"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-1_3 column_padding_bottom">
                                    <div class="sc_services_item">
                                        <div class="top_post_image">
                                            <a href="single-service.html"><img alt="" class="services-post-image" src="images/service_03.png"></a>
                                        </div>
                                        <div class="sc_services_item_content">
                                            <h4 class="sc_services_item_title"><a href="single-service.html">Our Vision</a></h4>
                                            <div class="sc_services_item_description">
                                                <p>
                                                    We aspire to be the leading client-centric financial advisory Institution around the globe.
                                                    We commit to a culture that aligns risks and rewards, attracts and develops talented
                                                    individuals, fosters teamwork and partnership and is sensitive to the societies in which we
                                                    operate.
                                                </p>
                                            </div>
                                            <div class="sc_services_item_decoration"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.sc_services_wrap -->
            </div>
            <div class="sc_section skills_bg_1">
                <div class="content_wrap">
                    <div class="sc_empty_space" data-height="3.7em"></div>
                    <h2 class="sc_title sc_title_regular sc_align_center margin_top_huge margin_bottom_null text_align_center custom_cl_4">We are always ahead.</h2>
                    <h2 class="sc_title sc_title_underline sc_align_center margin_top_null text_align_center custom_cl_4">Professional Solutions for Your Business.</h2>
                    <div class="sc_skills sc_skills_counter margin_top_medium margin_bottom_huge" data-caption="Skills" data-type="counter">
                        <div class="columns_wrap sc_skills_columns sc_skills_columns_4">
                            <div class="sc_skills_column column-1_4">
                                <div class="sc_skills_item sc_skills_style_4">
                                    <div class="sc_skills_info_2">
                                        <div class="sc_skills_label">
                                            clients
                                        </div>
                                    </div>
                                    <div class="sc_skills_count">
                                        <div class="sc_skills_total" data-duration="2940" data-ed="" data-max="100" data-speed="30" data-start="0" data-step="1" data-stop="98">
                                            0
                                        </div>
                                    </div>
                                    <div class="sc_skills_info">
                                        <div class="sc_skills_label">
                                            Satisfied Clients & Partners
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_skills_column column-1_4">
                                <div class="sc_skills_item sc_skills_style_4">
                                    <div class="sc_skills_info_2">
                                        <div class="sc_skills_label">
                                            Investments
                                        </div>
                                    </div>
                                    <div class="sc_skills_count">
                                        <div class="sc_skills_total" data-duration="2475" data-ed="" data-max="256" data-speed="29" data-start="0" data-step="3" data-stop="256">
                                            0
                                        </div>
                                    </div>
                                    <div class="sc_skills_info">
                                        <div class="sc_skills_label">
                                            Investments
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_skills_column column-1_4">
                                <div class="sc_skills_item sc_skills_style_4">
                                    <div class="sc_skills_info_2">
                                        <div class="sc_skills_label">
                                            Deals
                                        </div>
                                    </div>
                                    <div class="sc_skills_count">
                                        <div class="sc_skills_total" data-duration="325" data-ed="" data-max="256" data-speed="15" data-start="0" data-step="3" data-stop="65">
                                            0
                                        </div>
                                    </div>
                                    <div class="sc_skills_info">
                                        <div class="sc_skills_label">
                                            Deals & Contracts Made
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_skills_column column-1_4">
                                <div class="sc_skills_item sc_skills_style_4">
                                    <div class="sc_skills_info_2">
                                        <div class="sc_skills_label">
                                            Coffee
                                        </div>
                                    </div>
                                    <div class="sc_skills_count">
                                        <div class="sc_skills_total" data-duration="3158" data-ed="" data-max="842" data-speed="30" data-start="0" data-step="8" data-stop="842">
                                            0
                                        </div>
                                    </div>
                                    <div class="sc_skills_info">
                                        <div class="sc_skills_label">
                                            Cofee Cups Killed
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc_skills_button sc_item_button">
                            <a class="sc_button sc_button_style_filled sc_button_size_medium" href="about-us.html">More About Us</a>
                        </div>
                    </div>
                    <div class="sc_empty_space" data-height="2em"></div>
                </div>
            </div>
            <div class="sc_section custom_bg_2">
                <div class="sc_empty_space" data-height="1em"></div>
                <div class="sc_testimonials_wrap sc_section scheme_original_in">
                    <div class="sc_section_overlay">
                        <div class="content_wrap">
                            <div class="sc_testimonials sc_testimonials_style_testimonials-4 margin_top_huge margin_bottom_huge aligncenter">
                                <h2 class="sc_testimonials_title sc_item_title">Testimonials</h2>
                                <div class="sc_testimonials_descr sc_item_descr">
                                    Testimonials from customers who are satisfied with services that have been<br>
                                    effectively used in marketing for as long as marketing exists.
                                </div>
                                <div class="sc_slider_swiper swiper-slider-container sc_slider_pagination sc_slider_pagination_bottom sc_slider_nocontrols" data-interval="8082" data-slides-min-width="250" data-slides-per-view="2" data-slides-space="30">
                                    <div class="slides swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="sc_testimonial_item">
                                                <div class="sc_testimonial_avatar"><img alt="" src="images/80x80.jpg"></div>
                                                <div class="sc_testimonial_content">
                                                    <p>Being a company's director requires maximum attention and devotion. This was exactly what I felt when turned to your products and services. All our questions and inquiries were answered effectively and right away. Our website has never looked better, ever. Thank you.</p>
                                                </div>
                                                <div class="sc_testimonial_author">
                                                    <span class="sc_testimonial_author_name">Lisa Larson</span> <span class="sc_testimonial_author_position">Company Director</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="sc_testimonial_item">
                                                <div class="sc_testimonial_avatar"><img alt="" src="images/80x80.jpg"></div>
                                                <div class="sc_testimonial_content">
                                                    <p>You never know what is gooing to happen until you try. But let me tell you that taking risk with these guys was totally worth it. Now we are a regular client, and this was probably the best decision we ever made! Our company appreciates your assistance and great work!</p>
                                                </div>
                                                <div class="sc_testimonial_author">
                                                    <span class="sc_testimonial_author_name">James Watson</span> <span class="sc_testimonial_author_position">Senior Manager</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="sc_testimonial_item">
                                                <div class="sc_testimonial_avatar"><img alt="" src="images/80x80.jpg"></div>
                                                <div class="sc_testimonial_content">
                                                    <p>Highly recommend these guys to everyone who is in search of fresh ideas, quality products and excellent customer support. You will be able to find what you need and more right here with no hassle. Thanks for your time and efford toward our project. We will stay in touch!</p>
                                                </div>
                                                <div class="sc_testimonial_author">
                                                    <span class="sc_testimonial_author_name">Chris Doe</span> <span class="sc_testimonial_author_position">Startup SEO</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="sc_testimonial_item">
                                                <div class="sc_testimonial_avatar"><img alt="" src="images/80x80.jpg"></div>
                                                <div class="sc_testimonial_content">
                                                    <p>I enjoyed working with you guys very much! No matter what issues or questions popped up, you were always there to assist. I appreciate your service, quality products and professional approach in every aspect. Keep up the excellent job and let us know what comes next!</p>
                                                </div>
                                                <div class="sc_testimonial_author">
                                                    <span class="sc_testimonial_author_name">Susan Smith</span> <span class="sc_testimonial_author_position">Handmade Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc_slider_controls_wrap">
                                        <a class="sc_slider_prev" href="#"></a> <a class="sc_slider_next" href="#"></a>
                                    </div>
                                    <div class="sc_slider_pagination_wrap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sc_empty_space" data-height="0.7em"></div>
            </div>
            <div class="sc_section custom_bg_2">
                <div class="sc_section">
                    <div class="sc_section_inner">
                        <h2 class="sc_section_title sc_item_title">Our Gallery</h2>
                        <div class="sc_section_descr sc_item_descr">
                            View some of the most successful projects and more by our specialists presented<br>
                            in this gallery. Contact our managers for more information.
                        </div>
                        <div class="sc_section_content_wrap">
                            <article class="myportfolio-container minimal-light" id="esg-grid-6-1-wrap">
                                <div class="esg-grid" id="esg-grid-6-1">
                                    <ul>
                                        <li class="eg-home-wrapper">
                                            <div class="esg-media-cover-wrapper">
                                                <div class="esg-entry-media"><img alt="" src="images/2000x1333.jpg"></div>
                                                <div class="esg-entry-cover esg-fade">
                                                    <div class="esg-overlay esg-fade eg-home-container"></div>
                                                    <div class="esg-center eg-home-element-3-a esg-flipup" data-delay="0.1">
                                                        <a class="eg-home-element-3" href="single-post.html" target="_self">Finance Consulting</a>
                                                    </div>
                                                    <div class="esg-center eg-home-element-9 esg-none esg-clear"></div>
                                                    <div class="esg-center eg-home-element-10-a esg-flipup" data-delay="0.1">
                                                        <a class="eg-home-element-10" href="#" rel="" title="">Our Gallery</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="eg-home-wrapper">
                                            <div class="esg-media-cover-wrapper">
                                                <div class="esg-entry-media"><img alt="" src="images/2231x2057.jpg"></div>
                                                <div class="esg-entry-cover esg-fade">
                                                    <div class="esg-overlay esg-fade eg-home-container"></div>
                                                    <div class="esg-center eg-home-element-3-a esg-flipup" data-delay="0.1">
                                                        <a class="eg-home-element-3" href="single-post.html" target="_self">Simple Solutions</a>
                                                    </div>
                                                    <div class="esg-center eg-home-element-9 esg-none esg-clear"></div>
                                                    <div class="esg-center eg-home-element-10-a esg-flipup" data-delay="0.1">
                                                        <a class="eg-home-element-10" href="#" rel="" title="">Our Gallery</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="eg-home-wrapper">
                                            <div class="esg-media-cover-wrapper">
                                                <div class="esg-entry-media"><img alt="" src="images/2332x1702.jpg"></div>
                                                <div class="esg-entry-cover esg-fade">
                                                    <div class="esg-overlay esg-fade eg-home-container"></div>
                                                    <div class="esg-center eg-home-element-3-a esg-flipup" data-delay="0.1">
                                                        <a class="eg-home-element-3" href="single-post.html" target="_self">Effective Assistance</a>
                                                    </div>
                                                    <div class="esg-center eg-home-element-9 esg-none esg-clear"></div>
                                                    <div class="esg-center eg-home-element-10-a esg-flipup" data-delay="0.1">
                                                        <a class="eg-home-element-10" href="#" rel="" title="">Our Gallery</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="eg-home-wrapper">
                                            <div class="esg-media-cover-wrapper">
                                                <div class="esg-entry-media"><img alt="" src="images/2231x2057.jpg"></div>
                                                <div class="esg-entry-cover esg-fade">
                                                    <div class="esg-overlay esg-fade eg-home-container"></div>
                                                    <div class="esg-center eg-home-element-3-a esg-flipup" data-delay="0.1">
                                                        <a class="eg-home-element-3" href="single-post.html" target="_self">Stock Market Updates</a>
                                                    </div>
                                                    <div class="esg-center eg-home-element-9 esg-none esg-clear"></div>
                                                    <div class="esg-center eg-home-element-10-a esg-flipup" data-delay="0.1">
                                                        <a class="eg-home-element-10" href="#" rel="" title="">Our Gallery</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="eg-home-wrapper">
                                            <div class="esg-media-cover-wrapper">
                                                <div class="esg-entry-media"><img alt="" src="images/2348x2451.jpg"></div>
                                                <div class="esg-entry-cover esg-fade">
                                                    <div class="esg-overlay esg-fade eg-home-container"></div>
                                                    <div class="esg-center eg-home-element-3-a esg-flipup" data-delay="0.1">
                                                        <a class="eg-home-element-3" href="single-post.html" target="_self">Simple Solutions</a>
                                                    </div>
                                                    <div class="esg-center eg-home-element-9 esg-none esg-clear"></div>
                                                    <div class="esg-center eg-home-element-10-a esg-flipup" data-delay="0.1">
                                                        <a class="eg-home-element-10" href="#" rel="" title="">Our Gallery</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="eg-home-wrapper">
                                            <div class="esg-media-cover-wrapper">
                                                <div class="esg-entry-media"><img alt="" src="images/2348x2451.jpg"></div>
                                                <div class="esg-entry-cover esg-fade">
                                                    <div class="esg-overlay esg-fade eg-home-container"></div>
                                                    <div class="esg-center eg-home-element-3-a esg-flipup" data-delay="0.1">
                                                        <a class="eg-home-element-3" href="single-post.html" target="_self">Investment Advice</a>
                                                    </div>
                                                    <div class="esg-center eg-home-element-9 esg-none esg-clear"></div>
                                                    <div class="esg-center eg-home-element-10-a esg-flipup" data-delay="0.1">
                                                        <a class="eg-home-element-10" href="#" rel="" title="">Our Gallery</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <article class="esg-filters esg-singlefilters esg-navbutton-solo-left">
                                        <div class="esg-navigationbutton esg-left esg-fgc-6">
                                            <i class="eg-icon-left-open"></i>
                                        </div>
                                    </article>
                                    <div class="esg-clear-no-height"></div>
                                    <article class="esg-filters esg-singlefilters esg-navbutton-solo-right">
                                        <div class="esg-navigationbutton esg-right esg-fgc-6">
                                            <i class="eg-icon-right-open"></i>
                                        </div>
                                    </article>
                                    <div class="esg-clear-no-height"></div>
                                </div>
                            </article><!-- END OF THE GRID WRAPPER -->
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sc_section custom_bg_2 overflow_hide">
                <div class="content_wrap">
                    <div class="sc_call_to_action sc_call_to_action_style_2 sc_call_to_action_align_left margin_top_medium margin_bottom_small">
                        <div class="columns_wrap">
                            <div class="sc_call_to_action_info column-3_4">
                                <h2 class="sc_call_to_action_title sc_item_title">Need a Financial Advice? We Offer Professional Assistance Only!</h2>
                                <div class="sc_call_to_action_descr sc_item_descr">
                                    Contact us for more information about our services.
                                </div>
                            </div>
                            <div class="sc_call_to_action_buttons sc_item_buttons column-1_4">
                                <div class="sc_call_to_action_button sc_item_button">
                                    <a class="sc_button sc_button_style_filled sc_button_size_medium" href="appointment.html">Make an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sc_section">
                <div class="content_wrap">
                    <div class="sc_empty_space" data-height="1.8em"></div>
                    <div class="sc_clients_wrap">
                        <div class="sc_clients sc_clients_style_clients-1 margin_top_huge margin_bottom_huge">
                            <h2 class="sc_clients_title sc_item_title">Our Clients</h2>
                            <div class="sc_clients_descr sc_item_descr">
                                Meet some of the most successful clients assisted by our specialists. Contact our<br>
                                managers for more information about partnership.
                            </div>
                            <div class="sc_columns columns_wrap">
                                <div class="column-1_6 column_padding_bottom">
                                    <div class="sc_clients_item">
                                        <div class="sc_client_image"><img alt="" src="images/131x67.png"></div>
                                    </div>
                                </div>
                                <div class="column-1_6 column_padding_bottom">
                                    <div class="sc_clients_item">
                                        <div class="sc_client_image"><img alt="" src="images/131x67.png"></div>
                                    </div>
                                </div>
                                <div class="column-1_6 column_padding_bottom">
                                    <div class="sc_clients_item">
                                        <div class="sc_client_image"><img alt="" src="images/131x67.png"></div>
                                    </div>
                                </div>
                                <div class="column-1_6 column_padding_bottom">
                                    <div class="sc_clients_item">
                                        <div class="sc_client_image"><img alt="" src="images/131x67.png"></div>
                                    </div>
                                </div>
                                <div class="column-1_6 column_padding_bottom">
                                    <div class="sc_clients_item">
                                        <div class="sc_client_image"><img alt="" src="images/131x67.png"></div>
                                    </div>
                                </div>
                                <div class="column-1_6 column_padding_bottom">
                                    <div class="sc_clients_item">
                                        <div class="sc_client_image"><img alt="" src="images/131x67.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.sc_clients -->
                    </div>
                </div>
            </div>
            <div class="sc_section custom_bg_2">
                <div class="content_wrap">
                    <div class="sc_empty_space" data-height="2em"></div>
                    <div class="sc_blogger layout_classic_3 template_masonry no_padding_post margin_top_huge margin_bottom_huge sc_blogger_horizontal">
                        <h2 class="sc_blogger_title sc_item_title">Our Blog Posts</h2>
                        <div class="sc_blogger_descr sc_item_descr">
                            Perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium,<br>
                            totam rem aperiam, eaque ipsa quae ab illo inventore.
                        </div>
                        <div class="isotope_wrap" data-columns="3">
                            <div class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3">
                                <div class="post_item post_item_classic post_item_classic_3 post_format_standard">
                                    <div class="post_featured">
                                        <div class="post_thumb">
                                            <a class="hover_icon hover_icon_link" href="single-post.html"><img alt="" src="images/370x270.jpg"></a>
                                        </div>
                                        <div class="cat_post_info">
                                            <span class="post_categories"><a class="category_link" href="#">Business</a></span>
                                        </div>
                                    </div>
                                    <div class="post_content isotope_item_content">
                                        <h5 class="post_title"><a href="single-post.html">Money Market Rates Finding the Best Accounts in 2016</a></h5>
                                        <div class="post_info">
                                            <span class="post_info_item"><a class="post_info_date" href="single-post.html">April 26, 2016</a></span> <span class="post_info_item post_info_counters"><a class="post_counters_item icon-comment-light" href="single-post.html" title=""><span class="post_counters_number">4</span> Comments</a></span>
                                        </div>
                                        <div class="post_descr">
                                            <p>Perspiciatis unde omnis iste natus sit volupt tem accusantium doloremque...</p><a class="post_readmore readmore" href="single-post.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.isotope_item -->
                            <div class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3">
                                <div class="post_item post_item_classic post_item_classic_3 post_format_standard even">
                                    <div class="post_featured">
                                        <div class="post_thumb">
                                            <a class="hover_icon hover_icon_link" href="single-post.html"><img alt="" src="images/370x270.jpg"></a>
                                        </div>
                                        <div class="cat_post_info">
                                            <span class="post_categories"><a class="category_link" href="#">Business</a></span>
                                        </div>
                                    </div>
                                    <div class="post_content isotope_item_content">
                                        <h5 class="post_title"><a href="single-post.html">Sustainable Investing from Bugs to Biodrying</a></h5>
                                        <div class="post_info">
                                            <span class="post_info_item"><a class="post_info_date" href="single-post.html">April 20, 2016</a></span> <span class="post_info_item post_info_counters"><a class="post_counters_item icon-comment-light" href="single-post.html" title=""><span class="post_counters_number">0</span> Comments</a></span>
                                        </div>
                                        <div class="post_descr">
                                            <p>Perspiciatis unde omnis iste natus sit volupt tem accusantium doloremque...</p><a class="post_readmore readmore" href="single-post.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.isotope_item -->
                            <div class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3">
                                <div class="post_item post_item_classic post_item_classic_3 post_format_standard last">
                                    <div class="post_featured">
                                        <div class="post_thumb">
                                            <a class="hover_icon hover_icon_link" href="single-post.html"><img alt="" src="images/370x270.jpg"></a>
                                        </div>
                                        <div class="cat_post_info">
                                            <span class="post_categories"><a class="category_link" href="#">Funding Trends</a></span>
                                        </div>
                                    </div>
                                    <div class="post_content isotope_item_content">
                                        <h5 class="post_title"><a href="single-post.html">Stay in Trend: How to Be Ahead of Stock Changes</a></h5>
                                        <div class="post_info">
                                            <span class="post_info_item"><a class="post_info_date" href="single-post.html">January 4, 2016</a></span> <span class="post_info_item post_info_counters"><a class="post_counters_item icon-comment-light" href="single-post.html" title=""><span class="post_counters_number">0</span> Comments</a></span>
                                        </div>
                                        <div class="post_descr">
                                            <p>Perspiciatis unde omnis iste natus sit volupt tem accusantium doloremque...</p><a class="post_readmore readmore" href="single-post.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.isotope_item -->
                        </div>
                        <div class="sc_blogger_button sc_item_button">
                            <a class="sc_button sc_button_style_border sc_button_size_medium" href="all-posts.html">View More Posts</a>
                        </div>
                    </div>
                    <div class="sc_empty_space" data-height="2.3em"></div>
                </div>
            </div>
        </div><!-- </.page_content_wrap> -->

    @endsection

@endsection