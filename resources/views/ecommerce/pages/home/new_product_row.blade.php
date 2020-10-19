<br>
<div class="categories">
    <div class="container">
        <div class="row">
            <div class="col-md-3">

                <div class="card">

                    <div class="col-md-12">
                        <h5>সম্মানিত ক্রেতাদের মতামত</h5>
                        <hr class="horizontal-line">
                    </div>

                    <div class="card-body">
                        <div id="client-slider" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#client-slider" data-slide-to="0" class="active"></li>
                                <li data-target="#client-slider" data-slide-to="1"></li>
                                <li data-target="#client-slider" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner client-carousel single-client" style="cursor: pointer">
                                @if(!$clients->isEmpty() )

                                    <div class="carousel-item active">
                                        <img ng-src="/images/client/{{$clients[0]->client_image}}"
                                             class="rounded-circle client-image"
                                             height="60px">
                                        <p class="testimonial-by product-title">{{$clients[0]->client_name}}</p>
                                        <p class="card-title testimonial"
                                           style="text-align: center">{{$clients[0]->client_quotes}}</p>
                                    </div>

                                @endif

                                @php($i=1)
                                @foreach($clients as $client)
                                    @if($i>1)
                                        <div class="carousel-item">
                                            <img ng-src="/images/client/{{$client->client_image}}"
                                                 class="rounded-circle"
                                                 height="60px">
                                            <p class="testimonial-by">{{$client->client_name}}</p>
                                            <p class="card-title testimonial">{{$client->client_quotes}}</p>
                                        </div>
                                    @endif
                                    @php($i++)
                                @endforeach
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#client-slider" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#client-slider" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-9">
                <div class="col-md-3">
                    <h5>নতুন প্রোডাক্ট</h5>
                    <hr class="horizontal-line">
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($new_products as $new_product)
                            <div class="col-md-3 featured-product">
                                <a href="/product/details/{{$new_product->product_id}}/{{str_replace(' ', '-', $new_product->product_name)}}">
                                    <img ng-src="/images/product/{{$new_product->featured_image}}"
                                         class="img-thumbnail general-product" width="100%" height="135px" src="">
                                    <p class="card-title product-title">{{$new_product->product_name}}</p>
                                    <p class="measurement">{{$new_product->product_measurement}}</p>
                                    <p class="price">{{$new_product->selling_price}} টাকা/ <span
                                                class="price-discount">{{$new_product->regular_price}} টাকা</span>
                                    </p>
                                </a>
                                <button type="button" class="btn btn-sm btn-outline-success btn-block"
                                        ng-click="addToCart('{{$new_product->product_id}}','{{$new_product->product_name}}','{{$new_product->featured_image}}','{{$new_product->selling_price}}')">
                                    <i class="fa fa-shopping-cart"></i> কার্টে যুক্ত করুন
                                </button>

                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
