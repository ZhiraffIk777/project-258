{{--<x-guest-layout>--}}
{{--    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">--}}
{{--        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--    </div>--}}

{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('password.email') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Email Password Reset Link') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
@extends('templates/header-without-footer')
@section('content')
{{--    <div class="w-25 mx-auto">--}}
{{--        <h2 class="mt-5 text-center section-title">Востановить пароль</h2>--}}
{{--        <form method="POST" action="/password/email">--}}
{{--            @csrf--}}
{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <div class="input-group flex-nowrap mt-3 mx-auto">--}}
{{--                    <input type="email" name="email" class="form-control" placeholder="Email" aria-describedby="addon-wrapping">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Forget Password and Remember me -->--}}
{{--            <div class="mt-2 text-center">--}}
{{--                <a href="/login" class="me-4">Авторизоваться</a>--}}
{{--            </div>--}}

{{--            <!-- Submit -->--}}
{{--            <div>--}}
{{--                <div class="d-grid gap-2 mx-auto mt-3">--}}
{{--                    <button class="btn btn-primary" type="submit">Отправить код на Email</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
<!-- User Area -->
<div class="user-area mt-3 pb-70">
    <div class="container">
        <div class="user-width">
            <div class="user-form">
                <div class="contact-form">
                    <h2>Восстановить пароль</h2>
                    <form>
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-lg-12 form-condition">
                                <div class="agree-label">
                                    <label>
                                        <a href="/register" class="reg">Регистрация</a>
                                        <a class="forget" href="/login">Авторизация</a>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-12 ">
                                <button type="submit" class="default-btn btn-bg-three">
                                    Отправить код на почту
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- User Area End -->
@endsection
