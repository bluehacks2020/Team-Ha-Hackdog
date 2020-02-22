@extends('layouts.app')

@section('content')
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
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img class="img-checkout" src="{{asset('img/products/bag.jpg')}}" alt="">
                                        <p> Hand Woven Basket</p>
                                        <p>
                                            category : Fashion
                                        </p>
                                        <button type="button" class="btn btn-outline-danger btn-sm">remove</button>
                                    </div>
                                    <div class="col-lg-2">
                                        <p>Price</p>
                                        <p>Php 150.00</p>
                                    </div>
                                    <div class="col-lg-2">
                                        <p>
                                            Quantity
                                        </p>
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <p>Total</p>
                                        <p>Php 150.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow w-50 float-right mt-3">
                            <div class="card-header">
                                <h1> Order Summary</h1>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <h3 class="text-right">Sub-total:</h3>
                                        <h3 class="text-right">Tax:</h3>
                                        <h3 class="text-right">Total:</h3>
                                    </div>
                                    <div class="col-lg-3">
                                        <h3 class="border-bottom">Php 150.00</h3>
                                        <h3 class="border-bottom">Php 25.00</h3>
                                        <h3 class="border-bottom">Php 175.00</h3>
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
@endsection