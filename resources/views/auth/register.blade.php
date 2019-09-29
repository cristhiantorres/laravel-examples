@extends('layouts.app')

@section('content')
<div class="pf-l-bullseye">
    <div class="pf-l-bullseye__item">
        <div class="col-md-8">
            <div class="pf-c-card">
                <div class="pf-c-card__header pf-c-title pf-m-md">{{ __('Register') }}</div>

                <div class="pf-c-card__body">
                    <form method="POST" class="pf-c-form" action="{{ route('register') }}">
                        @csrf

                        <div class="pf-c-form__group">
                            <label for="name" class="pf-c-form__label">{{ __('Name') }}</label>

                            <input id="name" type="text" class="pf-c-form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="pf-c-form__group">
                            <label for="email" class="pf-c-form__label">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="pf-c-form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="pf-c-form__group">
                            <label for="password" class="pf-c-form__label">{{ __('Password') }}</label>

                            <input id="password" type="password" class="pf-c-form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="pf-c-form__group">
                            <label for="password-confirm" class="pf-c-form__label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="pf-c-form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="pf-c-form__group pf-c-action">
                            <div class="pf-c-form__actions">
                                <button type="submit" class="pf-c-button pf-m-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
