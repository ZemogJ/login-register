@extends('layouts.app')
<link href="{{ asset('/css/login.css') }}" rel="stylesheet">

@section('content')
<div class="container">
    <div class="form-box">
        <div class="tittle"><strong>{{ __('Register') }}</strong></div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                @csrf

                        <div for="name" class="input-field" id="nameField">
                            <input id="name" type="text" placeholder="Name" class="textField @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

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

                    <div for="confirmPassword" class="input-field">

                        <input id="password-confirm" type="password" placeholder="Confirm Password" class="textField" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <br/>

                    <div class="btn-field">
                        <button type="submit" class="btn-field button">
                            {{ __('Register') }}
                        </button>
                    </div>
                    <br/>
                    <div>
                    <p>Already have an account? <a href="{{ route('login') }}"><strong class="loginNow">{{ __('Log In') }}</strong></a></p>
                    </div>
                </form>
            
            </div>
    </div>
</div>
@endsection
