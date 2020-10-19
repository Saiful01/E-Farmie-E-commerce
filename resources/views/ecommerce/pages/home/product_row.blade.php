<br>
<div class="categories">
    <div class="container">
        <div class="row">
            <div class="col-md-3">


                <div class="card-body" style="margin-top: -20px;">
                    <div class="row left-product">
                        <img ng-src="/images/promotion/{{$promotions[0]->promotion_image}}" width="100%">

                    </div>

                </div>

                <div class="card">

                    <div class="col-md-12">
                        <h5>হট প্রোডাক্ট</h5>
                        <hr class="horizontal-line">
                    </div>

                    <div class="card-body">
                        @if($hot_item!=null)
                            <a href="/product/details/{{$hot_item->product_id}}/{{str_replace(' ', '-', $hot_item->product_name)}}">
                                <img ng-src="/images/product/{{$hot_item->featured_image}}" class="img-thumbnail"
                                     width="100%">
                                <p class="card-title product-title">{{$hot_item->product_name}}</p>
                                <p class="measurement">{{$hot_item->product_measurement}}</p>
                                <p class="price">{{$hot_item->selling_price}} টাকা/ <span
                                            class="price-discount">{{$hot_item->regular_price}} টাকা</span></p>
                            </a>
                            <button type="button" class="btn btn-sm btn-outline-success btn-block"
                                    ng-click="addToCart('{{$hot_item->product_id}}','{{$hot_item->product_name}}','{{$hot_item->featured_image}}','{{$hot_item->selling_price}}')">
                                <i class="fa fa-shopping-cart"></i> কার্টে যুক্ত করুন
                            </button>
                        @endif
                    </div>
                </div>

            </div>
            <div class="col-md-9">
                <div class="card">

                    <div class="col-md-3">
                        <h5>বিশেষ প্রোডাক্ট</h5>
                        <hr class="horizontal-line">
                    </div>

                    <div class="card-body">
                        <div class="row">
                            @foreach($featured_items as $featured_item)
                                <div class="col-md-4 featured-product">
                                    <a href="/product/details/{{$featured_item->product_id}}/{{str_replace(' ', '-', $featured_item->product_name)}}">
                                        <img ng-src="/images/product/{{$featured_item->featured_image}}"
                                             class="img-thumbnail general-product" width="100%" height="175px">
                                        <p class="card-title product-title">{{$featured_item->product_name}}</p>
                                        <p class="measurement">{{$featured_item->product_measurement}}</p>
                                        <p class="price">{{$featured_item->selling_price}} টাকা/ <span
                                                    class="price-discount">{{$featured_item->regular_price}} টাকা</span>
                                        </p>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-success btn-block"
                                            ng-click="addToCart('{{$featured_item->product_id}}','{{$featured_item->product_name}}','{{$featured_item->featured_image}}','{{$featured_item->selling_price}}')">
                                        <i class="fa fa-shopping-cart"></i> কার্টে যুক্ত করুন
                                    </button>

                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <br>
                <div class="card">

                    <div class="card-body">
                        <a href="#"> <img src="/images/promotion/{{$promotions[1]->promotion_image}}"
                                          class="promotion-img" width="100%" height=""/></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
