@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
<div class="header bg-white py-7 py-lg-8">
  <div class="container products">
    <div class="header-body mt-5 mb-7">
      <div class="row">
        <div class="col-6 offset-3">
          <h1 class="text-center display-1">{{ $seller->name }}</h1>
          <p class="text-center">
            The {{ $seller->name }} constitute one of the largest groups among the indigenous peoples of southern Mindanao.
          </p>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-2">
          <h3>Categories</h3>
          <ul class="list-categories">
            <li>
              <a href="/sellers/{{ $seller->id }}?search=health" class="nav-link nav-link-icon">
                Health
              </a>
            </li>
            <li>
              <a href="/sellers/{{ $seller->id }}?search=groceries" class="nav-link nav-link-icon">
                Groceries
              </a>
            </li>
            <li>
              <a href="/sellers/{{ $seller->id }}?search=lifestyle" class="nav-link nav-link-icon">
                Lifestyle
              </a>
            </li>
            <li>
              <a href="/sellers/{{ $seller->id }}?search=fashion" class="nav-link nav-link-icon">
                Fashion
              </a>
            </li>
            <li>
              <a href="/sellers/{{ $seller->id }}?search=accessories" class="nav-link nav-link-icon">
                Accessories
              </a>
            </li>
            <li>
              <a href="/sellers/{{ $seller->id }}?search=handicraft" class="nav-link nav-link-icon">
                Handicraft
              </a>
            </li>
            <li>
              <a href="/sellers/{{ $seller->id }}?search=sports" class="nav-link nav-link-icon">
                Sports
              </a>
            </li>
          </ul>
        </div>
        <div class="col-10">
          <div class="row">
            <div class="col-12">
              <form action="/sellers/{{ $seller->id }}?" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control"  placeholder="Search by product name, location, or by brand" name="search" value="{{ $search }}">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                    <a href="/sellers/{{ $seller->id }}" class="btn btn-outline-primary ml-3" type="submit">Clear</a>
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
                <div class="col-4 mb-3">
                  <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="{{ asset('storage/products/' . $product->cover_image) }}" style="height: 200px">
                    <div class="card-body">
                      <span class="float-right text-md text-bold">PHP {{ $product->unit_price }}</span>
                      <h3 class="card-title">
                        <a href="/products/{{ $product->id }}" class="text-primary">
                          {{ $product->name }}
                        </a>
                      </h3>
                      <a href="#" class="add-to-cart-button btn btn-sm btn-outline-primary" data-var-id="{{ $product->id }}">
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
                    <p class="lead">No Products found</p>
                </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="loader-modal">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="text-center">
          <span class="fas fa-circle-notch fa-spin fa-2x fa-fw mt-2"></span>
          <h3 class="my-2">Procession request...</h3>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      $('body').on('click', '.add-to-cart-button', function() {
        var thisElement = $(this);

        $('#loader-modal').modal({
          'backdrop': 'static',
          'show': true
        });

        setTimeout(function() {
          $.ajax({
            url: '{{ route("pages.carts.add") }}',
            headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            method: 'POST',
            data: {
              product_id: thisElement.attr('data-var-id')
            },
            dataType: 'json',
            success: function(response) {
              $('#loader-modal').modal('hide');

              alert(response.message);
            },
            error: function(err) {
              var win = window.open();
              win.document.write(err.responseText);
            }
          });
        }, 500);

        return false;
      });
    });
  </script>
@endpush
