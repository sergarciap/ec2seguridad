<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $viewData['main_config']['head']['title'] }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{ URL::asset('assets/images/favicon.png') }}">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/bootstrap.min.css') }}">

    <!-- Font Family CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/cerebrisans.css') }}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/fontawesome-all.min.css') }}">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/swiper.min.css') }}">

    <!-- animate-text CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/animate-text.css') }}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/animate.min.css') }}">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/lightgallery.min.css') }}">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
        <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
        -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

</head>

<body>


    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>


    <!--====================  header area ====================-->
    <?php //print_r($viewData);?>
    <div class="header-area header-area--default">

        <!-- Header Top Wrap Start -->
        <div class="header-top-wrap border-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-center top-message">{!!$viewData['main_config']['header-top-wrap']['top-message']!!}</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top Wrap End -->

        <!-- Header Bottom Wrap Start -->
        <div class="header-bottom-wrap header-sticky">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header default-menu-style position-relative">

                            <!-- brand logo -->
                            <div class="header__logo">
                                <a href="index.html">
                                    <img src="{{ URL::asset($viewData['main_config']['header-bottom-wrap']['header__logo']) }}" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!-- header midle box  -->
                            <div class="header-midle-box">
                                <div class="header-bottom-wrap d-md-block d-none">
                                    <div class="header-bottom-inner">
                                        <div class="header-bottom-left-wrap">
                                            <!-- navigation menu -->
                                            <div class="header__navigation d-none d-xl-block">
                                                <nav class="navigation-menu primary--menu">
                                                    <ul>
                                                    @foreach ($viewData['main_config']['header-bottom-wrap']['header-midle-box'] as $valNav)
                                                        <li class="{{ !empty($valNav['sub_menu']) ? 'has-children has-children--multilevel-submenu' : ''}}{{ $valNav['lbl_menu'] == 'Inicio' ? 'active' : ''  }}" >
                                                            <a href="{{ $valNav['href'] }}"><span>{{ $valNav['lbl_menu'] }}</span></a>
                                                            @if (!empty($valNav['sub_menu']))
                                                                <ul class="submenu">
                                                                    @foreach ($valNav['sub_menu'] as $valSubMenu1)
                                                                        <li class="{{ !empty($valSubMenu1['sub_menu']) ? 'has-children' : '' }}">
                                                                            <a href="{{ $valSubMenu1['href'] }}"><span>{{ $valSubMenu1['lbl_sub_menu'] }}</span></a>
                                                                            @if (!empty($valSubMenu1['sub_menu']))
                                                                                <ul class="submenu">
                                                                                    @foreach ($valSubMenu1['sub_menu'] as $valSubMenu2)
                                                                                        <li><a href="{{ $valSubMenu2['href'] }}"><span>{{ $valSubMenu2['lbl_sub_menu'] }}</span></a></li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            @endif
                                                                        </li>
                                                                    @endforeach   
                                                                </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- header right box -->
                            <div class="header-right-box">
                                <div class="header-right-inner" id="hidden-icon-wrapper">
                                    
                                    <!-- language-menu -->
                                    @if ($viewData['main_config']['header-bottom-wrap']['header-right-box']['language-menu']['bo_mostrar'] == 1)
                                        <div class="language-menu">
                                            <ul>
                                                <li>
                                                    <a href="{{ $viewData['main_config']['header-bottom-wrap']['header-right-box']['language-menu']['href'] }}" class="">
                                                        <span class="wpml-ls-native">{{ $viewData['main_config']['header-bottom-wrap']['header-right-box']['language-menu']['lbl_menu'] }}</span>
                                                    </a>
                                                    <ul class="ls-sub-menu">
                                                        @foreach ($viewData['main_config']['header-bottom-wrap']['header-right-box']['language-menu']['ls-sub-menu'] as $valLs)
                                                            @php 
                                                                $target = strpos($valLs['href'], 'http') !== false ? '_blank' : ''; 
                                                            @endphp
                                                            <li class="">
                                                                <a href="{{ $valLs['href'] }}" class="" target="{{ $target }}">
                                                                   <span class="wpml-ls-native">{{ $valLs['lbl_sub_menu'] }}</span>
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    @endif

                                    <!-- header-search-form -->
                                    @if ($viewData['main_config']['header-bottom-wrap']['header-right-box']['header-search-form']['bo_mostrar'] == 1)
                                        <div class="header-search-form default-search">
                                            <div class="search-form-top">
                                                <input class="search-field" type="text" placeholder="Buscar…">
                                                <a class="search-submit" style="cursor:default;">
                                                    <i class="search-btn-icon fa fa-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <!-- mobile menu -->
                                <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                                <!-- hidden icons menu -->
                                <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                    <a href="javascript:void(0)">
                                        <i class="far fa-ellipsis-h-alt"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom Wrap End -->

    </div>
    <!--====================  End of header area  ====================-->

    <!--====================  site-wrapper area  

    ====================-->
    <div class="site-wrapper-reveal">
        @include($viewData['main_content'])
    </div>
    <!--====================  End of site-wrapper area  ====================-->


        <!--====================  footer area ====================-->
        <div class="footer-area-wrapper bg-gray">
            <div class="footer-area section-space--ptb_80">
                <div class="container">
                    <div class="row footer-widget-wrapper">
                        <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                            <div class="footer-widget__logo mb-30">
                                <img src="{{ URL::asset('assets/images/logo/dark-logo-160x48.png') }}" class="img-fluid" alt="">
                            </div>
                            <ul class="footer-widget__list">
                                <li>58 Howard Street #2 San Francisco, CA 941</li>
                                <li><a href="mailto:contact@aeroland.com" class="hover-style-link">contact@aeroland.com</a></li>
                                <li><a href="tel:123344556" class="hover-style-link text-black font-weight--bold">(+68)1221 09876</a></li>
                                <li><a href="https://hasthemes.com/" class="hover-style-link text-color-primary">www.mitech.xperts.com</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">IT Services</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">Managed IT</a></li>
                                <li><a href="#" class="hover-style-link">IT Support</a></li>
                                <li><a href="#" class="hover-style-link">IT Consultancy</a></li>
                                <li><a href="#" class="hover-style-link">Cloud Computing</a></li>
                                <li><a href="#" class="hover-style-link">Cyber Security</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Quick links</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">Pick up locations</a></li>
                                <li><a href="#" class="hover-style-link">Terms of Payment</a></li>
                                <li><a href="#" class="hover-style-link">Privacy Policy</a></li>
                                <li><a href="#" class="hover-style-link">Where to Find Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Support</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">Forum Support</a></li>
                                <li><a href="#" class="hover-style-link">Help & FAQ</a></li>
                                <li><a href="#" class="hover-style-link">Contact Us</a></li>
                                <li><a href="#" class="hover-style-link">Pricing and plans</a></li>
                                <li><a href="#" class="hover-style-link">Cookies Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <div class="footer-widget__title section-space--mb_50"></div>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="image_btn"><img class="img-fluid" src="{{ URL::asset('assets/images/icons/aeroland-button-google-play.jpg') }}" alt=""></a></li>
                                <li><a href="#" class="image_btn"><img class="img-fluid" src="{{ URL::asset('assets/images/icons/aeroland-button-app-store.jpg') }}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-area section-space--pb_30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-left">
                            <span class="copyright-text">&copy; 2019 Mitech. <a href="https://hasthemes.com/">All Rights Reserved.</a></span>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            <ul class="list ht-social-networks solid-rounded-icon">

                                <li class="item">
                                    <a href="https://twitter.com" target="_blank" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-twitter link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://facebook.com" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-facebook-f link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://instagram.com" target="_blank" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-instagram link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://linkedin.com" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-linkedin link-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of footer area  ====================-->









        <!--====================  scroll top ====================-->
        <a href="#" class="scroll-top" id="scroll-top">
            <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </a>
        <!--====================  End of scroll top  ====================-->

        <!--====================  mobile menu overlay ====================-->
        <div class="mobile-menu-overlay" id="mobile-menu-overlay">
            <div class="mobile-menu-overlay__inner">
                <div class="mobile-menu-overlay__header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-8">
                                <!-- logo -->
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{ URL::asset('assets/images/logo/logo-dark.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-4">
                                <!-- mobile menu content -->
                                <div class="mobile-menu-content text-right">
                                    <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-overlay__body">
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class="has-children">
                                <a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index-infotechno.html"><span>Infotechno</span></a></li>
                                    <li><a href="index-processing.html"><span>Processing</span></a></li>
                                    <li><a href="index-appointment.html"><span>Appointment</span></a></li>
                                    <li><a href="index-services.html"><span>Services</span></a></li>
                                    <li><a href="index-resolutions.html"><span>Resolutions</span></a></li>
                                    <li><a href="index-cybersecurity.html"><span>cybersecurity</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Company</a>
                                <ul class="sub-menu">
                                    <li class="has-children">
                                        <a href="about-us-01.html"><span>About us</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="about-us-01.html"><span>About us 01</span></a></li>
                                            <li><a href="about-us-02.html"><span>About us 02</span></a></li>
                                            <li class="has-children">
                                                <a href="#"><span>Submenu Level Two</span></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                    <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                    <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html"><span>Contact us</span></a></li>
                                    <li><a href="leadership.html"><span>Leadership</span></a></li>
                                    <li><a href="why-choose-us.html"><span>Why choose us</span></a></li>
                                    <li><a href="our-history.html"><span>Our history</span></a></li>
                                    <li><a href="faqs.html"><span>FAQs</span></a></li>
                                    <li><a href="careers.html"><span>Careers</span></a></li>
                                    <li><a href="pricing-plans.html"><span>Pricing plans</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">IT solutions</a>
                                <ul class="sub-menu">
                                    <li><a href="it-services.html"><span>IT Services</span></a></li>
                                    <li><a href="managed-it-services.html"><span>Managed IT Services</span></a></li>
                                    <li><a href="industries.html"><span>Industries</span></a></li>
                                    <li><a href="business-solution.html"><span>Business solution</span></a></li>
                                    <li><a href="it-services-details.html"><span>IT Services Details</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Elements</a>
                                <ul class="sub-menu">
                                    <li class="has-children">
                                        <a href="#">Element Group 01</a>
                                        <ul class="sub-menu">
                                            <li><a href="element-accordion.html"><span>Accordions & Toggles</span></a></li>
                                            <li><a href="element-box-icon.html"><span>Box Icon</span></a></li>
                                            <li><a href="element-box-image.html"><span>Box Image</span></a></li>
                                            <li><a href="element-box-large-image.html"><span>Box Large Image</span></a></li>
                                            <li><a href="element-buttons.html"><span>Buttons</span></a></li>
                                            <li><a href="element-cta.html"><span>Call to action</span></a></li>
                                            <li><a href="element-client-logo.html"><span>Client Logo</span></a></li>
                                            <li><a href="element-countdown.html"><span>Countdown</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Element Group 02</a>
                                        <ul class="sub-menu">
                                            <li><a href="element-counters.html"><span>Counters</span></a></li>
                                            <li><a href="element-dividers.html"><span>Dividers</span></a></li>
                                            <li><a href="element-flexible-image-slider.html"><span>Flexible image slider</span></a></li>
                                            <li><a href="element-google-map.html"><span>Google Map</span></a></li>
                                            <li><a href="element-gradation.html"><span>Gradation</span></a></li>
                                            <li><a href="element-instagram.html"><span>Instagram</span></a></li>
                                            <li><a href="element-lists.html"><span>Lists</span></a></li>
                                            <li><a href="element-message-box.html"><span>Message box</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Element Group 03</a>
                                        <ul class="sub-menu">
                                            <li><a href="element-popup-video.html"><span>Popup Video</span></a></li>
                                            <li><a href="element-pricing-box.html"><span>Pricing Box</span></a></li>
                                            <li><a href="element-progress-bar.html"><span>Progress Bar</span></a></li>
                                            <li><a href="element-progress-circle.html"><span>Progress Circle</span></a></li>
                                            <li><a href="element-rows-columns.html"><span>Rows & Columns</span></a></li>
                                            <li><a href="element-social-networks.html"><span>Social Networks</span></a></li>
                                            <li><a href="element-tabs.html"><span>Tabs</span></a></li>
                                            <li><a href="element-team-member.html"><span>Team member</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Element Group 04</a>
                                        <ul class="sub-menu">
                                            <li><a href="element-testimonials.html"><span>Testimonials</span></a></li>
                                            <li><a href="element-timeline.html"><span>Timeline</span></a></li>
                                            <li><a href="element-carousel-sliders.html"><span>Carousel Sliders</span></a></li>
                                            <li><a href="element-typed-text.html"><span>Typed Text</span></a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="javascript:void(0)">Case Studies</a>
                                <ul class="sub-menu">
                                    <li><a href="case-studies.html"><span>Case Studies 01</span></a></li>
                                    <li><a href="case-studies-02.html"><span>Case Studies 02</span></a></li>
                                    <li><a href="single-smart-vision.html"><span>Single Layout</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="javascript:void(0)">Blogs</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-list-large-image.html"><span>List Large Image</span></a></li>
                                    <li><a href="blog-list-left-large-image.html"><span>Left Large Image</span></a></li>
                                    <li><a href="blog-grid-classic.html"><span>Grid Classic</span></a></li>
                                    <li><a href="blog-grid-masonry.html"><span>Grid Masonry</span></a></li>
                                    <li class="has-children">
                                        <a href="blog-post-layout-one.html"><span>Single Layouts</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-post-layout-one.html"><span>Left Sidebar</span></a></li>
                                            <li><a href="blog-post-right-sidebar.html"><span>Right Sidebar</span></a></li>
                                            <li><a href="blog-post-no-sidebar.html"><span>No Sidebar</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--====================  End of mobile menu overlay  ====================-->







        <!--====================  search overlay ====================-->
        <div class="search-overlay" id="search-overlay">

            <div class="search-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 ml-auto col-4">
                            <!-- search content -->
                            <div class="search-content text-right">
                                <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-overlay__inner">
                <div class="search-overlay__body">
                    <div class="search-overlay__form">
                        <form action="#">
                            <input type="text" placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of search overlay  ====================-->

        <!-- JS
    ============================================ -->
        <!-- Modernizer JS -->
        <script src="{{ URL::asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

        <!-- jQuery JS -->
        <script src="{{ URL::asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>

        <!-- Bootstrap JS -->
        <script src="{{ URL::asset('assets/js/vendor/bootstrap.min.js') }}"></script>

        <!-- Swiper Slider JS -->
        <script src="{{ URL::asset('assets/js/plugins/swiper.min.js') }}"></script>

        <!-- Light gallery JS -->
        <script src="{{ URL::asset('assets/js/plugins/lightgallery.min.js') }}"></script>

        <!-- Waypoints JS -->
        <script src="{{ URL::asset('assets/js/plugins/waypoints.min.js') }}"></script>

        <!-- Counter down JS -->
        <script src="{{ URL::asset('assets/js/plugins/countdown.min.js') }}"></script>

        <!-- Isotope JS -->
        <script src="{{ URL::asset('assets/js/plugins/isotope.min.js') }}"></script>

        <!-- Masonry JS -->
        <script src="{{ URL::asset('assets/js/plugins/masonry.min.js') }}"></script>

        <!-- ImagesLoaded JS -->
        <script src="{{ URL::asset('assets/js/plugins/images-loaded.min.js') }}"></script>

        <!-- Wavify JS -->
        <script src="{{ URL::asset('assets/js/plugins/wavify.js') }}"></script>

        <!-- jQuery Wavify JS -->
        <script src="{{ URL::asset('assets/js/plugins/jquery.wavify.js') }}"></script>

        <!-- circle progress JS -->
        <script src="{{ URL::asset('assets/js/plugins/circle-progress.min.js') }}"></script>

        <!-- counterup JS -->
        <script src="{{ URL::asset('assets/js/plugins/counterup.min.js') }}"></script>

        <!-- wow JS -->
        <script src="{{ URL::asset('assets/js/plugins/wow.min.js') }}"></script>

        <!-- animation text JS -->
        <script src="{{ URL::asset('assets/js/plugins/animation-text.min.js') }}"></script>

        <!-- Vivus JS -->
        <script src="{{ URL::asset('assets/js/plugins/vivus.min.js') }}"></script>

        <!-- Some plugins JS -->
        <script src="{{ URL::asset('assets/js/plugins/some-plugins.js') }}"></script>


        <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

        <!--
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

        <!-- Main JS -->
        <script src="{{ URL::asset('assets/js/main.js') }}"></script>


</body>

</html>