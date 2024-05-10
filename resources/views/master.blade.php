<!doctype html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="" >
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{asset('Site/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Site/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('Site/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('Site/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Site/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('Site/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('Site/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('Site/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Site/css/rtl.css')}}">
    <link rel="stylesheet" href="{{asset('Site/css/responsive.css')}}">

    <title>موسسه فرهنگی هنر شجره طیبه</title>

    <link rel="icon" type="image/png" href="{{asset('Site/img/favicon.png')}}">
{{--    <link rel="icon" href="{{url($companies['favicon16'])}}" sizes="16x16" type="image/png">--}}
{{--    <link rel="icon" href="{{url($companies['favicon32'])}}" sizes="32x32" type="image/png">--}}

    @yield('style')
</head>
<body>

@yield('main')

<!-- Start Footer Area -->
<footer class="footer-area">
    <div class="divider"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('Site/img/white-logo.png')}}" alt="image"></a>
                    </div>
                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>منو ما</h3>

                    <ul class="services-list">
                        <li><a href="#">درباره ما</a></li>
                        <li><a href="#">آخرین اخبار</a></li>
                        <li><a href="#">حریم خصوصی</a></li>
                        <li><a href="#">شرایط و ضوابط</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>لینک های مرتبط</h3>

                    <ul class="support-list">
                        <li><a href="#">سایت رهبری</a></li>
                        <li><a href="#">سایت حوزه علمیه</a></li>
                        <li><a href="#">سایت سازمان تبلیغات</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>اطلاعات تماس</h3>

                    <ul class="footer-contact-info">
                        <li>موقعیت: <a href="https://goo.gl/maps/MQ78iGP5g9VgZcJ38" target="_blank">تهران، چیذر، خیابان علمیه، موسسه شجره طیبه</a></li>
                        <li>ایمیل: <a href="mailto:hello@spacle.com">info@shajare.ir</a></li>
                        <li>تلفن: <a href="tel:021-12345678">021-12345678</a></li>
                    </ul>
                    <ul class="social">
                        <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <p><i class="bx bx-copyright"></i> تمام محتوای این وبسایت به موسسه فرهنگی هنری شجره طیبه تعلق دارد. طراحی و توسعه توسط <a href="https://bestagroup.ir" target="_blank">Bestagroup</a></p>
        </div>
    </div>
</footer>

<div class="go-top"><i class='bx bx-chevron-up'></i></div>

<script src="{{asset('Site/js/jquery.min.js')}}"></script>
<script src="{{asset('Site/js/popper.min.js')}}"></script>
<script src="{{asset('Site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Site/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('Site/js/jquery.appear.min.js')}}"></script>
<script src="{{asset('Site/js/odometer.min.js')}}"></script>
<script src="{{asset('Site/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('Site/js/jquery.meanmenu.js')}}"></script>
<script src="{{asset('Site/js/wow.min.js')}}"></script>
<script src="{{asset('Site/js/conversation.js')}}"></script>
<script src="{{asset('Site/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('Site/js/form-validator.min.js')}}"></script>
<script src="{{asset('Site/js/contact-form-script.js')}}"></script>
<script src="{{asset('Site/js/particles.min.js')}}"></script>
<script src="{{asset('Site/js/coustom-particles.js')}}"></script>
<script src="{{asset('Site/js/main.js')}}"></script>

@yield('script')
</body>
</html>
