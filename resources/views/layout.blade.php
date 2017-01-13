<!DOCTYPE html>
<html class="scheme_original" lang="en-US">
<head>
    <title>@yield('page_title') | Trustuk Fund Group</title>
    <link rel="stylesheet" href="{{URL::asset('css/fontello/css/fontello.css')}}">
    <link href="{{URL::asset('js/vendor/instagram/sb-instagram.min.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('js/vendor/essgrid/ess-grid.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('js/vendor/revslider/rev-slider.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('js/vendor/woocommerce/woocommerce.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('css/style.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('css/colors.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('js/vendor/woocommerce/woocommerce-layout.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('js/vendor/woocommerce/plugin.woocommerce.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('css/animation.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('css/shortcodes.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('css/messages.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('js/vendor/magnific-popup/magnific-popup.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('js/vendor/swiper/swiper.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('css/responsive.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('images/fav.png')}}" rel="icon" sizes="192x192">
</head>
<body class="body_style_wide body_filled scheme_original top_panel_show top_panel_over sidebar_hide sidebar_outer_show sidebar_outer_yes">
<div id="page_preloader"></div>
<div class="body_wrap">
    <div class="page_wrap">
        <div class="top_panel_fixed_wrap"></div>
        <header class="top_panel_wrap @yield('panel_style') scheme_original">
            <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_over">
                <div class="top_panel_top">
                    <div class="content_wrap clearfix">
                        <div class="top_panel_top_contact_area icon-location-light">
                            FMR. Ancient Bank Building, No. 123 Cheetham Hill - Manchester.
                        </div>
                        <div class="top_panel_top_open_hours icon-clock-light">
                            Mon - Fri : 09:00 - 17:00
                        </div>
                        <div class="top_panel_top_ophone icon-call-out">
                            +44 20351 43800
                        </div>
                        <div class="top_panel_top_user_area cart_show">
                            <div class="menu_pushy_wrap clearfix">
                                <a class="menu_pushy_button icon-1460034782_menu2" href="#"></a>
                            </div>
                            <ul class="menu_user_nav" id="menu_user">
                                <li class="menu_user_register_login">
                                    <a class="popup_link popup_login_link icon-key-light" href="#popup_login">Login</a> or <a class="popup_link popup_register_link" href="#popup_registration">Register</a>
                                </li>
                                <li class="menu_user_cart">
                                    <a class="top_panel_cart_button sf-with-ul" href="#"><span class="contact_icon icon-bag"></span> <span class="cart_items">3</span></a>
                                    <ul class="widget_area sidebar_cart sidebar fadeOut animated fast">
                                        <li>
                                            <div class="widget woocommerce widget_shopping_cart">
                                                <div class="hide_cart_widget_if_empty">
                                                    <div class="widget_shopping_cart_content">
                                                        <ul class="cart_list product_list_widget">
                                                            <li class="mini_cart_item">
                                                                <a class="remove" href="#">×</a> <a href="single-product.html"><img alt="" src="images/180x180.jpg">Finance Equations &amp; Answers Jamie C. Martin&nbsp;</a> <span class="quantity">1 ×<span class="amount"><span>$</span>69.99</span></span>
                                                            </li>
                                                            <li class="mini_cart_item">
                                                                <a class="remove" href="#">×</a> <a href="single-product.html"><img alt="" src="images/180x180.jpg">The Richest Man in Babylon Elin Hinderbrand&nbsp;</a> <span class="quantity">1 × <span class="amount"><span>$</span>71.99</span></span>
                                                            </li>
                                                            <li class="mini_cart_item">
                                                                <a class="remove" href="#">×</a> <a href="single-product.html"><img alt="" src="images/180x180.jpg">Financial Strategy Karen Berman&nbsp;</a> <span class="quantity">1 × <span class="amount"><span>$</span>69.99</span></span>
                                                            </li>
                                                        </ul>
                                                        <p class="total"><strong>Subtotal:</strong> <span class="amount"><span>$</span>211.97</span></p>
                                                        <p class="buttons"><a class="button" href="cart.html">View Cart</a> <a class="button" href="checkout.html">Checkout</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="top_panel_middle">
                    <div class="content_wrap">
                        <div class="contact_logo">
                            <div class="logo">
                                <a href="index.html"><img alt="" class="logo_main" src="images/logo_alt.png"> <img alt="" class="logo_fixed" src="images/logo_alt.png"></a>
                            </div>
                        </div>
                        <div class="menu_main_wrap">
                            <nav class="menu_main_nav_area menu_hover_fade">
                                <ul class="menu_main_nav" id="menu_main">
                                    <li class="menu-item">
                                        <a href="{{url::to('/')}}"><span>Home</span></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{url::to('/about')}}"><span>About Us</span></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{url::to('/services')}}"><span>Services</span></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{url::to('/faq')}}"><span>FAQ</span></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{url::to('/contact')}}"><span>Contact Us</span></a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="search_wrap search_style_fullscreen search_state_closed top_panel_el top_panel_icon">
                                <div class="search_form_wrap">
                                    <form action="#" class="search_form" method="get">
                                        <button class="search_submit icon-search-light" type="submit"></button> <input class="search_field" name="s" placeholder="Search" type="text" value=""> <a class="search_close icon-1460034721_close"></a>
                                    </form>
                                </div>
                            </div>
                            <div class="top_panel_top_socials top_panel_el">
                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
                                    <div class="sc_socials_item">
                                        <a class="social_icons social_facebook" href="#" target="_blank"><span class="icon-facebook"></span></a>
                                    </div>
                                    <div class="sc_socials_item">
                                        <a class="social_icons social_twitter" href="#" target="_blank"><span class="icon-twitter"></span></a>
                                    </div>
                                    <div class="sc_socials_item">
                                        <a class="social_icons social_gplus" href="#" target="_blank"><span class="icon-gplus"></span></a>
                                    </div>
                                    <div class="sc_socials_item">
                                        <a class="social_icons social_linkedin" href="#" target="_blank"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <nav class="menu_pushy_nav_area pushy pushy-left scheme_dark">
            <div class="pushy_inner">
                <a class="close-pushy" href="#"></a>
                <div class="sidebar_outer widget_area scheme_dark">
                    <div class="sidebar_outer_inner widget_area_inner">
                        <div class="sidebar_outer_widgets">
                            <aside class="widget widget_socials">
                                <h5 class="widget_title">About Us</h5>
                                <div class="widget_inner">
                                    <div class="logo_descr">
                                        Perspiciatis unde omnis iste natus sit voluptatem cusantium doloremque laudantium totam rem aperiam, eaque ipsa quae. ab illo inventore veritatis et.<br>
                                        <br>
                                        <ul class="sc_list sc_list_style_iconed custom_cl_1">
                                            <li class="sc_list_item first"><span class="sc_list_icon icon-location-light custom_cl_2"></span>Los Angeles, Street Avenue, La 2540</li>
                                            <li class="sc_list_item even"><span class="sc_list_icon icon-mobile-light custom_cl_2"></span>Phone: 800-123-4567</li>
                                            <li class="sc_list_item"><span class="sc_list_icon icon-mail-light custom_cl_2"></span>Email: invetex@yoursite.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                            <aside class="widget widget_recent_posts">
                                <h5 class="widget_title">Recent Posts</h5>
                                <article class="post_item">
                                    <div class="post_thumb"><img alt="" src="images/75x75.jpg"></div>
                                    <div class="post_content">
                                        <h6 class="post_title"><a href="single-post.html">Broker-dealer owner indicated in $17 million dump scheme</a></h6>
                                        <div class="post_info">
                                            <span class="post_info_item"><a class="post_info_date" href="single-post.html">April 30, 2016</a></span> <span class="post_info_item post_info_counters"><a class="post_counters_item icon-comment-light" href="single-post.html"><span class="post_counters_number">2 Comments</span></a></span>
                                        </div>
                                    </div>
                                </article>
                                <article class="post_item">
                                    <div class="post_thumb"><img alt="" src="images/75x75.jpg"></div>
                                    <div class="post_content">
                                        <h6 class="post_title"><a href="single-post.html">Why buying a big house is a bad investment</a></h6>
                                        <div class="post_info">
                                            <span class="post_info_item"><a class="post_info_date" href="single-post.html">April 29, 2016</a></span> <span class="post_info_item post_info_counters"><a class="post_counters_item icon-comment-light" href="single-post.html"><span class="post_counters_number">0 Comments</span></a></span>
                                        </div>
                                    </div>
                                </article>
                                <article class="post_item with_thumb">
                                    <div class="post_thumb"><img alt="" src="images/75x75.jpg"></div>
                                    <div class="post_content">
                                        <h6 class="post_title"><a href="single-post.html">Credit Suisse CEO focuses on wealth management</a></h6>
                                        <div class="post_info">
                                            <span class="post_info_item"><a class="post_info_date" href="single-post.html">April 28, 2016</a></span> <span class="post_info_item post_info_counters"><a class="post_counters_item icon-comment-light" href="single-post.html"><span class="post_counters_number">0 Comments</span></a></span>
                                        </div>
                                    </div>
                                </article>
                            </aside>
                            <aside class="widget widget_text">
                                <h5 class="widget_title">Newsletter</h5>
                                <div class="textwidget">
                                    <div class="sc_emailer sc_emailer_opened style_line">
                                        <div class="lable">
                                            Newsletter
                                        </div>
                                        <form class="sc_emailer_form">
                                            <input class="sc_emailer_input" name="email" placeholder="Enter Your Email" type="text" value=""> <a class="sc_emailer_button" href="#" title="">Subscribe</a>
                                        </form>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="site-overlay"></div>
        <div class="header_mobile header_mobile_style_3 boxed_style">
            <div class="content_wrap">
                <div class="menu_button icon-menu"></div>
                <div class="logo">
                    <a href="index.html"><img alt="" class="logo_main" src="images/logo_alt.png"></a>
                </div>
                <div class="menu_main_cart top_panel_icon">
                    <a class="top_panel_cart_button" href="#"><span class="contact_icon icon-bag"></span> <span class="cart_items">3</span></a>
                    <ul class="widget_area sidebar_cart sidebar">
                        <li>
                            <div class="widget woocommerce widget_shopping_cart">
                                <div class="hide_cart_widget_if_empty">
                                    <div class="widget_shopping_cart_content">
                                        <ul class="cart_list product_list_widget">
                                            <li class="mini_cart_item">
                                                <a class="remove" href="#">×</a> <a href="single-product.html"><img alt="" src="images/180x180.jpg">Finance Equations &amp; Answers Jamie C. Martin&nbsp;</a> <span class="quantity">1 × <span class="amount"><span>$</span>69.99</span></span>
                                            </li>
                                            <li class="mini_cart_item">
                                                <a class="remove" href="#">×</a> <a href="single-product.html"><img alt="" src="images/180x180.jpg">The Richest Man in Babylon Elin Hinderbrand&nbsp;</a> <span class="quantity">1 × <span class="amount"><span>$</span>71.99</span></span>
                                            </li>
                                            <li class="mini_cart_item">
                                                <a class="remove" href="#">×</a> <a href="single-product.html"><img alt="" src="images/180x180.jpg">Financial Strategy Karen Berman&nbsp;</a> <span class="quantity">1 × <span class="amount"><span>$</span>69.99</span></span>
                                            </li>
                                        </ul>
                                        <p class="total"><strong>Subtotal:</strong> <span class="amount"><span>$</span>211.97</span></p>
                                        <p class="buttons"><a class="button" href="cart.html">View Cart</a> <a class="button" href="checkout.html">Checkout</a></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="side_wrap">
                <div class="close">
                    Close
                </div>
                <div class="panel_top">
                    <nav class="menu_main_nav_area">
                        <ul class="menu_main_nav" id="menu_mobile">
                            <li class="menu-item">
                                <a href="{{url::to('/')}}"><span>Home</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url::to('/about')}}"><span>About Us</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url::to('/services')}}"><span>Services</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url::to('/faq')}}"><span>FAQ</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url::to('/contact')}}"><span>Contact Us</span></a>
                            </li>
                        </ul>
                    </nav>
                    <div class="search_wrap search_state_fixed search_ajax">
                        <div class="search_form_wrap">
                            <form action="#" class="search_form" method="get">
                                <button class="search_submit icon-search-light" type="submit"></button> <input class="search_field" name="s" placeholder="Search" type="text" value="">
                            </form>
                        </div>
                        <div class="search_results widget_area scheme_original">
                            <a class="search_results_close icon-cancel"></a>
                            <div class="search_results_content"></div>
                        </div>
                    </div>
                    <div class="login">
                        <a class="popup_link popup_login_link icon-user" href="#popup_login">Login</a>
                    </div>
                    <div class="login">
                        <a class="popup_link popup_register_link icon-pencil" href="#popup_registration">Register</a>
                    </div>
                </div>
                <div class="panel_middle">
                    <div class="contact_field contact_phone">
                        <span class="contact_icon icon-call-out"></span> <span class="contact_label contact_phone">8 800 256 35 87</span>
                    </div>
                    <div class="top_panel_top_open_hours icon-clock-light">
                        Mon - Fri : 09:00 - 17:00
                    </div>
                    <div class="top_panel_top_user_area cart_hide">
                        <div class="menu_pushy_wrap clearfix">
                            <a class="menu_pushy_button icon-1460034782_menu2" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="panel_bottom">
                    <div class="contact_socials">
                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                            <div class="sc_socials_item">
                                <a class="social_icons social_facebook" href="#" target="_blank"><span class="icon-facebook"></span></a>
                            </div>
                            <div class="sc_socials_item">
                                <a class="social_icons social_twitter" href="#" target="_blank"><span class="icon-twitter"></span></a>
                            </div>
                            <div class="sc_socials_item">
                                <a class="social_icons social_gplus" href="#" target="_blank"><span class="icon-gplus"></span></a>
                            </div>
                            <div class="sc_socials_item">
                                <a class="social_icons social_linkedin" href="#" target="_blank"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mask"></div>
        </div>

        @yield('content')

        @yield('main_content')

        <footer class="footer_area_top_wrap scheme_dark">
            <div class="footer_wrap_inner">
                <div class="columns_wrap no_margins custom_columns_1">
                    <div class="column-1_2">
                        <div class="sc_googlemap" data-style="dark" data-zoom="12" id="sc_googlemap_1">
                            <div class="sc_googlemap_marker" data-address="1, Central Road, Chicago" data-description="1, Central Road, Chicago" data-latlng="" data-point="images/map_pointer.png" data-title="1, Central Road, Chicago"></div>
                        </div>
                    </div>
                    <div class="column-1_2">
                        <div class="sc_emailer sc_emailer_opened style_line margin_top_medium margin_bottom_small margin_left_small margin_right_small">
                            <div class="lable">
                                Newsletter
                            </div>
                            <form class="sc_emailer_form">
                                <input class="sc_emailer_input" name="email" placeholder="Enter Your Email" type="text" value=""> <a class="sc_emailer_button" href="#" title="">Subscribe</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- /.footer_area_wrap -->
        <footer class="footer_wrap widget_area scheme_dark">
            <div class="footer_wrap_inner widget_area_inner">
                <div class="content_wrap">
                    <div class="columns_wrap">
                        <aside class="column-1_3 widget widget_socials">
                            <div class="widget_inner">
                                <div class="logo">
                                    <a href="index.html"><img alt="" class="logo_main" src="images/logo-footer.png"></a>
                                </div>
                                <div class="logo_descr">
                                    Perspiciatis unde omnis iste natus sit voluptat<br>
                                    em accusantium doloremque laudantium<br>
                                    totam rem aperiam, eaque ipsa quae.<br>
                                    <br>
                                    <ul class="sc_list sc_list_style_iconed custom_cl_1">
                                        <li class="sc_list_item"><span class="sc_list_icon icon-location-light custom_cl_2"></span>Los Angeles, Street Avenue, La 2540</li>
                                        <li class="sc_list_item"><span class="sc_list_icon icon-mobile-light custom_cl_2"></span>Phone: 800-123-4567</li>
                                        <li class="sc_list_item"><span class="sc_list_icon icon-mail-light custom_cl_2"></span>Email: invetex@yoursite.com</li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                        <aside class="column-1_3 widget widget_recent_posts">
                            <h5 class="widget_title">Recent Posts</h5>
                            <article class="post_item with_thumb">
                                <div class="post_thumb"><img alt="" src="images/75x75.jpg"></div>
                                <div class="post_content">
                                    <h6 class="post_title"><a href="single-post.html">Broker-dealer owner indicated in $17 million dump scheme</a></h6>
                                    <div class="post_info">
                                        <span class="post_info_item"><a class="post_info_date" href="single-post.html">April 30, 2016</a></span> <span class="post_info_item post_info_counters"><a class="post_counters_item icon-comment-light" href="single-post.html"><span class="post_counters_number">2 Comments</span></a></span>
                                    </div>
                                </div>
                            </article>
                            <article class="post_item with_thumb">
                                <div class="post_thumb"><img alt="" src="images/75x75.jpg"></div>
                                <div class="post_content">
                                    <h6 class="post_title"><a href="single-post.html">Why buying a big house is a bad investment</a></h6>
                                    <div class="post_info">
                                        <span class="post_info_item"><a class="post_info_date" href="single-post.html">April 29, 2016</a></span> <span class="post_info_item post_info_counters"><a class="post_counters_item icon-comment-light" href="single-post.html"><span class="post_counters_number">0 Comments</span></a></span>
                                    </div>
                                </div>
                            </article>
                            <article class="post_item with_thumb">
                                <div class="post_thumb"><img alt="" src="images/75x75.jpg"></div>
                                <div class="post_content">
                                    <h6 class="post_title"><a href="single-post.html">Credit Suisse CEO focuses on wealth management</a></h6>
                                    <div class="post_info">
                                        <span class="post_info_item"><a class="post_info_date" href="single-post.html">April 28, 2016</a></span> <span class="post_info_item post_info_counters"><a class="post_counters_item icon-comment-light" href="single-post.html"><span class="post_counters_number">0 Comments</span></a></span>
                                    </div>
                                </div>
                            </article>
                        </aside>
                        <aside class="column-1_3 widget widget_text">
                            <h5 class="widget_title">Contact Form</h5>
                            <div class="textwidget">
                                <div class="sc_form_wrap">
                                    <div class="sc_form sc_form_style_form_1" id="sc_form_1">
                                        <form action="include/sendmail.php" class="sc_input_hover_default" data-formtype="form_1" method="post">
                                            <div class="sc_form_info">
                                                <div class="sc_form_item sc_form_field">
                                                    <input aria-required="true" class="sc_form_username" name="username" placeholder="Name *" type="text">
                                                </div>
                                                <div class="sc_form_item sc_form_field">
                                                    <input aria-required="true" class="sc_form_email" name="email" placeholder="E-mail *" type="text">
                                                </div>
                                            </div>
                                            <div class="sc_form_item sc_form_message">
                                                <textarea aria-required="true" class="sc_form_message" name="message" placeholder="Message"></textarea>
                                            </div>
                                            <div class="sc_form_item sc_form_button">
                                                <button class="sc_button sc_button_style_filled sc_button_size_medium sc_button_iconed icon-mail-light">Send Message</button>
                                            </div>
                                            <div class="result sc_infobox"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </footer><!-- /.footer_wrap -->
        <footer class="footer_area_wrap scheme_dark">
            <div class="footer_wrap_inner">
                <div class="content_wrap">
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid margin_top_null margin_bottom_small"></div>
                    <div class="follow_us">
                        Follow Us on @Instagram
                    </div>
                    <div class="sbi sbi_disable_mobile sbi_col_9" data-cols="9" data-id="3273597493" data-num="9" data-options='{&quot;sortby&quot;: &quot;none&quot;, &quot;headercolor&quot;: &quot;&quot;, &quot;imagepadding&quot;: &quot;0&quot;}' data-res="thumb" id="sb_instagram">
                        <div id="sbi_images">
                            <div class="sbi_loader"></div>
                        </div>
                        <div id="sbi_load"></div>
                    </div>
                </div>
            </div>
        </footer><!-- /.footer_area_wrap -->
        <div class="copyright_wrap copyright_style_soc scheme_dark">
            <div class="copyright_wrap_inner">
                <div class="content_wrap">
                    <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
                        <div class="sc_socials_item">
                            <a class="social_icons social_facebook" href="#" target="_blank"><span class="icon-facebook"></span></a>
                        </div>
                        <div class="sc_socials_item">
                            <a class="social_icons social_twitter" href="#" target="_blank"><span class="icon-twitter"></span></a>
                        </div>
                        <div class="sc_socials_item">
                            <a class="social_icons social_gplus" href="#" target="_blank"><span class="icon-gplus"></span></a>
                        </div>
                        <div class="sc_socials_item">
                            <a class="social_icons social_linkedin" href="#" target="_blank"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.page_wrap -->
</div><!-- /.body_wrap -->
<div class="popup_wrap popup_registration bg_tint_light" id="popup_registration">
    <a class="popup_close" href="#"></a>
    <div class="form_wrap">
        <form class="popup_form registration_form" id="registration_form" method="post" name="registration_form">
            <input name="redirect_to" type="hidden" value="#">
            <div class="form_left">
                <div class="logo">
                    <a href="index.html"><img alt="" class="logo_login" src="images/logo_dark.png"></a>
                </div>
                <div class="registration_socials_title">
                    You can register using your social profile
                </div>
                <div class="registration_socials_list">
                    <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                        <div class="sc_socials_item">
                            <a class="social_icons social_facebook" href="#" target="_blank"><span class="icon-facebook"></span></a>
                        </div>
                        <div class="sc_socials_item">
                            <a class="social_icons social_twitter" href="#" target="_blank"><span class="icon-twitter"></span></a>
                        </div>
                        <div class="sc_socials_item">
                            <a class="social_icons social_gplus" href="#" target="_blank"><span class="icon-gplus"></span></a>
                        </div>
                    </div>
                </div>
                <div class="registration_socials_or">
                    <span>or</span>
                </div>
                <div class="popup_form_field login_field iconed_field">
                    <input id="registration_username" name="registration_username" placeholder="User name (login)" type="text" value="">
                </div>
                <div class="popup_form_field email_field iconed_field">
                    <input id="registration_email" name="registration_email" placeholder="E-mail" type="text" value="">
                </div>
            </div>
            <div class="form_right">
                <div class="popup_form_field password_field iconed_field">
                    <input id="registration_pwd" name="registration_pwd" placeholder="Password" type="password" value="">
                </div>
                <div class="popup_form_field password_field iconed_field">
                    <input id="registration_pwd2" name="registration_pwd2" placeholder="Confirm Password" type="password" value="">
                </div>
                <div class="popup_form_field agree_field">
                    <input id="registration_agree" name="registration_agree" type="checkbox" value="agree"> <label for="registration_agree">I agree with</label> <a href="#">Terms &amp; Conditions</a>
                </div>
                <div class="popup_form_field submit_field">
                    <input class="submit_button" type="submit" value="Registration">
                </div>
            </div>
        </form>
        <div class="result message_block"></div>
    </div><!-- /.registration_wrap -->
