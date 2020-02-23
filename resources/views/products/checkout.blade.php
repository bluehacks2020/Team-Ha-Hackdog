@extends('layouts.app')

@section('content')
    <?php
        $subtotal = 0;
    ?>
    <div class="checkout">
        <div class="header py-7 py-lg-8">
            <div class="header-body">
                <div class="row">
                    <div class="col-lg-10 ml-auto mr-auto">
                        <h1>Shopping Cart</h1>
                        <div class="card shadow">
                            <div class="card-header bg-default">
                            </div>
                            <div class="card-body">
                                @if(count($cart) > 0)
                                    @foreach($cart as $index => $cart_item)
                                        <div class="row cart-item" data-var-id="{{ $cart_item->id }}">
                                            <div class="col-lg-6">
                                                <img class="img-checkout" src="{{ asset('storage/products/' . $cart_item->cover_image) }}">
                                                <p>{{ $cart_item->name }}</p>
                                                <p>Category: {{ $cart_item->category }}</p>
                                                <button type="button" class="delete-to-cart-button btn btn-outline-danger btn-sm" data-var-id="{{ $cart_item->id }}">Remove</button>
                                            </div>
                                            <div class="col-lg-2">
                                                <p>Price</p>
                                                <p>Php {{ number_format($cart_item->unit_price, 2) }}</p>
                                            </div>
                                            <div class="col-lg-2">
                                                <p>Quantity</p>
                                                <input type="number" class="cart-item-quantity form-control" min="1" value="{{ $cart_item->added_quantity_to_cart }}">
                                                <input type="hidden" class="cart-item-unit-price form-control" value="{{ $cart_item->unit_price }}">
                                            </div>
                                            <div class="col-lg-2">
                                                <p>Total</p>
                                                <p class="cart-item-total">Php {{ number_format(((double) $cart_item->unit_price * (double) $cart_item->added_quantity_to_cart), 2) }}</p>
                                            </div>
                                        </div>
                                        <?php $subtotal += ((double) $cart_item->unit_price * (double) $cart_item->added_quantity_to_cart); ?>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="card shadow w-50 float-right mt-3">
                            <div class="card-header">
                                <h1> Order Summary</h1>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h3 class="text-right">Sub-total:</h3>
                                        <h3 class="text-right">Tax:</h3>
                                        <h3 class="text-right">Total:</h3>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <h3 class="border-bottom"><span class="float-left">Php</span> <span class="cart-total-subtotal">{{ number_format($subtotal, 2) }}</span></h3>
                                        <h3 class="border-bottom"><span class="float-left">Php</span> <span class="cart-total-tax">{{ number_format(($subtotal * .12), 2) }}</span></h3>
                                        <h3 class="border-bottom"><span class="float-left">Php</span> <span class="cart-total-all">{{ number_format($subtotal + ($subtotal * .12), 2) }}</span></h3>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="/payment" type="button" class="btn btn-default float-right mt-3">Make Payment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        function updateTotal() {
            var subtotal = 0;
            var tax = 0;
            var total = 0;

            $('.cart-item').each(function() {
                var price = parseFloat($(this).find('.cart-item-unit-price').val());
                var quantity = parseFloat($(this).find('.cart-item-quantity').val());

                subtotal += price * quantity;
            });

            tax = subtotal * .12;
            total = subtotal + tax;

            $('.cart-total-subtotal').text(subtotal.toFixed(2));
            $('.cart-total-tax').text(tax.toFixed(2));
            $('.cart-total-all').text(total.toFixed(2));
        }

        $(document).ready(function() {
            $('body').on('change', '.cart-item-quantity', function() {
                var thisElement = $(this);
                var thisAncestor = thisElement.closest('.cart-item');

                var price = parseFloat(thisAncestor.find('.cart-item-unit-price').val());
                var quantity = parseFloat(thisElement.val());
                var total = price * quantity;

                setTimeout(function() {
                    $.ajax({
                        url: '{{ route("pages.carts.update") }}',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        method: 'POST',
                        data: {
                            product_id: thisAncestor.attr('data-var-id'),
                            quantity: quantity
                        },
                        dataType: 'json',
                        success: function(response) {
                            $(this).closest('.cart-item').find('.cart-item-total').text('Php ' + total.toFixed(2));

                            updateTotal();
                        },
                        error: function(err) {
                            var win = window.open();
                            win.document.write(err.responseText);
                        }
                    });
                }, 200);

                return false;
            });
            $('body').on('click', '.delete-to-cart-button', function() {
                var thisElement = $(this);

                $('#loader-modal').modal({
                    'backdrop': 'static',
                    'show': true
                });

                setTimeout(function() {
                    $.ajax({
                        url: '{{ route("pages.carts.delete") }}',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        method: 'POST',
                        data: {
                            product_id: thisElement.attr('data-var-id')
                        },
                        dataType: 'json',
                        success: function(response) {
                            window.location.reload();
                            $('#loader-modal').modal('hide');
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
