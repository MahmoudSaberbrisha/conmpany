@extends('layouts.masterpagecode')
@section('contant')
    <?php use App\Models\Admin; ?>

    <!-- breadcrumb-section -->

    @if (Auth::check() && Admin::where('email', auth()->user()->email)->exists())
        <!-- From Uiverse.io by kamehame-ha -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#id</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">message</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($contacts as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->message }}</td>
                                    <td>
                                        <form action="{{ route('contactdestroy', $item) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <a style="color: black">حذف </a>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                @else
                    <div class="breadcrumb-section breadcrumb-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 text-center">
                                    <div class="breadcrumb-text">
                                        <p>احصل على دعم على مدار الساعة</p>
                                        <h1>اتصل بنا</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end breadcrumb section -->

                    <!-- contact form -->
                    <div class="contact-from-section mt-150 mb-150">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 mb-5 mb-lg-0">
                                    <div class="form-title">
                                        <h2>هل لديك أي سؤال؟</h2>
                                        <p>لوريم إيبسوم دولور سيت أميت، كونسيكتيتور أديبيسيسينغ إليت. باريتور، راتيون!
                                            لابوريوسوم
                                            إيست،
                                            أسوميندا. بيرفيرينديس، كوا ألياس كويرات أليغيد. كوربوريس إيبسوم مينوس فوليبتات؟
                                            دولور،
                                            إيس
                                            ناتوس!</p>
                                    </div>
                                    <div id="form_status"></div>
                                    <div class="contact-form">
                                        <form action="{{ route('addcontact') }}" method="POST"
                                            enctype="multipart/form-data">

                                            @csrf
                                            <p>
                                                <input type="text" placeholder="الاسم" readonly
                                                    value="{{ auth()->user()->name }}" name="name" id="name">
                                                <input type="email" placeholder="البريد الإلكتروني" readonly
                                                    value="{{ auth()->user()->email }}" name="email" id="email">
                                            </p>
                                            <p>
                                                <input type="tel" placeholder="الهاتف" name="phone" id="phone">
                                                <input type="text" placeholder="الموضوع" name="disc" id="subject">
                                            </p>
                                            <p>
                                                <textarea name="message" id="message" cols="30" rows="10" placeholder="الرسالة"></textarea>
                                            </p>
                                            <p><input type="submit" value="إرسال"></p>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="contact-form-wrap">
                                        <div class="contact-form-box">
                                            <h4><i class="fas fa-map"></i> عنوان المتجر</h4>
                                            <p>شبين الكوم<br> مصر<br> اسم الدولة</p>
                                        </div>
                                        <div class="contact-form-box">
                                            <h4><i class="far fa-clock"></i> ساعات العمل</h4>
                                            <p>من الإثنين إلى الجمعة: 8 إلى 9 مساءً <br> السبت - الأحد: 10 إلى 8 مساءً </p>
                                        </div>
                                        <div class="contact-form-box">
                                            <h4><i class="fas fa-address-book"></i> الاتصال</h4>
                                            <p>الهاتف: 01028454790 <br> البريد الإلكتروني: mido10sb@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end contact form -->

                    <!-- find our location -->
                    <div class="find-location blue-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <p> <i class="fas fa-map-marker-alt"></i> ابحث عن موقعنا</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end find our location -->

                    <!-- google map section -->
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27484.12540380824!2d30.988065385177684!3d30.562984982140303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7d68b68933ea3%3A0x77434af2db2fa06f!2sShebeen%20El-Kom%2C%20Qism%20Shebeen%20El-Kom%2C%20Shibin%20el%20Kom%2C%20Menofia%20Governorate%2C%20Egypt!5e0!3m2!1sen!2sbd!4v1740691094739!5m2!1sen!2sbd"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            class="embed-responsive-item"></iframe>
                    </div>
                    <!-- end google map section -->
    @endif
@endsection
