@extends( 'layouts.app' )

@section('brand')
    {{ asset( 'vendor/seelife/img/logo.png' ) }}
@endsection

@section('nav-link', 'nav-item-dark')

@section('content')
    <!-- Sign up form -->
    <section class="signup">
        <div class="container-regform">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name"
                                   class="@error('name') is-invalid @enderror"
                                   value="{{ old('name') }}" required autocomplete="name" autofocus/>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" placeholder="Your Email Address"
                                   class="@error('email') is-invalid @enderror"
                                   value="{{ old('email') }}" required autocomplete="email"/>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" placeholder="Secure Password"
                                   class="@error('password') is-invalid @enderror"
                                   required autocomplete="new-password" />

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="password_confirmation" placeholder="Repeat Your Password"
                                   required autocomplete="new-password"/>
                        </div>

                        <div class="form-group form-button">
                            <button type="submit" class="btn btn-success">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>

                <div class="signup-image">
                    <figure><img src="{{ asset('vendor/regform/images/signup-image.jpg') }}" alt="sing up image"></figure>
                    <a href="/login" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sign Up -->

    @include( 'components.content.message' )
@endsection
