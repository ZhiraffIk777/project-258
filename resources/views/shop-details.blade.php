@extends('templates/header')
@section('content')
        <!-- Product Details Area -->
        <div class="product-details-area mt-3 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="product-detls-image">
                            <img src="/storage/images/products/shop-details-img.png" alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="product-desc">
                            <h3>{{$product->name}}</h3>
                            <div class="price">
                                <span class="new-price">{{$product->cost}}₽</span>
                                {{--<span class="old-price">$30.00</span>--}}
                            </div>

                            <p>
                                {{$product->description}}
                            </p>

                            <div class="input-count-area">
                                <h3>Количество</h3>
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text" value="1">
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div>
                            </div>

                            <div class="product-add-btn">
                                <button type="submit" class="default-btn btn-bg-three">
                                    <i class="fas fa-cart-plus"></i> Добавить в корзину
                                </button>
                            </div>

                            <div class="product-share">
                                <ul>
                                    <li>
                                        <span>Поделиться:</span>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-vk' ></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-telegram'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Details Area End -->

        <!-- Product Tab -->
        <div class="product-tab pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="tab products-details-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <ul class="tabs">
                                        <li>
                                            <a href="#">
                                                Описание
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Отзывы
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Информация о магазине
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="tab_content current active pt-45">
                                        <div class="tabs_item current">
                                            <div class="products-tabs-decs">
                                                <p>{{$product->description}}</p>
                                            </div>
                                        </div>

                                        <div class="tabs_item">
                                            <div class="products-tabs-reviews">
                                                <ul>
                                                    <li>
                                                        <img src="/storage/images/products/product-profile1.jpg" alt="Image">
                                                        <h3>Devit M. kolin</h3>
                                                        <div class="content">
                                                            <span>19 Jan 2020</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                                                    </li>

                                                    <li>
                                                        <img src="/storage/images/products/product-profile2.jpg" alt="Image">
                                                        <h3>Donam. Markin</h3>
                                                        <div class="content">
                                                            <span>14 April 2020</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                                                    </li>
                                                </ul>

                                                <div class="reviews-form">
                                                    <div class="contact-form">
                                                        <h3>Оставить отзыв</h3>
                                                        {{--<p>Lorem ipsum dolo sit amet, consectetur adipisicing  eiusmod tempor incididun </p>--}}
                                                        <form id="contactForm">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Краткое описание">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <input type="email" name="email_address" id="email_address" required data-error="Please enter email address" class="form-control" placeholder="Email">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Отзыв"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12 col-md-12">
                                                                    <button type="submit" class="default-btn btn-bg-three">
                                                                        Отправить отзыв
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tabs_item">
                                            <div class="products-tabs-shipping">
                                                <ul>
                                                    <li>
                                                        Адресс:
                                                        <span>{{$product->name_shop}}</span>
                                                    </li>

                                                    <li>
                                                        Телефон:
                                                        <a href="tel:+1(123)-456-7890-3524">+1 (123) 456 7890 3524</a>
                                                    </li>

                                                    <li>
                                                        Email:
                                                        <a href="mailto:hello@hilo.com">hello@hilo.com</a>
                                                    </li>
                                                </ul>
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
        <!-- Product Tab End -->
@endsection
