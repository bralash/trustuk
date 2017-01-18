@extends('layout.app')
@section('page_title', 'About Us')
@section('panel_style','top_panel_style_7')
@section('hero')
    <section class="top_panel_image top_panel_image_1" style="background-image: url(../images/faq.jpg);">
        <div class="top_panel_image_hover"></div>
        <div class="top_panel_image_header">
            <h1 class="top_panel_image_title">About Us</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{URL::to('/')}}">Home</a> <span class="breadcrumbs_delimiter"></span> <span class="breadcrumbs_item current">About Us</span>
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
                    <h2 class="sc_section_title sc_item_title">About Trustuk Fund Group LTD</h2>
                    <div class="sc_section_descr sc_item_descr">
                        Trustuk Fund is an investment company uniting professional <br>
                        fund managers in the field of wealth management.
                    </div>
                    <div class="sc_empty_space" data-height="0.7em"></div>
                    <div class="columns_wrap sc_columns margin_top_tiny">
                        <div class="sc_empty_space" data-height="1.5em"></div>
                    <span>
                        Since its founding in 2006, Trustuk Fund has grown to become one of
                        the leadng investment companies in the field. Trustuk Fund is an
                        investment company uniting professional fund managers in the field
                        of wealth management. Complex world of real investment is our daily
                        concern.
                    </span>
                    <p>
                        Our mission is to obtain funds for further management. Ten years of
                        successful development for wealth management in private section ensured
                        us that we are ready to open our service to the whole world. Internet has
                        become the most convenient and widespread communication source, that's why
                        in view of responsibility we decided to bring our service via internet and
                        attract investors online.
                    </p>
                    <p>
                        Trustuk Fund Group is a legal company incorporated in the UK - it makes our
                        company considered as a reliable partner specialized in the highly profitable
                        investment banking. Our company's most valuable asset is relationship between
                        us and our customers. We believe that our company must be based on trust,
                        amicability, professionalism, excellent performance and openness.
                    </p>
                    <p>
                        World's most important corporations and institutions entrust us with their fund
                        management. With strong portfolio of assets under custody, we provides strategic
                        advice, raises captial, manages risk and extends liquidity across banking and
                        financial markets around the globe.
                    </p>
                    <p>
                        It is our ambition to be the lead, trusted and privately international-locally-linked
                        partner for the wealthy, corporate and institutional clients. We dedicate
                        ourselves to effective performance that is characterized by integrity, impartiality
                        and complete confidentiality and will provide benefits by leveraging the far-reaching
                        capabilities and deep expertise of TRUSTUK Group LTD strategists, economists,
                        analysts and management
                    </p>
                    <p>
                        Through our power of international market connections you make everyday lead to
                        new opportunities. When you partner with us, our international-local network of
                        specialists finds the ideal solutions for linking your business with capital,
                        financial solutions and industry expertise around the globe. Our strategic
                        objective is to build top-class investment portfolio management.
                    </p>
                    <p>
                        And our distinctive insightful footprint coupled with our strong and
                        powerful brand enables us to command respect over our peers in the
                        advisory and investment banking industry and has become a key player in the
                        markets. We are deeply encourged and strengthened by what our awesome advisory
                        services achieve for our clients.
                    </p>
                    </div>

                </div>
            </div>
            <div class="sc_empty_space" data-height="2em"></div>
        </div>
    </div>
@endsection

