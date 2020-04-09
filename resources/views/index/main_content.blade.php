<!--============ Infotechno Hero Start ============-->
<div class="infotechno-hero infotechno-bg">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!--baseline-->
            <div class="col-lg-6 col-md-6">
                <div class="infotechno-hero-text  wow move-up">
                    <h6>{{ $viewData['main_config']['infotechno-hero']['infotechno-hero-text']['h6'] }}</h6>
                    <h2 class="mb-15" style="font-weight: 600;">{!! $viewData['main_config']['infotechno-hero']['infotechno-hero-text']['h2'] !!}</h2>
                    <p>{{ $viewData['main_config']['infotechno-hero']['infotechno-hero-text']['p'] }}</p>
                    <div class="hero-button  mt-30">
                        <a href="{{ $viewData['main_config']['infotechno-hero']['infotechno-hero-text']['button']['href'] }}" class="ht-btn ht-btn-md">{{ $viewData['main_config']['infotechno-hero']['infotechno-hero-text']['button']['lbl_menu'] }}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="infotechno-hero-inner-images">
                    <div class="infotechno-inner-one">
                        <img class="img-fluid" src="{{ URL::asset('assets/images/hero/home-infotechno-main-slider-slide-01-image-01.png') }}" alt="">
                    </div>
                    <div class="infotechno-inner-two  wow move-up">
                        <img class="img-fluid" src="{{ URL::asset('assets/images/hero/home-infotechno-main-slider-slide-01-image-02') }}.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============ Infotechno Hero End ============-->
<!--====================  brand logo slider area ====================-->

