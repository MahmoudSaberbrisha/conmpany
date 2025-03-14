@extends('layouts.masterpagecode')

@section('contant')
    <!-- breadcrumb-section -->
    <?php use App\Models\Admin; ?>




    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>معلومات حصريه </p>
                        <h1>مقالة اخبارية</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    @if (Auth::check() && Admin::where('email', auth()->user()->email)->exists())
        <center>
            <button id="toggleFormButton" value="add"
                style="color: black ;width: 150px;height: 100px; border-radius: 200px; margin: 20px;">إضافة اخبار
                جديد</button>
            <div id="categoryForm" style="display:none;">
                <li>
                    <form action="{{ route('addnews') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input__container">
                            <label class="input__label">اخبار جديد</label>
                            <input placeholder="الاسم" class="input" value="{{ auth()->user()->name }}" name="adminname"
                                type="text">
                            <input placeholder="الوصف" class="input" name="disc" type="text" required>
                            <input placeholder="التاريخ" class="input" name="datatime" type="datetime" required>
                            <input placeholder="مسار الصوره" class="input" name="image" type="file">

                            <button type="submit">add</button>
                            <p class="input__description">اضف القسم الذي تريد</p>
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
    <!-- latest news -->
    <div class="row">
        @foreach ($admin_news as $item)
            <div class="col-lg-3 col-md-6">
                <div class="single-latest-news">
                    <a href="single-news">
                        <div><img src={{ url("$item->image") }}
                                style="min-height: 350px; max-height: 350px; border-radius: 10px">
                        </div>
                    </a>
                    <div class="news-text-box">
                        <h3><a href="single-news">انتقل الي باقي الاخبار</a></h3>
                        <p class="blog-meta">
                            <span class="author"><i class="fas fa-user"></i> {{ $item->adminname }}</span>
                            <span class="date"><i class="fas fa-calendar"></i> {{ $item->datatime }}</span>
                        </p>
                        <p class="excerpt">{{ $item->disc }}</p>
                        <a href="single-news" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <!-- end latest news -->
@endsection
