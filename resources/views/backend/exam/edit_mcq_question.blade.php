@extends('backend.master')

@section('content')
<!-- Start Page content -->
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <!-- end col -->
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="header-title mb-4">Edit MCQ Questions</h4>

                    @if(session('success'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session('success')}}.
                    </div>
                    @endif

                    <form method="post" action="{{url('update-mcq-questions')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$mcq_question->id}}">
                        <div class="form-group row">
                            <label for="cat_name" class="col-3 col-form-label">Category Name</label>
                            <div class="col-9">
                                <select name="category_id" class="form-control">
                                    <option value="">{{$mcq_question->category->cat_name}}</option>
                                    @foreach($category as $item)
                                    <option value="{{$item->id}}">{{$item->cat_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="question" class="col-3 col-form-label">Question</label>
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{$mcq_question->question}}" name="question">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="option1" class="col-3 col-form-label">Option 1 </label>
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{$mcq_question->option1}}" name="option1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="option2" class="col-3 col-form-label">Option 2 </label>
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{$mcq_question->option2}}" name="option2">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="option3" class="col-3 col-form-label">Option 3 </label>
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{$mcq_question->option3}}" name="option3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="option4" class="col-3 col-form-label">Option 4 </label>
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{$mcq_question->option4}}" name="option4">
                            </div>
                        </div>

                        <div class="form-group mb-0 justify-content-end row text-center">
                            <div class="col-12">
                                <button type="submit" class="btn btn-info waves-effect waves-light"><a href="{{url('view-questions')}}" style="color: #fff;">Back</a></button>
                                <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>
@endsection