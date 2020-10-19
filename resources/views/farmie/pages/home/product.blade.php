@extends('layouts.farmie')
@section('title', 'Farmie')

@section('content')


    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/18.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>আমাদের পণ্য</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="famie-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> হোম</a></li>
                    <li class="breadcrumb-item active" aria-current="page">আমাদের পণ্য </li>
                </ol>

            </nav>
        </div>
      {{--  <div class="col-md-2 position-fixed">
            @include('ecommerce.pages.home.universal_cart')
        </div>--}}
    </div>
        <div class="slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <div class="row">
                            <div class="col-md">

                                <div class="card bg-light mb-3">
                                    <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-list"></i>
                                        ক্যাটেগরি
                                    </div>
                                    <ul class="list-group category-list">
                                        @foreach($categories as $category)

                                        <li class="list-group-item"><a href="/product/category/{{$category->category_id}}">-
                                            {{$category->category_name}}</a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        @if(count($slider)>2)

                        <div id="top-slide" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#top-slide" data-slide-to="0" class=""></li>
                                <li data-target="#top-slide" data-slide-to="1" class=""></li>
                                <li data-target="#top-slide" data-slide-to="2" class="active"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">

                                <div class="carousel-item">
                                    <img src="/images/slider/{{$slider[0]->slider_image}}" alt="Los Angeles" width="1100" height="200px">
                                </div>

                                <div class="carousel-item">
                                    <img src="/images/slider/{{$slider[1]->slider_image}}" alt="Los Angeles" width="1100" height="200px">
                                </div>
                                <div class="carousel-item active">
                                    <img src="/images/slider/{{$slider[2]->slider_image}}" alt="Los Angeles" width="1100" height="200px">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#top-slide" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#top-slide" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                        @endif
                    </div>

                </div>


            </div>
        </div>

    <section class="our-products-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="section-heading text-center">
                        <p>Featured Products</p>
                        <h2><span>Our Product</span> Are Highest Quality</h2>
                        <img src="img/core-img/decor2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($featured_items as $item)

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50">

                        <div class="product-thumbnail">
                            <img src="/images/product/{{$item->featured_image}}" alt="">

                            <span class="product-tags">Hot Sale</span>

                            <div class="product-meta-data">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favourite"><i class="icon_heart_alt"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add To Cart"><i class="icon_cart_alt"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="arrow_left-right_alt"></i></a>
                            </div>
                        </div>

                        <div class="product-desc text-center pt-4">
                            <a href="#" class="product-title text-success">{{$item->product_name}}</a>
                            <h6 class="price mb-2">{{$item->selling_price}}  টাকা/<span
                                    class="price-discount">{{$item->regular_price}} টাকা</span></h6>
                            <button type="button" class="btn btn-sm btn-danger btn-outline-success btn-block"
                                    ng-click="addToCartFromDetailsPage('{{$item->product_id}}','{{$item->product_name}}','{{$item->featured_image}}','{{$item->selling_price}}')">
                                <i class="fa fa-shopping-cart"></i> কার্টে যুক্ত করুন
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="our-products-area ">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="section-heading text-center">
                        <h2><span>New Product</span> </h2>
                        <img src="img/core-img/decor2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($new_products as $item)

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-product-area mb-50">

                            <div class="product-thumbnail">
                                <img src="/images/product/{{$item->featured_image}}" alt="">

                                <span class="product-tags">Hot Sale</span>

                                <div class="product-meta-data">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favourite"><i class="icon_heart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add To Cart"><i class="icon_cart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>

                            <div class="product-desc text-center pt-4">
                                <a href="#" class="product-title text-success">{{$item->product_name}}</a>
                                <h6 class="price mb-2">{{$item->selling_price}}  টাকা/<span
                                        class="price-discount">{{$item->regular_price}} টাকা</span></h6>
                                <button type="button" class="btn btn-sm btn-danger btn-outline-success btn-block"
                                        ng-click="addToCartFromDetailsPage('{{$item->product_id}}','{{$item->product_name}}','{{$item->featured_image}}','{{$item->selling_price}}')">
                                    <i class="fa fa-shopping-cart"></i> কার্টে যুক্ত করুন
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="gotoshop-btn text-center">
                        <a href="shop.html" class="btn famie-btn">Go to Store</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
