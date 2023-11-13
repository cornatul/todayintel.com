@extends('layouts.home')


@section('title', 'Home')

@section('content')
<main>
    <!--slider-area start-->
    <section class="grey-bg slider-area shape-style pos-rel pt-255 pb-120 pt-md-150 pt-xs-150">
        <img class="slider-shape shape_01" src="{{ asset('img/shape/s1a.svg') }}" alt="">
        <img class="slider-shape shape_02" src="{{ asset('img/shape/s1b.svg') }}" alt="">
        <img class="slider-shape shape_03" src="{{ asset('img/shape/03.png') }}" alt="">
        <img class="slider-shape shape_04" src="{{ asset('img/shape/s1c.svg') }}" alt="">
        <img class="slider-shape shape_05" src="{{ asset('img/shape/s1e.svg') }}" alt="">
        <img class="slider-shape shape_06" src="{{ asset('img/shape/s1f.svg') }}" alt="">
        <div class="main-slider">
            <div class="slide-image-box d-none d-md-inline-block">
                <img class="img-fluid" src="{{ asset('img/vector/vector-1.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="slider__content fix text-left pt-md-100">
                            <h1 class="main-title mb-60">Trend <span class="vector-shape">Analytics</span> solutions for teams</h1>
                            <h4 class="sub-title mb-50 pr-200 pr-lg-0 pr-md-0 pr-xs-0">
                                Get the best data analytics services from the leading data analytics company. We offer data analytics consulting services to help businesses make informed decisions.
                            </h4>
                            <ul class="slider__text__list mb-75">
                                <li>Learn with our comprehensive curriculum and experienced.</li>
                                <li>Step into the world of practical data science.</li>
                            </ul>
                            <ul class="btn__list d-md-inline-flex align-items-center">
                                <li class="mr-40 mb-20">
                                    <a href="about.html" class="theme_btn">Learn More</a>
                                </li>
                                <li>
                                    <a href="case-details.html">
                                        <div class="info-box d-flex align-items-center mb-20">
                                            <div class="icon mr-15">
                                                <img src="{{ asset('assets/img/icon/01.png') }}" alt="">
                                            </div>
                                            <span><b>Learn About</b> our latest work intro</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider-area end-->

    <!-- intro-card-area start -->
    <section class="intro-card-area gradient-gray pt-235 pb-150 pt-md-150 pb-md-70 pt-xs-150 pb-xs-70">
        <div class="container intro-custom-container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="intro-box mb-30">
                        <h5 class="mb-25">Solutions Visualization</h5>
                        <h3 class="mb-25">Data Visualization Practices to Improve</h3>
                        <a href="services.html" class="intro-btn pl-10"><img src="{{ asset('img/icon/right-arrow.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="intro-box ibox-2 mb-30">
                        <h5 class="mb-25">Data Consulting</h5>
                        <h3 class="mb-25">Consulting on invoice data capture</h3>
                        <a href="services.html" class="intro-btn pl-10"><img src="{{ asset('img/icon/right-arrow.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="intro-box ibox-3 mb-30">
                        <h5 class="mb-25">Data Case Studies</h5>
                        <h3 class="mb-25">Delivering the insights Data Case</h3>
                        <a href="services.html" class="intro-btn pl-10"><img src="{{ asset('img/icon/right-arrow.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro-card-area end -->
    <!-- why-data-science start -->
    <section class="why-data-science fix pos-rel pt-180 pb-120 pt-md-90 pb-md-70 pt-xs-90 pb-xs-70">
        <img src="{{ asset('img/shape/04.png') }}" alt="" class="data-shape shape_01">
        <div class="data-shape shape_02"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-150 mb-md-100 mb-xs-100 wow fadeInUp2 animated" data-wow-delay="0.1s">
                        <h2>Why Data Science <span class="vector-shape">Sdot</span> Data Science for Everyone</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="data-wrapper mb-50">
                        <h3 class="mb-35 wow fadeInUp2 animated" data-wow-delay="0.1s">Data Science sdot is one of the leading platforms providin data scence Solution</h3>
                        <h5 class="mb-35 wow fadeInUp2 animated" data-wow-delay="0.3s">Dolor sit amet consectetur elit sed eiusmod tempor incidi dunt labore dolore magna aliqua enim ad minim veniam quis nostrud</h5>
                        <h5 class="mb-65 wow fadeInUp2 animated" data-wow-delay="0.5s">Dolor sit amet consectetur elit sed eiusmod tempor incidi dunt labore dolore magna aliqua enim ad minim veniam quis nostrud</h5>
                        <a href="case-single.html" class="theme_btn border_btn wow fadeInUp2 animated" data-wow-delay="0.7s">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="data-img mb-50 pos-rel wow fadeInRight2 animated" data-wow-delay="0.3s">
                        <img class="vector_01" src="{{ asset('img/data/01.png') }}" alt="">
                        <img class="jag_01" src="{{ asset('img/data/02.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why-data-science end -->
    <!-- sdot-services start -->
    <section class="sdot-services yellow-soft-bg fix pos-rel pt-160 pb-150 pt-md-90 pb-md-90 pt-xs-90 pb-xs-90">
        <img class="services-shape shape_01" src="{{ asset('img/shape/05.png') }}" alt="">
        <img class="services-shape shape_02" src="{{ asset('img/shape/06.svg') }}" alt="">
        <div class="services-shape shape_03"></div>
        <div class="container services-custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-90">
                        <h2 class="mb-45">Our offer Data Science and Analytics <span class="vector-shape">Services</span></h2>
                        <h4 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Libero perspiciatis sequi delectus maxime</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay="0.1s">
                    <div class="s-services swipe-right mb-30">
                        <div class="s-services__icon">
                            <img class="s-icon mb-50 wow animated fadeInDown" data-wow-delay="0.1s" src="{{ asset('img/icon/02.png') }}" alt="">
                        </div>
                        <p class="mb-20">Start your AI</p>
                        <h3 class="mb-40">Data strategies Goal Start your AI</h3>
                        <a href="services.html"><img src="{{ asset('img/icon/right-arrow.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay="0.3s">
                    <div class="s-services swipe-right mb-30">
                        <div class="s-services__icon">
                            <img class="s-icon mb-50 wow animated fadeInDown" data-wow-delay="0.1s" src="{{ asset('img/icon/03.png') }}" alt="">
                        </div>
                        <p class="mb-20">Data Analysis</p>
                        <h3 class="mb-40">Digital Data Consulting for Science lab</h3>
                        <a href="services.html"><img src="{{ asset('img/icon/right-arrow.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay="0.5s">
                    <div class="s-services swipe-right mb-30">
                        <div class="s-services__icon">
                            <img class="s-icon mb-50 wow animated fadeInDown" data-wow-delay="0.1s" src="{{ asset('img/icon/04.png') }}" alt="">
                        </div>
                        <p class="mb-20">Data Intelligence</p>
                        <h3 class="mb-40">Business Intelligence for Digital Science</h3>
                        <a href="services.html"><img src="{{ asset('img/icon/right-arrow.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay="0.7s">
                    <div class="s-services swipe-right mb-30">
                        <div class="s-services__icon">
                            <img class="s-icon mb-50 wow animated fadeInDown" data-wow-delay="0.1s" src="{{ asset('img/icon/05.png') }}" alt="">
                        </div>
                        <p class="mb-20">Machine Learning</p>
                        <h3 class="mb-40">Machine learning is a method data analysis</h3>
                        <a href="services.html"><img src="{{ asset('img/icon/right-arrow.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="more_services_btn wow fadeInUp2 animated mt-60" data-wow-delay="0.1">
                        <a href="services.html" class="theme_btn">More Services</a>
                        <div class="services-shape shape_04"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sdot-services end -->
    <!-- how-it-work start -->
    <section class="how-it-work pos-rel pt-160 pb-130 pt-md-90 pb-md-70 pt-xs-90 pb-xs-70">
        <img src="assets/img/icon/w4.png" alt="" class="shape-arrow shape-arrow-1 d-none d-lg-inline-block">
        <div class="container services-custom-container">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="row align-items-center work__wrapper mb-50">
                        <div class="col-xl-12 col-lg-6">
                            <div class="section-title text-left pr-150 pr-lg-0 pr-md-0 pr-xs-0 wow fadeInUp2 animated" data-wow-delay="0.1s">
                                <h2 class="mb-0">How it <span class="vector-shape">work</span></h2>
                                <h2 class="mb-45">delivering the insights</h2>
                                <h4 class="sub-title">Dolor sit amet consectetur elit sed eiusmod tempor incidi dunt labore dolore magna aliqua enim ad minim veniam </h4>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6">
                            <div class="works__img pos-rel mt-120 wow fadeInUp2 animated" data-wow-delay="0.3s">
                                <img class="img-fluid work_ai" src="{{ asset('img/ai/02.png') }}" alt="">
                                <img class="dot-shape" src="{{ asset('img/shape/07.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="row align-items-center works__list">
                        <div class="col-xl-6 col-md-6">
                            <div class="s-works mb-50 wow fadeInUp2 animated" data-wow-delay="0.1s">
                                <img src="{{ asset('img/icon/w4.png') }}" alt="" class="shape-arrow">
                                <div class="s-works__icon mb-55">
                                    <img src="{{ asset('img/icon/w1.svg') }}" alt="">
                                </div>
                                <h3 class="semi-title mb-30">Data Ideas & concepts</h3>
                                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor </h5>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="s-works mb-50 wow fadeInUp2 animated" data-wow-delay="0.2s">
                                        <div class="s-works__icon mb-55">
                                            <img src="{{ asset('img/icon/w2.svg') }}" alt="">
                                        </div>
                                        <h3 class="semi-title mb-30">Data Ideas & concepts</h3>
                                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor </h5>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="s-works mb-50 wow fadeInUp2 animated" data-wow-delay="0.3s">
                                        <div class="s-works__icon mb-55">
                                            <img src="{{ asset("img/icon/w3.svg") }}" alt="">
                                        </div>
                                        <h3 class="semi-title mb-30">Data Ideas & concepts</h3>
                                        <h5>
                                            Get more attention to your business with live trending data
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- how-it-work end -->
    <!-- company-statictics start -->
    <section class="company-statistics pos-rel pt-100 pb-130 pt-md-70 pt-xs-70 pb-md-50 pb-xs-50">
        <img class="count-shape shape_01" src="assets/img/shape/c1.png" alt="">
        <img class="count-shape shape_02" src="assets/img/shape/c2.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="counters count-1 text-center mb-50">
                        <h1 class="mb-30">+<span class="counter">15</span>k</h1>
                        <h3 class="semi-title">Successful work</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="counters count-2 text-center mb-50">
                        <h1 class="mb-30"><span class="counter">17</span>%</h1>
                        <h3 class="semi-title">increase in upgrade conversion</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="counters text-center mb-50">
                        <h1 class="mb-30">+<span class="counter">40</span>k</h1>
                        <h3 class="semi-title">Data Management</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- company-statictics end -->
    <!-- client-feedback start -->
    <section class="client-feedback grey-bg pos-rel pt-160 pb-165 pt-md-90 pt-xs-90 pb-md-90 pb-xs-90">
        <div class="dot_01"></div>
        <img class="client-shape shape_02 " src="assets/img/shape/c1.png" alt="">
        <img class="client-shape shape_03" src="assets/img/shape/t1.png" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-110">
                        <h2 class="mb-45">What say our clients about our <span class="vector-shape">awesome</span> service</h2>
                        <h4 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Libero perspiciatis sequi delectus maxime</h4>
                    </div>
                </div>
            </div>
            <div class="feedback-active owl-carousel">
                <div class="feedback-item">
                    <div class="feedback__wrapper text-center mb-30">
                        <div class="test__img mb-20">
                            <img src="assets/img/testimonial/01.png" alt="">
                        </div>
                        <h3 class="mb-20">Mahadi Shopnil</h3>
                        <h5 class="mb-35">CEO Data strategies</h5>
                        <h4 class="sub-title">Lorem ipsum velit esse cillum dolore eufugiat nulla pariatur cepteur sint occaecat cupidatat non proident sunt in proide</h4>
                        <img src="assets/img/icon/quote.png" alt="" class="quote-icon">
                    </div>
                </div>
                <div class="feedback-item">
                    <div class="feedback__wrapper text-center mb-30">
                        <div class="test__img mb-20">
                            <img src="assets/img/testimonial/02.png" alt="">
                        </div>
                        <h3 class="mb-20">Mahfuz Riad</h3>
                        <h5 class="mb-35"> Data Science strategies</h5>
                        <h4 class="sub-title">Lorem ipsum velit esse cillum dolore eufugiat nulla pariatur cepteur sint occaecat cupidatat non proident sunt in proide</h4>
                        <img src="assets/img/icon/quote.png" alt="" class="quote-icon">
                    </div>
                </div>
                <div class="feedback-item">
                    <div class="feedback__wrapper text-center mb-30">
                        <div class="test__img mb-20">
                            <img src="assets/img/testimonial/01.png" alt="">
                        </div>
                        <h3 class="mb-20">Mahadi Shopnil</h3>
                        <h5 class="mb-35">CEO Data strategies</h5>
                        <h4 class="sub-title">Lorem ipsum velit esse cillum dolore eufugiat nulla pariatur cepteur sint occaecat cupidatat non proident sunt in proide</h4>
                        <img src="assets/img/icon/quote.png" alt="" class="quote-icon">
                    </div>
                </div>
                <div class="feedback-item">
                    <div class="feedback__wrapper text-center mb-30">
                        <div class="test__img mb-20">
                            <img src="assets/img/testimonial/02.png" alt="">
                        </div>
                        <h3 class="mb-20">Mahfuz Riad</h3>
                        <h5 class="mb-35"> Data Science strategies</h5>
                        <h4 class="sub-title">Lorem ipsum velit esse cillum dolore eufugiat nulla pariatur cepteur sint occaecat cupidatat non proident sunt in proide</h4>
                        <img src="assets/img/icon/quote.png" alt="" class="quote-icon">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client-feedback end -->
    <!-- sdot-cases start -->
    <section class="sdot-cases-showcase pos-rel pt-170 pb-110 pt-md-100 pt-xs-100 pb-md-0 pb-xs-0">
        <img class="cases-shape" src="assets/img/shape/c1.png" alt="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="cases__img mb-50 wow fadeInLeft animated" data-wow-delay="0.1s">
                        <img class="showwcase-img" src="assets/img/ai/03.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cases__wrapper mb-50 wow fadeInRight2 animated" data-wow-delay="0.1s">
                        <div class="section-title text-left mb-110">
                            <h3 class="mb-30">10+ Recent Case</h3>
                            <h2 class="mb-50">#1 Data Analytics strategy <span class="vector-shape">projects</span></h2>
                            <h4 class="sub-title mb-50">Data analytics project ideas that can boost your portfolio and help you land a data science job. The best way to get a job in data science is to showcase your skills with a portfolio of data analytics projects.</h4>
                            <a href="case-single.html" class="theme_btn border_btn">View Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sdot-cases end -->
    <!-- get-quote start -->
    <section class="get-quote grey-yellow-bg pos-rel pt-180 pb-130 pt-md-90 pt-xs-90 pb-md-55 pb-xs-55">
        <img class="quote-shape shape_01 d-none d-md-inline-block" src="assets/img/shape/08.svg" alt="">
        <img class="quote-shape shape_02 d-none d-md-inline-block" src="assets/img/shape/09.svg" alt="">
        <img class="quote-shape shape_03 d-none d-md-inline-block" src="assets/img/shape/10.svg" alt="">
        <img class="quote-shape shape_04 d-none d-md-inline-block" src="assets/img/shape/11.svg" alt="">
        <img class="quote-shape shape_05 d-none d-md-inline-block" src="assets/img/shape/10.svg" alt="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp2 animated" data-wow-delay="0.1s">
                    <div class="quote__wrapper mb-50">
                        <div class="section-title text-left mb-110">
                            <h2 class="mb-0 pr-60 pr-xs-0">Get Ready to <span class="vector-shape">Started</span></h2>
                            <h2 class="mb-45 pr-60 pr-xs-0"> It’s Free & Very Easy</h2>
                            <h4 class="sub-title mb-50">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore.Lorem ipsum dolor sit amet consectetur </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp2 animated" data-wow-delay="0.1s">
                    <div class="quote-form white-bg mb-50">
                        <h3 class="quote-title mb-35">Subscribe for Quote</h3>
                        <form class="subscribe-form" action="#">
                            <div class="input-field mb-25">
                                <label for="name">Name</label>
                                <input type="text" id="name" placeholder="Mahfuz Riad">
                                <img class="close-icon" src="assets/img/icon/close.png" alt="">
                            </div>
                            <div class="input-field input-password mb-25">
                                <label for="password">Password</label>
                                <input type="text" id="password" placeholder="* * * * * * * * * ">
                                <img class="eye-icon" src="assets/img/icon/eye.png" alt="">
                            </div>
                        </form>
                        <button class="theme_btn quote_btn_lg mb-35 mt-10">Get a Quote</button>
                        <span>Let's do great things together Free <a href="sign-up.html">Sign up</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- get-quote end -->
    <!-- blog-area start -->
    <section class="blog-area pos-rel pt-160 pb-130 pt-md-90 pt-xs-90 pb-md-45 pb-xs-45">
        <img src="assets/img/shape/12.svg" alt="" class="blog-shape shape_01">
        <img src="assets/img/shape/07.svg" alt="" class="blog-shape shape_02">
        <img src="assets/img/shape/13.svg" alt="" class="blog-shape shape_03">
        <img src="assets/img/shape/14.svg" alt="" class="blog-shape shape_04">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="blog-title-wrapper">
                        <div class="section-title text-center mb-110">
                            <h2 class="mb-40 wow fadeInUp2 animated" data-wow-delay="0.1s">Latest data science and our <span class="vector-shape">company news</span></h2>
                            <h4 class="sub-title mb-50 wow fadeInUp2 animated" data-wow-delay="0.3s">Dolor sit amet consectetur elit sed eiusmod tempor incidi dunt labore dolore magna aliqua enim ad minim </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blogs mb-50 wow fadeInUp2 animated" data-wow-delay="0.1s">
                        <div class="blogs__thumb mb-40">
                            <img src="assets/img/blog/01.png" alt="">
                        </div>
                        <h6 class="mb-20">Data Science</h6>
                        <h3 class="semi-title mb-20"><a href="blog-details.html">Data Engineer, Data Analyst Data Scientist</a></h3>
                        <div class="blogs__meta">
                            <span>May 21, 2021 .</span>
                            <span>0 comments</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blogs mb-50 wow fadeInUp2 animated" data-wow-delay="0.3s">
                        <div class="blogs__thumb mb-40">
                            <img src="assets/img/blog/02.png" alt="">
                        </div>
                        <h6 class="mb-20">Data Science</h6>
                        <h3 class="semi-title mb-20"><a href="blog-details.html">How Artificial Intelligence is changing the industry</a></h3>
                        <div class="blogs__meta">
                            <span>May 21, 2021 .</span>
                            <span>0 comments</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blogs mb-50 wow fadeInUp2 animated" data-wow-delay="0.5s">
                        <div class="blogs__thumb mb-40">
                            <img src="assets/img/blog/03.png" alt="">
                        </div>
                        <h6 class="mb-20">Data Science</h6>
                        <h3 class="semi-title mb-20"><a href="blog-details.html">What are Service Graph Connectors in ServiceNow?</a></h3>
                        <div class="blogs__meta">
                            <span>May 21, 2021 .</span>
                            <span>0 comments</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area end -->


</main>
@endsection
