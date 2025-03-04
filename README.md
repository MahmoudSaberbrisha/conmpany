@extends('layouts.masterpagecode')

@section('contant')
    <?php use App\Models\Admin; ?>

    <!-- features list section -->
    <div class="list-section pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3>24/7 دعم</h3>
                            <p>تلقي الدعم طوال اليوم</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="content">
                            <h3>صيانه</h3>
                            <p>صيانه وضمان مدي الحياه ب 1000$ فقط</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end features list section -->

    <!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">اقسام </span>الشركه </h3>
                        <p>نحن نملك الكثير من الاقسام التي تتميز بها شركتنا وهي كالاتي</p>
                    </div>
                </div>
            </div>
            @if (Auth::check() && Admin::where('email', auth()->user()->email)->exists())
                <center>
                    <button id="toggleFormButton" value="add" style="color: black">إضافة قسم جديد</button>
                    <div id="categoryForm" style="display:none;">
                        <li style="background-color:transparent ">
                            <form action="{{ route('categorystore') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input__container">
                                    <label class="input__label">قسم جديد</label>
                                    <input placeholder="id" class="input" name="id" type="integer">
                                    <input placeholder="الاسم" class="input" name="name" type="text" required>
                                    <input placeholder="الوصف" class="input" name="disc" type="text">
                                    <input placeholder="مسار الصوره" class="input" name="image" type="file">
                                    <button type="submit">add</button>
                                    <p class="input__description">اضف المشروع الذي تريد</p>
                                </div>
                            </form>
                        </li>
                    </div>
                </center>
            @endif
            <script>
                document.getElementById('toggleFormButton').addEventListener('click', function() {
                    var form = document.getElementById('categoryForm');
                    if (form.style.display === 'none') {
                        form.style.display = 'block';
                    } else {
                        form.style.display = 'none';
                    }
                });
            </script>

            <div class="row">
                @foreach ($categories as $item)
                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                        <div class="card">
                            <div class="card2">
                                <a href="product{{ $item->id }}"><img src="{{ url($item->image) }}"
                                        style="min-height: 250px; max-height: 250px; border-radius: 10px"
                                        alt=""></a>
                                <h3>{{ $item->name }}</h3>
                                <p>{{ $item->disc }}</p>
                                @if (Auth::check() && Admin::where('email', auth()->user()->email)->exists())
                                    <form action="{{ route('categorydestroy', $item) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <a style="color: black">حذف </a>
                                        </button>
                                    </form>
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- end product section -->
    <!-- cart banner section -->
    <section class="cart-banner pt-100 pb-100">
        <div class="container">
            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-lg-6">
                    <div class="image">
                        <div class="price-box">
                            <div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br>
                                </span>
                            </div>
                        </div>
                        <img src="{{ url('assets/img/phoneapp2.jpg') }}" style="border-radius: 100px" alt="">
                    </div>
                </div>
                <!--Content Column-->

            </div>
            <div class="content-column col-lg-6">
                <h3><span class="orange-text">خصم</span> هذا الشهر</h3>
                <h4>GYM</h4>
                <div class="text">خصم خاص لمده محدده علي تصميم المواقع ال GYM</div>
                <!--Countdown Timer-->
                <div class="time-counter">
                    <div class="time-countdown clearfix" data-countdown="2025/2/01">
                        <div class="counter-column">
                            <div class="inner"><span class="count">10</span>Days</div>
                        </div>
                        <div class="counter-column">
                            <div class="inner"><span class="count">11</span>Hours</div>
                        </div>
                        <div class="counter-column">
                            <div class="inner"><span class="count">02</span>Mins</div>
                        </div>
                        <div class="counter-column">
                            <div class="inner"><span class="count">59</span>Secs</div>
                        </div>
                    </div>
                </div>
                <a href="cart" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> شراء مشروع</a>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->
    <!-- testimonail-section -->
    <div class="testimonail-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="testimonial-sliders">
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="{{ url('assets/img/avaters/avatar1.png') }}" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>ٍSara<span> صاحبه الشركه</span></h3>
                                <p class="testimonial-body">
                                    ان تبدا متاخر خير لك من ان لا تبدا ابدا
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="{{ url('assets/img/avaters/avatar2.png') }}" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Mahmoud Saber<span>صاحب الشركه</span></h3>
                                <p class="testimonial-body">
                                    هل الوقوع في الخطأ من الأخطاء التي لا يخطئ من يعتبرها خطأ
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="{{ url('assets/img/avaters/avatar3.png') }}" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>باشا <span>القهوجي</span></h3>
                                <p class="testimonial-body">
                                    تعي اشرب شاي هههههه
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

    <!-- advertisement section -->
    <div class="abt-section mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="abt-bg">
                        <a href="https://www.youtube.com/watch?v=Vq04T0Cwj5Y" class="video-play-btn popup-youtube"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-text">
                        <p class="top-sub">Since Year 1999</p>
                        <h2>We are <span class="orange-text">MetaCodecx</span></h2>
                        <p>حتى لو كنت فردًا من الجمهور أو عضوًا في المجتمع. في الرعاية ولا الحمال الجماعي الدهليز و أو
                            إلا إذا. الدهليز هو مكان مؤقت، يحتاج إلى الألم ليتم وضعه. كما أن الألم موزة، فإن الموزة
                            حكيمة،
                            ولكن،
                            في بعض الأحيان يريد ذلك. بالنسبة للاتحاد الأوروبي، هذه مشكلة.</p>
                        <p>لوريم إيبسوم دولور سيت أميت، كونسيكتيتور أديبيسينج إليت. بحكمة، فمن السهل أن نصدّه.
                            نحن الذين نقود لدينا قدر أقل من الحقيقة، وأقل مرونة في العمل.</p>
                        <a href="about" class="boxed-btn mt-4">معرفه المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end advertisement section -->

    {{-- <!-- shop banner -->
    <section class="shop-banner">
        <div class="container">
            <h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="shop" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section>
    <!-- end shop banner --> --}}

    <!-- latest news -->
    <div class="latest-news pt-150 pb-150">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">الاخبار</span> الخاصه بنا</h3>
                        <p>لوريم إيبسوم دولور سيت أميت، كونسيكتيتور أديبيسينج إليت. شيء ما، الرحلة التي سوف تحدث بالتالي
                            اختيار المبارك.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($admin_news as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="single-news">
                                <div><img src={{ url("$item->image") }}
                                        style="min-height: 250px; max-height: 250px; border-radius: 10px"></div>
                            </a>
                            <div class="news-text-box">
                                <h3><a href="single-news">انتقل الي باقي الاخبار</a></h3>
                                <p class="blog-meta">
                                    <span class="author"><i class="fas fa-user"></i> {{ $item->adminname }}</span>
                                    <span class="date"><i class="fas fa-calendar"></i> {{ $item->datatime }}</span>
                                </p>
                                <p class="excerpt">{{ $item->disc }}</p>
                                <a href="single-news" class="read-more-btn">read more <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="news" class="boxed-btn">More News</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end latest news -->
@endsection
