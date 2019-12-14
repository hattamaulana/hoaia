@extends( 'layouts.app' )

@section('brand')
    {{ asset( 'vendor/seelife/img/logo.png' ) }}
@endsection

@section('nav-link', 'nav-item-light')
@section('title-banner', 'Hutan')
@section('desc-banner', 'Telusuri Hutan di Dunia ini.')

@section('content')
    @component('components.home-banner', ['shown' => 'parralax-banner'])
    @endcomponent

    @include( 'components.content.hutan-banner' )

    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @foreach($data as $i => $val)
                            <article class="row blog_item">
                                <div class="col-md-3">
                                    <div class="blog_info text-right">
                                        <div class="post_tag"></div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">{{$val->created_at}}<i class="lnr lnr-calendar-full"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="{{ asset('file_upload/'. $val->imgurl) }}" alt="">
                                        <div class="blog_details">
                                            <a href="{{ route('user.forest-detail', $val->id) }}"><h2>{{$val->name}}</h2></a>
                                            <p>{{ $val->description }}</p>
                                            <a href="{{ route('user.forest-detail', $val->id) }}" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts">
                                <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>

                        <aside class="single-sidebar-widget newsletter_widget">
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p class="text-bottom">You can unsubscribe at any time</p>
                            <div class="br"></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    @include( 'components.content.cta' )
@endsection
