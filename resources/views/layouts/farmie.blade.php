<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/preview/theme/farmie/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Mar 2020 14:27:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>@yield('title')</title>

    <link rel="icon" href="/farmie/img/core-img/favicon.ico">

    <link rel="stylesheet" href="/farmie/css/custom.css">
    <link rel="stylesheet" href="/farmie/css/style.css">
    <link rel="stylesheet" href="/farmie/css/animate.css">
    <link rel="stylesheet" href="/farmie/css/bootstrap.min.css">
    <link rel="stylesheet" href="/farmie/css/classy-nav.css">
    <link rel="stylesheet" href="/farmie/css/font-awesome.min.css">
    <link rel="stylesheet" href="/farmie/css/magnific-popup.css">
    <link rel="stylesheet" href="/farmie/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/ecommerce/css/custom.css">





    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

   {{-- <link rel="stylesheet" href="/ecommerce/css/custom.css">--}}

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   {{-- <script src="/js/custom_angular.js"></script>--}}

    <!--Toaster-->
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    {{--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>--}}
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-    ng-cloak {
            display: none !important;
        }

        #toast-container *{
            background-color: #2a9055;
        }
    </style>
</head>
<body  ng-app="myApp" ng-controller="myCtrl" class="ng-scope">

<div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>

<header class="header-area">

    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">

                        <div class="top-header-meta">
                            <p>ফার্মিতে আপনাকে স্বাগতম, আমরা আশা করি আপনি আমাদের পণ্যগুলি উপভোগ করবেন এবং ভাল অভিজ্ঞতা অর্জন করবেন</p>
                        </div>

                        <div class="top-header-meta text-right">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="nusaira201@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>
