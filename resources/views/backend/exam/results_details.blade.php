@extends('backend.master')

@section('content')
<style>
    .mycls p {
        border: 1px solid #c1c1c1;
        padding: 11px;
    }
</style>

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
                    <h4 class="header-title mb-4" style="float: left;">View Answers</h4>
                    <br><br><br>

                    <div class=" questions">
                        <div class="row">

                            <div class="col-md-6">
                                <h4>Q1. {{$questions->question1}}</h4>
                                <p><strong>Answer :</strong> {{$answers->answer1}}</p>
                            </div>
                            <div class="col-md-6">
                                <h4>Q2. {{$questions->question2}}</h4>
                                <p><strong>Answer :</strong> {{$answers->answer2}}</p>
                            </div>
                            <div class="col-md-6">
                                <h4>Q3. {{$questions->question3}}</h4>
                                <p><strong>Answer :</strong> {{$answers->answer3}}</p>
                            </div>
                            <div class="col-md-6">
                                <h4>Q4. {{$questions->question4}}</h4>
                                <p><strong>Answer :</strong> {{$answers->answer4}}</p>
                            </div>
                        </div>
                    </div>
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
                    <br><br><br>
                    @foreach($mcq_answers as $key => $item)
                    <div class=" questions">
                        <div class="row">
                            <div class="col-md-6 mycls" style="float: left;">
                                @foreach($mcq_questions as $question)
                                <p><strong> Question : </strong> {{$question->question}}</p>
                                @endforeach
                            </div>
                            <div class="col-md-6 mycls" style="float: right;">
                                <?php foreach (json_decode($item->mcq_answers) as $answer) { ?>
                                    <p><strong>Answer : </strong> {{$answer}}</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Earning :</label>
                        <div class="col-9">
                            <p>{{$item->earning }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Earning Scrinshot :</label>
                        <div class="col-9">
                            <img src="{{asset('thumbnails/student/'.$item->earning_ss)}}" width="350px">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Student Image :</label>
                        <div class="col-9">
                            <img src="{{asset('thumbnails/student/'.$item->student_img)}}" width="350px">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">About Student :</label>
                        <div class="col-9">
                            <p>{{$item->about_student}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Success Story :</label>
                        <div class="col-9">
                            <p>{{$item->success_story}}</p>
                        </div>
                    </div>
                    <div class="form-group mb-0 justify-content-end row text-center">
                        <div class="col-12">
                            <button type="button" class="btn btn-success waves-effect waves-light"> <a href="{{ url('admin-dashboard') }}" style="color: #fff;">Back to dashboard</a> </button>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>

@endsection