@extends('layouts.app')
<link href="{{ asset('/css/login.css') }}" rel="stylesheet">

@section('content')
<div class="container">
    <div class="form-box">
        <div class="tittle"><strong>{{ __('Login') }}</strong></div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                        @csrf

                    <div for="email" class="input-field" id="nameField">

                        <input id="email" type="email" placeholder="Email Address" class="textField @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div for="password" class="input-field">

                        <input id="password" type="password" placeholder="Password" class="textField @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <input class="remember-me-label" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="remember-me-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <br/>

                    <div class="btn-field"> 
                            <button type="submit" class="btn-field button">
                                {{ __('Log in') }}
                            </button>
                    </div>
                    <br/>

                    <div>
                        @if (Route::has('password.request'))
                            <a class="forget-pass" href="{{ route('password.request') }}">
                                {{ __('Forgot Password?') }}
                            </a>
                         @endif
                    </div>
                    <div class="navbar-nav">
                        <!-- Existing links in the navbar -->

                        <a class="nav-link" href="{{ route('register') }}">Don't have an account? <strong class="registerNow">{{ __('Register Now') }}</strong></a>
                    </div>
                </form>
            </div>
    </div>
</div>
@endsection
