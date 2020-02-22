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
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search by product name, location, or by brand">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary" type="button">Search</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="card" style="width: 100%;">
                <img class="card-img-top" src="https://via.placeholder.com/300">
                <div class="card-body">
                  <span class="float-right text-md text-bold">PHP 200.00</span>
                  <h3 class="card-title">
                    Product Name
                    <br>
                    <span class="text-sm">By Bagobo Tribe</span>
                  </h3>
                  <a href="#" class="btn btn-sm btn-outline-primary">
                    <i class="ni ni-cart"></i> Add to Cart
                  </a>
                  <a href="/products/1" class="btn btn-sm btn-outline-secondary">
                    Learn More
                  </a>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card" style="width: 100%;">
                <img class="card-img-top" src="https://via.placeholder.com/300">
                <div class="card-body">
                  <span class="float-right text-md text-bold">PHP 200.00</span>
                  <h3 class="card-title">
                    Product Name
                    <br>
                    <span class="text-sm">By Bagobo Tribe</span>
                  </h3>
                  <a href="#" class="btn btn-sm btn-outline-primary">
                    <i class="ni ni-cart"></i> Add to Cart
                  </a>
                  <a href="/products/1" class="btn btn-sm btn-outline-secondary">
                    Learn More
                  </a>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card" style="width: 100%;">
                <img class="card-img-top" src="https://via.placeholder.com/300">
                <div class="card-body">
                  <span class="float-right text-md text-bold">PHP 200.00</span>
                  <h3 class="card-title">
                    Product Name
                    <br>
                    <span class="text-sm">By Bagobo Tribe</span>
                  </h3>
                  <a href="#" class="btn btn-sm btn-outline-primary">
                    <i class="ni ni-cart"></i> Add to Cart
                  </a>
                  <a href="/products/1" class="btn btn-sm btn-outline-secondary">
                    Learn More
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection