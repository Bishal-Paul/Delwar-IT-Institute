@extends('backend.master')

@section('content')
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <!-- end col -->
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="header-title mb-4">Results</h4>
                    @if(session('success'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session('success')}}.
                    </div>
                    @endif
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Student ID</th>
                                <th scope="col">Batch</th>
                                <th scope="col">Exam Category</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($answers as $key => $item)
                            <tr>
                                <td>{{ $answers->firstItem() + $key }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->user->student_id }}</td>
                                <td>{{ $item->user->batch }}</td>
                                <td>{{ $item->category->cat_name }}</td>

                                <td>
                                    <a class="btn btn-outline-info" href="{{url('show-details')}}/{{$item->category_id}}">View Details</a>
                                    <a class="btn btn-outline-danger" href="{{url('delete-project')}}/{{$item->id}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>


                    </table>
                    {{$answers->links()}}

                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>

@endsection