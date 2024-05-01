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
                                                </div>

                                            <h3 class="mt-3">Смена пароля</h3>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="password" name="password" class="form-control" placeholder="Текущий пароль">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input name="new_password" type="password" class="form-control" placeholder="Новый пароль">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input name="confirm_new_password" type="password" class="form-control" placeholder="Повторный пароль">
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

                            <div class="tabs_item current">
                                <div class="account-tab-item">
                                    <div class="account-details">
                                        <h2>Профиль/Адресс</h2>

                                        <div class="account-form">
                                            <form method="POST" action="/changeAddress">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="text" name="postcode" class="form-control" placeholder="Укажите новый почтовый индекс в формате ###### (текущий: {{$my_address->postcode}})">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="text" name="address" class="form-control" placeholder="Укажите новый адресс в формате (г.#, ул.#, д.#, к.#, кв.#) (текущий: {{$my_address->address}})">
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
                                        <h3 class="title-item mt-4">Список пользователей</h3>
                                        <div class="container">
                                            <div class="user-width">
                                                <div class="user-form">
                                                    <div class="contact-form mt-3">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div id="list-example" class="list-group text-start " style="overflow-y:scroll; max-height: 400px">
                                                                    @foreach($users as $user)
                                                                        <a class="list-group-item list-group-item-action py-2" href="#list-item-{{$user->id}}">{{$user->id}}. {{$user->name}}</a>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div data-bs-spy="scroll" data-bs-target="#list-example" style="overflow-y:scroll; max-height: 500px" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="5">
                                                                    @for ($i = 0; $i < count($users); $i++)
                                                                            <div class="row">
                                                                                <div class="col-sm-9">
                                                                                    <h2 id="list-item-{{$users[$i]->id}}">{{$users[$i]->id}}. {{$users[$i]->name}}</h2>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <form action="/deleteUser" method="POST">
                                                                                        @csrf
                                                                                        <input type="hidden" name="id" value="{{$users[$i]->id}}">
                                                                                        <button type="submit" class="btn-close" aria-label="Close"></button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <p>Почта: {{$users[$i]->email}}<br>
                                                                                Телефон: {{$users[$i]->phone}}<br>
                                                                                Адресс: {{$addresses[$i]->address}}<br>
                                                                                Почтовый индекс: {{$addresses[$i]->postcode}}<br>
                                                                            </p>
                                                                            <hr>
                                                                        @endfor
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
                                        <h3 class="title-item mt-4">Список товаров</h3>
                                        <div class="container">
                                            <div class="user-width">
                                                <div class="user-form">
                                                    <div class="contact-form mt-3">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div id="list-example" class="list-group" style="overflow-y:scroll; max-height: 300px">
                                                                    @foreach($products as $product)
                                                                        <a class="list-group-item list-group-item-action py-2" href="#list-item-{{$product->id}}">{{$product->id}}. {{$product->name}}</a>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div data-bs-spy="scroll" data-bs-target="#list-example" style="overflow-y:scroll; max-height: 350px" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="5">
                                                                    @foreach($products as $product)
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <h2 id="list-item-{{$product->id}}"><a href="/product/{{$product->id}}">{{$product->id}}. {{$product->name}}</a></h2>
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <form action="/editProduct/{{$product->id}}" method="GET">
                                                                                    @csrf
                                                                                    <input type="hidden" name="id" value="{{$product->id}}">
                                                                                    <button type="submit" class="btn text-center" aria-label="Close">Редактир.</button>
                                                                                </form>
                                                                            </div>
                                                                            <div class="col-sm-3 mt-2">
                                                                                <form action="/deleteProduct" method="POST">
                                                                                    @csrf
                                                                                    <input type="hidden" name="id" value="{{$product->id}}">
                                                                                    <button type="submit" class="btn-close" aria-label="Close"></button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <p>{{$product->description}}</p>
                                                                        <h3>{{$product->cost}}</h3>
                                                                        <h5>{{$product->name_shop}}</h5>
                                                                        <hr>
                                                                    @endforeach
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
                                        <span>2873 Yorkshire Circle, NC, Carolina</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        <!-- My Account Area End -->
@endsection