ই-মেইল: <span class="__cf_email__" data-cfemail="264f4840494243435445544347524f504366414b474f4a0845494b">[email&#160;protected]</span></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>মোবাইল: +880-</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="famie-main-menu" >
        <div class="classy-nav-container breakpoint-off">
            <div class="container" >

                <nav class="classy-navbar justify-content-between" id="famieNav">

                    <a href="/" class="nav-brand"><img src="/farmie/img/core-img/logo.png" alt=""></a>

                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <div class="classy-menu">

                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="/">হোম</a></li>
                                <li><a href="/farmie/about">আমাদের সম্পর্কে</a></li>
                              {{--  <li><a href="">কৃষিকাজ ব্লগ</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home</a></li>
                                    </ul>
                                </li>--}}
                                <li><a href="/farmie/product">আমাদের পণ্য</a></li>
{{--                                <li><a href="farming-practice.html">Farming Practice</a></li>--}}
                                <li><a href="/farmie/blogs">কৃষিকাজ ব্লগ</a></li>
                                <li><a href="/farmie/contact">যোগাযোগ</a></li>
                            </ul>

                            <div id="searchIcon">
                                <i class="icon_search" aria-hidden="true"></i>
                            </div>
{{--                            <div>   <a class="" href="/customer/checkout"><i class="fa fa-shopping-cart"></i>কার্ট </a></div>--}}



{{--                            <div id="cartIcon">--}}
{{--                                <a href="#">--}}
{{--                                    <i class="icon_cart_alt" aria-hidden="true"></i>--}}
{{--                                    <span class="cart-quantity">2</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
                            <a class="btn btn-success btn-sm ml-3 text-white" href="/customer/checkout">
                                <i class="fa fa-shopping-cart "></i> পণ্য
                                <span class="badge badge-light" ng-cloak>@{{ getProductCartInfo().totalCount}} টি </span>
                            </a>
                            @if( Session('customer_id')<=0)
                                <ul class="">
                                    <li class="">
                                        <a class="" href="/all-login">লগ-ইন</a>
                                    </li>
                                </ul>

                                <ul class="">
                                    <li class="">
                                        <a class="" href="/all-registration">রেজিস্ট্রেশন </a>
                                    </li>
                                </ul>

                            @else

                                <div class="dropdown show ml-2">

                                        <a class=" dropdown-toggle text-success" href="#" id="dropdownMenuLink" data-toggle="dropdown">
                                            {{Session('customer_name')}}
                                        </a>
                                        <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Setting</a>
                                            <a class="dropdown-item" href="/customer/logout">Logout</a>
                                        </div>

                                </div>
                            @endif
                        </div>

                    </div>
                </nav>

                <div class="search-form">
                    <form action="#" method="get">
                        <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                        <button type="submit" class="d-none"></button>
                    </form>

                    <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer class="footer-area">

    <div class="main-footer bg-img bg-overlay section-padding-80-0" style="background-image: url(/farmie/img/bg-img/3.jpg);">
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-80">
                        <a href="#" class="foo-logo d-block mb-30"><img src="/farmie/img/core-img/logo2.png" alt=""></a>
                        <p></p>
                        <div class="contact-info">
                            <p><i class="fa fa-map-pin" aria-hidden="true"></i><span>সেকশন: 14, মিরপুর রোড, ঢাকা</span></p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i><span><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7910171f16571d1c1c0b1a0b1c180d100f1c391e14181015571a1614">[email&#160;protected]</a></span></p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i><span>+880</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-80">
                        <h5 class="widget-title"></h5>

                        <nav class="footer-widget-nav">
                            <ul>
{{--                                <li><a href="#">Purchase</a></li>--}}
{{--                                <li><a href="#">Policities</a></li>--}}
{{--                                <li><a href="#">Shipping</a></li>--}}
{{--                                <li><a href="#">FAQs</a></li>--}}
{{--                                <li><a href="#">Return</a></li>--}}
{{--                                <li><a href="#">Careers</a></li>--}}
{{--                                <li><a href="#">Payments</a></li>--}}
{{--                                <li><a href="#">Partners</a></li>--}}
{{--                                <li><a href="#">Guide</a></li>--}}
{{--                                <li><a href="#">Standard</a></li>--}}
{{--                                <li><a href="#">News</a></li>--}}
{{--                                <li><a href="#">Brands</a></li>--}}
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-80">
                        <h5 class="widget-title">সাম্প্রতিক খবর</h5>

                        <div class="single-recent-blog d-flex align-items-center">
                            <div class="post-thumbnail">
                                <img src="/farmie/img/bg-img/4.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">বাজারে ডাব্লুএর বৃহত্তম কৃষিকাজের ব্যবসা</a>
                                <div class="post-date">1 এপ্রিল 2020 </div>
                            </div>
                        </div>

                        <div class="single-recent-blog d-flex align-items-center">
                            <div class="post-thumbnail">
                                <img src="/farmie/img/bg-img/5.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">গরুর মাংসের খুচরা মূল্য রেকর্ডে চলেছে</a>
                                <div class="post-date">1 এপ্রিল 2020</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-80">
                        <h5 class="widget-title">যোগাযোগ রেখো</h5>

                        <div class="footer-social-info">
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <span>ফেসবুক</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <span>টুইটার</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                                <span>ইউটিউব</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copywrite-area">
        <div class="container">
            <div class="copywrite-text">
                <div class="row align-items-center">
                    <div class="col-md-6">
{{--                        <p>--}}
{{--                            Copyright &copy;<script data-cfasync="false" src="/farmie/js/email-decode.min.js"></script><script type="be202cbde170147cd96c3217-text/javascript">document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>--}}

{{--                        </p>--}}
                    </div>
                    <div class="col-md-6">
                        <div class="footer-nav">
                            <nav>
{{--                                <ul>--}}
{{--                                    <li><a href="#">About</a></li>--}}
{{--                                    <li><a href="#">Produce</a></li>--}}
{{--                                    <li><a href="#">Practice</a></li>--}}
{{--                                    <li><a href="#">Products</a></li>--}}
{{--                                    <li><a href="#">News</a></li>--}}
{{--                                    <li><a href="#">Contact</a></li>--}}
{{--                                </ul>--}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="/farmie/js/jquery.min.js" type="be202cbde170147cd96c3217-text/javascript"></script>

<script src="/farmie/js/popper.min.js" type="be202cbde170147cd96c3217-text/javascript"></script>

<script src="/farmie/js/bootstrap.min.js" type="be202cbde170147cd96c3217-text/javascript"></script>

<script src="/farmie/js/owl.carousel.min.js" type="be202cbde170147cd96c3217-text/javascript"></script>

<script src="/farmie/js/classynav.js" type="be202cbde170147cd96c3217-text/javascript"></script>

<script src="/farmie/js/wow.min.js" type="be202cbde170147cd96c3217-text/javascript"></script>

<script src="/farmie/js/jquery.sticky.js" type="be202cbde170147cd96c3217-text/javascript"></script>

<script src="/farmie/js/jquery.magnific-popup.min.js" type="be202cbde170147cd96c3217-text/javascript"></script>

<script src="/farmie/js/jquery.scrollup.min.js" type="be202cbde170147cd96c3217-text/javascript"></script>

<script src="/farmie/js/jarallax.min.js" type="be202cbde170147cd96c3217-text/javascript"></script>

<script src="/farmie/js/jarallax-video.min.js" type="be202cbde170147cd96c3217-text/javascript"></script>

<script src="/farmie/js/active.js" type="be202cbde170147cd96c3217-text/javascript"></script>

<script async src="/farmie/js/google.js" type="be202cbde170147cd96c3217-text/javascript"></script>
<script type="be202cbde170147cd96c3217-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="/farmie/js/rocket-loader.min.js" data-cf-settings="be202cbde170147cd96c3217-|49" defer=""></script>

<script src="/farmie/js/custom_angular.js"></script>

</body>

<!-- Mirrored from colorlib.com/preview/theme/farmie/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Mar 2020 14:28:00 GMT -->
</html>
