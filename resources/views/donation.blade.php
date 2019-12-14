@extends( 'layouts.app' )

@section('brand')
    {{ asset( 'vendor/seelife/img/logo.png' ) }}
@endsection

@section('nav-link', 'nav-item-light')
@section('title-banner', 'Donasi')
@section('desc-banner', 'Telusuri Hutan yang perlu bantuan  di Dunia ini.')

@section('content')
    @component('components.home-banner', ['shown' => 'parralax-banner'])
    @endcomponent
    @include( 'components.content.hutan-banner' )

    <section class="features_causes">
        <div class="container">
            <div class="main_title">
                <h2>Featured causes</h2>
                <p>Creepeth called face upon face yielding midst is after moveth </p>
            </div>

            <div class="row">
                @foreach($data as $i => $val)
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <figure>
                                    <img class="card-img-top img-fluid" src="{{ asset('file_upload/'. $val->imgurl) }}" alt="Card image cap">
                                </figure>
                                <div class="card_inner_body">
                                    <h4 class="card-title">{{ $val->title }}</h4>
                                    <p class="card-text">
                                        {{ $val->description }}
                                    </p>
                                    <div class="d-flex justify-content-between raised_goal">
                                        <p><span>Target: {{ $val->plant }} Benih</span></p>
                                    </div>
                                    <div class="d-flex justify-content-between donation align-items-center">
                                        <a href="{{ route('user.donation-detail', $val->id) }}" class="primary_btn">donate</a>
                                        <p><span class="lnr lnr-heart"></span> {{ $val->transactions->count() }} Penyumbang</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include( 'components.content.message' )
@endsection
