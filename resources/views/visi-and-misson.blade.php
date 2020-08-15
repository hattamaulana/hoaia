@extends( 'layouts.app' )

@section('brand')
    {{ asset( 'vendor/seelife/img/logo.png' ) }}
@endsection

@section('nav-link', 'nav-item-dark')

@section( 'content' )

    <section class="about_area section_gap_bottom" style="margin-top: 150px">
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
                                Visi
                            </h2>
                            <p>
                                1. Mendukung gerakan penghijauan untuk menyelamatkan Bumi. <br>
                                2. Penanaman rasa kepedulian terhadap alam dan lingkungan sekitar oleh masyarakat. <br>
                                3. Terbentuknya pecinta alam dan lingkungan hidup di masyarakat tanpa adanya batas ataupun perbedaan.
                            </p>
                            <h2>
                                Misi
                            </h2>
                            <p>
                                1. Mewujudkan pencegahan kerusakan dan pengendalian pencemaran sumber daya alam dan lingkungan hidup dalam rangka pelestarian fungsi lingkungan hidup <br>
                                2. Membuat program Tanam Seribu Pohon <br>
                                3. Membuat perubahan-perubahan kecil yang berdampak besar untuk Bumi tercinta.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include( 'components.content.message' )
@endsection
