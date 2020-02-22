@extends('layouts.dashboard')

@section('content')
    <div class="header py-7" style="background-color: #6b664d;"></div>
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-sm-12">
                @include('dashboard.partials.flash')
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Manage Orders</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Buyer</th>
                                    <th scope="col">Billing Address</th>
                                    <th scope="col">Shipping Address</th>
                                    <th scope="col">Item(s)</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">Total Amount to Pay</th>
                                    <th scope="col">Delivery Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($orders->count() > 0)
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{ $order->buyer->displayName() }}</td>
                                            <td>{{ $order->billignAddress->address }}</td>
                                            <td>{{ $order->shippingAddress->address }}</td>
                                            <td>
                                                @foreach($order->orderDetails as $order_detail)
                                                    <div class="mb-1">
                                                        <div><strong>Product:</strong> {{ $order_detail->product->name }} ({{ 'x' . $order_detail->quantity }})</div>
                                                        <div><strong>Seller:</strong> {{ $order_detail->product->seller->displayName() }}</div>
                                                    </div>
                                                @endforeach
                                            </td>
                                            <td>{{ $order->payment_method }}</td>
                                            <td>{{ $order->amount_to_pay }}</td>
                                            <td>
                                                <form action="{{ route('dashboard.orders.update_status') }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $order->id }}">
                                                    <div class="form-group">
                                                        <div class="input-group input-group-alternative">
                                                            <select name="status" class="form-control">
                                                                <option value="" selected disabled>Select an option...</option>
                                                                <option value="For Pickup"{!! ($order->delivery_status === 'For Pickup' ? ' selected' : '') !!}>For Pickup</option>
                                                                <option value="Shipping"{!! ($order->delivery_status === 'Shipping' ? ' selected' : '') !!}>Shipping</option>
                                                                <option value="Delivered"{!! ($order->delivery_status === 'Delivered' ? ' selected' : '') !!}>Delivered</option>
                                                            </select>
                                                            <div class="input-group-append">
                                                                <button type="submit" class="input-group-text btn btn-success btn-sm"><span class="fas fa-check fa-fw"></span> Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td>No results found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
