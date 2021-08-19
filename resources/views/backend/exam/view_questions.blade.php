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
                    <h4 class="header-title mb-4" style="float: left;">View Questions</h4>
                    <h4 class="header-title mb-4" style="float: right;"><a href="{{url('add-questions')}}">Add Questions</a></h4>

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Category</th>
                                <th scope="col">Question 1</th>
                                <th scope="col">Question 2</th>
                                <th scope="col">Question 3</th>
                                <th scope="col">Question 4</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($question as $key => $item)
                            <tr>
                                <td>{{ $item->category->cat_name }}</td>
                                <td>{{ $item->question1 }}</td>
                                <td>{{ $item->question2 }}</td>
                                <td>{{ $item->question3 }}</td>
                                <td>{{ $item->question4 }}</td>

                                <td>
                                    <a class="btn btn-outline-info" href="{{url('edit-questions')}}/{{$item->id}}">Edit</a>
                                    <a class="btn btn-outline-danger" href="{{url('delete-questions')}}/{{$item->id}}">Delete</a>
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
                    @if(session('success'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session('success')}}.
                    </div>
                    @endif
                    <h4 class="header-title mb-4" style="float: left;">View MCQ Questions</h4>
                    <h4 class="header-title mb-4" style="float: right;"><a href="{{url('add-questions')}}">Add Questions</a></h4>

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Category</th>
                                <th scope="col">Question</th>
                                <th scope="col">Option 1</th>
                                <th scope="col">Option 2</th>
                                <th scope="col">Option 3</th>
                                <th scope="col">Option 4</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mcq_question as $key => $item)
                            <tr>
                                <td>{{ $item->category->cat_name }}</td>
                                <td>{{ $item->question }}</td>
                                <td>{{ $item->option1 }}</td>
                                <td>{{ $item->option2 }}</td>
                                <td>{{ $item->option3 }}</td>
                                <td>{{ $item->option4 }}</td>

                                <td>
                                    <a class="btn btn-outline-info" href="{{url('edit-mcq-questions')}}/{{$item->id}}">Edit</a>
                                    <a class="btn btn-outline-danger" href="{{url('delete-mcq-questions')}}/{{$item->id}}">Delete</a>
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