@if($viewData['main_config']['brand-logo-slider-area']['bo_mostrar'] == 1)
    <div class="brand-logo-slider-area section-space--ptb_60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- brand logo slider -->
                    <div class="brand-logo-slider__container-area">
                        <div class="swiper-container brand-logo-slider__container">
                            <div class="swiper-wrapper brand-logo-slider__one">
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-01.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-01-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-02.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-02-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-03.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-03-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-04.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-04-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-05.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-05-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-06.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-06-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-07.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-07-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-08.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-08-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-09.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ URL::asset('assets/images/brand/mitech-client-logo-09-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<!--====================  End of brand logo slider area  ====================-->

<!--===========  feature-images-wrapper  Start =============-->
<div class="feature-images-wrapper bg-gray section-space--ptb_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center">
                    <h6 class="section-sub-title mb-20">{{ $viewData['main_config']['feature-images-wrapper']['section-sub-title'] }}</h6>
                    <h3 class="heading">{!! $viewData['main_config']['feature-images-wrapper']['heading'] !!}</h3>
                </div>
                <!-- section-title-wrap Start -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="feature-images__one">
                    <div class="row">
                        @foreach ($viewData['main_config']['feature-images-wrapper']['feature-images__one'] as $valIo)
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-01">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <img class="img-fulid" src="{{ URL::asset($valIo['img']) }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">{{ $valIo['heading'] }}</h5>
                                            <div class="text">{{ $valIo['text'] }}</div>
                                            <div class="circle-arrow">
                                                <div class="middle-dot"></div>
                                                <div class="middle-dot dot-2"></div>
                                                <a href="{{ $valIo['href'] }}">
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
                <div class="section-under-heading text-center section-space--mt_60 section-space--pt_30">
                    {{ $viewData['main_config']['feature-images-wrapper']['section-under-heading']['text_p'] }}&nbsp;
                    <a href="{{ $viewData['main_config']['feature-images-wrapper']['section-under-heading']['href'] }}">{{ $viewData['main_config']['feature-images-wrapper']['section-under-heading']['text_s'] }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===========  feature-images-wrapper  End =============-->

<!-- ============ Our Experience Wrapper Start =============== -->
<div class="section-space--ptb_100 infotechno-section-bg-01">
    <div class="our-experience-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title small-mb__40 tablet-mb__40">
                        <h6 class="section-sub-title mb-20">{{ $viewData['main_config']['our-experience-wrapper']['section-title']['section-sub-title'] }}</h6>
                        <h3 class="heading">{!! $viewData['main_config']['our-experience-wrapper']['section-title']['heading'] !!}</h3>
                        <p class="text mt-20">{{ $viewData['main_config']['our-experience-wrapper']['section-title']['text'] }}</p>
                        <div class="sider-title-button-box mt-30">
                            <a href="{{ $viewData['main_config']['our-experience-wrapper']['section-title']['sider-title-button-box']['href'] }}" class="ht-btn ht-btn-md">{{ $viewData['main_config']['our-experience-wrapper']['section-title']['sider-title-button-box']['lbl_button'] }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto">
                    <div class="ht-list style-auto-numbered-02">
                        @foreach($viewData['main_config']['our-experience-wrapper']['ht-list'] as $valHlist)
                            <div class="list-item">
                                <a class="link" href="{{ $valHlist['href'] }}">
                                    <div class="list-header">
                                        <div class="marker">
                                            {{ $valHlist['marker'] }}
                                        </div>
                                        <div class="title-wrap">
                                            <h6 class="title">{{ $valHlist['title'] }}</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===========  feature-large-images-wrapper  Start =============-->
    <div class="feature-large-images-wrapper section-space--pt_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_30">
                        <h6 class="section-sub-title mb-20">{{ $viewData['main_config']['feature-large-images-wrapper']['section-title-wrap']['section-sub-title'] }}</h6>
                        <h3 class="heading">{!! $viewData['main_config']['feature-large-images-wrapper']['section-title-wrap']['heading'] !!}</span></h3>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row row--35">
                        @foreach($viewData['main_config']['feature-large-images-wrapper']['box-large-image__wrap'] as $valBox)
                            <div class="col-lg-4 col-md-6 mt-30">
                                <!-- Box large image warap Start -->
                                <a href="{{ $valBox['href'] }}" class="box-large-image__wrap wow move-up">
                                    <div class="box-large-image__box">
                                        <div class="box-large-image__midea">
                                            <div class="images-midea">
                                                <img src="{{ URL::asset($valBox['img']) }}" class="img-fluid" alt="">
                                                <div class="button-wrapper">
                                                    <div class="btn tm-button">
                                                        <span class="button-text">Leer más</span>
                                                    </div>
                                                </div>
                                                <div class="heading-wrap">
                                                    <h5 class="heading">{{ $valBox['heading'] }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-large-image__content mt-30 text-center">
                                            <p>{!! $valBox['box-large-image__content'] !!}</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- Box large image warap End -->
                            </div>
                        @endforeach
                    </div>
                    <div class="section-under-heading text-center section-space--mt_40"><a href="{{ $viewData['main_config']['feature-large-images-wrapper']['section-under-heading']['href'] }}">{{ $viewData['main_config']['feature-large-images-wrapper']['section-under-heading']['lbl'] }}<i class="ml-1 button-icon far fa-long-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <!--===========  feature-large-images-wrapper  End =============-->
</div>
<!-- ============ Our Experience Wrapper End =============== -->

<!--=========== fun fact Wrapper Start ==========-->
@if($viewData['main_config']['fun-fact-wrapper']['bo_mostrar'] == 1)
    <div class="fun-fact-wrapper">
        <div class="container">
            <div class="fun-fact-grid-4">
                <div class="grid-item  wow move-up">
                    <div class="fun-fact--one text-center">
                        <h5 class="fun-fact__title">Successfully work <br> with </h5>
                        <div class="fun-fact__count counter">1056</div>
                        <span class="fun-fact__text">HAPPY CLIENTS</span>
                    </div>
                </div>
                <div class="grid-item  wow move-up">
                    <div class="fun-fact--one text-center">
                        <h5 class="fun-fact__title">Successfully <br> completed</h5>
                        <div class="fun-fact__count counter">491</div>
                        <span class="fun-fact__text">Finished projects</span>
                    </div>
                </div>
                <div class="grid-item  wow move-up">
                    <div class="fun-fact--one text-center">
                        <h5 class="fun-fact__title">Recruit more <br> than</h5>
                        <div class="fun-fact__count counter">245</div>
                        <span class="fun-fact__text">SKilled Experts</span>
                    </div>
                </div>
                <div class="grid-item  wow move-up">
                    <div class="fun-fact--one text-center">
                        <h5 class="fun-fact__title">Blog <br> update </h5>
                        <div class="fun-fact__count counter">1090</div>
                        <span class="fun-fact__text">Media Posts</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<!--=========== fun fact Wrapper End ==========-->
<!--=========== Infotechno Video Wrapper Start ==========-->
<div class="infotechno-video-wrapper infotechno-video-ptb infotechno-video-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10 col-11 ml-auto">
                <div class="video-content-wrap">
                    <div class="vieeo-content-inner">
                        <h2 class="heading">Share the joy of achieving glorious moments<br>&amp; climbing up the top.</h2>
                        <div class="viewo-text-wrap">
                            <div class="video-popup infotech-video-box">
                                <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="single-popup-wrap video-link">
                                    <div class="video-content">
                                        <div class="ht-popup-video video-button">
                                            <div class="video-mark">
                                                <div class="wave-pulse wave-pulse-1"></div>
                                                <div class="wave-pulse wave-pulse-2"></div>
                                            </div>
                                            <div class="video-button__two">
                                                <div class="video-play">
                                                    <span class="video-play-icon"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="video-text">
                                            Watch video<br>intro
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=========== Infotechno Video Wrapper End ==========-->

<!--===========  Projects wrapper Start =============-->
<div class="projects-wrapper projectinfotechno-bg section-space--ptb_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center section-space--mb_40">
                    <h6 class="section-sub-title mb-20">{{ $viewData['main_config']['projects-wrapper']['section-title-wrap']['section-sub-title'] }}</h6>
                    <h3 class="heading">{!! $viewData['main_config']['projects-wrapper']['section-title-wrap']['heading'] !!}</h3>
                </div>
                <!-- section-title-wrap Start -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="projects-wrap swiper-container projects-slider__container">
                    <div class="swiper-wrapper">
                        @foreach($viewData['main_config']['projects-wrapper']['projects-wrap'] as $valPw)
                                @php
                                    $button_text = strpos($valPw['href'], 'http') !== false ? 'Más Detalles' : 'Próximamente';
                                    $icon        = strpos($valPw['href'], 'http') !== false ? 'fa fa-long-arrow-right' : 'fas fa-spinner';
                                    $target      = strpos($valPw['href'], 'http') !== false ? '_blank' : ''; 
                                @endphp
                            <div class="swiper-slide">
                                <!-- Projects Wrap Start -->
                                <a href="{{ $valPw['href'] }}" class="projects-wrap style-01 wow move-up" target="{{ $target }}">
                                    <div class="projects-image-box">
                                        <div class="projects-image">
                                            <img class="img-fluid" src="{{ URL::asset($valPw['img']) }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">{{ $valPw['heading'] }}</h6>
                                            <div class="post-categories">{{ $valPw['post-categories'] }}</div>
                                            <div class="text">{{ $valPw['text'] }}</div>
                                            <div class="box-projects-arrow">
                                                <span class="button-text">{{ $button_text }}</span>
                                                <i class="{{ $icon }} ml-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- Projects Wrap End -->
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination swiper-pagination-project mt_20"></div>
                </div>
                <div class="section-under-heading text-center section-space--mt_40">
                    {{ $viewData['main_config']['projects-wrapper']['section-under-heading']['text_p'] }}
                    <a href="{{ $viewData['main_config']['projects-wrapper']['section-under-heading']['href'] }}">{{ $viewData['main_config']['projects-wrapper']['section-under-heading']['text_s'] }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===========  Projects wrapper End =============-->

<!--====================  testimonial section ====================-->
@if($viewData['main_config']['testimonial-slider-area']['bo_mostrar'] == 1)
    <div class="testimonial-slider-area section-space--ptb_120 bg-gray-3">
        <div class="container-fluid container-fluid--cp-80">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center section-space--mb_60">
                        <h6 class="section-sub-title mb-20">Testimonials</h6>
                        <h3 class="heading">Why do people praise about<span class="text-color-primary"> Mitech?</span></h3>
                    </div>
                    <div class="testimonial-slider">
                        <div class="swiper-container testimonial-slider__container-two">
                            <div class="swiper-wrapper testimonial-slider__wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__single wow move-up">
                                        <h6 class="testimonial-subject">The Mitech team works really hard to ensure high level of quality</h6>
                                        <div class="testimonial-slider__text">There are thousands of IT service companies in the US. But there’s nothing like @Mitech. Their popularity and reputation are just evident. </div>
                                        <div class="author-info">
                                            <div class="testimonial-slider__media">
                                                <img src="{{ URL::asset('assets/images/testimonial/mitech-testimonial-avata-04-70x70.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="testimonial-slider__author">
                                                <h6 class="name">Maggie Strickland</h6>
                                                <span class="designation">WEB DESIGNER</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__single wow move-up">
                                        <h6 class="testimonial-subject">The Mitech team works really hard to ensure high level of quality</h6>
                                        <div class="testimonial-slider__text">I discovered @Mitech services by chance on the Internet to find a suitable IT services provider. This must be fate, not an accident at all.</div>
                                        <div class="author-info">
                                            <div class="testimonial-slider__media">
                                                <img src="{{ URL::asset('assets/images/testimonial/mitech-testimonial-avata-02-70x70.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="testimonial-slider__author">
                                                <h6 class="name">Robert Amplilian</h6>
                                                <span class="designation">Marketing</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__single wow move-up">
                                        <h6 class="testimonial-subject">The Mitech team works really hard to ensure high level of quality</h6>
                                        <div class="testimonial-slider__text">IT service is not an easy path to follow. But these guys can make it to the top with premium services and dedicated customer support.</div>
                                        <div class="author-info">
                                            <div class="testimonial-slider__media">
                                                <img src="{{ URL::asset('assets/images/testimonial/mitech-testimonial-avata-01-70x70.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="testimonial-slider__author">
                                                <h6 class="name">Stephen Mearsley</h6>
                                                <span class="designation">PR Officer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__single wow move-up">
                                        <h6 class="testimonial-subject">The Mitech team works really hard to ensure high level of quality</h6>
                                        <div class="testimonial-slider__text">There are thousands of IT service companies in the US. But there’s nothing like @Mitech. Their popularity and reputation are just evident. </div>
                                        <div class="author-info">
                                            <div class="testimonial-slider__media">
                                                <img src="{{ URL::asset('assets/images/testimonial/mitech-testimonial-avata-03-70x70.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="testimonial-slider__author">
                                                <h6 class="name">Monica Blews</h6>
                                                <span class="designation">PR Officer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-t0 section-space--mt_40"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<!--====================  End of testimonial section  ====================-->

<!--====================  Blog Section Start ====================-->
<div class="blog-section-wrapper section-space--pt_100  section-space--pb_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 wow move-up">
                <div class="section-title tablet-mb__60 section-space--mb_30 tablet-mt__0 small-mt__0 small-mb__60 mt-30">
                    <h6 class="section-sub-title mb-20">Blogs & news</h6>
                    <h3 class="heading">Interesting articles<span class="text-color-primary"> updated daily</span></h3>
                    <ul class="infotechno-blog-list mt-30">
                        <li>
                            <a href="#">Ideas for High Returns on Investment</a>
                        </li>
                        <li>
                            <a href="#">How Technology Made Businesses More Efficient</a>
                        </li>
                        <li>
                            <a href="#">Data Secure on Transitioning to a New Office</a>
                        </li>
                        <li>
                            <a href="#">The Keys to Persuading Customers Nowadays</a>
                        </li>
                        <li>
                            <a href="#">Blockchain Technology Effects on Logistics Sector?</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow move-up">
                <!--======= Single Blog Item Start ========-->
                <div class="single-blog-item blog-grid">
                    <!-- Post Feature Start -->
                    <div class="post-feature blog-thumbnail">
                        <a href="blog-post-layout-one.html">
                            <img class="img-fluid" src="{{ URL::asset('assets/images/blog/blog-03-370x230.jpg') }}" alt="Blog Images">
                        </a>
                    </div>
                    <!-- Post Feature End -->

                    <!-- Post info Start -->
                    <div class="post-info lg-blog-post-info">
                        <div class="post-meta">
                            <div class="post-date">
                                <span class="far fa-calendar meta-icon"></span>
                                February 28, 2019
                            </div>
                        </div>
                        <h5 class="post-title font-weight--bold">
                            <a href="#">5 Ways Technology Has Improved Business Today</a>
                        </h5>
                        <div class="post-excerpt mt-15">
                            <p>They play a role in making operations more seamless, bridging the gap between authorities, consumers and businesses. …</p>
                        </div>
                        <div class="btn-text">
                            <a href="#">Read more <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Post info End -->
                </div>
                <!--===== Single Blog Item End =========-->
            </div>

            <div class="col-lg-4 col-md-6 wow move-up">
                <!--======= Single Blog Item Start ========-->
                <div class="single-blog-item blog-grid">
                    <!-- Post Feature Start -->
                    <div class="post-feature blog-thumbnail">
                        <a href="blog-post-layout-one.html">
                            <img class="img-fluid" src="{{ URL::asset('assets/images/blog/blog-02-370x230.jpg') }}" alt="Blog Images">
                        </a>
                    </div>
                    <!-- Post Feature End -->

                    <!-- Post info Start -->
                    <div class="post-info lg-blog-post-info">
                        <div class="post-meta">
                            <div class="post-date">
                                <span class="far fa-calendar meta-icon"></span>
                                February 28, 2019
                            </div>
                        </div>

                        <h5 class="post-title font-weight--bold">
                            <a href="#">How Wireless Technology is Changing Business</a>
                        </h5>

                        <div class="post-excerpt mt-15">
                            <p>It is far wiser to do your own installations and ensure that all data flowing through the organization has end-to-end encryption. …</p>
                        </div>
                        <div class="btn-text">
                            <a href="#">Read more <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Post info End -->
                </div>
                <!--===== Single Blog Item End =========-->
            </div>
        </div>
    </div>
</div>
<!--====================  Blog Section End  ====================-->

<!--====================  Conact us Section Start ====================-->
<div class="contact-us-section-wrappaer infotechno-contact-us-bg section-space--ptb_120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-lg-6">
                <div class="conact-us-wrap-one">
                    <h3 class="heading">Obtaining further information by <span class="text-color-primary">make a contact</span> with our experienced IT staffs. </h3>
                    <div class="sub-heading">We’re available for 8 hours a day!<br>Contact to require a detailed analysis and assessment of your plan.</div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6">
                    <div class="contact-info-one text-center">
                        <div class="icon">
                            <span class="fal fa-phone"></span>
                        </div>
                        <h6 class="heading font-weight--reguler">Reach out now!</h6>
                        <h2 class="call-us"><a href="tel:190068668">1900 68668</a></h2>
                        <div class="contact-us-button mt-20">
                            <a href="#" class="btn btn--secondary">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  Conact us Section End  ====================-->
</div>