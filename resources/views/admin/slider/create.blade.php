@extends('layouts.app')
@section('title', 'Create Slider')

@section('content')


    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Add Slider</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add Slider</li>
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

                    <h4 class="card-title mb-4">Slider Info</h4>

                    <form action="/admin/slider/store" method="post"
                          enctype="multipart/form-data">

                        @csrf
                        <div class="form-group row mb-4">
                            <label for="slider_url" class="col-sm-3 col-form-label">Url</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="slider_url" name="slider_url" required>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="image" class="col-sm-3 col-form-label">Image (675*300)</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>
                        </div>


                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Save</button>
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
