<!DOCTYPE html>
<html class="scheme_original" lang="en-US">
<head>
    <title>@yield('page_title') | Trustuk Fund Group LTD</title>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <meta content="telephone=no" name="format-detection">
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,300italic,400,400italic,500,500italic,600,600italic,700,700italic%7CLora:300,300italic,400,400italic,500,500italic,600,600italic,700,700italic&#038;subset=latin,latin-ext&#038;" media="all" property="stylesheet" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('css/fontello/css/fontello.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('js/vendor/instagram/sb-instagram.min.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('js/vendor/essgrid/ess-grid.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('js/vendor/revslider/rev-slider.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('js/vendor/woocommerce/woocommerce.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('css/style.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('css/colors.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('js/vendor/woocommerce/woocommerce-layout.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('js/vendor/woocommerce/plugin.woocommerce.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('css/animation.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('css/shortcodes.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('css/messages.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('js/vendor/magnific-popup/magnific-popup.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('js/vendor/swiper/swiper.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('css/responsive.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('css/pure.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('css/pure-responsive.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('css/jquery.datetimepicker.css')}}" media='all' property="stylesheet" rel='stylesheet' type='text/css'>
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
                            FMR. Ancient Bank Building, No. 123 Cheetham Hill - Manchester
                        </div>
                        <div class="top_panel_top_open_hours icon-clock-light">
                            Mon - Sat : 08:00 - 17:00
                        </div>
                        <div class="top_panel_top_ophone icon-call-out">
                            +44 2035143800
                        </div>
                        <div class="top_panel_top_user_area cart_show">
                            <div class="menu_pushy_wrap clearfix" style="margin-left: 10px">
                                <a class="menu_pushy_button icon-1460034782_menu2" href="#"></a>
                            </div>
                            <ul class="menu_user_nav" id="menu_user">
                                @if(Auth::check())
                                    <li class="menu_user_register_login">
                                        <a href="{{URL::to('/admin')}}" class="user"><i class="icon-user"></i> {{Auth::user()->name}}</a> <a class="popup_link popup_login_link icon-logout" href="{{URL::to('/auth/logout')}}">Logout</a>
                                    </li>
                                @else
                                    <li class="menu_user_register_login">
                                        <a class="popup_link popup_login_link icon-key-light" href="{{URL::to('/auth/login')}}">Login</a> or <a class="popup_link popup_register_link" href="{{URL::to('/auth/register')}}">Register</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="top_panel_middle">
                    <div class="content_wrap">
                        <div class="contact_logo">
                            <div class="logo">
                                <a href="{{URL::to('/')}}"><img alt="" class="logo_main" src="{{URL::asset('images/trustuk_logo.png')}}"> <img alt="" class="logo_fixed" src="{{URL::asset('images/trustuk_logo.png')}}"></a>
                            </div>
                        </div>
                        <div class="menu_main_wrap">
                            <nav class="menu_main_nav_area menu_hover_fade">
                                <ul class="menu_main_nav" id="menu_main">
                                    <li class="menu-item">
                                        <a href="{{URL::to('/')}}"><span>Home</span></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{URL::to('/about')}}"><span>About Us</span></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{URL::to('/services')}}"><span>Services</span></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{URL::to('/faq')}}"><span>FAQ</span></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{URL::to('/contact')}}"><span>Contact Us</span></a>
                                    </li>
                                </ul>
                            </nav>

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
        @yield('hero')
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
                                        Trustuk Fund is an investment company uniting professional fund managers in the
                                        field of wealth management. Complex world of real investment is our daily
                                        concern.
                                        <br>
                                        <ul class="sc_list sc_list_style_iconed custom_cl_1">
                                            <li class="sc_list_item first"><span class="sc_list_icon icon-location-light custom_cl_2"></span>
                                                FMR. Ancient Bank Building, No. 123 Cheetham Hill - Manchester
                                            </li>
                                            <li class="sc_list_item even"><span class="sc_list_icon icon-mobile-light custom_cl_2"></span>Phone: +44 2035143800</li>
                                            <li class="sc_list_item"><span class="sc_list_icon icon-mail-light custom_cl_2"></span>Email: contact@trustukfundgroup.com</li>
                                        </ul>
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
                    <a href="{{URL::to('/')}}"><img alt="" class="logo_main" src="{{URL::asset('images/trustuk_logo.png')}}"></a>
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
                                <a href="{{URL::to('/')}}"><span>Home</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{URL::to('/about')}}"><span>About Us</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{URL::to('/services')}}"><span>Services</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{URL::to('/faq')}}"><span>FAQ</span></a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="{{URL::to('/contact')}}"><span>Contact Us</span></a>
                            </li>
                        </ul>
                    </nav>
                    @if(Auth::check())
                        <div class="login">
                            <a href="{{URL::to('/admin')}}" class="user"><i class="icon-user"></i> {{Auth::user()->name}}</a> <a class="popup_link popup_login_link icon-logout" href="{{URL::to('/auth/logout')}}">logout</a>
                        </div>
                    @else
                        <div class="login">
                            <a class="popup_link popup_login_link icon-user" href="{{URL::to('/auth/login')}}">Login</a>
                        </div>
                        <div class="login">
                            <a class="popup_link popup_register_link icon-pencil" href="{{URL::to('/auth/register')}}">Register</a>
                        </div>
                    @endif
                </div>
                <div class="panel_middle">
                    <div class="contact_field contact_phone">
                        <span class="contact_icon icon-call-out"></span> <span class="contact_label contact_phone">8 800 256 35 87</span>
                    </div>
                    <div class="top_panel_top_open_hours icon-clock-light">
                        Mon - Sat : 08:00 - 17:00
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
        @yield('slider')
        <div class="page_content_wrap page_paddings_no">
            @yield('welcome')
            @yield('main_services')
            @yield('stats')
            @yield('testimonial')
            @yield('gallery')
            @yield('advice')
            @yield('clients')
            @yield('blog')
        </div><!-- </.page_content_wrap> -->

        <footer class="footer_wrap widget_area scheme_dark">
            <div class="footer_wrap_inner widget_area_inner">
                <div class="content_wrap">
                    <div class="columns_wrap">
                        <aside class="column-1_3 widget widget_socials">
                            <div class="widget_inner">
                                <div class="logo">
                                    <a href="{{URL::asset('/')}}"><img alt="" class="logo_main" src="{{URL::asset('images/trustuk_logo.png')}}"></a>
                                </div>
                                <div class="logo_descr">
                                    Trustuk Fund Group is an investment company uniting <br>
                                    professional fund managers in the field<br>
                                    of wealth management.<br>
                                    <br>
                                    <ul class="sc_list sc_list_style_iconed custom_cl_1">
                                        <li class="sc_list_item"><span class="sc_list_icon icon-location-light custom_cl_2"></span>FMR. Ancient Bank Building, No. 123 Cheetham Hill - Manchester</li>
                                        <li class="sc_list_item"><span class="sc_list_icon icon-mobile-light custom_cl_2"></span>Phone: +44 2035143800</li>
                                        <li class="sc_list_item"><span class="sc_list_icon icon-mail-light custom_cl_2"></span>Email: contact@trustukfundgroup.com</li>
                                    </ul>
                                </div>
                            </div>
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

