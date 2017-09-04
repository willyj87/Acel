@extends ('layout.app')
@section ('navbar')
    @include ('layout.navbar')
@endsection
@section ('content')
    <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="images/header-bg-1.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated3">
                                <span><strong>ACEL</strong></span>
                            </h1>
                            <p class="animated2"><strong>A</strong>ssociation <strong>C</strong>amerounaise <strong>D</strong>es <strong>E</strong>tudiants <strong>D</strong>e Limoges</p>
                            <a href="#feature" class="page-scroll btn btn-primary animated1">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->

                <div class="item">
                    <img class="img-responsive" src="images/header-back.png" alt="slider">

                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated1">
                                <span>Bienvenue sur <strong>L'ACEL</strong></span>
                            </h1>
                            <p class="animated2">Mettez toutes les chances de votre côté pour réussir votre intégration</p>
                            <a href="#feature" class="page-scroll btn btn-primary animated3">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->

                <div class="item">
                    <img class="img-responsive" src="images//galaxy.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated2">
                                <span>La voie du <strong>Succès</strong></span>
                            </h1>
                            <p class="animated1">L'ACEL vous acceuille à bras ouverts<br>Grâce à nous vous étudierez en toute sérénité</p>
                            <a class="animated3 slider btn btn-primary btn-min-block" href="#">Rejoignez-nous</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
@endsection
@section ('footer')
    @include ('layout.footer')
@endsection

