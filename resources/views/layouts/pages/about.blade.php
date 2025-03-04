@extends('layouts.masterpagecode')
@section('contant')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>نحن نبيع المشريع بكافه انواعها </p>
                        <h1>معلومات عنا</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- featured section -->
    <div class="feature-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="featured-text">
                        <h2 class="pb-3">Why <span class="orange-text">MetaCodecx</span></h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-shipping-fast"></i>
                                    </div>
                                    <div class="content">
                                        <h3>صيانه</h3>
                                        <p>نحن نقدم لك أفضل خدمة صيانه .</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-money-bill-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h3>أفضل الأسعار</h3>
                                        <p>نحن نقدم أفضل الأسعار في السوق.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="content">
                                        <h3>مشروع مخصص</h3>
                                        <p>نقدم لك مشاريع مخصصة حسب احتياجاتك.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-sync-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h3>استرداد سريع</h3>
                                        <p>نحن نقدم خدمة استرداد سريعة وسهلة.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end featured section -->

    {{-- <!-- shop banner -->
    <section class="shop-banner">
        <div class="container">
            <h3>تخفيضات ديسمبر مستمرة! <br> مع خصم كبير <span class="orange-text">...</span></h3>
            <div class="sale-percent"><span>تخفيض! <br> حتى</span>50% <span>خصم</span></div>
            <a href="shop.html" class="cart-btn btn-lg">تسوق الآن</a>
        </div>
    </section>
    <!-- end shop banner --> --}}

    <!-- team section -->
    <div class="mt-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3>فريقنا <span class="orange-text">العمل</span></h3>
                        <p>محمود صابر- ساره سعيد -احمد-اسماء-نشوي
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-item">
                        <div class="team-bg team-bg-1"></div>
                        <h4> محمود <span>مبرمج</span></h4>
                        <ul class="social-link-team">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-item">
                        <div class="team-bg team-bg-2"></div>
                        <h4> ساره <span>مبرمجه</span></h4>
                        <ul class="social-link-team">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-team-item">
                        <div class="team-bg team-bg-3"></div>
                        <h4> الفاخراني <span>مبرمجه</span></h4>
                        <ul class="social-link-team">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end team section -->

    <!-- testimonail-section -->
    <div class="testimonail-section mt-80 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="testimonial-sliders">
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src={{ url('assets/img/avaters/avatar1.png') }} alt="">
                            </div>
                            <div class="client-meta">
                                <h3> ساره <span>مالكة شركه محلي</span></h3>
                                <p class="testimonial-body">
                                    " تم استخدامه في جميع أنحاء العالم. "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src={{ url('assets/img/avaters/avatar2.png') }} alt="">
                            </div>
                            <div class="client-meta">
                                <h3> محمود <span>مالك شركه محلي</span></h3>
                                <p class="testimonial-body">
                                    " تم استخدامه في جميع أنحاء العالم. "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src={{ url('assets/img/avaters/avatar3.png') }} alt="">
                            </div>
                            <div class="client-meta">
                                <h3>جاكوب <span>مالك شركه محلي</span></h3>
                                <p class="testimonial-body">
                                    " تم استخدامه في جميع أنحاء العالم. "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonail-section -->
@endsection
