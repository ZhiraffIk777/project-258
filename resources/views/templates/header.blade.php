<!doctype html>
<html lang="zxx">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css')}}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css')}}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css')}}">


    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/storage/images/favicon.png">

    <title>Магазин 25/8</title>
</head>
<body>
<!-- Pre Loader -->
<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="spinner-border" style="width: 3rem; height: 3rem;"></div>
            {{--                    <img src="/storage/images/preloder-img.png" alt="Images">--}}
            <h2>Загрузка контента...</h2>
        </div>
    </div>
</div>
<!-- End Pre Loader -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="/" class="logo">
            <img src="public/images/logos/logo-1.png" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="/">
                    <img src="/storage/images/logos/logo-1.png" alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link active">
                                Главная
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Дополнительно
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">
                                        О Нас
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Каталог
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="/shop-details" class="nav-link">
                                                Каталог
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="cart.html" class="nav-link">
                                                Корзина
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tracking-order.html" class="nav-link">
                                                Отслеживание заказа
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="customer-services.html" class="nav-link">
                                                Ремонт-Сервис
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="checkout.html" class="nav-link">
                                                Просмотренное
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="wishlist.html" class="nav-link">
                                                Желаемое
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">
                                        FAQ
                                    </a>
                                </li>

                                @auth()
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Аккаунт
                                            <i class='bx bx-chevron-down'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="/profile" class="nav-link">
                                                    Профиль
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <form action="/logout" method="POST" id="logoutFrom">@csrf
                                                <a href="#" type="submit" onclick="logoutFrom.submit(); return false;">
                                                    Выйти
                                                </a>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Аккаунт
                                            <i class='bx bx-chevron-down'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="/login" class="nav-link">
                                                    Войти
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/register" class="nav-link">
                                                    Зарегистрироваться
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/forget-password" class="nav-link">
                                                    Забыл пароль?
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                @endauth()

                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">
                                        Политика приватности
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="coming-soon.html" class="nav-link">
                                        Скоро...
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="shop-grid.html" class="nav-link">
                                Каталог
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Блог
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog-1.html" class="nav-link">
                                        Новости
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-2.html" class="nav-link">
                                        Скидки
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">
                                        Скоро...
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">
                                Контакты
                            </a>
                        </li>
                    </ul>

                    <div class="nav-right-side">
                        <ul class="nav-right-list">
                            @auth()
                                <li><a href="/dashboard"><i class="fa-regular fa-user fa-sm"></i></a></li>
                            @else
                                <li><a href="/login"><i class="fa-regular fa-user fa-sm"></i></a></li>
                            @endauth
                            <li><a href="#"><i class='bx bx-heart'></i></a></li>
                            <li class="cart-span">
                                <a href="#"><i class='bx bx-cart'></i></a>
                                <span>1</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="side-nav-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="circle-inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="side-nav-inner">
                    <div class="side-nav justify-content-center align-items-center">
                        <div class="side-nav-item">
                            <ul class="nav-right-list">
                                <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li class="cart-span">
                                    <a href="#"><i class='bx bx-cart'></i></a>
                                    <span>1</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
@yield('content')
<!-- Footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="footer-top pt-100 pb-70">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="/">
                                <img src="/storage/images/logos/footer-logo.png" class="footer-logo1" alt="Images">
                                <img src="/storage/images/logos/logo-1.png" class="footer-logo2" alt="Images">
                            </a>
                        </div>
                        <p>
                            Мы один из самых больших сетей магазинов 25/8. Опыт работы более 12 лет.
                        </p>
                        <ul class="footer-list-contact">
                            <li>
                                <i class='bx bx-home'></i>
                                <a href="#">г. Москва, ул. Арбат, д. 1</a>
                            </li>
                            <li>
                                <i class='bx bx-phone-call' ></i>
                                <a href="tel:+1(123)-456-7890">+7-(495)-77-99-88</a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <a href="mailto:hello@hilo.com">example@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3>Сервисы</h3>
                        <ul class="footer-list">
                            <li>
                                @auth()
                                    <a href="/profile" target="_blank">
                                        Профиль
                                    </a>
                                @else
                                    <a href="/login" target="_blank">
                                        Войти
                                    </a>
                                @endauth
                            </li>
                            <li>
                                <a href="tracking-order.html" target="_blank">
                                    Отслеживание заказов
                                </a>
                            </li>
                            <li>
                                <a href="customer-services.html" target="_blank">
                                    Ремонт-Сервис
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.html" target="_blank">
                                    Желаемое
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3>Информация</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="index.html" target="_blank">
                                    Главная
                                </a>
                            </li>
                            <li>
                                <a href="about.html" target="_blank">
                                    О Нас
                                </a>
                            </li>
                            <li>
                                <a href="blog-details.html" target="_blank">
                                    Блог
                                </a>
                            </li>
                            <li>
                                <a href="shop-details.html" target="_blank">
                                    Каталог
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3>Подписаться на нас</h3>
                        <p>Если вы хотите следитть за нашими новостями, подписывайтесь!</p>
                        <form class="footer-form-area">
                            <input type="email" class="form-control" placeholder="Email">
                            <button class="subscribe-btn" type="submit">
                                <i class='bx bx-paper-plane'></i>
                            </button>
                        </form>

                        <ul class="social-link">
                            <li>
                                <a href="#" target="_blank"><i class='bx bxl-vk'></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class='bx bxl-telegram'></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="copy-right-area">
            <div class="copy-right-text">
                <p>
                    Copyright @<script>document.write(new Date().getFullYear())</script>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->


<!-- Jquery Min JS -->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap Min JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Nice Select Min JS -->
<script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
<!-- Wow Min JS -->
<script src="{{ asset('assets/js/wow.min.js')}}"></script>
<!-- Meanmenu JS -->
<script src="{{ asset('assets/js/meanmenu.js')}}"></script>
<!-- Jquery Ui Min JS -->
<script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
<!-- Ajaxchimp Min JS -->
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
<!-- Form Validator Min JS -->
<script src="{{ asset('assets/js/form-validator.min.js')}}"></script>
<!-- Contact Form JS -->
<script src="{{ asset('assets/js/contact-form-script.js')}}"></script>
<!-- Mixitup Min JS -->
<script src="{{ asset('assets/js/mixitup.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js')}}"></script>
{{--Font Awesome--}}
<script src="https://kit.fontawesome.com/1fea131cc0.js" crossorigin="anonymous"></script>
</body>
</html>

