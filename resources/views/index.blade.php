<?php
$lang = \Illuminate\Support\Facades\App::getLocale();
$contacts = \App\Models\Contact::latest()->first();

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Metal Gold</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/fav.png">

    <!-- Place favicon.ico in the root directory -->

    <!-- ==========================================
                CSS FILES HERE
    ========================================== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/twentytwenty.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <!-- ==========================================
            PRELOADER AREA START
========================================== -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <svg id="eru4F62a9ch1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 93.619 50.965" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                    <g id="eru4F62a9ch2" transform="matrix(1 0 0 1 18125 818)">
                        <path id="eru4F62a9ch3" d="M537.189,513.309L544.689,532.284L537.189,551.26L549.033,543.56L566.361,532.288L549.033,521.017Z" transform="matrix(1 0 0 1 -18654.2 -1324.8)" opacity="0" fill="rgb(249,136,94)" fill-rule="evenodd" stroke="none" stroke-width="1" />
                        <path id="eru4F62a9ch4" d="M537.189,513.309L540.27613,521.113566L537.189,528.919L542.06218,525.750079L549.189,521.113566L542.06218,516.477921Z" transform="matrix(1 0 0 1 -18621.2 -1313.81)" opacity="0" fill="rgb(249,136,94)" fill-rule="evenodd" stroke="none" stroke-width="1" />
                        <path id="eru4F62a9ch5" d="M537.189,513.309L539.68,519.609L537.189,525.909L541.122,523.351L546.876,519.608L541.122,515.865Z" transform="matrix(1 0 0 1 -18600.2 -1312.13)" opacity="0" fill="rgb(249,136,94)" fill-rule="evenodd" stroke="none" stroke-width="1" />
                        <path id="eru4F62a9ch6" d="M537.189,513.309L538.544,516.737L537.189,520.165L539.329,518.773L542.459,516.737L539.329,514.701Z" transform="matrix(1 0 0 1 -18583.2 -1309.25)" opacity="0" fill="rgb(249,136,94)" fill-rule="evenodd" stroke="none" stroke-width="1" />
                        <path id="eru4F62a9ch7" d="M537.189,513.309L537.863,515.009L537.189,516.709L538.252,516.017L539.808,515.005L538.253,514Z" transform="matrix(1 0 0 1 -18571.2 -1307.53)" opacity="0" fill="rgb(249,136,94)" fill-rule="evenodd" stroke="none" stroke-width="1" />
                        <g id="eru4F62a9ch8" transform="matrix(1 0 0 1 -18125 -818)">
                            <path id="eru4F62a9ch9" d="M553.056,540.127C550.812967,540.129646,548.589518,539.709654,546.502,538.889L539.217,543.626C545.08114,547.413552,552.241664,548.631361,559.028205,546.995342C565.814745,545.359323,571.633825,541.012544,575.128,534.969L568.562,531.177C565.363478,536.716177,559.452329,540.127687,553.056,540.126" transform="matrix(1 0 0 1 -527.574 -496.743)" fill="rgb(19,19,19)" fill-rule="evenodd" stroke="none" stroke-width="1" />
                            <path id="eru4F62a9ch10" d="M553.056,516.726C559.452329,516.724313,565.363478,520.135823,568.562,525.675L575.128,521.883C571.633825,515.839456,565.814745,511.492677,559.028205,509.856658C552.241664,508.220639,545.08114,509.438448,539.217,513.226L546.502,517.963C548.589504,517.1423,550.812963,516.722306,553.056,516.725" transform="matrix(1 0 0 1 -527.574 -509.146)" fill="rgb(19,19,19)" fill-rule="evenodd" stroke="none" stroke-width="1" />
                            <path id="eru4F62a9ch11" d="M537.373,547.141L540.847,538.376L543.696,531.194L540.847,524.012L537.373,515.247C529.899964,524.565086,529.899964,537.822914,537.373,547.141" transform="matrix(1 0 0 1 -531.768 -505.711)" fill="rgb(19,19,19)" fill-rule="evenodd" stroke="none" stroke-width="1" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <!-- ==========================================
            PRELOADER AREA END
