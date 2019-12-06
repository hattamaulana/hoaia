@extends( 'layouts.master-2' )

@section('title')
    Hoaia
@endsection

@section('content')
    @include( 'components.content.hutan-banner' )

    <section class="features_causes">
        <div class="container">
            <div class="main_title">
                <h2>Featured causes</h2>
                <p>Creepeth called face upon face yielding midst is after moveth </p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="{{ asset( 'vendor/seelife/img/features/fc1.jpg' ) }}" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <h4 class="card-title">Education for every child</h4>
                                <p class="card-text">
                                    Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.
                                </p>
                                <div class="d-flex justify-content-between raised_goal">
                                    <p>Raised: $1533</p>
                                    <p><span>Goal: $2500</span></p>
                                </div>
                                <div class="d-flex justify-content-between donation align-items-center">
                                    <a href="#" class="primary_btn">donate</a>
                                    <p><span class="lnr lnr-heart"></span> 90 Donors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="{{ asset( 'vendor/seelife/img/features/fc2.jpg' ) }}" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <h4 class="card-title">Feeding the hungry people</h4>
                                <p class="card-text">
                                    Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.
                                </p>
                                <div class="d-flex justify-content-between raised_goal">
                                    <p>Raised: $1533</p>
                                    <p><span>Goal: $2500</span></p>
                                </div>
                                <div class="d-flex justify-content-between donation align-items-center">
                                    <a href="#" class="primary_btn">donate</a>
                                    <p><span class="lnr lnr-heart"></span> 90 Donors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="{{ asset( 'vendor/seelife/img/features/fc3.jpg' ) }}" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <h4 class="card-title">Providing cloth people</h4>
                                <p class="card-text">
                                    Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.
                                </p>
                                <div class="d-flex justify-content-between raised_goal">
                                    <p>Raised: $1533</p>
                                    <p><span>Goal: $2500</span></p>
                                </div>
                                <div class="d-flex justify-content-between donation align-items-center">
                                    <a href="#" class="primary_btn">donate</a>
                                    <p><span class="lnr lnr-heart"></span> 90 Donors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <nav class="blog-pagination justify-content-center d-flex">
                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
                        </a>
                    </li>
                    <li class="page-item"><a href="#" class="page-link">01</a></li>
                    <li class="page-item active"><a href="#" class="page-link">02</a></li>
                    <li class="page-item"><a href="#" class="page-link">03</a></li>
                    <li class="page-item"><a href="#" class="page-link">04</a></li>
                    <li class="page-item"><a href="#" class="page-link">09</a></li>
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    @include( 'components.content.message' )
@endsection
