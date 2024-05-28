<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
?>

<x-layouts.main>
<!-- mobile menu -->
<div class="activemobile">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-2">
                <div class="mobile-logo">
                    <a href="index.html"><img src="./assets/img/logo/logo.png" alt=""></a>
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
            <a href="index.html">
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
                    <h3>contact us</h3>
                    <ul>
                        <li><a href="index.html">Home<i class="far fa-chevron-right"></i></a></li>
                        <li><a href="#">contact</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb_area end  -->

<!-- contact area start  -->
<div class="contact_area pt-110 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-6">
                <div class="contact_content">
                    <h2 class="title">Have a project in mind? <br>
                        <span class="underline">Let’s talk.</span>
                    </h2>
                    <p>Lorem ipsum dolor sit amet consec tetur adipisicing sed do eiusmod tempor incid idunt labore
                        dolore magna aliqua enim ad minim veniam. quis nostrud exercitation ullamco laboris.</p>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="officeAddress">
                            <h3 class="mb-20 officeAddress__title">USA office</h3>
                            <ul>
                                <li> <img src="./assets/img/contact/location.png" alt="">Cecilia
                                    Chapman. </li>
                                <li><img src="./assets/img/contact/mail.png" alt="">info.cliper@email.com</li>
                                <li><img src="./assets/img/contact/Phone.png" alt="">+1 225
                                    365 03
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="officeAddress">
                            <h3 class="mb-20 officeAddress__title">UK office</h3>
                            <ul>
                                <li> <img src="./assets/img/contact/location.png" alt="">Cecilia
                                    Chapman </li>
                                <li><img src="./assets/img/contact/mail.png" alt="">info.cliper@email.com</li>
                                <li><img src="./assets/img/contact/Phone.png" alt="">+1 225
                                    365 03
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end  -->

