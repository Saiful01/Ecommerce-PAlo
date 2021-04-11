@extends('layouts.app')
@section('title', 'Update Shop')

@section('content')


    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Edit Shop</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Shop</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">

                    @include('includes.message')

                    <h4 class="card-title mb-4">Shop Information</h4>

                    <form action="/admin/shop/update" method="post"
                          enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12 mx-auto">
                                <div class="form-group row mb-4">
                                    <label for="shop_name" class="col-sm-3 col-form-label">Name<span
                                            class="text-danger">*</span> </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="shop_name" name="shop_name"
                                               value="{{$result->shop_name}}" required>
                                        <input type="hidden" class="form-control" id="shop_name" name="shop_id"
                                               value="{{$result->shop_id}}" required>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="shop_email" class="col-sm-3 col-form-label">Shop Image <span
                                            class="text-danger">*</span> </label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="trade_licence" name="image">
                                    </div>
                                </div>


                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- end row -->

@stop
