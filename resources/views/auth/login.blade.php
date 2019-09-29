@extends('layouts.app')

@section('content')
<div class="pf-u-mt-xl"></div>
<div class="pf-l-bullseye">
    <div class="pf-l-bullseye__item">
        <div class="pf-c-card">
            <div class="pf-c-card__header pf-c-title pf-m-md">{{ __('Login') }}</div>

            <div class="pf-c-card__body">
                <form method="POST" action="{{ route('login') }}" class="pf-c-form">
                    @csrf

                    <div class="pf-c-form__group">
                        <label for="email" class="pf-c-form__label">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="pf-c-form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="pf-c-form__group">
                        <label for="password" class="pf-c-form__label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="pf-c-form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="pf-c-form__group">
                        <div class="pf-c-check">
                            <input class="pf-c-check__input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="pf-c-check__label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="pf-c-form__group pf-c-action">
                        <div class="pf-c-form__actions">
                            <button type="submit" class="pf-c-button pf-m-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('register'))
                                <a class="pf-c-button pf-m-secondary" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            @endif
                            @if (Route::has('password.request'))
                                <a class="pf-c-button pf-m-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
