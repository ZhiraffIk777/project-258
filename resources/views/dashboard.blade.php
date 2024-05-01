@extends('templates/header')
@section('content')
    <!-- My Account Area -->
    <div class="my-account-area mt-3">
        <div class="container">
            <div class="tab account-tab">
                <div class="row">
                    <div class="col-lg-4">
                        <ul class="tabs">
                            <li>
                                <a href="#">
                                    Личная информация
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Корзина
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Заказы
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Адресс
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-8">
                        <div class="tab_content current active">
                            <div class="tabs_item current">
                                <div class="account-tab-item">
                                    <div class="account-details">
                                        <h2>Профиль/Личная информация</h2>
                                        <div class="account-profile">
                                            <div class="account-profile-img">
                                                <img src="/storage/images/products/product-profile1.jpg" alt="Images">
                                            </div>
                                            <ul>
                                                <li>
                                                    <form action="">
                                                        <div class="input-group mb-3">
                                                            <input type="file">
                                                            <a href="#" class="ms-3">Загрузить</a>
                                                        </div>
                                                    </form>
                                                </li>
                                                {{--                                                    <li><a href="#">Remove</a></li>--}}
                                            </ul>
                                        </div>

                                        <div class="account-form">
                                            <form method="POST" action="/profile">
                                                @csrf
                                                @method('PATCH')
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="text" name="phone" class="form-control" value="{{Auth::user()->phone}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <button type="submit" class="default-btn btn-bg-three">
                                                            Заменить
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="account-form mt-3">
                                            <h3>Смена пароля</h3>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" placeholder="Текущий пароль">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="password_new" class="form-control" placeholder="Новый пароль">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="password_confired_new"  class="form-control" placeholder="Повторный пароль">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6">
                                                        <button type="submit" class="default-btn btn-bg-three">
                                                            Заменить
                                                        </button>
                                                    </div>

                                                    <div class="col-lg-8 col-md-6">
                                                        <button type="reset" class="default-btn btn-bg-three">
                                                            Сбросить
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="account-tab-item">
                                    <div class="checkout-order">
                                        <h2>My Orders</h2>
                                        <h3 class="title-item">Item Description & Amount <span>Cash</span></h3>
                                        <ul class="checkout-product">
                                            <li>
                                                <img src="assets/images/products/products-img1.png" alt="Images">
                                                <h3>Organic Butter</h3>
                                                <span>$2.0</span>
                                                <div class="price-tag">$18.0</div>
                                            </li>

                                            <li>
                                                <img src="assets/images/products/products-img2.png" alt="Images">
                                                <h3>Fresh Carrots</h3>
                                                <span>$25.0</span>
                                                <div class="price-tag">$225.0</div>
                                            </li>
                                        </ul>

                                        <div class="total-amount">
                                            <h2 class="amount-title">Sub Total Amount <span>$243.0</span></h2>
                                            <h3 class="vat-title">Vat (5%) <span>$12.0</span></h3>
                                            <h3 class="total-title">Total Amount<span>$255.0</span></h3>
                                        </div>

                                        <div class="amount-btn">
                                            <a href="#" class="default-btn btn-bg-three">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="account-tab-item">
                                    <div class="checkout-order">
                                        <h2>My Orders</h2>
                                        <h3 class="title-item">Item Description & Amount <span>Cash</span></h3>
                                        <ul class="checkout-product">
                                            <li>
                                                <img src="assets/images/products/products-img1.png" alt="Images">
                                                <h3>Organic Butter</h3>
                                                <span>$2.0</span>
                                                <div class="price-tag">$18.0</div>
                                            </li>

                                            <li>
                                                <img src="assets/images/products/products-img2.png" alt="Images">
                                                <h3>Fresh Carrots</h3>
                                                <span>$25.0</span>
                                                <div class="price-tag">$225.0</div>
                                            </li>
                                        </ul>

                                        <div class="total-amount">
                                            <h2 class="amount-title">Sub Total Amount <span>$243.0</span></h2>
                                            <h3 class="vat-title">Vat (5%) <span>$12.0</span></h3>
                                            <h3 class="total-title">Total Amount<span>$255.0</span></h3>
                                        </div>

                                        <div class="amount-btn">
                                            <a href="#" class="default-btn btn-bg-three">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="account-tab-item">
                                    <div class="address-details">
                                        <h2>Адресс<a href="#" class="address-edit">Редактировать</a></h2>
                                        <p>Почтовый индекс: {{Auth::user()->postcode}}</p>
                                        <span>Адресс: {{Auth::user()->address}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-account-area mt-5">
        <div class="container">
            <div class="tab account-tab">
                <div class="row">
                    <div class="col-lg-4">
                        <ul class="tabs">
                            <li>
                                <a href="#">
                                    Пользователи
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Товары
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Заказы
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Блог
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab_content current active">
                            <div class="tabs_item current">
                                <div class="account-tab-item">
                                    <div class="account-details">
                                        <h2>Админ/Пользователи</h2>
                                        <div class="account-profile">
                                            <div class="account-profile-img">
                                                <img src="/storage/images/products/product-profile1.jpg" alt="Images">
                                            </div>
                                            <ul>
                                                <li>
                                                    <form action="">
                                                        <div class="input-group mb-3">
                                                            <input type="file">
                                                            <a href="#" class="ms-3">Загрузить</a>
                                                        </div>
                                                    </form>
                                                </li>
                                                <li><a href="#">Remove</a></li>
                                            </ul>
                                        </div>

                                        <div class="account-form">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="text"  class="form-control" value="{{Auth::user()->name}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="email"  class="form-control" value="{{Auth::user()->email}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" value="{{Auth::user()->phone}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <button type="submit" class="default-btn btn-bg-three">
                                                            Заменить
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="account-form mt-3">
                                            <h3>Смена пароля</h3>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="password"  class="form-control" placeholder="Текущий пароль">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="password"  class="form-control" placeholder="Новый пароль">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="password"  class="form-control" placeholder="Повторный пароль">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6">
                                                        <button type="submit" class="default-btn btn-bg-three">
                                                            Заменить
                                                        </button>
                                                    </div>

                                                    <div class="col-lg-8 col-md-6">
                                                        <button type="reset" class="default-btn btn-bg-three">
                                                            Сбросить
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="account-tab-item">
                                    <div class="checkout-order">
                                        <h2>Админ/Товары</h2>
                                        <h3 class="title-item">Добавление товаров</h3>
                                        <div class="container">
                                            <div class="user-width">
                                                <div class="user-form">
                                                    <div class="contact-form">
                                                        <form method="POST" action="/addProduct">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="name" required placeholder="Название товара">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <textarea class="form-control" type="text" name="description" placeholder="Описание"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" name="cost" placeholder="Цена в рублях">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" name="preview" placeholder="Добавить скидку или Новое">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12 mt-2">
                                                                    <button type="submit" class="default-btn btn-bg-three">
                                                                        Добавить товар
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title-item mt-4">Удаление товара</h3>
                                        <div class="container">
                                            <div class="user-width">
                                                <div class="user-form">
                                                    <div class="contact-form">
                                                        <form method="POST" action="/deleteProduct">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="name" required placeholder="id Товара">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 mt-2">
                                                                    <button type="submit" class="default-btn btn-bg-three">
                                                                        Удалить товар
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="account-tab-item">
                                    <div class="checkout-order">
                                        <h2>My Orders</h2>
                                        <h3 class="title-item">Item Description & Amount <span>Cash</span></h3>
                                        <ul class="checkout-product">
                                            <li>
                                                <img src="assets/images/products/products-img1.png" alt="Images">
                                                <h3>Organic Butter</h3>
                                                <span>$2.0</span>
                                                <div class="price-tag">$18.0</div>
                                            </li>

                                            <li>
                                                <img src="assets/images/products/products-img2.png" alt="Images">
                                                <h3>Fresh Carrots</h3>
                                                <span>$25.0</span>
                                                <div class="price-tag">$225.0</div>
                                            </li>
                                        </ul>

                                        <div class="total-amount">
                                            <h2 class="amount-title">Sub Total Amount <span>$243.0</span></h2>
                                            <h3 class="vat-title">Vat (5%) <span>$12.0</span></h3>
                                            <h3 class="total-title">Total Amount<span>$255.0</span></h3>
                                        </div>

                                        <div class="amount-btn">
                                            <a href="#" class="default-btn btn-bg-three">Next</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tabs_item">
                                <div class="account-tab-item">
                                    <div class="address-details">
                                        <h2>My Addresses <a href="#" class="address-edit">Edit</a></h2>
                                        <p>New Jersey</p>
                                        <span>2873 Yorkshire Circle, NY, Carolina</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- My Account Area End -->
@endsection
