@extends('layouts.app')

@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Item added to cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <p>1 item(s) in cart</p>
        </div>
        <div>
          <img class="img-checkout " src="{{asset('img/products/bag.jpg')}}" alt="bag">
          <p>Hand Woven Bag</p>
          <p>Quantity: <span class="text-blue">1</span></p>
          <p>Price: <span class="text-blue">Php 150.00</span></p>
        </div>
        <hr class="mb-0">
        <p class="text-right font-weight-700 m-0">Subtotal: Php 150.00</p>
      </div>
      <div class="modal-footer">
        <a href="/checkout" class="btn btn-default">View Cart</a>
        <a href="/products" type="button" class="btn btn-default">Add Item</a>
        <a href="/checkout" type="button" class="btn btn-danger">Checkout</a>
      </div>
    </div>
  </div>
</div>
<div class="products-show">
    <div class="header py-7 py-lg-8">
        <div class="header-body">
            <div class="row pl-5">
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-body">
                            <img class="img-responsive" src="{{ asset('storage/products/' . $product->cover_image) }}" style="width: 80%">
                            <h1 class="custom-h3">
                                Rediscovering Lanuza’s Agsam: Surigao del Sur’s indigenous fashion statement
                            </h1>
                            <p>
                                Indigenous crafts and arts passed from one generation to the next has slowly become a rarity.
                                Often most some of the cultural crafts of our Indigenous People (IP)
                                have slowly vanished as the younger generation has become less and less interested on traditional works of arts,
                                or in this case traditional fashion accessories.
                            </p>
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
                        <h3 class="custom-h3">{{ $product->name }}</h3>
                        <h5 class="custom-h5">
                          <a href="/sellers/{{ $product->seller->id }}" class="text-sm">
                            By {{ $product->seller->name }}
                          </a>
                        </h5>
                        <h5 class="custom-h5">Price: <span>Php {{ $product->unit_price }}</span></h5>
                        <h5 class="custom-h5">Category: <span>{{ $product->category }}</span></h5>
                        <button type="button" class="btn btn-default mb-3" data-toggle="modal" data-target="#exampleModal">Add to Cart</button>
                        <a href="/checkout" type="button" class="btn btn-outline-info">Checkout</a>
                    </div>
                </div>
            </div>
    </div>
</div>

<div class="container mt--10 pb-5"></div>
@endsection