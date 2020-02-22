@extends('layouts.dashboard')

@section('content')
    <div class="header py-7" style="background-color: #6b664d;"></div>
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Add New Products</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('dashboard.partials.flash')
                        <form action="{{ route('dashboard.products.save') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group mb-3">
                                                <label>Name:</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-alternative" name="name" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-3">
                                                <label>Category:</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-alternative" name="category" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Description:</label>
                                        <div class="form-group">
                                            <textarea name="description" cols="30" rows="5" class="form-control form-control-alternative" style="resize: none;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group mb-3">
                                                <label>Unit Price:</label>
                                                <div class="form-group">
                                                    <input type="number" step="any" class="form-control form-control-alternative" name="unit_price" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-3">
                                                <label>In Stock:</label>
                                                <div class="form-group">
                                                    <input type="number" class="form-control form-control-alternative" name="in_stock" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group mb-3">
                                        <label>Cover Image:</label>
                                        <div class="form-group">
                                            <input type="file" id="cover-upload" class="form-control form-control-alternative" name="image" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Cover Image:</label>
                                        <div>
                                            <img id="cover-preview" src="" alt="No image preview available." style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary"><span class="fas fa-save fa-fw"></span> Save</button>
                            </div>
                        </form>
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
    <script>
        $(document).ready(function() {
            $('body').on('change', '#cover-upload', function() {
                var fr = new FileReader();
                var image = $(this)[0].files[0];

                fr.onload = function(e) {
                    $('#cover-preview').attr('src', e.target.result);
                };

                fr.readAsDataURL(image);
            });
        });
    </script>
@endpush
