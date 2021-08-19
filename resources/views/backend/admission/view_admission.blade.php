@extends('backend.master')

@section('content')
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <!-- end col -->
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="header-title mb-4">View Admission List</h4>
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
                                <th scope="col">Occupation</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Reference</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admission as $key => $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->occupation }}</td>
                                <td>{{ $item->phone ?? "NULL" }}</td>
                                <td>{{ $item->email ?? "NULL" }}</td>
                                <td>{{ $item->ref_name ?? "NULL" }}</td>

                                <td>
                                    <a class="btn btn-outline-info" href="{{url('view-full-details')}}/{{$item->id}}">View</a>
                                    <a class="btn btn-outline-danger" href="{{url('delete-admission')}}/{{$item->id}}">Delete</a>
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