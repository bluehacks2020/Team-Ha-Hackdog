@extends('layouts.app')

@section('content')
    <div class="checkout">
        <div class="header py-7 py-lg-8">
            <div class="header-body">
                <div class="row">
                    <div class="col-lg-10 ml-auto mr-auto">
                        <h1>Payment & Billing</h1>
                        <div class="card shadow">
                            <div class="card-header">
                                <h1>Order Summary</h1>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h3 class="text-right font-weight-700">Sub-total:</h3>
                                        <h3 class="text-right">Tax:</h3>
                                        <h3 class="text-right">Total:</h3>
                                    </div>
                                    <div class="col-lg-4">
                                        <h3 class="border-bottom">Php 150.00</h3>
                                        <h3 class="border-bottom">Php 25.00</h3>
                                        <h3 class="border-bottom">Php 175.00</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <h1> Billing Address</h1>
                                    </div>
                                    <div class="card-body">
                                        <form action="">
                                            <div class="form-group">
                                                <label for="full_name" class="col-form-label">Full Name</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                            <div class="form-group">
                                                <label for="full_name" class="col-form-label">Mobile Number</label>
                                                <input type="number" class="form-control" name="">
                                            </div>
                                            <div class="form-group">
                                                <label for="full_name" class="col-form-label">House Number, Building and Street Name</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                            <div class="form-group">
                                                <label for="full_name" class="col-form-label">Province</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                            <div class="form-group">
                                                <label for="full_name" class="col-form-label">City/Municipality</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                            <div class="form-group">
                                                <label for="full_name" class="col-form-label">Barangay</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                      </form>
                                </div>
                            </div>
                     
                        </div>
                        <div class="col-lg-6">
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h1>Payment Options</h1>
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        <h3 class="text-center">Pay with Paymaya</h3>
                                        <hr class="mt-0 mb-0">
                                        <div class="form-group">
                                            <label for="full_name" class="col-form-label">Full name as it appears on your card</label>
                                            <input type="text" class="form-control" name="">
                                        </div>
                                        <div class="form-group">
                                            <label for="full_name" class="col-form-label">Card Number</label>
                                            <input type="number" class="form-control" name="">
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-12">
                                                <label for="full_name" class="col-form-label">Expiration Date</label>
                                            </div>
                                            <div class="col-lg-6">
                                                <select name="" class="form-control">
                                                    <option value="">Month</option>
                                                    <option value="January">January</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <select name="" class="form-control">
                                                    <option value="">Year</option>
                                                    <option value="January">January</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="full_name" class="col-form-label">Security Code</label>
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group text-center mt-4">
                                            <a href="#" class="btn btn-danger w-50">Place Order</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection