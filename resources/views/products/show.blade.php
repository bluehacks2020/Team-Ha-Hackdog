@extends('layouts.app')

@section('content')
<div class="products-show">
    <div class="header py-7 py-lg-8">
        <div class="header-body">
            <div class="row pl-5">
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-body">
                            <img class="img-responsive" src="{{ asset('img/products/bag.jpg') }}" alt="">
                            <h1 class="custom-h3">Rediscovering Lanuza’s Agsam: Surigao del Sur’s indigenous fashion statement</h1>
                            <p>Indigenous crafts and arts passed from one generation to the next has slowly become a rarity. 
                                Often most some of the cultural crafts of our Indigenous People (IP) 
                                have slowly vanished as the younger generation has become less and less interested on traditional works of arts, 
                                or in this case traditional fashion accessories.</p>
                                <hr class="divider">
                            <img class="img-desc" src="{{ asset('img/products/weaving.jpg') }}" alt="">
                            <p class="font-italic text-center">A woman in Barangay Nurcia, Lanuza makes use of their free time in hand weaving.</p>
                            <img class="img-desc" src="{{ asset('img/products/rattan.jpg') }}" alt="">
                            <p class="font-italic text-center">Agsam fibers with one of the simplest single layer design for 
                                bracelets and necklaces made by the Indigenous Mamanwa women.</p>
                                <br>
                                <br>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, deleniti magnam, 
                                debitis corporis sint quisquam officia nam reiciendis voluptatem quam atque eius, ex obcaecati et.
                                orem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, deleniti magnam, 
                                debitis corporis sint quisquam officia nam reiciendis voluptatem quam atque eius, ex obcaecati et.
                                <br>
                                <br>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, deleniti magnam, 
                                debitis corporis sint quisquam officia nam reiciendis voluptatem quam atque eius, ex obcaecati et.
                                orem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, deleniti magnam, 
                                debitis corporis sint quisquam officia nam reiciendis voluptatem quam atque eius, ex obcaecati et.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow p-4 card-fixed-right mr-4">
                        <h3 class="custom-h3">Hand Woven Bag</h3>
                        <h5 class="custom-h5">by <span class="text-blue">Manobo Tribe</span></h5>
                        <h5 class="custom-h5">Price: <span>Php 150.00</span></h5>
                        <h5 class="custom-h5">Category: <span>Fashion</span></h5>
                        <button type="button" class="btn btn-danger mb-3">Add to Cart</button>
                        <a href="/checkout" type="button" class="btn btn-outline-info">Checkout</a>
                    </div>
                </div>
            </div>
    </div>
</div>

<div class="container mt--10 pb-5"></div>
@endsection