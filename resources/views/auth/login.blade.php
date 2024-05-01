{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}

@extends('templates/header-without-footer')
@section('content')
{{--    <div class="w-25 mx-auto">--}}
{{--        <h2 class="mt-5 text-center section-title">Авторизация</h2>--}}
{{--        <form method="POST" action="/login">--}}
{{--            @csrf--}}
{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <div class="input-group flex-nowrap mt-3 mx-auto">--}}
{{--                    <span class="input-group-text" id="addon-wrapping">@</span>--}}
{{--                    <input type="email" name="email" class="form-control" placeholder="Email" aria-describedby="addon-wrapping">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div>--}}
{{--                <div class="input-group flex-nowrap mt-3">--}}
{{--                    <span class="input-group-text" id="addon-wrapping">#</span>--}}
{{--                    <input type="password" name="password" class="form-control" placeholder="Пароль" aria-describedby="addon-wrapping">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Forget Password and Remember me -->--}}
{{--            <div class="mt-2 text-center">--}}
{{--                <a href="/register" class="me-4">Регистрация</a>--}}
{{--                <a href="/forget-password" class="">Забыл пароль?</a>--}}
{{--            </div>--}}

{{--            <!-- Submit -->--}}
{{--            <div>--}}
{{--                <div class="d-grid gap-2 mx-auto mt-3">--}}
{{--                    <button class="btn btn-primary" type="submit">Авторизация</button>--}}
{{--                </div>--}}
{{--            </div>--}}

            <!-- User Area -->
            <div class="user-area mt-3 pb-70">
                <div class="container">
                    <div class="user-width">
                        <div class="user-form">
                            <div class="contact-form">
                                <h2>Авторизация</h2>
                                <form method="POST" action="/login">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" required data-error="Заполните ваш email!" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control" type="password" name="password" placeholder="Пароль">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 form-condition">
                                            <div class="agree-label">
                                                <label>
                                                    <a href="/register" class="reg">Регистрация</a>
                                                    <a class="forget" href="/forget-password">Забыл пароль?</a>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mt-2">
                                            <button type="submit" class="default-btn btn-bg-three">
                                                Авторизоваться
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

{{--        </form>--}}
{{--    </div>--}}
@endsection
