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
                    <h4 class="header-title mb-4">Edit Questions</h4>

                    @if(session('success'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session('success')}}.
                    </div>
                    @endif

                    <form method="post" action="{{url('update-questions')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$question->id}}">
                        <div class="form-group row">
                            <label for="cat_name" class="col-3 col-form-label">Category Name</label>
                            <div class="col-9">
                                <select name="category_id" class="form-control">
                                    <option value="">{{$question->category->cat_name}}</option>
                                    @foreach($category as $item)
                                    <option value="{{$item->id}}">{{$item->cat_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-3 col-form-label">Question 1 </label>
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{$question->question1}}" name="question1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-3 col-form-label">Question 2 </label>
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{$question->question2}}" name="question2">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-3 col-form-label">Question 3 </label>
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{$question->question3}}" name="question3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-3 col-form-label">Question 4 </label>
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{$question->question4}}" name="question4">
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