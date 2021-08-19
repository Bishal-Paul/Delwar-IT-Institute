@extends('backend.master')

@section('content')
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <!-- end col -->
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="header-title mb-4">View Freelancer</h4>
                    @if(session('success'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session('success')}}.
                    </div>
                    @endif
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Post</th>
                                <th scope="col">Image</th>
                                <th scope="col">Summary</th>
                                <th scope="col">Success Story</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($freelancer as $key => $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->post }}</td>
                                <td><img src="{{asset('thumbnails/'.$item->image)}}" width="100px"></td>
                                <td>{{$item->summary}}</td>
                                <td>{{$item->success_story}}</td>

                                <td>
                                    <a class="btn btn-outline-info" href="{{url('edit-freelancer')}}/{{$item->id}}">Edit</a>
                                    <a class="btn btn-outline-danger" href="{{url('delete-freelancer')}}/{{$item->id}}">Delete</a>
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