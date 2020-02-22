@extends('layouts.app')

@section('content')
    <div class="payment">
        <div class="header py-7 py-lg-8">
            <div class="header-body">
                <div class="row">
                    <div class="col-lg-10 ml-auto mr-auto">
                        <h1>Shipping</h1>
                        <div class="card shadow">
                            <div class="card-header bg-default">
                            </div>
                            <div class="card-body">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="full_name" class="col-form-label">Full Name</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                            <div class="form-group">
                                                <label for="full_name" class="col-form-label">Mobile Number</label>
                                                <input type="number" class="form-control" name="">
                                            </div>
                                            <div class="form-group">
                                                <label for="full_name" class="col-form-label">Notes</label>
                                                <textarea name="" id="" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
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
                                            <div class="form-group">
                                                <a href="/checkout-payment" class="btn btn-danger float-right">Proceed to Payment</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection