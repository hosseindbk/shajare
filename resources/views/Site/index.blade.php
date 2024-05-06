@extends('master')
@section('style')
@endsection
@section('main')
    <body>
        <!-- Start Preloader Area -->
        <div class="preloader-area">
            <div class="spinner">
                <div class="inner">
                    <div class="disc"></div>
                    <div class="disc"></div>
                    <div class="disc"></div>
                </div>
            </div>
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
                                        خانه <i class='bx bx-chevron-down'></i>
                                    </a>

                                    <ul class="dropdown-menu mega-dropdown-menu">
                                        <li class="nav-item">
                                            <h3>با انیمیشن</h3>
                                            <a href="index.html" class="nav-link">صفحه اصلی 1 (استارت آپ)</a>
                                            <a href="index-it-2.html" class="nav-link">صفحه اصلی 2 (استارت آپ)</a>
                                            <a href="index-it-3.html" class="nav-link">صفحه اصلی 3 (استارت آپ)</a>
                                            <a href="index-saas.html" class="nav-link">صفحه اصلی 4 (استارت آپ ساس)</a>
                                            <a href="index-3.html" class="nav-link">صفحه اصلی 5 (ربات چت)</a>
                                            <a href="index-4.html" class="nav-link">صفحه اصلی 6 (ربات چت)</a>
                                            <a href="index-5.html" class="nav-link">صفحه اصلی 7 (ربات چت)</a>
                                            <a href="index-digital-marketing-agency.html" class="nav-link">صفحه اصلی 8 (دیجیتال مارکتینگ)</a>
                                        </li>

                                        <li class="nav-item">
                                            <h3>بدون انیمیشن</h3>
                                            <a href="index-without-animation.html" class="nav-link">صفحه اصلی 1 (استارت آپ)</a>
                                            <a href="index.blade.php" class="nav-link active">صفحه اصلی 2 (استارت آپ)</a>
                                            <a href="index-it-3-without-animation.html" class="nav-link">صفحه اصلی 3 (استارت آپ)</a>
                                            <a href="index-saas-without-animation.html" class="nav-link">صفحه اصلی 4 (استارت آپ ساس)</a>
                                            <a href="index-3-without-animation.html" class="nav-link">صفحه اصلی 5 (ربات چت)</a>
                                            <a href="index-4-without-animation.html" class="nav-link">صفحه اصلی 6 (ربات چت)</a>
                                            <a href="index-5-without-animation.html" class="nav-link">صفحه اصلی 7 (ربات چت)</a>
                                            <a href="index-digital-marketing-agency-without-animation.html" class="nav-link">صفحه اصلی 8 (دیجیتال مارکتینگ)</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">درباره ما</a>
                                </li>

                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">قیمت</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">صفحات <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                خدمات ما
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="services-1.html" class="nav-link">خدمات ما 1</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="services-2.html" class="nav-link">خدمات ما 2</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="services-3.html" class="nav-link">خدمات ما 3</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="single-service.html" class="nav-link">جزئیات خدمات</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">امکانات</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="features-1.html" class="nav-link">امکانات 1</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="features-2.html" class="nav-link">امکانات 2</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">تیم</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="log-in.html" class="nav-link">ورود کاربر</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="sign-up.html" class="nav-link">ثبت نام</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">سوالات متداول</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="error-404.html" class="nav-link">خطای 404</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">وبلاگ <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog-1.html" class="nav-link">وبلاگ شبکه ای</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="blog-2.html" class="nav-link">وبلاگ سایدبار</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="single-blog.html" class="nav-link">وبلاگ جداگانه</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">تماس با ما</a>
                                </li>
                            </ul>

                            <div class="others-options">
                                <a href="contact.html" class="default-btn">
                                    <i class="bx bxs-hot"></i>شروع کار<span></span>
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
                                        <h1>راه حل های امن فناوری را برای یک محیط امن تر کنید</h1>
                                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                                        <a href="contact.html" class="default-btn">
                                            <i class="bx bxs-hot"></i>شروع کار
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

            <div class="shape20"><img src="{{asset('Site/img/shape/19.png')}}" alt="image"></div>
            <div class="shape21"><img src="{{asset('Site/img/shape/20.png')}}" alt="image"></div>
            <div class="shape19"><img src="{{asset('Site/img/shape/18.png')}}" alt="image"></div>
            <div class="shape22"><img src="{{asset('Site/img/shape/21.png')}}" alt="image"></div>
            <div class="shape23"><img src="{{asset('Site/img/shape/22.svg')}}" alt="image"></div>
            <div class="shape24"><img src="{{asset('Site/img/shape/23.png')}}" alt="image"></div>
            <div class="shape26"><img src="{{asset('Site/img/shape/25.png')}}" alt="image"></div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start Features Card -->
        <div class="features-card-section pt-100 pb-70 bg-f8fbfa">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-features-card blt-radius-0">
                            <i class='bx bx-conversation blt-radius-0'></i>
                            <h3>
                                <a href="#">مشاوره فناوری</a>
                            </h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-features-card blt-radius-0">
                            <i class='bx bx-laptop blt-radius-0'></i>
                            <h3>
                                <a href="#">توسعه وب</a>
                            </h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-features-card blt-radius-0">
                            <i class='bx bxs-badge-check blt-radius-0'></i>
                            <h3>
                                <a href="#">راه حل فناوری</a>
                            </h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-features-card blt-radius-0">
                            <i class='bx bxs-megaphone blt-radius-0'></i>
                            <h3>
                                <a href="#">بازاریابی دیجیتال</a>
                            </h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Features Card -->

        <!-- Start Services Area -->
        <section class="services-area bg-right-shape ptb-100">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="services-content it-service-content">
                        <div class="content left-content">
                            <div class="icon">
                                <img src="{{asset('Site/img/icon1.png')}}" alt="image">
                            </div>
                            <h2>طراحی کاربری</h2>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="feature-box">
                                        <i class='bx bxs-badge-check'></i>
                                         طراحی تعاملی
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-box">
                                        <i class='bx bxs-badge-check'></i>
                                        طراحی رابط کاربری
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-box">
                                        <i class='bx bxs-badge-check'></i>
                                        توسعه برنامه تلفن همراه
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-box">
                                        <i class='bx bxs-badge-check'></i>
                                        توسعه وب لاراول
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-box">
                                        <i class='bx bxs-badge-check'></i>
                                        توسعه وب دوستانه
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-box">
                                        <i class='bx bxs-badge-check'></i>
                                       توسعه وب آنگولار
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="default-btn">
                                <i class="bx bxs-spreadsheet"></i>
                                بیشتر بدانید
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="services-image">
                        <div class="image">
                            <img src="{{asset('Site/img/services-image/service3.png')}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Area -->

        <!-- Start Services Area -->
        <section class="services-area bg-left-color bg-left-shape bg-f4f6fc ptb-100">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="services-image">
                        <div class="image">
                            <img src="{{asset('Site/img/services-image/service4.png')}}" alt="image">
                        </div>
                    </div>

                    <div class="services-content it-service-content">
                        <div class="content">
                            <div class="icon">
                                <img src="{{asset('Site/img/icon1.png')}}" alt="image">
                            </div>
                            <h2>بازاریابی دیجیتال</h2>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="feature-box">
                                        <i class='bx bxs-badge-check'></i>
                                        پایگاه داده های ابری
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-box">
                                        <i class='bx bxs-badge-check'></i>
                                        ابر ترکیبی
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-box">
                                        <i class='bx bxs-badge-check'></i>
                                        سرورهای ایمیل
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-box">
                                        <i class='bx bxs-badge-check'></i>
                                        میزبانی وب سایت
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-box">
                                        <i class='bx bxs-badge-check'></i>
                                       ذخیره سازی پرونده
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-box">
                                        <i class='bx bxs-badge-check'></i>
                                        سیستم های پشتیبان
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="default-btn">
                                <i class="bx bxs-spreadsheet"></i>
                                بیشتر بدانید
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Area -->

        <!-- Start Features Area -->
        <section class="features-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>ویژگی های شگفت انگیز ما</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="features-box">
                            <div class="icon">
                                <i class='bx bx-conversation'></i>
                            </div>
                            <h3>مشاوره فناوری</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                            <div class="back-icon">
                                <i class='bx bx-conversation'></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="features-box">
                            <div class="icon">
                                <i class='bx bxs-badge-check'></i>
                            </div>
                            <h3>راه حل فناوری</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                            <div class="back-icon">
                                <i class='bx bxs-badge-check'></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="features-box">
                            <div class="icon">
                                <i class='bx bxs-dashboard'></i>
                            </div>
                            <h3>داشبورد ساده</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                            <div class="back-icon">
                                <i class='bx bxs-dashboard'></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="features-box">
                            <div class="icon">
                                <i class='bx bxs-bell-ring'></i>
                            </div>
                            <h3>یادآوری مهلت</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                            <div class="back-icon">
                                <i class='bx bxs-bell-ring'></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="features-box">
                            <div class="icon">
                                <i class='bx bxs-info-circle'></i>
                            </div>
                            <h3>بازیابی اطلاعات</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                            <div class="back-icon">
                                <i class='bx bxs-info-circle'></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="features-box">
                            <div class="icon">
                                <i class='bx bx-cog'></i>
                            </div>
                            <h3>عملکرد انعطاف پذیر</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                            <div class="back-icon">
                                <i class='bx bx-cog'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Area -->

        <!-- Start Testimonials Area -->
        <section class="testimonials-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                   <h2>مشتریان درباره <span>استراکس</span> چه می گویند</h2>
                </div>

                <div class="testimonials-slides owl-carousel owl-theme">
                    <div class="single-testimonials-item">
                        <div class="client-info">
                            <img src="{{asset('Site/img/author-image/6.jpg')}}" alt="image">
                            <h3>استیون اسمیت</h3>
                                <span>سئوکار وب</span>
                        </div>

                        <div class="testimonials-desc">
                           <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. </p>

                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>

                    <div class="single-testimonials-item">
                        <div class="client-info">
                            <img src="{{asset('Site/img/author-image/7.jpg')}}" alt="image">
                            <h3>استیون اسمیت</h3>
                                <span>سئوکار وب</span>
                        </div>

                        <div class="testimonials-desc">
                           <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. </p>

                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>

                    <div class="single-testimonials-item">
                        <div class="client-info">
                            <img src="{{asset('Site/img/author-image/8.jpg')}}" alt="image">
                            <h3>استیون اسمیت</h3>
                                <span>سئوکار وب</span>
                        </div>

                        <div class="testimonials-desc">
                           <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. </p>

                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>

                    <div class="single-testimonials-item">
                        <div class="client-info">
                            <img src="{{asset('Site/img/author-image/8.jpg')}}" alt="image">
                            <h3>استیون اسمیت</h3>
                                <span>سئوکار وب</span>
                        </div>

                        <div class="testimonials-desc">
                           <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. </p>

                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>

                    <div class="single-testimonials-item">
                        <div class="client-info">
                            <img src="{{asset('Site/img/author-image/7.jpg')}}" alt="image">
                            <h3>استیون اسمیت</h3>
                                <span>سئوکار وب</span>
                        </div>

                        <div class="testimonials-desc">
                           <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. </p>

                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Area -->

        <!-- Start Video Presentation Area -->
        <section class="video-presentation-area ptb-100">
            <div class="container">
                <div class="section-title">
                     <h2>ویدیوهای ما را تماشا کنید</h2>
                </div>

                <div class="video-box">
                    <img src="{{asset('Site/img/video-bg.jpg')}}" class="main-image" alt="image">

                    <a href="https://www.youtube.com/watch?v=0gv7OC9L2s8" class="video-btn popup-youtube">
                        <i class="bx bx-play"></i>
                    </a>

                    <div class="shape1"><img src="{{asset('Site/img/shape/1.png')}}" alt="image"></div>
                    <div class="shape2"><img src="{{asset('Site/img/shape/2.png')}}" alt="image"></div>
                    <div class="shape3"><img src="{{asset('Site/img/shape/3.png')}}" alt="image"></div>
                    <div class="shape4"><img src="{{asset('Site/img/shape/4.png')}}" alt="image"></div>
                    <div class="shape5"><img src="{{asset('Site/img/shape/5.png')}}" alt="image"></div>
                    <div class="shape6"><img src="{{asset('Site/img/shape/6.png')}}" alt="image"></div>
                </div>

                <div class="funfacts-inner">
                    <div class="row">
                        <div class="col-lg-3 col-6 col-sm-6">
                            <div class="single-funfacts funfact-style-two">
                                <i class='bx bx-list-check'></i>
                                <h3>
                                    <span style="direction: ltr;" class="odometer" data-count="850">00</span>
                                    <span class="sign-icon">+</span>
                                </h3>
                                <p>پروژه ها انجام شده</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6 col-sm-6">
                            <div class="single-funfacts funfact-style-two">
                                <i class='bx bx-smile'></i>
                                <h3>
                                    <span style="direction: ltr;" class="odometer" data-count="850">00</span>
                                    <span class="sign-icon">+</span>
                                </h3>
                                <p>مشتریان ما</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6 col-sm-6">
                            <div class="single-funfacts funfact-style-two">
                                <i class='bx bx-grid-small'></i>
                                <h3>
                                    <span style="direction: ltr;" class="odometer" data-count="120">00</span>
                                    <span class="sign-icon">+</span>
                                </h3>
                                <p>پروژه های حاضر</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6 col-sm-6">
                            <div class="single-funfacts funfact-style-two">
                                <i class='bx bxs-award'></i>
                                <h3>
                                    <span style="direction: ltr;" class="odometer" data-count="50">00</span>
                                    <span class="sign-icon">+</span>
                                </h3>
                                <p>جوایز برنده</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-cta-box mwidth-1000">
                    <h3>سوالی در مورد ما دارید؟</h3>
                    <p>دریغ نکنید با ما تماس بگیرید</p>
                    <a href="#" class="default-btn">
                        <i class="bx bxs-edit-alt"></i>
                        تماس بگیرید
                        <span></span>
                    </a>
                </div>
            </div>

            <div class="shape-map1"><img src="{{asset('Site/img/map1.png')}}" alt="image"></div>
            <div class="shape7">    <img src="{{asset('Site/img/shape/7.png')}}" alt="image"></div>
            <div class="shape8">    <img src="{{asset('Site/img/shape/8.png')}}" alt="image"></div>
            <div class="shape9">    <img src="{{asset('Site/img/shape/9.png')}}" alt="image"></div>
        </section>
        <!-- End Video Presentation Area -->

        <!-- Start Pricing Area -->
        <section class="pricing-area pt-100 pb-70 bg-f4f5fe">
            <div class="container">
                <div class="section-title">
                    <h2>قیمت گذاری را انتخاب کنید</h2>
                </div>

                <div class="tab pricing-list-tab">
                    <ul class="tabs">
                        <li>
                            <a href="#">
                                <i class="bx bxs-calendar-check"></i> ماهانه
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxs-calendar-check"></i> سالانه
                            </a>
                        </li>
                    </ul>

                    <div class="tab_content">
                        <div class="tabs_item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-pricing-table center-align">
                                        <div class="pricing-header">
                                           <h3>رایگان</h3>
                                        </div>

                                        <div class="price">
                                            0 <sup>تومان</sup><sub>/ ماهانه</sub>
                                        </div>

                                        <ul class="pricing-features">
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                حداکثر 3 اپراتور گپ

                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                100 راه انداز ربات چت
                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                24/7 چت زنده
                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                ادغام ایمیل

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> ادغام مسنجر</li>
                                            <li><i class="bx bxs-badge-check"></i> اطلاعات بازدید کننده</li>
                                            <li><i class="bx bxs-badge-check"></i> تلفن همراه + دسک تاپ</li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                پاسخ سریع

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> ابزارکها بکشید و رها کنید</li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                آمار بازدیدکنندگان

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> گوگل آنالیز</li>
                                        </ul>

                                        <div class="btn-box">
                                            <a href="#" class="default-btn">
                                                <i class="bx bxs-hot"></i>
                                                سفارش محصول
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="single-pricing-table center-align">
                                        <div class="pricing-header">
                                            <h3>ابتدایی</h3>
                                        </div>

                                        <div class="price">
                                            49 <sup>تومان</sup><sub>/ ماهانه</sub>
                                        </div>

                                        <ul class="pricing-features">
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                حداکثر 3 اپراتور گپ

                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                100 راه انداز ربات چت
                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                24/7 چت زنده
                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                ادغام ایمیل

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> ادغام مسنجر</li>
                                            <li><i class="bx bxs-badge-check"></i> اطلاعات بازدید کننده</li>
                                            <li><i class="bx bxs-badge-check"></i> تلفن همراه + دسک تاپ</li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                پاسخ سریع

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> ابزارکها بکشید و رها کنید</li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                آمار بازدیدکنندگان

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> گوگل آنالیز</li>
                                        </ul>

                                        <div class="btn-box">
                                            <a href="#" class="default-btn">
                                                <i class="bx bxs-hot"></i>
                                                سفارش محصول
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                                    <div class="single-pricing-table center-align">
                                        <div class="pricing-header">
                                            <h3>حرفه ای</h3>
                                        </div>

                                        <div class="price">
                                             79 <sup>تومان</sup><sub>/ ماهانه</sub>
                                        </div>

                                        <ul class="pricing-features">
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                حداکثر 3 اپراتور گپ

                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                100 راه انداز ربات چت
                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                24/7 چت زنده
                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                ادغام ایمیل

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> ادغام مسنجر</li>
                                            <li><i class="bx bxs-badge-check"></i> اطلاعات بازدید کننده</li>
                                            <li><i class="bx bxs-badge-check"></i> تلفن همراه + دسک تاپ</li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                پاسخ سریع

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> ابزارکها بکشید و رها کنید</li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                آمار بازدیدکنندگان

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> گوگل آنالیز</li>
                                        </ul>

                                        <div class="btn-box">
                                            <a href="#" class="default-btn">
                                                <i class="bx bxs-hot"></i>
                                                سفارش محصول
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-pricing-table center-align">
                                        <div class="pricing-header">
                                            <h3>رایگان</h3>
                                        </div>

                                        <div class="price">
                                            0 <sup>تومان</sup><sub>/ سالانه</sub>
                                        </div>

                                        <ul class="pricing-features">
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                حداکثر 3 اپراتور گپ

                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                100 راه انداز ربات چت
                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                24/7 چت زنده
                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                ادغام ایمیل

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> ادغام مسنجر</li>
                                            <li><i class="bx bxs-badge-check"></i> اطلاعات بازدید کننده</li>
                                            <li><i class="bx bxs-badge-check"></i> تلفن همراه + دسک تاپ</li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                پاسخ سریع

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> ابزارکها بکشید و رها کنید</li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                آمار بازدیدکنندگان

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> گوگل آنالیز</li>
                                        </ul>

                                        <div class="btn-box">
                                            <a href="#" class="default-btn">
                                                <i class="bx bxs-hot"></i>
                                                سفارش محصول
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="single-pricing-table center-align">
                                        <div class="pricing-header">
                                            <h3>ابتدایی</h3>
                                        </div>

                                        <div class="price">
                                            79 <sup>تومان</sup><sub>/ سالانه</sub>
                                        </div>

                                        <ul class="pricing-features">
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                حداکثر 3 اپراتور گپ

                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                100 راه انداز ربات چت
                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                24/7 چت زنده
                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                ادغام ایمیل

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> ادغام مسنجر</li>
                                            <li><i class="bx bxs-badge-check"></i> اطلاعات بازدید کننده</li>
                                            <li><i class="bx bxs-badge-check"></i> تلفن همراه + دسک تاپ</li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                پاسخ سریع

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> ابزارکها بکشید و رها کنید</li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                آمار بازدیدکنندگان

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> گوگل آنالیز</li>
                                        </ul>

                                        <div class="btn-box">
                                            <a href="#" class="default-btn">
                                                <i class="bx bxs-hot"></i>
                                                سفارش محصول
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                                    <div class="single-pricing-table center-align">
                                        <div class="pricing-header">
                                           <h3>حرفه ای</h3>
                                        </div>

                                        <div class="price">
                                             99 <sup>تومان</sup><sub>/ سالانه</sub>
                                        </div>

                                        <ul class="pricing-features">
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                حداکثر 3 اپراتور گپ

                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                100 راه انداز ربات چت
                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                24/7 چت زنده
                                            </li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                ادغام ایمیل

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> ادغام مسنجر</li>
                                            <li><i class="bx bxs-badge-check"></i> اطلاعات بازدید کننده</li>
                                            <li><i class="bx bxs-badge-check"></i> تلفن همراه + دسک تاپ</li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                پاسخ سریع

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> ابزارکها بکشید و رها کنید</li>
                                            <li>
                                                <i class="bx bxs-badge-check"></i>
                                                آمار بازدیدکنندگان

                                            </li>
                                            <li><i class="bx bxs-badge-check"></i> گوگل آنالیز</li>
                                        </ul>

                                        <div class="btn-box">
                                            <a href="#" class="default-btn">
                                                <i class="bx bxs-hot"></i>
                                                سفارش محصول <span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pricing Area -->

        <!-- Start Team Area -->
        <section class="team-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>کارشناسان ما آماده کمک به شما هستند</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{asset('Site/img/team-image/team1.jpg')}}" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                                </ul>
                            </div>

                            <div class="content">
                                <h3>آلکس ماکسول</h3>
                                <span>سئوکار وب</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{asset('Site/img/team-image/team2.jpg')}}" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                                </ul>
                            </div>

                            <div class="content">
                                <h3>سارا تایلور</h3>
                                <span>طراح کاربری</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{asset('Site/img/team-image/team3.jpg')}}" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                                </ul>
                            </div>

                            <div class="content">
                                <h3>کالوین کلین</h3>
                                <span>پشتیبان</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{asset('Site/img/team-image/team4.jpg')}}" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                                </ul>
                            </div>

                            <div class="content">
                                <h3>لی مونرو</h3>
                                <span>توسعه دهنده</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Area -->

        <!-- Start FAQ Area -->
        <section class="faq-area ptb-100 bg-color-f4f5fe">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="faq-accordion">
                            <h2>سوالات متداول <span>استراکس</span></h2>

                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>
                                        سوالات متداول 1؟
                                    </a>

                                    <p class="accordion-content show">
                                        لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.
                                    </p>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>
                                        سوالات متداول 2؟
                                    </a>

                                    <p class="accordion-content">
                                        لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.
                                    </p>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>
                                         سوالات متداول 3؟
                                    </a>

                                    <p class="accordion-content">
                                        لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.
                                    </p>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>
                                        سوالات متداول 4؟
                                    </a>

                                    <p class="accordion-content">
                                        لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.
                                    </p>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>
                                         سوالات متداول 5؟
                                    </a>

                                    <p class="accordion-content">
                                        لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="faq-image">
                            <img src="{{asset('Site/img/faq-img1.png')}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End FAQ Area -->

        <!-- Start Blog Area -->
        <section class="blog-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>آخرین اخبار وبلاگ</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="#"><img src="{{asset('Site/img/blog-image/4.jpg')}}" alt="image"></a>

                                <div class="date"><i class='bx bx-calendar'></i> 01 دی 1398</div>
                            </div>

                            <div class="post-content">
                                <h3><a href="#">قانون طلایی خرید تلفن به عنوان هدیه</a></h3>

                                <div class="post-info">
                                    <div class="post-by">
                                        <img src="{{asset('Site/img/author-image/5.jpg')}}" alt="image">

                                        <h6>سارا تایلور</h6>
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
                                <a href="#"><img src="{{asset('Site/img/blog-image/5.jpg')}}" alt="image"></a>

                                <div class="date"><i class='bx bx-calendar'></i> 01 دی 1398</div>
                            </div>

                            <div class="post-content">
                                <h3><a href="#">قانون طلایی خرید تلفن به عنوان هدیه</a></h3>

                                <div class="post-info">
                                    <div class="post-by">
                                        <img src="{{asset('Site/img/author-image/5.jpg')}}" alt="image">

                                        <h6>مایکل جان</h6>
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
                                <a href="#"><img src="{{asset('Site/img/blog-image/6.jpg')}}" alt="image"></a>

                                <div class="date"><i class='bx bx-calendar'></i> 01 دی 1398</div>
                            </div>

                            <div class="post-content">
                                <h3><a href="#">قانون طلایی خرید تلفن به عنوان هدیه</a></h3>

                                <div class="post-info">
                                    <div class="post-by">
                                        <img src="{{asset('Site/img/author-image/6.jpg')}}" alt="image">

                                        <h6>لوکی اوا</h6>
                                    </div>

                                    <div class="details-btn">
                                        <a href="#"><i class="bx bx-left-arrow-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="blog-notes">
                           <p>بینش برای کمک به شما در انجام آنچه انجام می دهید بهتر ، سریعتر و سود آور است. <a href="#">وبلاگ را کامل بخوانید</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

        <!-- Start Subscribe Area -->
        <section class="subscribe-area bg-f4f5fe">
            <div class="container">
                <div class="subscribe-content">
                    <h2>ما سعی می کنیم تا بهترین پشتیبانی را برای شما داشته باشیم</h2>

                    <form class="newsletter-form" data-toggle="validator">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-8">
                                <input type="email" class="input-newsletter" placeholder="hello@spacle.com" name="EMAIL" required autocomplete="off">
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <button type="submit"><i class="bx bxs-hot"></i> مشترک شدن</button>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div id="validator-newsletter" class="form-result"></div>
                            </div>
                        </div>
                    </form>

                    <div class="shape14"><img src="{{asset('Site/img/shape/13.png')}}" alt="image"></div>
                    <div class="shape15"><img src="{{asset('Site/img/shape/14.png')}}" alt="image"></div>
                    <div class="shape16"><img src="{{asset('Site/img/shape/15.png')}}" alt="image"></div>
                    <div class="shape17"><img src="{{asset('Site/img/shape/16.png')}}" alt="image"></div>
                    <div class="shape18"><img src="{{asset('Site/img/shape/17.png')}}" alt="image"></div>
                </div>
            </div>
        </section>
        <!-- End Subscribe Area -->

        <!-- Start Our Loving Clients Area -->
        <section class="our-loving-clients ptb-100 bg-f4f5fe">
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
                            <img src="{{asset('Site/img/clients-image/5.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-clients-logo">
                        <a href="#">
                            <img src="{{asset('Site/img/clients-image/6.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-clients-logo">
                        <a href="#">
                            <img src="{{asset('Site/img/clients-image/7.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-clients-logo">
                        <a href="#">
                            <img src="{{asset('Site/img/clients-image/8.png')}}" alt="image">
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


