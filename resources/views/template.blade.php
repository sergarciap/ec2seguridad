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
    <div class="header-area header-area--absolute">

        <div class="header-top-bar-info border-bottom d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar-wrap">
                            <div class="top-bar-left">
                                <div class="top-bar-text text-white">{{ $viewData['main_config']['header-top-bar-info']['top-bar-left'] }}</div>
                            </div>
                            <div class="top-bar-right">
                                <ul class="top-bar-info">
                                    <li class="info-item">
                                        <a href="{{ $viewData['main_config']['header-top-bar-info']['top-bar-right'][0]['href'] }}" class="info-link text-white">
                                            <i class="{{ $viewData['main_config']['header-top-bar-info']['top-bar-right'][0]['icon'] }}"></i>
                                            <span class="info-text">{!! $viewData['main_config']['header-top-bar-info']['top-bar-right'][0]['info-text'] !!}</span>
                                        </a>
                                    </li>
                                    <li class="info-item text-white">
                                        <i class="{{ $viewData['main_config']['header-top-bar-info']['top-bar-right'][1]['icon'] }}"></i>
                                        <span class="info-text">{{ $viewData['main_config']['header-top-bar-info']['top-bar-right'][1]['info-text'] }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-wrap header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header position-relative">
                            <!-- brand logo -->
                            <div class="header__logo">
                                <a href="index.html">
                                    <img src="{{ $viewData['main_config']['header-bottom-wrap']['header__logo']['light-logo'] }}" class="img-fluid light-logo" alt="">
                                    <img src="{{ $viewData['main_config']['header-bottom-wrap']['header__logo']['light-logo'] }}" class="img-fluid dark-logo" alt="">
                                </a>
                            </div>

                            <div class="header-right">
                                <!-- navigation menu -->
                                <div class="header__navigation menu-style-four d-none d-xl-block">
                                    <nav class="navigation-menu">
                                        <ul>
                                            @foreach ($viewData['main_config']['header-bottom-wrap']['header__navigation'] as $valNav)
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

                                <!-- mobile menu -->
                                <div class="mobile-navigation-icon white-md-icon d-block d-xl-none" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--====================  End of header area  ====================-->







    <div class="site-wrapper-reveal">
        <!--============ Resolutions Hero Start ============-->
        <div class="service-hero-wrapper resolutions-hero-space resolutions-hero-bg position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 ml-auto mr-auto">
                        <div class="service-hero-wrap wow move-up">
                            <div class="service-hero-text text-center">
                                <h3 class="text-white">{{ $viewData['main_config']['service-hero-wrapper']['h3'] }}</h3>
                                <h1 class="font-weight--reguler text-white mb-30">{{ $viewData['main_config']['service-hero-wrapper']['h1'] }}</h1>
                                <p class="text-white">{{ $viewData['main_config']['service-hero-wrapper']['p'] }}</p>

                                <div class="hero-button-group section-space--mt_50">
                                    <a href="{{ $viewData['main_config']['service-hero-wrapper']['button_p']['href'] }}" class="ht-btn ht-btn-md">{{ $viewData['main_config']['service-hero-wrapper']['button_p']['lbl'] }}</a>
                                    <a href="{{ $viewData['main_config']['service-hero-wrapper']['button_s']['href'] }}" class="ht-btn ht-btn-md btn--white"><span class="btn-icon mr-2"><i class="fa fa-play"></i></span> {{ $viewData['main_config']['service-hero-wrapper']['button_s']['lbl'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-separator center_curve_alt bottom"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="none" viewBox="0 0 100 100">
                    <path d="M 0 0 L0 100 L100 100 L100 0 Q 50 200 0 0"></path>
                </svg></div>
        </div>
        <!--============ Resolutions Hero End ============-->




        <!--===========  feature-images-wrapper  Start =============-->
        <div class="feature-images-wrapper bg-gray">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="feature-images__five resolutions-hero-bottom">
                            <div class="row">
                                @foreach ($viewData['main_config']['feature-images-wrappe']['ht-box-images'] as $valFIW)
                                    <div class="col-lg-4 col-md-6 wow move-up">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-05">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <div class="default-image">
                                                        <img class="img-fulid" src="{{ $valFIW['box-image']['default-image'] }}" alt="">
                                                    </div>
                                                    <div class="hover-images">
                                                        <img class="img-fulid" src="{{ $valFIW['box-image']['hover-images'] }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">{{ $valFIW['content']['heading'] }}</h5>
                                                    <div class="text">{{ $valFIW['content']['text'] }}</div>
                                                    <div class="box-images-arrow">
                                                        <a href="{{ $valFIW['content']['href'] }}">
                                                            <span class="button-text">Más Detalles</span>
                                                            <i class="far fa-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="section-under-heading text-center section-space--mt_80">{!! $viewData['main_config']['feature-images-wrappe']['section-under-heading'] !!}</div>

                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-images-wrapper  End =============-->







        <!--===========  feature-icon-wrapper  Start =============-->
        <div class="feature-icon-wrapper bg-gray section-space--ptb_100">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h6 class="section-sub-title mb-20">{{ $viewData['main_config']['feature-icon-wrapper']['section-title-wrap']['section-sub-title'] }}</h6>
                            <h3 class="heading" style="font-size: 38px;">{!! $viewData['main_config']['feature-icon-wrapper']['section-title-wrap']['heading'] !!}</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="feature-list__two">
                            <div class="row">
                                @foreach($viewData['main_config']['feature-icon-wrapper']['feature-list__two'] as $keyFLT => $valFLT)
                                    <div class="col-lg-4 col-md-6 wow move-up">
                                        <div class="ht-box-icon style-02 single-svg-icon-box">
                                            <div class="icon-box-wrap">
                                                <div class="icon">
                                                    <div class="svg-icon" id="svg-{{ $keyFLT }}" data-svg-icon="{{ $valFLT['icon'] }}"></div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">{{ $valFLT['heading'] }}</h5>
                                                    <div class="text">{{ $valFLT['text'] }}</div>
                                                    <div class="feature-btn">
                                                        <a href="{{ $valFLT['href'] }}">
                                                            <span class="button-text">Más Detalles</span>
                                                            <i class="far fa-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-12">
                        <div class="feature-list-button-box mt-30 text-center">
                            <a href="{{ $viewData['main_config']['feature-icon-wrapper']['feature-list-button-box']['button_p']['href'] }}" class="ht-btn ht-btn-md">{{ $viewData['main_config']['feature-icon-wrapper']['feature-list-button-box']['button_p']['lbl'] }}</a>
                            <a href="{{ $viewData['main_config']['feature-icon-wrapper']['feature-list-button-box']['button_s']['href'] }}" class="ht-btn ht-btn-md ht-btn--outline">{{ $viewData['main_config']['feature-icon-wrapper']['feature-list-button-box']['button_s']['lbl'] }}</a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <!--===========  feature-icon-wrapper  End =============-->

        <!--===========  Flujo proceso Start =============-->
        <div class="gradation-process-area section-space--ptb_100">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="gradation-title-wrapper section-space--mb_60">
                            <div class="gradation-title-wrap ">
                                <h6 class="section-sub-title text-black mb-20">{{ $viewData['main_config']['gradation-process-area']['gradation-title-wrap']['section-sub-title'] }}</h6>
                                <h4 class="heading">{!! $viewData['main_config']['gradation-process-area']['gradation-title-wrap']['heading'] !!}</h4>
                            </div>


                            <div class="gradation-sub-heading">
                                <h3 class="heading">{!! $viewData['main_config']['gradation-process-area']['gradation-sub-heading']['heading'] !!}</h3>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ht-gradation style-01">
                            <!-- Single item gradation Start -->
                            @foreach($viewData['main_config']['ht-gradation'] as $varg => $var)
                            <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                                <div class="line"></div>
                                <div class="circle-wrap">
                                    <div class="mask">
                                        <div class="wave-pulse wave-pulse-1"></div>
                                        <div class="wave-pulse wave-pulse-2"></div>
                                        <div class="wave-pulse wave-pulse-3"></div>
                                    </div>

                                    <h6 class="circle">{{ $var['circle'] }}</h6>
                                </div>

                                <div class="content-wrap">

                                    <h6 class="heading">{{ $var['heading'] }}</h6>

                                    <div class="text">{{ $var['text'] }}</div>

                                    <a class="gradation-btn" href="#">
                                        {!! $var['button-text'] !!}
                                    </a>
                                </div>
                            </div>
                            <!-- Single item gradation End -->
                            @endforeach




                        </div>
                    </div>
                </div>
            </div>
        </div>







        <!--====================  footer area ====================-->
        <div class="footer-area-wrapper reveal-footer bg-gray">
            <div class="footer-area section-space--ptb_80">
                <div class="container">
                    <div class="row footer-widget-wrapper">
						@foreach($viewData['main_config']['footer-area-wrapper']['footer-area'] as $valFA)
							<div class="{{ $valFA['col'] }} footer-widget">
								@if(isset($valFA['section-space--mb_50']))
									<div class="footer-widget__title section-space--mb_50"></div>
								@endif
								@if(isset($valFA['footer-widget__logo']))
									<div class="footer-widget__logo mb-30">
										<img src="{{ $valFA['footer-widget__logo'] }}" class="img-fluid" alt="">
									</div>
								@endif
								@if(isset($valFA['footer-widget__title']))
									<h6 class="footer-widget__title mb-20">{{ $valFA['footer-widget__title'] }}</h6>
								@endif
								<ul class="footer-widget__list">
									@foreach($valFA['footer-widget__list'] as $valFWL)
										<li>{!! $valFWL !!}</li>
									@endforeach
								</ul>
							</div>
						@endforeach
                    </div>
                </div>
            </div>
            <div class="footer-copyright-area section-space--pb_30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-left">
                            <span class="copyright-text">{!! $viewData['main_config']['footer-area-wrapper']['footer-copyright-area']['copyright-text'] !!}</span>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            <ul class="list ht-social-networks solid-rounded-icon">
								@foreach($viewData['main_config']['footer-area-wrapper']['footer-copyright-area']['ht-social-networks'] as $valHSN)
									<li class="item">
										{!! $valHSN !!}
									</li>
								@endforeach
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
                                        <img src="assets/images/logo/logo-dark.png" class="img-fluid" alt="">
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
