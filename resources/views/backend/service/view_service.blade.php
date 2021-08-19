@extends('backend.master')

@section('content')
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <!-- end col -->
            <div class="col-md-12">
                <div class="card-box">
                    @if(session('success'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session('success')}}.
                    </div>
                    @endif
                    <h4 class="header-title mb-4" style="float: left;">View Service</h4>
                    <h4 class="header-title mb-4" style="float: right;"><a href="{{url('add-service')}}">Add Service</a></h4>

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Summary</th>
                                <th scope="col">Front Image</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($service as $key => $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{!! $item->summary !!}</td>
                                <td><img src="{{asset('thumbnails/'.$item->front_img)}}" width="100px"></td>
                                <td><img src="{{asset('thumbnails/'.$item->image)}}" width="100px"></td>

                                <td>
                                    <a class="btn btn-outline-info" href="{{url('edit-service')}}/{{$item->id}}">Edit</a>
                                    <a class="btn btn-outline-danger" href="{{url('delete-service')}}/{{$item->id}}">Delete</a>
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