@extends('layouts.app')

@section('content')
<div class="homepage">
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8">
                        <div>
                            <h1 class="text-white mb-3">Help the Indigenous people <br> by buying their products</h1>
                        </div>
                        <form action="?" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Looking for something...?" name="search">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            <div class="text-left pl-4">
                                <p class="d-inline text-white font-weight-700">
                                    Trending :
                                </p>
                                <a href="/products?search=bags" class="text-white font-weight-700">Bags,</a>
                                <a href="/products?search=chocolates" class="text-white font-weight-700">Chocolates</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-5 mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <img class="img-responsive" src="{{ asset('img/bg/indigenous_2.jpg') }}" alt="">
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="2000">
                <h1>Experience the joy of
                    transforming a community</h1>
                <p>Indigenous peoples are hard pressed to find more sources of income as they
                    remain among the poorest in the Philippines.
                    They are also faced with the possibility of losing their ancestral domain,
                    while they suffer from lack of access to basic social services such as health and education.</p>
            </div>
        </div>
    </div>
        <hr class="divider w-75">

    <div class="container p-5">
        <h1 class="text-center mb-5 custom-h1" data-aos="fade-right" data-aos-duration="1200">Every item you buy will make them smile.</h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" data-aos="fade-left" data-aos-duration="1500">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-7">
                            <h3>Manobo Community</h3>
                            <p>Indigenous peoples are hard pressed to find more sources of income as they
                                remain among the poorest in the Philippines.
                                They are also faced with the possibility of losing their ancestral domain,
                                while they suffer from lack of access to basic social services such as health and education.</p>
                        </div>
                        <div class="col-lg-5">
                            <img class="img-responsive" src="{{ asset('img/bg/indigenous_1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-7">
                            <h3>Mangyan Community</h3>
                            <p>Indigenous peoples are hard pressed to find more sources of income as they
                                remain among the poorest in the Philippines.
                                They are also faced with the possibility of losing their ancestral domain,
                                while they suffer from lack of access to basic social services such as health and education.</p>
                        </div>
                        <div class="col-lg-5">
                            <img class="img-responsive" src="{{ asset('img/bg/indigenous_2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-7">
                            <h3>Aeta Community</h3>
                            <p>Indigenous peoples are hard pressed to find more sources of income as they
                                remain among the poorest in the Philippines.
                                They are also faced with the possibility of losing their ancestral domain,
                                while they suffer from lack of access to basic social services such as health and education.</p>
                        </div>
                        <div class="col-lg-5">
                            <img class="img-responsive" src="{{ asset('img/bg/indigenous_1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="text-center text-white">
            <h1 class="custom-h1 text-white" data-aos="fade-right" data-aos-duration="1300">What we do</h1>
            <p class="custom-p" data-aos="fade-left" data-aos-duration="1700">We partner with local indigenous people to market their product</p>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        AOS.init();
    </script>
@endpush