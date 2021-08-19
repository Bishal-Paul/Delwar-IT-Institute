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
                    <h4 class="header-title mb-4" style="float: left;">View Career</h4>
                    <h4 class="header-title mb-4" style="float: right;"><a href="{{url('add-career')}}">Add Career</a></h4>

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Career</th>
                                <th scope="col">Image</th>
                                <th scope="col">Fee</th>
                                <th scope="col">Class</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($course as $key => $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{!! $item->career !!}</td>
                                <td><img src="{{asset('thumbnails/'.$item->image)}}" width="100%"alt=""></td>
                                <td>{{ $item->fee }}</td>
                                <td>{{ $item->class }}</td>

                                <td>
                                    <a class="btn btn-outline-info" href="{{url('edit-course')}}/{{$item->id}}">Edit</a>
                                    <a class="btn btn-outline-danger" href="{{url('delete-course')}}/{{$item->id}}">Delete</a>
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