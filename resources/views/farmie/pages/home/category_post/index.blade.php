@extends('layouts.farmie')

@section('title', 'farmie')

@section('content')


    <div class="slider">

        <div class="container">

            <div class="row">
                <div class="card" style="width: 100%;margin-bottom: 10px">
                    <div class="card-body custom-body">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="/"><strong><i class="fa fa-home"></i> হোম</strong></a> <i
                                        class="fa fa-chevron-right"></i>
                                <a href="#">{{$category_name}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="card" style="    width: 108%;">
                    <div class="col-md-12">

                        <div class="card-body custom-body">

                            <div class="row">

                                @foreach($products as $item)

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
                                                <h6 class="price mb-2">{{$item->regular_price}} Tk</h6>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

   {{-- @include('ecommerce.pages.home.universal_cart')--}}
@endsection



