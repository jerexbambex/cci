<!DOCTYPE html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signin | Radio Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link href="/admin/dist-assets/css/themes/lite-purple.min.css" rel="stylesheet">
    <style>
        /*.auth-layout-wrap {
            background-image: url(/admin/dist-assets/images/Hinterrhein.png);
            background-color: #5e478a;
            position: relative;
        }
        .auth-layout-wrap::before {
            opacity: 0.3;
            position: absolute;
        }*/
    </style>
</head>
<div class="auth-layout-wrap">
    <div class="auth-content">
        <div class="card o-hidden">
            <div class="row">
                <div class="col-md-6">
                    <div class="p-4">
                        <div class="auth-logo111 text-center mb-4"><img src="/admin/dist-assets/images/logo.jira.png" alt="Cambridge College Ikeja"></div>
                        <h1 class="mb-3 text-18">Sign In</h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-rounded btn-primary btn-block mt-2">Sign In</button>
                        </form>
                        {{-- <div class="mt-3 text-center">
                            <a class="text-muted" href="forgot.html">
                                <u>Forgot Password?</u>
                            </a>
                        </div> --}}
                        {{-- @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif --}}
                    </div>
                </div>
                <div class="col-md-6 text-center" style="background-size: cover;background-image: url(/admin/dist-assets/images/photo-long-3.jpg)">
                    <div class="pr-3 auth-right">
                        {{-- <a class="btn btn-rounded btn-outline-primary btn-outline-email btn-block btn-icon-text" href="">
                            <i class="i-Mail-with-At-Sign"></i> Sign up with Email
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>