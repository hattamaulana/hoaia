@if($shown === 'big-banner')
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="banner_content">
                    <p class="upper_text">Ulurkan Tanganmu</p>
                    <h2>Untuk membuat Bumi lebih Hijau</h2>
                    <a class="primary_btn mr-20" href="{{ route( 'user.donation' ) }}">
                        DONASI
                    </a>
                </div>
            </div>
        </div>
    </section>

@elseif($shown === 'parralax-banner')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>@yield('title-banner')</h2>
                    <p>@yield('desc-banner')</p>
                </div>
            </div>
        </div>
    </section>
@endif

