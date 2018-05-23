@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Register') }}</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group form-group has-icon-left form-control-name">
                            <label for="name" class="sr-only">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter username">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group form-group has-icon-left form-control-email">
                            <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" required placeholder="Enter email address">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group form-group has-icon-left form-control-password">
                            <label for="password" class="sr-only">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control form-control-lg" name="password" required placeholder="Enter password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group form-group has-icon-left form-control-password">
                            <label for="password-confirm" class="sr-only">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required placeholder="Confirm password">

                            <br>
                            <!-- Google reCaptcha -->
                            <div class="title"> 
                                <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-submit">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">
                                        {{ __('Register') }}
                            </button>                       
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