<!-- map  -->
<div class="google-map contact-map mb-100">
    <iframe class="w-100" height="530"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.91477055202!2d-74.11976321327155!3d40.69740344214894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1612427122501!5m2!1sen!2sbd">
    </iframe>

    <div class="map_overlay_text quotMain__body">
        <div class="container">
            <div class="contact_bg">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="wrap-form">
                                        <img src="./assets/img/service/user.png" class="user" alt="">
                                        <input type="text" placeholder="your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="wrap-form">
                                        <img src="./assets/img/service/dial.png" class="contact-dial" alt="">
                                        <input type="text" placeholder="+10">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="wrap-form">
                                        <img src="/assets/img/service/email.png" class="email" alt="">
                                        <input type="text" placeholder="your email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <textarea rows="8" placeholder="write here..."></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="cmn_btn contact-btn mt-30">send message<i
                                            class="far fa-long-arrow-right"></i></button>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 d-none d-lg-block">
                        <div class="contact_imge">
                            <img src="/assets/img/contact/contactImage.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- map end  -->



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
                    <h4>About us</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error voluptatem <br> Sed ut perspiciatis
                        unde
                        omnis
                        iste natus error <br> voluptatem. Sed ut perspiciatis</p>
                    <div class="social_contact">
                        <a href="mailto:name@email.com"><svg width="20.87" height="15">
                                <g id="Mail_2" data-name="Mail 2" transform="translate(-163.667 -153.91)">
                                    <path id="oiiuyhnhe" data-name="oiuh"
                                          d="M181.928,153.91H166.276a2.611,2.611,0,0,0-2.609,2.609V166.3a2.611,2.611,0,0,0,2.609,2.609h15.652a2.612,2.612,0,0,0,2.609-2.609v-9.783A2.612,2.612,0,0,0,181.928,153.91Zm1.3,12.391a1.306,1.306,0,0,1-1.3,1.3H166.276a1.306,1.306,0,0,1-1.3-1.3v-9.783a1.306,1.306,0,0,1,1.3-1.3h15.652a1.306,1.306,0,0,1,1.3,1.3Z"
                                          fill="#438ff9" />
                                    <path id="sda" data-name="Pdf"
                                          d="M183.172,159.149a.653.653,0,0,0-.918-.092l-6.76,5.532-6.761-5.532a.652.652,0,0,0-.826,1.01l7.174,5.87a.653.653,0,0,0,.826,0l7.174-5.87A.653.653,0,0,0,183.172,159.149Z"
                                          transform="translate(-1.391 -1.739)" fill="#438ff9" />
                                    <path id="Path_24" data-name="Path 24"
                                          d="M186.78,167.1a.652.652,0,1,0-.922.922l2.609,2.609a.652.652,0,0,0,.922-.922Z"
                                          transform="translate(-7.652 -4.522)" fill="#438ff9" />
                                    <path id="Path_25" data-name="Path 25"
                                          d="M170.467,167.1l-2.609,2.609a.652.652,0,1,0,.922.922l2.609-2.609a.652.652,0,1,0-.922-.922Z"
                                          transform="translate(-1.391 -4.522)" fill="#438ff9" />
                                </g>
                            </svg>
                            info.cliper@email.com</a>
                        <a href="tel:+4733378901"><svg width="17.224" height="17.224" viewBox="0 0 17.224 17.224">
                                <g id="dfde" transform="translate(-255.083 -150.41)">
                                    <path id="df875d" data-name="Path987"
                                          d="M279.005,158.071a14.427,14.427,0,0,0-7.655-7.618.551.551,0,0,0-.726.316.581.581,0,0,0,.307.749,13.3,13.3,0,0,1,7.058,7.024.557.557,0,0,0,.508.339.537.537,0,0,0,.228-.051A.582.582,0,0,0,279.005,158.071Z"
                                          transform="translate(-6.747 0)" fill="#438ff9" />
                                    <path id="a0125145" data-name="i8578"
                                          d="M270.42,156.979a8.059,8.059,0,0,1,4.281,4.251.538.538,0,0,0,.492.328.52.52,0,0,0,.22-.049.561.561,0,0,0,.271-.733,9.149,9.149,0,0,0-4.858-4.825.534.534,0,0,0-.7.306A.561.561,0,0,0,270.42,156.979Z"
                                          transform="translate(-6.529 -2.394)" fill="#438ff9" />
                                    <path id="fd" data-name="Path 28"
                                          d="M269.332,161.508a1.314,1.314,0,0,0-1.985,0c-.464.46-.928.921-1.385,1.389a.315.315,0,0,1-.222.119.324.324,0,0,1-.159-.049c-.3-.164-.621-.3-.909-.476a14.4,14.4,0,0,1-3.471-3.159,8.242,8.242,0,0,1-1.244-1.993.286.286,0,0,1,.07-.367c.464-.448.917-.909,1.373-1.369a1.318,1.318,0,0,0,0-2.032c-.363-.367-.726-.725-1.088-1.092s-.745-.753-1.123-1.124a1.322,1.322,0,0,0-1.985,0c-.468.46-.917.932-1.393,1.384a2.262,2.262,0,0,0-.71,1.525,6.455,6.455,0,0,0,.5,2.781,16.893,16.893,0,0,0,3,5,18.558,18.558,0,0,0,6.147,4.809,8.889,8.889,0,0,0,3.4.991c.074,0,.147.006.219.006a2.433,2.433,0,0,0,1.923-.821c.4-.445.846-.85,1.267-1.275a1.327,1.327,0,0,0,.008-2.021Q270.451,162.618,269.332,161.508Zm1.421,3.452c-.139.14-.281.278-.424.416-.293.285-.6.579-.884.9a1.314,1.314,0,0,1-1.08.444c-.051,0-.1,0-.157,0a7.671,7.671,0,0,1-2.972-.879,17.514,17.514,0,0,1-5.776-4.52,15.7,15.7,0,0,1-2.806-4.666,5.308,5.308,0,0,1-.431-2.295,1.141,1.141,0,0,1,.362-.8c.294-.279.578-.565.862-.852.18-.182.361-.365.546-.547a.223.223,0,0,1,.4,0c.249.244.494.491.739.738l.372.373c.185.187.369.372.554.556s.356.356.536.538c.208.209.2.246,0,.44l-.19.192c-.387.39-.771.779-1.179,1.174a1.407,1.407,0,0,0-.313,1.6,9.214,9.214,0,0,0,1.41,2.269,15.454,15.454,0,0,0,3.75,3.4c.222.138.447.248.644.346.108.053.215.105.3.154a1.442,1.442,0,0,0,.716.2,1.414,1.414,0,0,0,1.031-.46c.446-.457.9-.908,1.372-1.376a.217.217,0,0,1,.392,0q1.116,1.11,2.226,2.222C270.933,164.7,270.951,164.76,270.753,164.961Z"
                                          transform="translate(0 -0.218)" fill="#438ff9" />
                                </g>
                            </svg>
                            +1 225 365 03</a>
                    </div>
                    <div class="social_link pt-25">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube icon"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-2 col-sm-5  fixed_width">
                <div class="widget_two">
                    <h4>usefull links</h4>
                    <ul>
                        <li><a href="index.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="dfdfd" data-name="dfdfd" d="M261.8,353l5.369,5.053-5.369,5.053"
                                          transform="translate(-261.112 -352.271)" fill="none"
                                          stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                home</a></li>
                        <li><a href="about.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="dfdfa" data-name="ojkj" d="M261.8,353l5.369,5.053-5.369,5.053"
                                          transform="translate(-261.112 -352.271)" fill="none"
                                          stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                about us</a></li>
                        <li><a href="service.html"><svg width="7.514" height="11.563">
                                    <path id="adert" data-name="rterm" d="M261.8,353l5.369,5.053-5.369,5.053"
                                          transform="translate(-261.112 -352.271)" fill="none"
                                          stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                service</a></li>
                        <li><a href="blog.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="pkks" data-name="dfkkij" d="M261.8,353l5.369,5.053-5.369,5.053"
                                          transform="translate(-261.112 -352.271)" fill="none"
                                          stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                blog</a></li>
                        <li><a href="faq.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="mjnbn" data-name="opiut" d="M261.8,353l5.369,5.053-5.369,5.053"
                                          transform="translate(-261.112 -352.271)" fill="none"
                                          stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                consult</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-2 col-sm-7  fixed_width">
                <div class="widget_two">
                    <h4>services</h4>
                    <ul>
                        <li><a href="portfolio.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="dst" data-name="pqe" d="M261.8,353l5.369,5.053-5.369,5.053"
                                          transform="translate(-261.112 -352.271)" fill="none"
                                          stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                cliping path</a></li>
                        <li><a href="portfolio.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="opijj" data-name="iuyh" d="M261.8,353l5.369,5.053-5.369,5.053"
                                          transform="translate(-261.112 -352.271)" fill="none"
                                          stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                background</a></li>
                        <li><a href="portfolio.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="jkhh" data-name="rutrii" d="M261.8,353l5.369,5.053-5.369,5.053"
                                          transform="translate(-261.112 -352.271)" fill="none"
                                          stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                shadow create</a></li>
                        <li><a href="portfolio.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="dfsdty" data-name="oppk" d="M261.8,353l5.369,5.053-5.369,5.053"
                                          transform="translate(-261.112 -352.271)" fill="none"
                                          stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                image retouch</a></li>
                        <li><a href="portfolio.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="dfdnvb" data-name="optd" d="M261.8,353l5.369,5.053-5.369,5.053"
                                          transform="translate(-261.112 -352.271)" fill="none"
                                          stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                art gallary</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-2 col-sm-5  fixed_width">
                <div class="widget_two">
                    <h4>help</h4>
                    <ul>
                        <li><a href="faq.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="spoom" data-name="poyut" d="M261.8,353l5.369,5.053-5.369,5.053"
                                          transform="translate(-261.112 -352.271)" fill="none"
                                          stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                faq</a></li>
                        <li><a href="about.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="sdqwrt" data-name="plmk" d="M261.8,353l5.369,5.053-5.369,5.053"
                                          transform="translate(-261.112 -352.271)" fill="none"
                                          stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                terms & conditions</a></li>
                        <li><a href="about.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="snbv" data-name="ouhn" d="M261.8,353l5.369,5.053-5.369,5.053"
                                          transform="translate(-261.112 -352.271)" fill="none"
                                          stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                reporting</a></li>
                        <li><a href="#"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="sdq3343" data-name="Padathe" d="M261.8,353l5.369,5.053-5.369,5.053"
                                          transform="translate(-261.112 -352.271)" fill="none"
                                          stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                documentation</a></li>
                        <li><a href="contact.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="azad" data-name="piuuj" d="M261.8,353l5.369,5.053-5.369,5.053"
                                          transform="translate(-261.112 -352.271)" fill="none"
                                          stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                contact us</a></li>
                    </ul>
                </div>
            </div>
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
                    <a href="index.html"><img src="/assets/img/logo/logo2.png" alt="site_logo"></a>
                </div>
            </div>
            <div class="col-md-8 col-lg-8 col-xl-4 col-sm-6 text-center">
                <div class="copyright_text">
                    <p>&copy; 2022 Cliper theme by <span>ThemeIM</span>. All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-md-4 col-xl-4 text-end d-none d-xl-block">
                <div class="copyright_menu">
                    <ul>
                        <li><a href="about.html">terms & condition</a></li>
                        <li><a href="faq.html">privicey policey</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</x-layouts.main>