<div class="popup_wrap_bg"></div><a class="scroll_to_top icon-up" href="#" title="Scroll to top"></a>
<script src="{{URL::asset('js/vendor/jquery.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/vendor/jquery-migrate.min.js')}}" type='text/javascript'></script>
<script src="@yield('script')" type='text/javascript'></script>
<script src="{{URL::asset('js/vendor/essgrid/jquery.themepunch.tools.min.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/vendor/essgrid/jquery.themepunch.essential.min.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/vendor/revslider/jquery.themepunch.revolution.min.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/vendor/revslider/revolution.extension.slideanims.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/vendor/revslider/revolution.extension.layeranimation.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/vendor/revslider/revolution.extension.navigation.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/vendor/instagram/sb-instagram.min.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/custom/custom.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/vendor/superfish.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/custom/_min.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/custom/_utils.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/custom/_init.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/custom/_debug.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/custom/_googlemap.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/custom/template.init.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/vendor/isotope.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/vendor/mediaelement/mediaelement-and-player.min.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/custom/_shortcodes.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/custom/_messages.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/vendor/magnific-popup/jquery.magnific-popup.min.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/vendor/swiper/swiper.js')}}" type='text/javascript'></script>
<script src="{{URL::asset('js/jquery.datetimepicker.js')}}" type='text/javascript'></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBfet9MXzIA6JlJJBI69qS75Z46P9ZnBVQ" type='text/javascript'></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBfet9MXzIA6JlJJBI69qS75Z46P9ZnBVQ" type='text/javascript'></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/587625dd12631a1069132486/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
<script>
    $(document).ready(function () {
        jQuery('.datetimepicker').datetimepicker();
    });
</script>
</body>
</html>