@extends('templates/header')
@section('content')

        <!-- Product Area -->
        <div class="product-area pt-100 pb-70">
            <div class="container-fluid m-0">
                <div class="container-max">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="product-topper">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="product-topper-title">
                                            <h2>Каталог</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                @foreach($products as $product)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="/product/{{$product->id}}">
                                                    <img src="/storage/images/products/products-img1.png" alt="Product Images">
                                                </a>
                                                <div class="product-item-tag">
                                                    <h3>{{$product->preview}}</h3>
                                                </div>
                                                <ul class="product-item-action">
                                                    <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                                    <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                                                    <li><a href="cart.html"><i class='bx bx-cart'></i></a></li><br>
                                                    <li><h3>{{$product->name_shop}}</h3></li>
                                                </ul>
                                            </div>

                                            <div class="content">
                                                <h3><a href="/product/{{$product->id}}">{{$product->name}}</a></h3>
                                                <span>{{$product->cost}}₽</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="product-side-bar">
                                <div class="product-side-bar-widget">
                                    <h3 class="title">Product Categories</h3>
                                    <div class="product-side-categories">
                                        <ul>
                                            <li class="active">
                                                <a href="#">All Categories & Items</a>
                                            </li>
                                            <li>
                                                <a href="#">Cooking & Baking</a>
                                            </li>
                                            <li>
                                                <a href="#">Beverage</a>
                                            </li>
                                            <li>
                                                <a href="#">Snacks</a>
                                            </li>
                                            <li>
                                                <a href="#">Milk and Dairy</a>
                                            </li>
                                            <li>
                                                <a href="#">Meat and Fish</a>
                                            </li>
                                            <li>
                                                <a href="#">Fruits and Vegetable</a>
                                            </li>
                                            <li>
                                                <a href="#">Home & Kitchen Appliance</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-side-bar-widget">
                                    <h3 class="title">Prices</h3>
                                    <div class="product-side-categories">
                                        <ul>
                                            <li class="active">
                                                <a href="#">$0-$50</a>
                                            </li>
                                            <li>
                                                <a href="#">$51-$100</a>
                                            </li>
                                            <li>
                                                <a href="#">$101-$150</a>
                                            </li>
                                            <li>
                                                <a href="#">$151-$200</a>
                                            </li>
                                            <li>
                                                <a href="#">$200-$250</a>
                                            </li>
                                            <li>
                                                <a href="#">$250-$300</a>
                                            </li>
                                            <li>
                                                <a href="#">$350-$400</a>
                                            </li>
                                            <li>
                                                <a href="#">$400-$450</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-side-bar-widget">
                                    <h3 class="title">High Rated Product</h3>
                                    <div class="product-popular-post">
                                        <article class="item">
                                            <a href="news-details.html" class="thumb">
                                                <span class="full-image cover bg1" role="img"></span>
                                            </a>
                                            <div class="info">
                                                <h4 class="title-text">
                                                    <a href="news-details.html">
                                                        Fresh Organic Meat
                                                    </a>
                                                </h4>
                                                <p>$12.0 <del>$15.5</del></p>
                                            </div>
                                        </article>

                                        <article class="item">
                                            <a href="news-details.html" class="thumb">
                                                <span class="full-image cover bg2" role="img"></span>
                                            </a>
                                            <div class="info">
                                                <h4 class="title-text">
                                                    <a href="news-details.html">
                                                        Fresh Pineapple
                                                    </a>
                                                </h4>
                                                <p>$3.50 <del>$4.0</del></p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End -->

@endsection
