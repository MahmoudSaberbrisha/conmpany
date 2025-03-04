<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Fruitkha - Slider Version</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <!-- google font -->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700') }}" rel="stylesheet">
    <link href="{{ url('https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap ') }}" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ url('assets/css/all.min.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">
    <!-- animate css -->
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{ url('assets/css/meanmenu.min.css') }}">
    <!-- main style -->
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">

</head>
<style>
    .input__container {
        max-width: 500px;
        display: flex;
        flex-direction: column;
        gap: 6px;
        background: rgba(255, 255, 255, 0.3);
        padding: 15px;
        margin: 15px;
        border-radius: 20px;
        position: relative;

    }

    .input__container::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: -1;
        filter: blur(25px);
        border-radius: 20px;
        background-color: #e499ff;
        background-image: radial-gradient(at 47% 69%, hsla(17, 62%, 65%, 1) 0px, transparent 50%),
            radial-gradient(at 9% 32%, hsla(222, 75%, 60%, 1) 0px, transparent 50%);
    }

    .input__label {
        display: block;
        margin-left: 0.4em;
        color: #000;
        text-transform: uppercase;
        font-size: 0.9em;
        font-weight: bold;
    }

    .input__description {
        font-size: 0.6em;
        font-weight: bold;
        text-align: center;
        color: rgba(0, 0, 0, 0.5);
    }

    .input {
        border: none;
        outline: none;
        width: 100%;
        padding: 0.6em;
        padding-left: 0.9em;
        border-radius: 20px;
        background: #fff;
        transition: background 300ms, color 300ms;
    }

    .input:hover,
    .input:focus {
        background: rgb(0, 0, 0);
        color: #fff;
    }

    /* From Uiverse.io by Tiagoadag */
    .card {
        width: 290px;
        height: 500px;
        background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
        border-radius: 20px;
        margin: 20px;

        transition: all .2s;
    }

    .card2 {
        width: 290px;
        height: 500px;
        background-color: #f3f2f2;
        border-radius: 20px;
        transition: all .2s;
    }

    .card2:hover {
        transform: scale(0.98);
        border-radius: 20px;
    }

    .card:hover {
        box-shadow: 0px 0px 30px 1px rgba(0, 255, 117, 0.30);
    }

    button {
        background: transparent;
        color: #fff;
        font-size: 17px;
        text-transform: uppercase;
        font-weight: 600;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        perspective: 3rem;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.308);
    }

    button::before {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        border-radius: 10px;
        background: linear-gradient(320deg,
                rgba(0, 140, 255, 0.678),
                rgba(128, 0, 128, 0.308));
        z-index: 1;
        transition: background 3s;
    }

    button:hover::before {
        animation: rotate 1s;
        transition: all 0.5s;
    }

    @keyframes rotate {
        0% {
            transform: rotateY(180deg);
        }

        100% {
            transform: rotateY(360deg);
        }
    }

