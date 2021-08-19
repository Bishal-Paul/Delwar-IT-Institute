@extends('backend.master')

@section('content')
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <!-- end col -->
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="header-title mb-4">View Portfolio Category</h4>
                    @if(session('cat_success'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session('cat_success')}}.
                    </div>
                    @endif
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category as $key => $item)
                            <tr>
                                <td>{{ $item->cat_name }}</td>

                                <td>

                                    <a class="btn btn-outline-danger" href="{{url('delete-portfolio-category')}}/{{$item->id}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->

    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <!-- end col -->
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="header-title mb-4">View Portfolio</h4>
                    @if(session('success'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session('success')}}.
                    </div>
                    @endif
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Image</th>
                                <th scope="col">Github Link</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($portfolio as $key => $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->cat_id }}</td>
                                <td><img src="{{asset('thumbnails/'.$item->image)}}" width="100px"></td>
                                <td>{{$item->github}}</td>

                                <td>

                                    <a class="btn btn-outline-danger" href="{{url('delete-portfolio')}}/{{$item->id}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>

@endsection