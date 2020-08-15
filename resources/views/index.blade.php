@extends( 'layouts.app' )

@section('brand')
    {{ asset( 'vendor/seelife/img/logo.png' ) }}
@endsection

@section('nav-link', 'nav-item-light')

@section('content')
    @component('components.home-banner', ['shown' => 'big-banner'])
    @endcomponent

    @include( 'components.content.hutan-banner' )

    <!--================ Start About Us Area =================-->
    <section class="about_area section_gap_bottom">
        <div class="container">
            <div class="row">
                <div class="single_about row">
                    <div class="col-lg-6 col-md-12 text-center about_left">
                        <div class="about_thumb">
                            <img src="{{ asset( 'vendor/seelife/img/about-img.jpg' ) }}"
                                class="img-fluid"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about_right">
                        <div class="about_content">
                            <h2>
                                Hoaia
                            </h2>
                            <p>
                                Hoaia adalah situs donasi untuk reboisasi dengan cara donasi tunai atau pengiriman bibit tanaman langsung.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Us Area =================-->

    @include( 'components.content.message' )
@endsection