========================================== -->
    <main>
        <!-- HEADER AREA START  -->
        <div class="header_area" id="header-sticky">
            <div class="custom-container">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-4 col-xl-2 col-lg-2 col-xxl-3 ">
                            <div class="logo">
                                <a href="/"> <img src="/assets/img/logo/log.png" alt="site_logo"></a>
                            </div>
                        </div>
                        <div class="col-md-8 col-xl-10 col-lg-10 col-xxl-9">
                            <div class="row align-items-center">
                                <div class="col-md-9 col-lg-12 col-xl-9 text-end">
                                    <div class="main_menu">
                                        <nav id="mobile-menu">
                                            <ul>
                                                <li><a href="/">{{__('words.home')}}</a></li>
                                                <li><a href="/about">{{__('words.about')}}</a></li>
                                                <li><a href="/product">{{__('words.product')}}</a></li>
                                                <li><a href="/blog">{{__('words.blog')}}</a></li>
                                                <li><a href="/contact">{{__('words.contact')}}</a></li>
                                                <li><a href="#" id="quote_btn"><span>{{ $contacts->phone_number?? null }}</span> <i class="fas fa-chevron-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- <div class="mobile-menu"></div> -->
                                </div>
                                <div class="col-md-3 d-sm-none d-xl-block">
                                    <div class="menu_essential">
                                        <div class="quote">

                                        </div>
                                        <div class="lan_currencey">
                                            <ul>
                                                <li><a href="#">@if($lang == 'en') Language @endif @if($lang == 'ru') язык @endif @if($lang == 'uz') Til @endif:</a></li>
                                                <li id="showcurrencey"><a href="javascript:void();">
                                                        @if($lang == 'en') En @endif
                                                        @if($lang == 'ru') Руc @endif
                                                        @if($lang == 'uz') Uzb @endif
                                                    </a><i class="far fa-chevron-down"></i>
                                                    <ul class="currencey">
                                                        <li><a class="dropdown-item" href="/uz">Uzb</a></li>
                                                        <li><a class="dropdown-item" href="/ru">Руc</a></li>
                                                        <li><a class="dropdown-item" href="/en">En</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sidebar_icon">
                                            <a href="javascript:void();" class="open_burger"> <img src="./assets/img/slide/menuicon.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADER AREA END   -->

        <div class="sidebar">
            <div class="wrap d-flex">
                <div class="logo mb-30">
                    <img src="./assets/img/slide/whitelogo.png" alt="">
                </div>
                <div class="close_btn_sidebar">
                    <span class="searchClose sidebarClose"> <i class="fal fa-times-circle"></i></span>
                </div>
            </div>
            <div class="paragraph mb-40">
                <p>
                    Sed ut perspiciatis unde omnis iste natus error voluptatem Sed ut perspiciatis unde omnis iste natus
                    error voluptatem. Sed ut perspiciatis, Sed ut perspiciatis unde omnis iste natus error voluptatem
                    Sed ut
                    perspiciatis unde omnis iste natus error voluptatem. Sed ut perspiciatis
                </p>
            </div>
            <h4 class="project_title">Beautiful Projects</h4>

            <div class="show_projects">
                <!-- project area start  -->
                <div class="project_slider text-center">
                    <div class="project_activitionn">
                        <div class="project_items">
                            <img src="./assets/img/home_two_ass/projects/p1.png" alt="">
                        </div>
                        <div class="project_items">
                            <img src="./assets/img/home_two_ass/projects/p3.png" alt="">
                        </div>
                        <div class="project_items">
                            <img src="./assets/img/home_two_ass/projects/p1.png" alt="">
                        </div>
                        <div class="project_items">
                            <img src="./assets/img/home_two_ass/projects/p3.png" alt="">
                        </div>
                        <div class="project_items">
                            <img src="./assets/img/home_two_ass/projects/p1.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- project area end  -->
            </div>
            <div class="contact_us pt-70">
                <h4 class="contact-title mb-20">contact us</h4>
                <ul class="inline_list">
                    <li><img src="./assets/img/slide/mailblue.png" alt=""><a href="mailto:name@email.com">info.cliper@email.com</a></li>
                    <li><img src="./assets/img/slide/phonblue.png" alt=""><a href="tel:+4733378901">+4733378901"</a>
                    </li>
                </ul>
                <div class="social_link pt-20 mb-20">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f icon"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter icon"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram icon"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube icon"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- mobile menu -->
        <!-- mobile menu -->
        <div class="activemobile">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-2">
                        <div class="mobile-logo">
                            <a href="/"><img src="./assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-8 text-end">
                        <div class="icon">
                            <a href="#" class="open-mobile-menu"><i class="far fa-bars"></i></a>
                            <!-- <div class="mobile-menu">
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fix">
            <div class="side-info">
                <button class="side-info-close"><i class="fal fa-times"></i></button>
                <div class="side__logo mb-25">
                    <a href="/">
                        <img src="assets/img/logo/log.png" alt="logo" />
                    </a>
                </div>
                <div class="mobile-menu"></div>
                <div class="contact-infos mt-30 mb-30">
                    <div class="contact-list mb-30">
                        <h4>
                            Contact Info
                        </h4>
                        <ul>
                            <li><i class="fal fa-map"></i>
                                <a href="#">12/A, Mirnada City Tower, NYC</a>
                            </li>

                            <li><i class="fal fa-clock"></i>
                                <a href="#">Mon - Fri: 9.00am - 11.00pm</a>
                            </li>

                            <li><i class="fal fa-phone"></i><a href="tell:+876864764764">
                                    +876 864 764 764
                                </a>
                            </li>

                            <li><i class="far fa-envelope"></i><a href="mailto:info@webmail.com">
                                    info@webmail.com
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
        <div class="offcanvas-overlay"></div>

        <!-- slide area start  -->
        <div class="slide_area">
            <div class="slide_shape">
                <img class="shape_01 position-absolute" src="./assets/img/slide/sl-1.png" alt="shape_01">
                <img class="shape_02 position-absolute" src="./assets/img/slide/sl-2.png" alt="shape_02">
                <img class="shape_03 position-absolute" src="./assets/img/slide/sl-3.png" alt="shape_03">
                <img class="shape_04 position-absolute" src="./assets/img/slide/sl-4.png" alt="shape_04">
                <img class="shape_05 position-absolute" src="./assets/img/slide/sl-5.png" alt="shape_05">
                <img class="shape_06 position-absolute" src="./assets/img/slide/sl-6.png" alt="shape_06">
                <img class="shape_07 position-absolute" src="./assets/img/slide/sl-7.png" alt="shape_07">
                <img class="shape_09 position-absolute" src="./assets/img/slide/face.png" alt="shape_07">
                <img class="shape_10 position-absolute" src="./assets/img/shapes/header_left.png" alt="shape_10">
                <img class="shape_11 position-absolute" src="./assets/img/shapes/header_middle.png" alt="shape_11">
                <img class="shape_12 position-absolute" src="./assets/img/shapes/slider_under.png" alt="shape_11">
                <img class="shape_13 position-absolute" src="./assets/img/shapes/slider_right.png" alt="shape_11">
            </div>
            <div class="custom-width">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="slide_img beforelsiee xlnone d-xl-none">
                            @foreach($homes as $home)
                            <img src="{{ asset('storage/' . $home->first_photo) }}" class="img-1" alt="slide_shape_01">
                            <img src="{{ asset('storage/' . $home->second_photo) }}" class="img-2 position-absolute" alt="slide_shape_02">
                            <img src="{{ asset('storage/' . $home->third_photo) }}" class="img-3 position-absolute" alt="slide_shape_03">
                            <img src="{{ asset('storage/' . $home->fourth_photo) }}" class="img-4 position-absolute" alt="slide_shape_04">
                            <img src="{{ asset('storage/' . $home->fifth_photo) }}" class="img-5 position-absolute" alt="slide_image">
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 col-xl-6">
                        <div class="slide_content">
                            <h4 class="animated wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="2s">{{__('words.metal')}}
                                <span>{{__('words.company')}}</span>
                            </h4>
                            @foreach($homes as $home)
                            <h2 class="wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="2.5s">{{ $home['title_' . $lang] }}</h2>
                            <p class="wow animate__fadeIn" data-animation="fadeInUp" data-delay="3s" data-wow-duration="3s">
                                {{ $home['short_content_' . $lang] }}
                            </p>
                            @endforeach
                            <div class="site_button site_button-two">
                                <a class="cmn_btn slide_btn slide_btn_01 " href="{{ route('product')}}">{{__('words.product')}}<i class="fas fa-chevron-right"></i></a>
                                <a class="cmn_btn cmn_outline " href="{{ route('category')}}"><span>{{__('words.category')}}</span><i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-5 offset-xl-1 text-end">
                        <div class="slide_img beforelsiee DisplayNone">
                            <span class="circle-shape-design"></span>
                            @foreach($homes as $home)
                            <img src="{{ asset('storage/' . $home->first_photo) }}" class="img-1" alt="slide_shape_01">
                            <img src="{{ asset('storage/' . $home->second_photo) }}" class="img-2 position-absolute" alt="slide_shape_02">
                            <img src="{{ asset('storage/' . $home->third_photo) }}" class="img-3 position-absolute" alt="slide_shape_03">
                            <img src="{{ asset('storage/' . $home->fourth_photo) }}" class="img-4 position-absolute" alt="slide_shape_04">
                            <img src="{{ asset('storage/' . $home->fifth_photo) }}" class="img-5 position-absolute" alt="slide_image">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide area end  -->

        <!-- about us area start  -->
        <div class="about_area custom_animation mb-0">
            <div class="about_shapes">
                <img src="/assets/img/shapes/about.png" class="position-absolute about_o1" alt="aboutShapes">
                <img src="/assets/img/shapes/about2image.png" class="position-absolute about_o2" alt="aboutShapes">
                <img src="/assets/img/shapes/aboutoneimage.png" class="position-absolute about_o3" alt="aboutShapes">
                <img src="/assets/img/about/ss.png" class="position-absolute about_4" alt="aboutShapes">
            </div>
            <div class="custom-width">
                @foreach($abouts as $about)
                <div class="row">
                    <div class="col-md-12 col-lg-7">
                        <div class="about_images scroll_01">
                            <div class="about_image_1">
                                <img class="about_shape_one" src="/assets/img/about/about_since.png" alt="about_shape_01">
                                <img class="about_shape_two" src="/assets/img/about/about_shape1.png" alt="about_image_01">
                                <img class="about_shape_three" src="/assets/img/about/about_shape_2.png" alt="about_image_01">
                            </div>
                            <div class="about_img_2">
                                <img class="about_img_one" src="/assets/img/about/show_sh.png" alt="about_shape_02">
                                <img class="about_img_two" src="{{ asset( 'storage/' . $about->photo ) }}" alt="about_image_02">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div class="wrap_about">
                            <div class="section_wrapper aboutwraper">
                                <h4 class="sub_title wow animate__flipInX" data-animation="fadeInUp" data-delay="1s">
                                    {{__('words.about')}}
                                </h4>
                                <h2 class="title wow animate__bounceIn" data-animation="fadeInUp" data-delay="1.5s">
                                    {{ $about['title_' . $lang] }}
                                </h2>
                            </div>
                            <div class="about_content">
                                <h3>{{ $about['short_content_' . $lang] }}</h3>
                                <p> {{ $about['content_' . $lang] }}
                                </p>
                                <div class="site_button">
                                    <a class="cmn_btn cmn_outline " href="{{ route('about')}}"><span>{{__('words.read')}}</span> <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- about us area end  -->

        <!-- .services area start  -->
        <div class="service_area custom_animation mb-120 mobile-res-mb">
            <div class="service_shapes">
                <img src="./assets/img/shapes/service_right.png" class="position-absolute service_01" alt="service_shapes">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_wrapper service_wraper mb-40">
                            <h4 class="sub_title wow animate__flipInXx" data-animation="fadeInUp" data-delay="1s">{{ __('words.our')}}
                                {{__('words.product')}}
                            </h4>
                            <h2 class="title wow animate__bounceInn" data-animation="fadeInUp" data-delay="1.5s">{{__('words.product')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="service_activition">
                            @foreach ($photos as $product)
                            <div class="service_card">
                                <div class="service_img text-center">
                                    <img src="{{ asset('storage/' . $product->photo) }}" alt="service_img">
                                </div>
                                <div class="service_content text-center">
                                    <h3 class="service_title">{{ $product['name_'.$lang]}}</h3>
                                    <p class="light_color">{{ $product['title_uz'.$lang]}}</p>
                                </div>
                                <a class="radius_btn effectPlus" href="{{ route('products', ['product'=> $product->id]) }}">
                                    <i class="icon-serviceicon"></i>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .services area end  -->

        <!-- idea area start  -->
        <div class="idea_area mb-120 mobile-res-mb">
            <div class="container">
                <div class="bg_idea">
                    <img class="idea_area_01" src="./assets/img/preview/idea2.png" alt="">
                    <img class="idea_area_02" src="./assets/img/preview/idea3.png" alt="">
                    <img class="idea_area_03" src="./assets/img/preview/idea4.png" alt="">
                    <img class="idea_area_04" src="./assets/img/preview/idea5.png" alt="">
                    <img class="idea_area_05" src="./assets/img/preview/idea_1.png" alt="">
                    <img class="position-absolute idea_area_06" src="./assets/img/shapes/calltoAction.png" alt="">
                    <div class="row">
                        <div class="d-none d-lg-block col-lg-6">
                            <div class="idea_title">
                                <h2 class="idea_heading">{{ $contacts['title_' . $lang] ??null }}</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="dial d-flex">
                                <a href="tel:+88888" class="dial_call">
                                    <h2 class="text-white bold"> <span class="bgwhite">
                                            <i class="fal fa-phone"></i>
                                        </span>{{ $contacts->phone_number?? null }}
                                    </h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- idea area end  -->

        <!-- shoot area start  -->
        <div class="shoot_area mb-120 mobile-res-mb">
            <div class="shoot_shapes">
                <img class="shoot_shapes_04" src="./assets/img/video/vd1.png" alt="">
                <img class="shoot_shapes_05" src="./assets/img/video/vd2.png" alt="">
                <img class="shoot_shapes_06" src="./assets/img/video/largpoly.png" alt="">
                <img class="shoot_shapes_07" src="./assets/img/video/vdshape.png" alt="">
            </div>
            <div class="container">
                <div class="row custom-center">
                    <div class="col-xl-8">
                        <div class="shoot_box">
                            <div class="vd-grid">
                                <iframe width="695" height="391" src="https://www.youtube.com/embed/td06TollW2Q" title="Золото - САМЫЙ СТОЙКИЙ МЕТАЛЛ НА ЗЕМЛЕ!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        @foreach($actives as $active)
                        <div class="shoot_card before_shoot_01 wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="1s">
                            <div class="shoot_icon">
                                <img src="./assets/img/video/vd-or-2.png" alt="">
                                <h5>OUR TRUSTED <br> ACTIVE CLIENTS</h5>
                            </div>
                            <div class="shoot_count_1">
                                <h2>{{ $active->active_client }}+</h2>
                            </div>
                        </div>
                        <div class="shoot_card before_shoot_02 wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="2s">
                            <div class="shoot_icon">
                                <img src="./assets/img/video/ach-icon2.png" alt="">
                                <h5>our Experienced <br>
                                    Members</h5>
                            </div>
                            <div class="shoot_count_2">
                                <h2>{{ $active->experienced }}+</h2>
                            </div>
                        </div>
                        <div class="shoot_card before_shoot_03 wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="3s">
                            <div class="shoot_icon">
                                <img src="./assets/img/video/vd-or-1.png" alt="">
                                <h5>Years Providing <br>
                                    Services</h5>
                            </div>
                            <div class="shoot_count_3">
                                <h2>{{ $active->years_services }}+</h2>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- shoot area end  -->

        <!-- faq area start  -->
        <div class="faq_area mb-120 mobile-res-mb">
            <img class="faq_doted position-absolute" src="./assets/img/shapes/dottted.png" alt="">
            <img class="faq_doted_two position-absolute" src="./assets/img/shapes/dottted.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_wrapper faq-section text-center mb-40">
                            <h4 class="sub_title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="3s">Have any question</h4>
                            <h2 class="title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="3s">Frequently Asked Questions</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-8 offset-lg-2">
                        <div class="faq-wrapper">
                            <div class="faq-item active open">
                                <h3 class="faq-title"><span class="title-faq"><span>01 <span class="dot">.</span></span>
                                        What is ThemeI'M Market?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Download thousands of free & premium WordPress Theme, HTML , bootstrap
                                        template, flutter app, & graphic assets for your UI, UX design project
                                        Browse All Resources</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title-faq"><span>02 <span class="dot">.</span></span>
                                        How often team upload resources?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Download thousands of free & premium WordPress Theme, HTML , bootstrap
                                        template, flutter app, & graphic assets for your UI, UX design project
                                        Browse All Resources</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title-faq"><span>03 <span class="dot">.</span></span>
                                        Can I if I cancel my subscription?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Download thousands of free & premium WordPress Theme, HTML , bootstrap
                                        template, flutter app, & graphic assets for your UI, UX design project
                                        Browse All Resources</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title-faq"><span>04 <span class="dot">.</span></span>
                                        Can I use ThemeI'M designs in my portfolio?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Download thousands of free & premium WordPress Theme, HTML , bootstrap
                                        template, flutter app, & graphic assets for your UI, UX design project
                                        Browse All Resources</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title-faq"><span>05 <span class="dot">.</span></span>
                                        Can I buy ThemeI'M Market license?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Download thousands of free & premium WordPress Theme, HTML , bootstrap
                                        template, flutter app, & graphic assets for your UI, UX design project
                                        Browse All Resources</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq area end  -->

        <!-- clients area start  -->
        <div class="clients_area mb-120 mobile-res-mb">
            <div class="clients_shapes">
                <img src="./assets/img/testimonial/test_01.png" class="clients_01 position-absolute" alt="">
                <img src="./assets/img/testimonial/test_02.png" class="clients_02 position-absolute" alt="">
                <img src="./assets/img/testimonial/test_03.png" class="clients_03 position-absolute" alt="">
                <img src="./assets/img/testimonial/test_04.png" class="clients_04 position-absolute" alt="">
                <img src="./assets/img/testimonial/test_05.png" class="clients_05 position-absolute" alt="">
                <img src="./assets/img/testimonial/test_06.png" class="clients_06 position-absolute" alt="">
                <img src="./assets/img/testimonial/test_07.png" class="clients_07 position-absolute" alt="">
                <img src="./assets/img/testimonial/test_08.png" class="clients_08 position-absolute" alt="">
                <img src="./assets/img/testimonial/test-bottom-right.png" class="clients_09 position-absolute" alt="">
                <img src="./assets/img/testimonial/bottom-left-one.png" class="clients_10 position-absolute" alt="">
                <img src="./assets/img/testimonial/bottom-right-one.png" class="clients_11 position-absolute" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_wrapper text-center mb-10">
                            <h4 class="sub_title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="3s">{{__('words.clients')}} {{__('words.feedback')}}</h4>
                            <h2 class="title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="2.5s">{{__('words.clients')}} {{__('words.feedback')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="testimonial-active dot-style">


                        @foreach ($commits as $commit)

                        <div class="col-md-4">
                            <div class="testimonial_wrapper wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="3s">
                                <div class="testtimonial_content">
                                    <div class="testimonial_star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4>awesome work</h4>
                                    <p>{{ $commit['title_'.$lang]}}</p>
                                </div>
                                <div class="rows">
                                    <div class="client_info client_info-one d-flex">
                                        <div class="client_img">
                                            <img src="{{ asset('storage/' . $commit->photo) }}" style="width:58px; height:58px" alt="author_info">
                                        </div>
                                        <div class="client_meta">
                                            <h4>{{$commit->name}}</h4>
                                            <p>company of client</p>
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
        <!-- clients area end  -->
        <!-- pricing area start  -->
        <div class="pricing_area mb-120 mobile-res-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_wrapper section_wrapper_mobile text-center mb-60">
                            <h4 class="sub_title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="3s">{{__('words.our')}} {{__('words.product')}}</h4>
                            <h2 class="title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="3s">{{__('words.popular')}} {{__('words.product')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    @foreach($popular_products as $popular)
                    <div class="col-md-12">
                        <div class="single_price d-flex wow animate__fadeIn" data-animation="fadeInUp" data-delay="3s" data-wow-duration="3s">
                            <div class="price_img">
                                <img src="{{ asset('storage/' . $popular->photo) }}" alt="">

                            </div>
                            <div class="price_content">
                                <h4>{{ $popular['title_' . $lang] }}</h4>
                                <p>{{ $popular['short_content_' . $lang] }}</p>
                            </div>
                            <div class="choose_plan">
                                <a class="cmn_btn  increase_width   cmn_outline  effect" href="{{route('product')}}"><span>{{__('words.choose')}}</span><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- pricing area end  -->

        <!-- brand partner area start  -->
        <div class="brand_area mb-110 mobile-res-mb">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_wrapper text-center mb-40">
                            <h4 class="sub_title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="3s">{{__('words.clients')}}</h4>
                            <h2 class="title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="3s">{{__('words.our')}} {{__('words.clients')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="brand_img d-flex">
                            @foreach($clients as $client)
                            <div class="brand_items">
                                <img src="/storage/{{$client->photo}}" style="width:140; height:140px" alt="brand_image">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand partner area end  -->



        <!-- footer area start  -->
        <div class="footer_area pt-120 pb-50">
            <div class="footer_shape">
                <img src="./assets/img/footer/footerPattern.png" class="f-shape_one" alt="">
                <img src="./assets/img/footer/polygonFooter.png" class="f-shape_two" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6 col-xl-5 col-sm-7 ">
                        <div class="footer_widget">
                            <h4>{{ __('about')}}</h4>
                            <p>{{ __('words.expMember') }}</p>
                            <div class="social_contact">
                                <a href="{{ $contacts->email }}"><svg width="20.87" height="15">
                                        <g id="Mail_2" data-name="Mail 2" transform="translate(-163.667 -153.91)">
                                            <path id="dfdf" data-name="Path 22" d="M181.928,153.91H166.276a2.611,2.611,0,0,0-2.609,2.609V166.3a2.611,2.611,0,0,0,2.609,2.609h15.652a2.612,2.612,0,0,0,2.609-2.609v-9.783A2.612,2.612,0,0,0,181.928,153.91Zm1.3,12.391a1.306,1.306,0,0,1-1.3,1.3H166.276a1.306,1.306,0,0,1-1.3-1.3v-9.783a1.306,1.306,0,0,1,1.3-1.3h15.652a1.306,1.306,0,0,1,1.3,1.3Z" fill="#438ff9" />
                                            <path id="dfdeyyf" data-name="Path 23" d="M183.172,159.149a.653.653,0,0,0-.918-.092l-6.76,5.532-6.761-5.532a.652.652,0,0,0-.826,1.01l7.174,5.87a.653.653,0,0,0,.826,0l7.174-5.87A.653.653,0,0,0,183.172,159.149Z" transform="translate(-1.391 -1.739)" fill="#438ff9" />
                                            <path id="sdfs" data-name="Path 24" d="M186.78,167.1a.652.652,0,1,0-.922.922l2.609,2.609a.652.652,0,0,0,.922-.922Z" transform="translate(-7.652 -4.522)" fill="#438ff9" />
                                            <path id="Path_25" data-name="Path 25" d="M170.467,167.1l-2.609,2.609a.652.652,0,1,0,.922.922l2.609-2.609a.652.652,0,1,0-.922-.922Z" transform="translate(-1.391 -4.522)" fill="#438ff9" />
                                        </g>
                                    </svg>
                                    {{ $contacts->email }}</a>
                                <a href="tel:{{ $contacts->phone_number }}"><svg width="17.224" height="17.224" viewBox="0 0 17.224 17.224">
                                        <g id="dfde" transform="translate(-255.083 -150.41)">
                                            <path id="dfd" data-name="Path 26" d="M279.005,158.071a14.427,14.427,0,0,0-7.655-7.618.551.551,0,0,0-.726.316.581.581,0,0,0,.307.749,13.3,13.3,0,0,1,7.058,7.024.557.557,0,0,0,.508.339.537.537,0,0,0,.228-.051A.582.582,0,0,0,279.005,158.071Z" transform="translate(-6.747 0)" fill="#438ff9" />
                                            <path id="dfdplgw" data-name="Path 27" d="M270.42,156.979a8.059,8.059,0,0,1,4.281,4.251.538.538,0,0,0,.492.328.52.52,0,0,0,.22-.049.561.561,0,0,0,.271-.733,9.149,9.149,0,0,0-4.858-4.825.534.534,0,0,0-.7.306A.561.561,0,0,0,270.42,156.979Z" transform="translate(-6.529 -2.394)" fill="#438ff9" />
                                            <path id="fpokmd" data-name="Path 28" d="M269.332,161.508a1.314,1.314,0,0,0-1.985,0c-.464.46-.928.921-1.385,1.389a.315.315,0,0,1-.222.119.324.324,0,0,1-.159-.049c-.3-.164-.621-.3-.909-.476a14.4,14.4,0,0,1-3.471-3.159,8.242,8.242,0,0,1-1.244-1.993.286.286,0,0,1,.07-.367c.464-.448.917-.909,1.373-1.369a1.318,1.318,0,0,0,0-2.032c-.363-.367-.726-.725-1.088-1.092s-.745-.753-1.123-1.124a1.322,1.322,0,0,0-1.985,0c-.468.46-.917.932-1.393,1.384a2.262,2.262,0,0,0-.71,1.525,6.455,6.455,0,0,0,.5,2.781,16.893,16.893,0,0,0,3,5,18.558,18.558,0,0,0,6.147,4.809,8.889,8.889,0,0,0,3.4.991c.074,0,.147.006.219.006a2.433,2.433,0,0,0,1.923-.821c.4-.445.846-.85,1.267-1.275a1.327,1.327,0,0,0,.008-2.021Q270.451,162.618,269.332,161.508Zm1.421,3.452c-.139.14-.281.278-.424.416-.293.285-.6.579-.884.9a1.314,1.314,0,0,1-1.08.444c-.051,0-.1,0-.157,0a7.671,7.671,0,0,1-2.972-.879,17.514,17.514,0,0,1-5.776-4.52,15.7,15.7,0,0,1-2.806-4.666,5.308,5.308,0,0,1-.431-2.295,1.141,1.141,0,0,1,.362-.8c.294-.279.578-.565.862-.852.18-.182.361-.365.546-.547a.223.223,0,0,1,.4,0c.249.244.494.491.739.738l.372.373c.185.187.369.372.554.556s.356.356.536.538c.208.209.2.246,0,.44l-.19.192c-.387.39-.771.779-1.179,1.174a1.407,1.407,0,0,0-.313,1.6,9.214,9.214,0,0,0,1.41,2.269,15.454,15.454,0,0,0,3.75,3.4c.222.138.447.248.644.346.108.053.215.105.3.154a1.442,1.442,0,0,0,.716.2,1.414,1.414,0,0,0,1.031-.46c.446-.457.9-.908,1.372-1.376a.217.217,0,0,1,.392,0q1.116,1.11,2.226,2.222C270.933,164.7,270.951,164.76,270.753,164.961Z" transform="translate(0 -0.218)" fill="#438ff9" />
                                        </g>
                                    </svg>
                                    {{ $contacts->phone_number }}</a>
                            </div>
                            @foreach($links as $link)
                            <div class="social_link pt-25">
                                <ul>
                                    <li><a href="{{ $link->telegram }}"><i class="fab fa-telegram icon"></i></a></li>
                                    <li><a href="{{ $link->facebook }}"><i class="fab fa-facebook-f icon"></i></a></li>
                                    <li><a href="{{ $link->twitter }}"><i class="fab fa-twitter icon"></i></a></li>
                                    <li><a href="{{ $link->instagram }}"><i class="fab fa-instagram icon"></i></a></li>
                                    <li><a href="{{ $link->youtube }}"><i class="fab fa-youtube icon"></i></a></li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-2 col-sm-5  fixed_width">
                        <div class="widget_two">
                            <h4>{{__('words.usefull')}} {{__('words.links')}}</h4>
                            <ul>
                                <li><a href="/"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                            <path id="dfdfd" data-name="dfdfd" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                        </svg>
                                        {{__('words.home')}}</a></li>
                                <li><a href="/about"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                            <path id="dfdfa" data-name="ojkj" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                        </svg>
                                        {{__('words.about')}}</a></li>
                                <li><a href="{{ route('product')}}"><svg width="7.514" height="11.563">
                                            <path id="poek" data-name="dfdsr" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                        </svg>
                                        {{ __('words.product') }}</a></li>
                                <li><a href="/blog"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                            <path id="pkks" data-name="dfkkij" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                        </svg>
                                        {{__('words.blog')}}</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-3 justify-content-end">
                        <h4>{{__('words.contact')}}</h4>
                        <div class="input-group mt-4 align-items-center">
                            <input type="text" id="last_name" class="form-control" required placeholder="Name">
                        </div>
                        <div class="input-group mt-3 align-items-center">
                            <input type="text" id="phone_number_footer" required class="form-control" placeholder="+998" value="+998">
                        </div>
                        <div class="input-group mt-3">
                            <button type="submit" onclick="sendphone()" class="btn btn-primary form-control">Yuborish</button>
                        </div>
                    </div>

                    <script>
                        function sendphone() {
                            const phone_number_footer = document.getElementById('phone_number_footer').value;
                            const last_name = document.getElementById('last_name').value;

                            if (!last_name || !phone_number_footer) {
                                alert('Iltimos, barcha maydonlarni to\'ldiring.');
                                return;
                            }

                            const message = `A contact form submission has been received:\n\nName: ${last_name}\nPhone Number: ${phone_number_footer}`;
                            const telegramBotToken = '7217681658:AAGzxilWkKBQqgxsA9Nte_T3viv4I7c2TkY'; // Bu yerga o'zingizning bot tokeningizni qo'ying
                            const telegramChatId = '6583641407'; // Bu yerga o'zingizning chat ID ni qo'ying

                            const url = `https://api.telegram.org/bot${telegramBotToken}/sendMessage`;
                            const data = {
                                chat_id: telegramChatId,
                                text: message
                            };

                            fetch(url, {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json'
                                    },
                                    body: JSON.stringify(data)
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.ok) {
                                        alert('Xabar yuborildi!');
                                        document.getElementById('last_name').value = '';
                                        document.getElementById('phone_number_footer').value = '';
                                    } else {
                                        alert('Xatolik yuz berdi. Iltimos, qaytadan urinib ko\'ring.');
                                    }
                                })
                                .catch(error => {
                                    console.error('Xatolik:', error);
                                    alert('Xatolik yuz berdi. Iltimos, qaytadan urinib ko\'ring.');
                                });
                        }
                    </script>
                </div>
            </div>
        </div>
        <!-- footer area end  -->

        <!-- copyright section  -->
        <div class="copyright_area">
            <div class="container">
                <div class="row top-border align-items-center">
                    <div class="col-md-4 col-lg-2 col-xl-4  col-sm-6">
                        <div class="logo">
                            <a href="/"><img src="./assets/img/logo/logo2.png" alt="site_logo"></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8 col-xl-4 col-sm-6 text-center">
                        <div class="copyright_text">
                            <p>&copy; 2024 Megagold.uz by <a href="https://dora.uz"><span>Dora Dev.</span></a>. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4 text-end d-none d-xl-block">
                        <div class="copyright_menu">
                            <ul>
                                <li><a href="#">+998 (93) 512 5324</a></li>
                                <li><a href="#">+998 (93) 513 5324</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- ==========================================
                javascript FILES HERE
    ========================================== -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/vendor/jquery-v-3.6.0.0.min.js"></script>
    <script src="assets/js/bootstrap4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.event.move.js"></script>
    <script src="assets/js/scriptfour.js"></script>
    <script src="assets/js/scriptSix.js"></script>
    <script src="assets/js/scriptseven.js"></script>
    <script src="assets/js/jquery.twentytwenty.js"></script>
    <script src="assets/js/jquery.lazy.min.js"></script>
    <script src="assets/js/scroll.js"></script>
    <script src="assets/js/multiple-image-video(MIV).js"></script>
    <script src="assets/js/preloader.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>