@section('main_services')
    <div class="sc_section">
        <div class="content_wrap">
            <div class="sc_empty_space" data-height="2em" style="height: 2em;"></div>
            <div class="sc_services_wrap">
                <div class="sc_services sc_services_style_services-1 sc_services_type_icons_img margin_top_huge margin_bottom_huge">
                    <h2 class="sc_services_title sc_item_title">What We Believe</h2>
                    <div class="sc_services_descr sc_item_descr">
                        We dedicate ourselves to effective performance that is <br>
                        characterized by integrity, impartiality and complete confidentiality. <br>
                    </div>
                    <div class="sc_columns columns_wrap">
                        <div class="column-1_3 column_padding_bottom">
                            <div class="sc_services_item">
                                <div class="top_post_image">
                                    <a href="single-service.html"><img alt="" class="services-post-image" src="{{URL::asset('images/vision.png')}}"></a>
                                </div>
                                <div class="sc_services_item_content">
                                    <h4 class="sc_services_item_title"><a href="single-service.html">Our Vision</a></h4>
                                    <div class="sc_services_item_description">
                                        <p>
                                            We aspire to be the leading client-centric financial advisory institution
                                            around the globe. We commit to a culture that aligns risks and rewards,
                                            attracts and develops talented individuals, fosters teamwork and
                                            partnership and is sensitive to the societies in which we operate.
                                        </p>
                                    </div>
                                    <div class="sc_services_item_decoration"></div>
                                </div>
                            </div>
                        </div>
                        <div class="column-1_3 column_padding_bottom">
                            <div class="sc_services_item">
                                <div class="top_post_image">
                                    <a href="single-service.html"><img alt="" class="services-post-image" src="{{URL::asset('images/miss.png')}}"></a>
                                </div>
                                <div class="sc_services_item_content">
                                    <h4 class="sc_services_item_title"><a href="single-service.html">Our Mission</a></h4>
                                    <div class="sc_services_item_description">
                                        <p>
                                            Our mission is to be the leading investment company providing innovative and
                                            socially responsible solutions to meet our clients' needs, achieving superior
                                            returns for them.
                                        </p>
                                        <p>
                                            <ul>
                                                <li>
                                                    To build a sustainable, profitable and socially responsible investment portfolio
                                                </li>
                                                <li>
                                                    To offer friendly and excellent customer service
                                                </li>
                                                <li>
                                                    Take pride in what we do and take a collective, straightforward, and transparent
                                                    approach to all activity
                                                </li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="sc_services_item_decoration"></div>
                                </div>
                            </div>
                        </div>
                        <div class="column-1_3 column_padding_bottom">
                            <div class="sc_services_item">
                                <div class="top_post_image">
                                    <a href="single-service.html"><img alt="" class="services-post-image" src="{{URL::asset('images/trophy.png')}}"></a>
                                </div>
                                <div class="sc_services_item_content">
                                    <h4 class="sc_services_item_title"><a href="single-service.html">Our Culture &amp; Values</a></h4>
                                    <div class="sc_services_item_description">
                                        <p>
                                            Our values are not static. They guide everything we do, and
                                            how we do it. Our clients' needs are at the core of our entire
                                            decision making. We are always cognisant of the bigger picture
                                            and keep our responsibilities front of mind in everything that we do.
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
@endsection

@section('testimonial')
    <div class="sc_section custom_bg_2">
        <div class="content_wrap">
            <div class="sc_empty_space" data-height="2em" style="height: 2em;"></div>
            <div class="sc_services_wrap">
                <div class="sc_services sc_services_style_services-1 sc_services_type_icons_img margin_top_huge margin_bottom_huge">
                    <h2 class="sc_services_title sc_item_title">Our Strategy</h2>
                    <div class="sc_services_descr sc_item_descr">
                        Trustuk Fund Group LTD uses six risk filters to guide<br>
                        strategy decisions about when and where to invest.
                    </div>
                    <div class="sc_columns columns_wrap">
                        <p>
                            Trustuk Fund Group LTD uses six risk filters to guide strategy
                            decisions about when and where to invest. The first two - <b>international
                            connectivity</b> and <b>international development</b> - determine whether the business
                            is strategically relevant and futuristically robust.
                        </p>
                        <p>
                            The next three - <b>profitability, efficiency</b> and <b>liquidity</b> - determine whether
                            the financial position of the business is adequately attractive and resilient
                            to be able wither economic and social storm. The sixth filter - <b>the risk of financial
                            crime</b> - governs our activities in high-risk industries and jurisdictions, and
                            is applied to protect us by restricting the scope of our business where appropriate.
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- /.sc_services_wrap -->
    </div>
@endsection

