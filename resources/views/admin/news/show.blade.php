@extends('layouts.app')
@section('title', 'Show News')

@section('content')


    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">News</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">News</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    @include('includes.message')

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="card-title">News Info <span><button type="button" class="btn btn-sm btn-primary"
                                                                           data-toggle="modal" data-target="#video">
                                        +new
                                    </button></span>
                            </h4>
                            <br>
                        </div>


                    </div>


                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>News Title</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>


                        <tbody>
                        <?php $i = 1;?>
                        @foreach($results as $result)

                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$result->news_title}}</td>
                                <td><a target="_blank" href="{{$result->news_link}}">View</a></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <span>  <button type="button" class="btn btn-sm btn-primary"
                                                    data-toggle="modal" data-target="#shop{{$result->news_id}}">
                                        Edit
                                    </button> </span>
                                </td>
                                <td>
                                    <div class="btn-group mr-1 mt-2">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu" style="">
                                            <a class="dropdown-item"
                                               href="/admin/news/delete/{{$result->news_id}}">Delete</a>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="shop{{$result->news_id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="{{$result->news_id}}">News Edit</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="post" action="/admin/news/update" enctype="multipart/form-data">
                                            <div class="modal-body">

                                                <input class="form-control" type="text" name="news_title"
                                                       value="{{$result->news_title}}">
                                                <input class="form-control mt-3" type="text" name="news_link"
                                                       value="{{$result->news_link}}" required>
                                                <input class="form-control mt-3" type="file" name="image">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <input type="hidden" name="news_id" value="{{$result->news_id}}">


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <!-- Modal -->
    <div class="modal fade" id="video" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="video">News Create</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="/admin/news/store" enctype="multipart/form-data">
                    <div class="modal-body">

                        <input class="form-control" type="text" name="news_title"
                               placeholder="News Title">
                        <input class="form-control mt-3" type="text" name="news_link"
                               placeholder="News Link">
                        <input class="form-control mt-3" type="file" name="image">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@stop