</style>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">


                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo ">
                            <a href="home">
                                <img src={{ url('assets/img/mobile-app.png') }}
                                    style="min-height: 50px;min-width: 50px; max-width: 50;max-height: 50px"
                                    alt=""> MetaCodecx
                            </a>

                        </div>

                        <!-- logo -->


                        <!-- menu start -->
                        <nav class="main-menu" dir="rtl">

                            <ul>
                                <li class="current-list"><a href="home">الرئيسيه</a>
                                </li>
                                <li><a href="product">المشاريع</a>
                                </li>
                                <li><a href="about">حولنا</a></li>
                                <li><a href="#">الصفحات</a>
                                    <ul class="sub-menu">
                                        <li><a href="404">404 page</a></li>
                                        <li><a href="about">حولنا</a></li>
                                        <li><a href="cart">السله</a></li>
                                        <li><a href="checkout"> انهاء الدفع</a></li>
                                        <li><a href="contact">تواصل معنا</a></li>
                                        <li><a href="news">الاخبار</a></li>
                                        <li><a href="shop">المتجر</a></li>
                                    </ul>
                                </li>
                                <li><a href="news">الاخبار</a>
                                    <ul class="sub-menu">
                                        <li><a href="news">الاخبار</a></li>
                                        <li><a href="single-news">اخبار حصريه</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact">تواصل معنا</a></li>
                                <li><a href="">{{ auth()->user()->name }}</a></li>
                                <li>
                                    <form method="post" action="{{ route('adminlogout') }}">
                                        @csrf
                                        <button style="padding-bottom: 5px">Log out</button>
                                    </form>
                                </li>
                                {{-- <li><a href="shop">المتجر</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop">المتجر</a></li>
                                        <li><a href="checkout">انهاء الدفع</a></li>
                                        <li><a href="single-product">مشاريع فرديه</a></li>
                                        <li><a href="cart">السله</a></li>
                                    </ul>
                                </li> --}}
                                <li>
                                    <div class="header-icons">
                                        <a class="shopping-cart" href="cart"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="mobile-hide search-bar-icon" href="#"><i
                                                class="fas fa-search"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->
    <!-- home page slider -->
    <div class="homepage-slider">
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">الكفاءه</p>
                                <h1>خبره اعوام</h1>
                                <div class="hero-btns">
                                    <a href="shop" class="boxed-btn">مشاريعنا </a>
                                    <a href="contact" class="bordered-btn"> تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">الكفاءه</p>
                                <h1>خبره اعوام</h1>
                                <div class="hero-btns">
                                    <a href="shop" class="boxed-btn">مشاريعنا </a>
                                    <a href="contact" class="bordered-btn"> تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-right">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">الكفاءه</p>
                                <h1>خبره اعوام</h1>
                                <div class="hero-btns">
                                    <a href="shop" class="boxed-btn">مشاريعنا </a>
                                    <a href="contact" class="bordered-btn"> تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-homepage-slider homepage-bg-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-right">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">الكفاءه</p>
                                <h1>خبره اعوام</h1>
                                <div class="hero-btns">
                                    <a href="shop" class="boxed-btn">مشاريعنا </a>
                                    <a href="contact" class="bordered-btn"> تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end home page slider -->
    @yield('contant')

    <!-- end logo carousel -->
    <!-- footer -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">حول الشركه </h2>
                        <p>شرك هعصريه متميزه في جميع مجالات البرمجه وهي الافضل في التصميم والجوده</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">تواصل معنا</h2>
                        <ul>
                            <li>شبين الكوم</li>
                            <li>mido10sb@gmail.com</li>
                            <li>+2 01028454790</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">الصفحات</h2>
                        <ul>
                            <li><a href="home">الرئيسيه</a></li>
                            <li><a href="about">حولنا</a></li>
                            <li><a href="services">المتجر</a></li>
                            <li><a href="news">الاخبار</a></li>
                            <li><a href="contact">تواصل معنا</a></li>

                        </ul>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">اشتراك</h2>
                        <p>اشترك في القائمة البريدية لدينا للحصول على آخر التحديثات.</p>
                        <form action="home">
                            <input type="email" placeholder="Email">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->

    <!-- copyright -->
    {{-- <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>, All Rights
                        Reserved.<br>
                        Distributed By - <a href="https://themewagon.com/">Themewagon</a>
                    </p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end copyright -->

    <!-- jquery -->
    <script src="{{ url('assets/js/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- count down -->
    <script src="{{ url('assets/js/jquery.countdown.js') }}"></script>
    <!-- isotope -->
    <script src="{{ url('assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
    <!-- waypoints -->
    <script src="{{ url('assets/js/waypoints.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ url('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- mean menu -->
    <script src="{{ url('assets/js/jquery.meanmenu.min.js') }}"></script>
    <!-- sticker js -->
    <script src="{{ url('assets/js/sticker.js') }}"></script>
    <!-- main js -->
    <script src="{{ url('assets/js/main.js') }}"></script>

</body>

</html>