</div><!-- /.user-popUp -->
<div class="popup_wrap popup_login bg_tint_light" id="popup_login">
    <a class="popup_close" href="#"></a>
    <div class="form_wrap">
        <div class="form_right">
            <div class="logo">
                <a href="#"><img alt="" class="logo_login" src="images/logo_dark.png"></a>
            </div>
            <div class="login_socials_title">
                You can login using your social profile
            </div>
            <div class="login_socials_list">
                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                    <div class="sc_socials_item">
                        <a class="social_icons social_facebook" href="#" target="_blank"><span class="icon-facebook"></span></a>
                    </div>
                    <div class="sc_socials_item">
                        <a class="social_icons social_twitter" href="#" target="_blank"><span class="icon-twitter"></span></a>
                    </div>
                    <div class="sc_socials_item">
                        <a class="social_icons social_gplus" href="#" target="_blank"><span class="icon-gplus"></span></a>
                    </div>
                </div>
            </div>
            <div class="login_socials_or">
                <span>or</span>
            </div>
            <div class="result message_block"></div>
        </div>
        <div class="form_left">
            <form action="#" class="popup_form login_form" id="login_form" method="post" name="login_form">
                <input name="redirect_to" type="hidden" value="#">
                <div class="popup_form_field login_field iconed_field">
                    <input id="log" name="log" placeholder="Login or Email" type="text" value="">
                </div>
                <div class="popup_form_field password_field iconed_field">
                    <input id="password" name="pwd" placeholder="Password" type="password" value="">
                </div>
                <div class="popup_form_field remember_field">
                    <a class="forgot_password" href="#">Forgot password?</a> <input id="rememberme" name="rememberme" type="checkbox" value="forever"> <label for="rememberme">Remember me</label>
                </div>
                <div class="popup_form_field submit_field">
                    <input class="submit_button" type="submit" value="Login">
                </div>
            </form>
        </div>
    </div><!-- /.login_wrap -->
