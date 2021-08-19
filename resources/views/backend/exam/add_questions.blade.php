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
                    @if(session('success'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session('success')}}.
                    </div>
                    @endif
                    <h4 class="header-title mb-4" style="float: left;">Add Questions</h4>
                    <h4 class="header-title mb-4" style="float: right;"><a href="{{url('view-questions')}}">View Questions</a></h4><br>

                    <br><br>
                    <form method="post" action="{{url('post-questions')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="question1" class="col-3 col-form-label">Select Category</label>
                            <div class="col-9">
                                <select name="category_id" class="form-control">
                                    <option value="">Select One</option>
                                    @foreach($category as $item)
                                    <option value="{{$item->id}}">{{$item->cat_name}}</option>
                                    @endforeach
                                </select>
                                @error('question1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="question1" class="col-3 col-form-label">Question 1 </label>
                            <div class="col-9">
                                <input type="text" id="question1" class="form-control @error('question1') is-invalid @enderror" name="question1">
                                @error('question1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="question2" class="col-3 col-form-label">Question 2</label>
                            <div class="col-9">
                                <input type="text" id="question2" class="form-control @error('question2') is-invalid @enderror" name="question2">
                                @error('question2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="question3" class="col-3 col-form-label">Question 3</label>
                            <div class="col-9">
                                <input type="text" id="question3" class="form-control @error('question3') is-invalid @enderror" name="question3">
                                @error('question3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="question4" class="col-3 col-form-label">Question 4</label>
                            <div class="col-9">
                                <input type="text" id="question4" class="form-control @error('question4') is-invalid @enderror" name="question4">
                                @error('question4')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-0 justify-content-end row text-center">
                            <div class="col-12">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                            </div>
                        </div>
                    </form>
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
                    @if(session('message'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session('message')}}.
                    </div>
                    @endif
                    <h4 class="header-title mb-4" style="float: left;">Add MCQ Questions</h4>
                    <h4 class="header-title mb-4" style="float: right;"><a href="{{url('view-questions')}}">View Questions</a></h4><br>

                    <br><br>
                    <form method="post" action="{{url('post-mcq-questions')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="category_id" class="col-3 col-form-label">Select Category</label>
                            <div class="col-9">
                                <select name="category_id" class="form-control">
                                    <option value="">Select One</option>
                                    @foreach($category as $item)
                                    <option value="{{$item->id}}">{{$item->cat_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="question" class="col-3 col-form-label">Question</label>
                            <div class="col-9">
                                <input type="text" id="question" class="form-control @error('question') is-invalid @enderror" name="question">
                                @error('question')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="option1" class="col-3 col-form-label">Option 1</label>
                            <div class="col-9">
                                <input type="text" id="option1" class="form-control @error('option1') is-invalid @enderror" name="option1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="option2" class="col-3 col-form-label">Option 2</label>
                            <div class="col-9">
                                <input type="text" id="option2" class="form-control @error('option2') is-invalid @enderror" name="option2">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="option3" class="col-3 col-form-label">Option 3</label>
                            <div class="col-9">
                                <input type="text" id="option3" class="form-control @error('option3') is-invalid @enderror" name="option3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="option4" class="col-3 col-form-label">Option 4</label>
                            <div class="col-9">
                                <input type="text" id="option4" class="form-control @error('option4') is-invalid @enderror" name="option4">
                            </div>
                        </div>

                        <div class="form-group mb-0 justify-content-end row text-center">
                            <div class="col-12">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
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