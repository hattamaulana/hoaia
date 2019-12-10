@extends( 'layouts.app' )

@section('brand')
    {{ asset( 'vendor/seelife/img/logo.png' ) }}
@endsection

@section('nav-link', 'nav-item-dark')

@section('content')
    <!-- Sign in  Form -->
    <section class="sign-in">
        <div class="container-regform">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="{{ asset('vendor/regform/images/signin-image.jpg') }}" alt="sing up image"></figure>
                    <a href="/register" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign In</h2>
                    <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                        @csrf

                        <div class="form-group">
                            <label for="your_name">
                                <i class="zmdi zmdi-account material-icons-name"></i>
                            </label>

                            <input id="email" type="email"
                                   class="@error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" placeholder="Your EMail Address"
                                   required autocomplete="email" autofocus/>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="password" type="password"
                                   class="@error('password') is-invalid @enderror"
                                   name="password" required autocomplete="current-password"
                                   placeholder="Your Password"
                            />

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-check-input" type="checkbox"
                                   name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />

                            <label for="remember" class="label-agree-term"><span><span></span></span>
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div class="form-group form-button">
                            <button type="submit" class="btn btn-success">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sign In -->

    @include( 'components.content.message' )
@endsection
