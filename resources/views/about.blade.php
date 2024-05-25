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
                        <h3>{{ __('words.about') }}</h3>
                        <ul>
                            <li><a href="/">{{ __('words.home') }}<i class="far fa-chevron-right"></i></a></li>
                            <li><a href="#">{{ __('words.about') }}</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb_area end  -->

    <!-- about us area start  -->
    <div class="about_area custom_animation mb-0">
        <div class="about_shapes">
            <img src="./assets/img/shapes/about.png" class="position-absolute about_o1" alt="aboutShapes">
            <img src="./assets/img/shapes/about2image.png" class="position-absolute about_o2" alt="aboutShapes">
            <img src="./assets/img/shapes/aboutoneimage.png" class="position-absolute about_o3" alt="aboutShapes">
            <img src="./assets/img/about/ss.png" class="position-absolute about_4" alt="aboutShapes">
        </div>
        <div class="custom-width">
            @foreach($abouts as $about)
            <div class="row">
                <div class="col-md-12 col-lg-7">
                    <div class="about_images scroll_01">
                        <div class="about_image_1">
                            <img class="about_shape_one" src="./assets/img/about/about_since.png" alt="about_shape_01">
                            <img class="about_shape_two" src="./assets/img/about/about_shape1.png" alt="about_image_01">
                            <img class="about_shape_three" src="./assets/img/about/about_shape_2.png"
                                 alt="about_image_01">
                        </div>
                        <div class="about_img_2">
                            <img class="about_img_one" src="./assets/img/about/show_sh.png" alt="about_shape_02">
                            <img class="about_img_two" src="{{ asset( 'storage/' . $about->photo ) }}" alt="about_image_02">
                            <p class="rotate">SINCE 1980.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="wrap_about">
                        <div class="section_wrapper aboutwraper">
                            <h4 class="sub_title wow animate__flipInX" data-animation="fadeInUp" data-delay="1s">
                                About us
                            </h4>
                            <h2 class="title wow animate__bounceIn" data-animation="fadeInUp" data-delay="1.5s">
                                {{ $about['title_' . $lang] }}</h2>
                        </div>
                        <div class="about_content">
                            <h3>{{ $about['short_content_' . $lang] }}</h3>
                            <p> {{ $about['content_' . $lang] }}
                            </p>
                            <div class="site_button">
                                <a class="cmn_btn cmn_outline " href="#"><span>Read more</span> <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- about us area end  -->

    <!-- .about_services area start  -->
    <div class="about_services mb-120">
        <div class="container">
            @foreach($category_of_product as $product)
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_wrapper text-center mb-50">
                            <h4 class="title">{!! $product['title_' . $lang] !!}</h4>
                            <p>{!! $product['short_content_' . $lang] !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row">
                @foreach($photos as $index => $photo)
{{--                    @dd($photo)--}}
                    <div class="col-md-4">
                        <div class="shoot_card shoot_about_card_three">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="shoot_icon">
                                        <img src="{{ asset( 'storage/' . $photo->photo ) }}" alt="">
                                        <h5>{{ $photo['name_' . $lang] }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="shoot_count_3">
                                        <h2>{{ ++$index }}+</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-4">
                    <div class="shoot_card shoot_about_card_two">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="shoot_icon shoot_icon_two">
{{--                                    <img src="./assets/img/video/ach-icon2.png" alt="">--}}
                                    <h5>our Experienced
                                        Members</h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="shoot_count_2">
                                    <h2>20+</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shoot_card shoot_about_card_three">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="shoot_icon">
                                    <img src="./assets/img/video/vd-or-1.png" alt="">
                                    <h5>Years Providing
                                        Services</h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="shoot_count_3">
                                    <h2>12+</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .about_services area end  -->

    <!-- team area start  -->
    <div class="team_area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="team_content">
                        <h2 class="title">
                            Meet Our <span class="expert_color">Expert</span> Team <br>
                            Members
                        </h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem <br> cusantium dolore mque
                            laudantium totam rem <br>
                            inventore veritatis et quasi architecto</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        @foreach($teams as $team)
                            <div class="col-md-12 col-lg-12 col-xl-6">
                                <div class="team mb-30">
                                    <div class="team__thumb">
                                        <img src="{{ asset('storage/' . $team->photo) }}" alt="">
                                    </div>
                                    <div class="social_icons">
                                        <ul>
                                            <li><a href="{{ $team->telegram }}"><i class="fab fa-telegram"></i></a></li>
                                            <li><a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{{ $team->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="{{ $team->youtube }}"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="team__content">
                                        <h4><a href="team-details.html">{{ $team->name }}</a></h4>
                                        <p>{{ $team['title_' . $lang] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @foreach($our_teams as $our)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team mb-30">
                            <div class="team__thumb">
                                <img src="{{ asset('storage/' . $our->photo) }}" alt="">
                            </div>
                            <div class="social_icons">
                                <ul>
                                    <li><a href="{{ $our->telegram }}"><i class="fab fa-telegram"></i></a></li>
                                    <li><a href="{{ $our->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $our->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{ $our->youtube }}"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="team__content">
                                <h4><a href="team-details.html">{{ $our->name }}</a></h4>
                                <p>{{ $our['title_' . $lang] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- team area end  -->

    <!-- brand partner area start  -->
    <div class="brand_area mb-110">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_wrapper text-center mb-40">
                        <h4 class="sub_title">clients</h4>
                        <h2 class="title">some of our clients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="brand_img d-flex">
                        @foreach($clients as $client)
                            <div class="brand_items">
                                <img src="{{ asset('storage/' . $client->photo) }}" alt="brand_image">
                            </div>
                        @endforeach
                        <div class="brand_items">
                            <img src="./assets/img/brand/microw.png" alt="brand_image">
                        </div>
                        <div class="brand_items">
                            <img src="./assets/img/brand/tree.png" alt="brand_image">
                        </div>
                        <div class="brand_items">
                            <img src="./assets/img/brand/bakery.png" alt="brand_image">
                        </div>
                        <div class="brand_items">
                            <img src="./assets/img/brand/white.png" alt="brand_image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand partner area end  -->

    <!-- testimonial two area start  -->
    <div class="testimonial_area mb-120 clients_area about_testimonial">
        <div class="preview_shape">
            <img class="preview_shape_01" src="./assets/img/preview/polygon.png" alt="fd">
            <img class="preview_shape_02" src="./assets/img/preview/smallcircle.png" alt="sfd">
            <img class="preview_shape__test" src="./assets/img/preview/patternbefore.png" alt="sered">
            <img class="preview_shape_04" src="./assets/img/preview/midcircle.png" alt="f">
            <img class="preview_shape_05" src="./assets/img/preview/large.png" alt="asd">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_wrapper text-center">
                        <h2 class="title">Explore Clients Review</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial_two_active">
                    @foreach($commits as $commit)
                        <div class="col-md-4">
                            <div class="testimonial_wrapper test_two">
                                <div class="test_two_image">
                                    <img src="./assets/img/home_two_ass/projects/quote.png" class="position-absolute quote"
                                         alt="">
                                    <img src="{{ asset('storage/' . $commit->photo) }}" class="test_image_two" alt="author_info">
                                </div>
                                <div class="testtimonial_content">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo, vel?</p>
                                </div>
                                <div class="rows">
                                    <div class="client_info d-flex align-items-center">
                                        <div class="clientinfo">
                                            <h4>{{ $commit->name }}</h4>
                                            <p>{{ $commit['title_' . $lang] }}</p>
                                        </div>
                                        <div class="client_meta client_star">

                                            <div class="testimonial_star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial two area start  -->



    <!-- subscribe area start  -->
    <!--  <div class="subscribe_area"> -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="subscribe_card about_subscribe">
                    <form action="#" method="post">
                        <input type="email" placeholder="enter your email">
                        <button type="submit" class="subcribe_btn">subscribe now<i
                                class="icon-serviceicon"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe area end  -->


</x-layouts.main>
