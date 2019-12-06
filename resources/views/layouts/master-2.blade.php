@include( 'components.header' )
@include( 'components.navbar' )

    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Causes</h2>
                    <p>Platea nullam nostra laoreet potenti hendrerit laoreet enim nisl</p>
                </div>
            </div>
        </div>
    </section>

    @yield( 'content' )

@include( 'components.footer' )