</div><!-- /.popup_login -->
<div class="popup_wrap_bg"></div><a class="scroll_to_top icon-up" href="#" title="Scroll to top"></a>
<script src='js/vendor/jquery.js' type='text/javascript'></script>
<script src='js/vendor/jquery-migrate.min.js' type='text/javascript'></script>
<script src='js/vendor/essgrid/jquery.themepunch.tools.min.js' type='text/javascript'></script>
<script src='js/vendor/essgrid/jquery.themepunch.essential.min.js' type='text/javascript'></script>
<script src='js/vendor/revslider/jquery.themepunch.revolution.min.js' type='text/javascript'></script>
<script src="js/vendor/revslider/revolution.extension.slideanims.min.js" type="text/javascript"></script>
<script src="js/vendor/revslider/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
<script src="js/vendor/revslider/revolution.extension.navigation.min.js" type="text/javascript"></script>
<script src='js/vendor/instagram/sb-instagram.min.js' type='text/javascript'></script>
<script src="js/custom/custom.js" type="text/javascript"></script>
<script src='js/vendor/superfish.js' type='text/javascript'></script>
<script src='js/custom/_min.js' type='text/javascript'></script>
<script src='js/custom/_utils.js' type='text/javascript'></script>
<script src='js/custom/_init.js' type='text/javascript'></script>
<script src='js/custom/_debug.js' type='text/javascript'></script>
<script src='js/custom/_googlemap.js' type='text/javascript'></script>
<script src='js/custom/template.init.js' type='text/javascript'></script>
<script src='js/vendor/isotope.js' type='text/javascript'></script>
<script src='js/vendor/mediaelement/mediaelement-and-player.min.js' type='text/javascript'></script>
<script src='js/custom/_shortcodes.js' type='text/javascript'></script>
<script src='js/custom/_messages.js' type='text/javascript'></script>
<script src='js/vendor/magnific-popup/jquery.magnific-popup.min.js' type='text/javascript'></script>
<script src='js/vendor/swiper/swiper.js' type='text/javascript'></script>
<script src='http://maps.google.com/maps/api/js?key=' type='text/javascript'></script>
</body>
</html>