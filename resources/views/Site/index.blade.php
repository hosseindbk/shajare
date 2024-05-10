@extends('master')
@section('style')
@endsection
@section('main')
    <body>
        <!-- Start Preloader Area -->
        <div class="preloader-area">
            <div class="loading-message">
                <p><span class="dot-1" style="font-size: 80px;font-family:Sahel !important;"> موسسه فرهنگی هنری </span><span class="dot-2" style="font-size: 80px;font-family:Sahel !important;"> شجره </span><span class="dot-3" style="font-size: 80px;font-family:Sahel !important;"> طیبه </span></p>
            </div>
{{--            <div class="spinner">--}}
{{--                <div class="inner">--}}
{{--                    <div class="disc"></div>--}}
{{--                    <div class="disc"></div>--}}
{{--                    <div class="disc"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>

        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="spacle-responsive-nav">
                <div class="container">
                    <div class="spacle-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{asset('Site/img/logo.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacle-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('Site/img/logo.png')}}" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        صفحه اصلی
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">مدرسه علمیه <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                معاونت پژوهش
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="services-1.html" class="nav-link">مقالات</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="services-2.html" class="nav-link">پایان نامه ها</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="services-3.html" class="nav-link">نشست ، کرسی و همایش</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="single-service.html" class="nav-link">کارگروه ها</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">معاونت فرهنگی</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="features-1.html" class="nav-link">فعالیت ها</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="features-2.html" class="nav-link">رسانه</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="features-2.html" class="nav-link">دوره های آموزشی</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="features-2.html" class="nav-link">آیین نامه</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">معاونت آموزش</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="features-1.html" class="nav-link">پذیرش</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="features-2.html" class="nav-link">آیین نامه</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">کتابخانه</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="log-in.html" class="nav-link">اخبار و اطلاعات</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">حوزه علمیه <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog-1.html" class="nav-link">حوزه علیمه خواهران</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="blog-2.html" class="nav-link">حوزه علمیه برادران</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">موسسه خیریه</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="features-1.html" class="nav-link">محصولات</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="features-2.html" class="nav-link">صدقات و نذورات</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="blog-2.html" class="nav-link">مرکز مشاوره مهفروردینا</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-2.html" class="nav-link">مهد کودک ضحی</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-2.html" class="nav-link">مرکز نشر</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-2.html" class="nav-link">نشریه</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">درباره ما</a>
                                </li>

                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">تماس با ما</a>
                                </li>
                            </ul>

                            <div class="others-options">
                                <a href="contact.html" class="default-btn">
                                    <i class="bx bxs-user"></i>ثبت نام<span></span>
                                </a>
                                <a href="log-in.html" class="optional-btn">
                                    <i class="bx bx-log-in"></i>ورود<span></span>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Start Main Banner Area -->
        <div class="main-banner main-banner-two">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="main-banner-content">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <div class="content">
                                        <h1 style="font-size: 60px;font-family: 'Mehr Nastaliq Web';text-align: right">موسسه فرهنگی هنری شجره طیبه</h1>
                                        <p>این موسسه به همت هیئت امنای حوزه علمیه چیذر ثبت و فعالیت خود را از سال 96 آغاز نموده است، این مجموعه رویداد های مهم و بی نظیری برگذار نموده است.</p>

                                        <a href="contact.html" class="default-btn">
                                            <i class="bx bxs-user"></i>ثبت نام در سایت
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="banner-image-slider owl-carousel owl-theme">
                            <div class="banner-image banner-slider-bg1"></div>
                            <div class="banner-image banner-slider-bg2"></div>
                            <div class="banner-image banner-slider-bg3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start Features Card -->
        <div class="features-card-section pt-100 pb-70 bg-f8fbfa">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-features-card blt-radius-0">
                            <i class='bx bx-conversation blt-radius-0'></i>
                            <h3>
                                <a href="#">معاونت آموزش</a>
                            </h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-features-card blt-radius-0">
                            <i class='bx bx-laptop blt-radius-0'></i>
                            <h3>
                                <a href="#">معاونت پژوهش</a>
                            </h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-features-card blt-radius-0">
                            <i class='bx bxs-badge-check blt-radius-0'></i>
                            <h3>
                                <a href="#">رویداد و جشنواره</a>
                            </h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Features Card -->

        <!-- Start Team Area -->
        <section class="team-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>هیئت امنا موسسه شجره طیبه</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{asset('Site/img/team-image/team1.jpg')}}" alt="image">
                            </div>
                            <div class="content">
                                <h3>خانم شماره1</h3>
                                <span>معاون شماره1</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{asset('Site/img/team-image/team2.jpg')}}" alt="image">
                            </div>
                            <div class="content">
                                <h3>خانم شماره1</h3>
                                <span>معاون شماره1</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{asset('Site/img/team-image/team3.jpg')}}" alt="image">
                            </div>

                            <div class="content">
                                <h3>خانم شماره1</h3>
                                <span>معاون شماره1</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{asset('Site/img/team-image/team4.jpg')}}" alt="image">
                            </div>
                            <div class="content">
                                <h3>خانم شماره1</h3>
                                <span>معاون شماره1</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Area -->

        <!-- Start Blog Area -->
        <section class="blog-area ptb-100 bg-f4f5fe">
            <div class="container">
                <div class="section-title">
                    <h2>اخبار و رویداد های موسسه</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="#"><img src="{{asset('Site/img/blog-image/1.jpg')}}" alt="image"></a>

                                <div class="date"><i class='bx bx-calendar'></i> 01 فروردین 1403</div>
                            </div>

                            <div class="post-content">
                                <h3><a href="#">رویداد شماره 1</a></h3>

                                <div class="post-info">
                                    <div class="post-by">
                                        <img src="{{asset('Site/img/author-image/1.jpg')}}" alt="image">
                                    </div>

                                    <div class="details-btn">
                                        <a href="#"><i class="bx bx-left-arrow-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="#"><img src="{{asset('Site/img/blog-image/2.jpg')}}" alt="image"></a>

                                <div class="date"><i class='bx bx-calendar'></i> 01 فروردین 1403</div>
                            </div>

                            <div class="post-content">
                                <h3><a href="#">جشنواه شماره 1</a></h3>

                                <div class="post-info">
                                    <div class="post-by">
                                        <img src="{{asset('Site/img/author-image/2.jpg')}}" alt="image">
                                    </div>

                                    <div class="details-btn">
                                       <a href="#"><i class="bx bx-left-arrow-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="#"><img src="{{asset('Site/img/blog-image/3.jpg')}}" alt="image"></a>

                                <div class="date"><i class='bx bx-calendar'></i> 01 فروردین 1403</div>
                            </div>

                            <div class="post-content">
                                <h3><a href="#">همایش شماره 1</a></h3>

                                <div class="post-info">
                                    <div class="post-by">
                                        <img src="{{asset('Site/img/author-image/3.jpg')}}" alt="image">
                                    </div>

                                    <div class="details-btn">
                                        <a href="#"><i class="bx bx-left-arrow-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

        <!-- Start Our Loving Clients Area -->
        <section class="our-loving-clients ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>مشتریان ما</h2>
                </div>

                <div class="clients-logo-list align-items-center">
                    <div class="single-clients-logo">
                        <a href="#">
                            <img src="{{asset('Site/img/clients-image/1.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-clients-logo">
                        <a href="#">
                            <img src="{{asset('Site/img/clients-image/2.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-clients-logo">
                        <a href="#">
                            <img src="{{asset('Site/img/clients-image/3.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-clients-logo">
                        <a href="#">
                            <img src="{{asset('Site/img/clients-image/4.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-clients-logo">
                        <a href="#">
                            <img src="{{asset('Site/img/clients-image/9.png')}}" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('script')
@endsection


