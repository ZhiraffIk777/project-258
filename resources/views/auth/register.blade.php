{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ms-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
@extends('templates/header-without-footer')
@section('content')
{{--    <div class="w-25 mx-auto">--}}
{{--        <h2 class="mt-5 text-center section-title">Регистрация</h2>--}}
{{--    <form action="{{ route('register') }}" method="POST">--}}
{{--        @csrf--}}
{{--        <div class="input-group mb-3">--}}
{{--            <input type="text" name="name" class="form-control" placeholder="Фамилия Имя" aria-describedby="basic-addon1">--}}
{{--        </div>--}}
{{--        <div class="input-group mb-3">--}}
{{--            <input type="email" name="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1">--}}
{{--        </div>--}}
{{--        <div class="input-group mb-3">--}}
{{--            <input type="text" name="phone" class="form-control" placeholder="Телефон" aria-describedby="basic-addon1">--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="mb-3 col-sm-6">--}}
{{--                <input type="password" name="password" class="form-control" placeholder="Пароль" aria-describedby="basic-addon1">--}}
{{--            </div>--}}
{{--            <div class="mb-3 col-sm-6">--}}
{{--                <input type="password" name="password_confirmation" class="form-control" placeholder="Повторный пароль" aria-describedby="basic-addon1">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="mt-2 text-center">--}}
{{--            <a href="/login" class="">Уже есть аккаунт?</a>--}}
{{--        </div>--}}
{{--        <!-- Submit -->--}}
{{--        <div>--}}
{{--            <div class="d-grid gap-2 mx-auto mt-3">--}}
{{--                <button class="btn btn-primary" type="submit">Зарегистрироваться</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--    </div>--}}

<!-- User Area -->
<div class="user-area mt-3 pb-70">
    <div class="container">
        <div class="user-width">
            <div class="user-form">
                <div class="contact-form">
                    <h2>Регистрация</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" required data-error="Укажите ваш email" placeholder="Имя">
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" required data-error="Укажите ваш email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" required data-error="Укажите ваш email" placeholder="Телефон">
                                </div>
                            </div>


                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Пароль">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password_confirmation" placeholder="Повторный пароль">
                                </div>
                            </div>

                            <div class="col-lg-12 form-condition">
                                <div class="agree-label">
                                    <label>
                                        <a class="forget" href="/login">Авторизация</a>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-3">
                                <button type="submit" class="default-btn btn-bg-three">
                                    Регистрация
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
