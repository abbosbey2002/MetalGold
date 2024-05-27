<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
?>

<x-layouts.main>
    <!-- breadcrumb_area start  -->
    <div class="breadcrumb_area">
        <div class="breadcrumb-shapes">
            <img class="shape_01 position-absolute" src="/assets/img/slide/sl-1.png" alt="shape_01">
            <img class="shape_02 position-absolute" src="/assets/img/slide/sl-2.png" alt="shape_02">
            <img class="shape_03 position-absolute" src="/assets/img/slide/sl-3.png" alt="shape_03">
            <img class="shape_04 position-absolute" src="/assets/img/slide/sl-4.png" alt="shape_04">
            <img class="shape_05 position-absolute" src="/assets/img/slide/sl-5.png" alt="shape_05">
            <img class="shape_06 position-absolute" src="/assets/img/slide/sl-6.png" alt="shape_06">
            <img class="shape_07 position-absolute" src="/assets/img/slide/sl-7.png" alt="shape_07">
            <img class="bc-01 position-absolute" src="/assets/img/about/breadcrumb/bread.png" alt="shape_07">
            <img class="shape_10 position-absolute" src="/assets/img/shapes/header_left.png" alt="shape_10">
            <img class="shape_11 position-absolute" src="/assets/img/shapes/header_middle.png" alt="shape_11">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb_content">
                        <h3>Single Blog</h3>
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

    <!-- classic blog area start  -->
    <div class="classic_area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog_details_activition">
                        <div class="col-md-12">
                            <div class="classic">
                                <div class="classic__thumb">
                                    <img src="{{ asset('storage/' . $blog->photo) }}" alt="">
                                </div>
                                <div class="classic__content">
                                    <div class="classic__content-meta d-flex removemargin">
                                        <ul>
                                            <li class="metasingle">MARKETING</li>
                                        </ul>
                                    </div>
                                    <h3 class="classic_title">{{$blog['title_'.$lang]}}
                                    </h3>
                                    <p class="mb-20">{{ $blog['content_'.$lang]}}</p>

                                    <div class="pt-15">
                                        <p>{{ $blog['description_'.$lang]}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="comment_form mb-120">
                        <h3 class="title_comments">Leave A Comments</h3>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="wrap-form">
                                        <input type="text" placeholder="your name *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="wrap-form">
                                        <input type="text" placeholder="your email *">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="wrap-form">
                                        <textarea cols="74" rows="8" placeholder="write message *"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <a href="#" class="cmn_btn rd-remove">Post Comment <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </form>
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
                                <a href="{{ route('single_blog', ['blog'=> $lBlog->id])}}">
                                    <h3>{{ $lBlog['title_'.$lang]}}</h3>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="cmn_widget category">
                        <h4>Categories</h4>
                        <ul>

                            @foreach ($categories as $category)
                            <li><a href="{{ route('category')}}">{{ $category['name_'.$lang]}}</a><span class="text-end"><i class="far fa-chevron-right"></i></span></li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- classic blog area end  -->

</x-layouts.main>