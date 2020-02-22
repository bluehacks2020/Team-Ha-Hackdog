@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
<div class="header bg-white py-7 py-lg-8">
  <div class="container products">
    <div class="header-body mt-5 mb-7">
      <div class="row">
        <div class="col-2">
          <h3>Categories</h3>
          <ul class="list-categories">
            <li>
              Health & Beauty
            </li>
            <li>
              Babies & Toys
            </li>
            <li>
              Groceries
            </li>
            <li>
              Home & Living
            </li>
            <li>
              Women's Fashion
            </li>
            <li>
              Men's Fashion
            </li>
            <li>
              Fashion Accessories
            </li>
            <li>
              Sports & Lifestyle
            </li>
          </ul>
        </div>
        <div class="col-10">
          <div class="row">
            <div class="col-12">
              <form action="/products?" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control"  placeholder="Search by product name, location, or by brand" name="search" value="<?= $search ?>">
                    <div class="input-group-append">
                      <button class="btn btn-outline-primary" type="submit">Search</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
          @if(count($products) > 0 || $search != null)

            @if($search != null && count($products) == 0)
                <div class="row mt-3 mb-5">
                    <div class="col text-center">
                        <p class="lead">Product not found</p>
                    </div>
                </div>
            @endif

            @if(count($products) > 0)
            <div class="row">

              @foreach ($products as $product)
                <div class="col-4">
                  <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="{{ asset('storage/products/' . $product->cover_image) }}" style="height: 200px">
                    <div class="card-body">
                      <span class="float-right text-md text-bold">PHP {{ $product->unit_price }}</span>
                      <h3 class="card-title">
                        {{ $product->name }}
                        <br>
                        <span class="text-sm">By {{ $product->seller->name }}</span>
                      </h3>
                      <a href="#" class="btn btn-sm btn-outline-primary">
                        <i class="ni ni-cart"></i> Add to Cart
                      </a>
                      <a href="/products/{{ $product->id }}" class="btn btn-sm btn-outline-secondary">
                        Learn More
                      </a>
                    </div>
                  </div>
                </div>
              @endforeach

            </div>
            <div class="row mt-2">
              {{ $products->links() }}
            </div>
            @endif
          @else
            <div class="row mt-3 mb-5">
                <div class="col text-center">
                    <p class="lead">Product not found</p>
                </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection