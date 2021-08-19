@extends('backend.master')

@section('content')
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <!-- end col -->
            <div class="col-md-12">
                <div class="card-box">
                    @if(session('delete'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session('delete')}}.
                    </div>
                    @endif
                    <h4 class="header-title mb-4" style="float: left;">View Categories</h4>

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Syllabus</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Questions</th>
                                <th scope="col">Instraction</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->cat_name }}</td>
                                <td>{!! $item->cat_syllabus !!}</td>
                                <td>{{ $item->cat_duration }}</td>
                                <td>{{ $item->cat_questions }}</td>
                                <td>{!!$item->cat_instraction!!}</td>

                                <td>
                                    <a class="btn btn-outline-info" href="{{url('edit-exam-category')}}/{{$item->id}}">Edit</a>
                                    <a class="btn btn-outline-danger" href="{{url('delete-exam-category')}}/{{$item->id}}">Delete</a>
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