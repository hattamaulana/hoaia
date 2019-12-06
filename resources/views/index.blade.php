@extends( 'master' )

@section('title')
    Hoaia
@endsection

@section('content')
    @include( 'components.content.big-banner' )
    @include( 'components.content.hutan-banner' )

    <!--================ Start About Us Area =================-->
    <section class="about_area section_gap_bottom">
        <div class="container">
            <div class="row">
                <div class="single_about row">
                    <div class="col-lg-6 col-md-12 text-center about_left">
                        <div class="about_thumb">
                            <img src="{{ asset( 'vendor/seelife/img/about-img.jpg' ) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about_right">
                        <div class="about_content">
                            <h2>
                                We are nonprofit team <br>
                                and work worldwide
                            </h2>
                            <p>
                                Their multiply doesn't behold shall appear living heaven second
                                roo lights. Itself hath thing for won't herb forth gathered good
                                bear fowl kind give fly form winged for reason
                            </p>
                            <p>
                                Land their given the seasons herb lights fowl beast whales it
                                after multiply fifth under to it waters waters created heaven
                                very fill agenc to. Dry creepeth subdue them kind night behold
                                rule stars him grass waters our without
                            </p>
                            <a href="#" class="primary_btn">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Us Area =================-->

    <!--================ Start Subscribe Area =================-->
    <div class="container">
        <div class="subscribe_area">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center">
                        <h1 class="text-white mr-auto">Do you have a question?</h1>
                        <div id="mc_embed_signup ml-auto">
                            <button class="ml-10 primary_btn yellow_btn btn sub-btn rounded">PESAN</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Subscribe Area =================-->
@endsection
