@extends( 'layouts.app' )


@section('brand')
    {{ asset( 'vendor/seelife/img/logo.png' ) }}
@endsection

@section('nav-link', 'nav-item-light')

@section('title-banner', 'Hutan')
@section('desc-banner', 'Salah satu hutan di dunia ini.')

@section('content')
    @component('components.home-banner', ['shown' => 'parralax-banner'])
    @endcomponent
    @include( 'components.content.hutan-banner' )
    <section class="condition-area event-details-area section_gap">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="condition-left">
                    <img class="img-fluid" src="{{ asset('file_upload/'. $data->imgurl) }}" alt="">
                </div>
            </div>
            <div class="offset-lg-1 col-lg-5">
                <div class="condition-right">
                    <h2 class="mb-20">
                        {{ $data->name }}
                    </h2>
                    <p>
                        {{ $data->description }}
                    </p>
                    <ul>
                        <li>{{ $data->updated_at }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
