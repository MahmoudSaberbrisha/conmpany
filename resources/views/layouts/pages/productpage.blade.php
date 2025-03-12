@extends('layouts.masterpagecode')

@section('contant')
    <?php use App\Models\Admin; ?> <!-- Import the Admin model -->

    <!-- features list section -->
    @if (Auth::check() && Admin::where('email', auth()->user()->email)->exists())
        <center class="row justify-between -mt-2 " style="padding-left: 50px;padding-right: 50px; ">
            <li>
                <form action="{{ route('addProduct') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input__container">
                        <label class="input__label">مشروع جديد</label>
                        <input placeholder="الاسم" class="input" name="name" type="text">
                        <input placeholder="السعر" class="input" name="price" type="number" required>
                        <input placeholder="الوصف" class="input" name="disc" type="text" required>
                        <input placeholder="معرف الفئة" class="input" name="category_id" type="number" required>
                        <input placeholder="مسار الصوره" class="input" name="image" type="file">

                        <button type="submit">add</button>
                        <p class="input__description">اضف القسم الذي تريد</p>
                    </div>
                </form>
            </li>
        </center>
    @endif

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
                            <p>دعم علي مدار اليوم</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="content">
                            <h3>ضمان</h3>
                            <p>كفاءه عاليه </p>
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
                @if ($products->isEmpty())
                    <p>No products available.</p>
                @else
                    @foreach ($products as $item)
                        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                            <div class="card">
                                <div class="card2">
                                    <a href="product"><img src="{{ url($item->image) }}"
                                            style="min-height: 250px; max-height: 250px; border-radius: 10px"
                                            alt=""></a>
                                    <h3>{{ $item->name }}</h3>
                                    <h3>{{ $item->disc }}</h3>
                                    <h3>{{ $item->price }} $</h3>
                                    @if (Auth::check() && Admin::where('email', auth()->user()->email)->exists())
                                        <div class="row justify-content-center">
                                            <button>
                                                <a style="color: black">اضافه </a>
                                            </button>
                                            <form action={{ route('product.destroy', $item) }} method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">
                                                    <a style="color: black">حذف </a>
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div>

        </div>
    </div>
    </div>
    <!-- end product section -->



    <!-- testimonail-section -->
    <div class="testimonail-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="testimonial-sliders">
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/avaters/avatar1.png" alt="">
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
                                <img src="assets/img/avaters/avatar2.png" alt="">
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
                                <img src="assets/img/avaters/avatar3.png" alt="">
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
                            إلا إذا. الدهليز هو مكان مؤقت، يحتاج إلى الألم ليتم وضعه. كما أن الألم موزة، فإن الموزة حكيمة،
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

    <!-- shop banner -->
    {{-- <section class="shop-banner">
        <div class="container">
            <h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="shop" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section> --}}
    <!-- end shop banner -->
@endsection
