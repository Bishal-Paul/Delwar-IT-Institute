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
                                <th scope="col">Category</th>
                                <th scope="col">Location</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($career as $key => $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->salary }}</td>

                                <td>
                                    <a class="btn btn-outline-success" href="{{url('view-full-career')}}/{{$item->id}}">View full</a>
                                    <a class="btn btn-outline-info" href="{{url('edit-career')}}/{{$item->id}}">Edit</a>
                                    <a class="btn btn-outline-danger" href="{{url('delete-career')}}/{{$item->id}}">Delete</a>
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