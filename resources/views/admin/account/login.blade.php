<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <title>Login Form</title>
</head>

<body>
    <div class="login">
        <img src="{{ asset('assets/img/login-bg.png') }}" alt="login image" class="login__img">
        <form action="{{ route('authenticate') }}" class="login__form" method="POST">
            @csrf
            <h1 class="login__title">Login</h1>

            <div class="login__content">
                @include('message')
                <div class="login__box">
                    <i class="ri-user-3-line login__icon"></i>

                    <div class="login__box-input">
                        <input type="text" name="idendity"
                            class="@error('idendity')
                                    is-invalid
                                @enderror login__input"
                            id="login-email" placeholder=" ">
                        <label for="login-email" class="login__label">Phone Or Email</label>
                        @error('idendity')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="login__box">
                    <i class="ri-lock-2-line login__icon"></i>

                    <div class="login__box-input">
                        <input type="password" name="password"
                            class="@error('password')
                                    is-invalid
                                @enderror login__input"
                            id="login-pass" placeholder=" ">
                        <label for="login-pass" class="login__label">Password</label>
                        <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                        @error('password')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="login__check">
                <div class="login__check-group">
                    <input type="checkbox" class="login__check-input" id="login-check">
                    <label for="login-check" class="login__check-label">Remember me</label>
                </div>

                <a href="{{ route('forgotPassword') }}" class="login__forgot">Forgot Password?</a>
            </div>

            <button class="login__button">Login</button>

            <p class="login__register">
                Don't have an account? <a href="{{ route('register') }}">Register</a>
            </p>
        </form>
    </div>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>

</html>
