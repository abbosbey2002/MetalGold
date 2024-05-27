<?php
$lang = \Illuminate\Support\Facades\App::getLocale();

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
                        <h3>product Details</h3>
                        <ul>
                            <li><a href="index.html">Home<i class="far fa-chevron-right"></i></a></li>
                            <li><a href="#">product details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb_area end  -->
    <!-- service details area start  -->
    <div class="service_details_area pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="details_nav">
                        <div class="tab-content pt-50 service-details-tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
                                        <div class="preview_image preview_two">
                                            <img src="{{ asset('storage/' . $product->photo) }}" alt="jn">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <div class="preview_details_content">
                                            <h2 class="title">{{ $product['name_'.$lang]}} <br>{{ __('words.cost')}}: {{ $product->price}}</h2>
                                            <div class="all_fetautes">
                                                <ul>
                                                    <li><i class="far fa-chevron-right"></i>{{__('words.size')}}: {{ $product->size}}
                                                    </li>
                                                    <li><i class="far fa-chevron-right"></i>{{__('words.theory')}}: {{ $product->theory }}</li>
                                                    <li><i class="far fa-chevron-right"></i>{{__('words.manufacturer')}}: {{ $product->manufacturer}}</li>
                                                    <li><i class="far fa-chevron-right"></i>{{__('words.unit')}}: {{ $product->unit}}</li>
                                                </ul>
                                            </div>
                                            <div class="site_button site_button-two">
                                                <a class="cmn_btn slide_btn slide_btn_01 " href="{{ route('product')}}">{{__('words.back')}}<i class="fas fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service details area end  -->


</x-layouts.main>