@section('gallery')
    <div class="sc_section">
        <div class="columns_wrap sc_columns no_margins width_1_3" data-equal-height=".sc_column_item">
            <div class="column-1_3 sc_column_item text_align_center first" style="height: 752px;">
                <div class="sc_column_item_inner" id="video_player">
                    <div class="sc_popup mfp-with-anim mfp-hide" id="video_go">
                        <div class="sc_video_player">
                            <div class="sc_video_frame" data-height="659" data-width="1170">
                                <iframe class="video_frame" src="https://player.vimeo.com/video/147335033"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="sc_section extra_vertical_align aligncenter">
                        <div class="sc_section_inner">
                            <div class="sc_section_content_wrap">
                                <a class="sc_button sc_button_style_icon sc_button_size_large sc_button_iconed sc_popup_link demo_go margin_bottom_tiny- icon-play inited" href="#video_go"></a>
                                <div class="sc_services_wrap scheme_dark">
                                    <div class="sc_services sc_services_style_services-2 sc_services_type_icons margin_top_tiny-">
                                        <div class="sc_services_item">
                                            <div class="sc_services_item_featured post_featured"></div>
                                            <div class="sc_services_item_content">
                                                <h4 class="sc_services_item_title">View Our Presentation Video</h4><span class="sc_services_item_subtitle">We Love Or Clients</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-2_3 sc_column_item" style="height: 752px;">
                <div class="sc_empty_space" data-height="2.2em" style="height: 2.2em;"></div>
                <div class="sc_services_wrap">
                    <div class="sc_services sc_services_style_services-2 sc_services_type_icons_img margin_top_huge margin_right_medium margin_bottom_huge margin_left_medium">
                        <h2 class="sc_services_title sc_item_title">Summary of Our Strategy</h2>
                        <div class="sc_services_descr sc_item_descr">
                            We use six risk filters to guide strategy decisions
                        </div>
                        <div class="sc_columns columns_wrap">
                            <div class="column-1_3 column_padding_bottom">
                                <div class="sc_services_item">
                                    <div class="top_post_image">
                                        <a href="single-post.html"><img alt="" class="services-post-image" src="images/min_service_01.png"></a>
                                    </div>
                                    <div class="sc_services_item_content">
                                        <h4 class="sc_services_item_title"><a href="single-post.html">International Connectivity</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column-1_3 column_padding_bottom">
                                <div class="sc_services_item">
                                    <div class="top_post_image">
                                        <a href="single-post.html"><img alt="" class="services-post-image" src="images/min_service_02.png"></a>
                                    </div>
                                    <div class="sc_services_item_content">
                                        <h4 class="sc_services_item_title"><a href="single-post.html">International Development</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column-1_3 column_padding_bottom">
                                <div class="sc_services_item">
                                    <div class="top_post_image">
                                        <a href="single-post.html"><img alt="" class="services-post-image" src="images/min_service_03.png"></a>
                                    </div>
                                    <div class="sc_services_item_content">
                                        <h4 class="sc_services_item_title"><a href="single-post.html">Profitability</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column-1_3 column_padding_bottom">
                                <div class="sc_services_item">
                                    <div class="top_post_image">
                                        <a href="single-post.html"><img alt="" class="services-post-image" src="images/min_service_06.png"></a>
                                    </div>
                                    <div class="sc_services_item_content">
                                        <h4 class="sc_services_item_title"><a href="single-post.html">Efficiency</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column-1_3 column_padding_bottom">
                                <div class="sc_services_item">
                                    <div class="top_post_image">
                                        <a href="single-post.html"><img alt="" class="services-post-image" src="images/min_service_05.png"></a>
                                    </div>
                                    <div class="sc_services_item_content">
                                        <h4 class="sc_services_item_title"><a href="single-post.html">Liquidity</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column-1_3 column_padding_bottom">
                                <div class="sc_services_item">
                                    <div class="top_post_image">
                                        <a href="single-post.html"><img alt="" class="services-post-image" src="images/min_service_04.png"></a>
                                    </div>
                                    <div class="sc_services_item_content">
                                        <h4 class="sc_services_item_title"><a href="single-post.html">Financial Crime</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sc_empty_space" data-height="0.3em" style="height: 0.3em;"></div>
            </div>
        </div>
    </div>
@endsection

@section('advice')
    <div class="sc_section custom_bg_2">
        <div class="content_wrap">
            <div class="sc_empty_space" data-height="2em" style="height: 2em;"></div>
            <div class="sc_services_wrap">
                <div class="sc_services sc_services_style_services-1 sc_services_type_icons_img margin_top_huge margin_bottom_huge">
                    <h2 class="sc_services_title sc_item_title">Our Global Business Principal</h2>
                    <div class="sc_services_descr sc_item_descr">
                        The core principal is the foundation of our <br>
                        business as we work to understand our clients' needs
                    </div>
                    <div class="sc_columns columns_wrap">
                        <p>
                            Throughout our long and distinguished history, we have been
                            steadfastly committed to putting our clients' interests first.
                            This fiduciary responsiblity defines our relationship with clients
                            and informs the basis of every decision we make on their behalf.
                        </p>
                        <p>
                            This core principle is the foundation of our business as we work to
                            understand our clients' needs, offer informed advice and execute
                            strategies to generate excess returns and provide world-class
                            client solutions
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- /.sc_services_wrap -->
    </div>
@endsection

