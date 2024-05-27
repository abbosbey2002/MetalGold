<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
?>

<x-layouts.main>

    <!-- breadcrumb_area start  -->

    <div class="breadcrumb_area">
        <div class="breadcrumb-shapes">
            <img class="shape_01 position-absolute" src="./assets/img/slide/sl-1.png" alt="shape_01">
            <img class="shape_02 position-absolute" src="./assets/img/slide/sl-2.png" alt="shape_02">
            <img class="shape_03 position-absolute" src="./assets/img/slide/sl-3.png" alt="shape_03">
            <img class="shape_04 position-absolute" src="./assets/img/slide/sl-4.png" alt="shape_04">
            <img class="shape_05 position-absolute" src="./assets/img/slide/sl-5.png" alt="shape_05">
            <img class="shape_06 position-absolute" src="./assets/img/slide/sl-6.png" alt="shape_06">
            <img class="shape_07 position-absolute" src="./assets/img/slide/sl-7.png" alt="shape_07">
            <img class="bc-01 position-absolute" src="./assets/img/about/breadcrumb/bread.png" alt="shape_07">
            <img class="shape_10 position-absolute" src="./assets/img/shapes/header_left.png" alt="shape_10">
            <img class="shape_11 position-absolute" src="./assets/img/shapes/header_middle.png" alt="shape_11">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb_content">
                        <h3>Blog</h3>
                        <ul>
                            <li><a href="index.html">{{ __('words.home') }}<i class="far fa-chevron-right"></i></a></li>
                            <li><a href="#">blog</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb_area end  -->

    <!-- blog area start  -->
    <div class="blog_area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <div class="row">
                        @foreach ($blogs as $blog )
                        <div class="col-md-12 col-lg-6">
                            <div class="blog blog-home-page">
                                <div class="blog__thumb">
                                    <img src="/storage/{{$blog->photo}}" alt="">
                                </div>
                                <div class="blog__content">
                                    <div class="blog__content-meta d-flex">
                                        <span><img src="./assets/img/blog/calender.png" alt="">{{ $blog->created_at->format('M d, Y')}}</span>
                                    </div>
                                    <div class="blog__content-info">
                                        <a href="{{ route('single_blog', ['blog'=> $blog->id])}}">
                                            <h4>{{ $blog['description_'.$lang]}}</h4>
                                        </a>
                                        <a href="{{ route('single_blog', ['blog'=> $blog->id])}}" class="readmore_btn"><i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="custom_pagination pt-50 mb-100">
                            {{ $blogs->links()}}
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">

                    <div class="cmn_widget recent_widget">
                        <h4>Recent Posts</h4>
                        @foreach ($lastBlogs as $lBlog)
                        <div class="recent d-flex">
                            <div class="recent__thumb">
                                <img src="{{ asset('storage/' . $lBlog->photo) }}" alt="">
                            </div>
                            <div class="recent__content">
                                <h5>{{ $lBlog->created_at->format('M d, Y')}}</h5>
                                <a href="{{ route('single_blog',['blog'=> $blog->id ])}}">
                                    <h3>{{ $lBlog['title_'.$lang]}}</h3>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="cmn_widget category">
                        <h4>Categories</h4>
                        <ul>
                            @foreach ($categories as $category )
                            <li><a href="{{route('category')}}">{{ $category['name_'.$lang]}}</a><span class="text-end"><i class="far fa-chevron-right"></i></span></li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- blog area end  -->
</x-layouts.main>