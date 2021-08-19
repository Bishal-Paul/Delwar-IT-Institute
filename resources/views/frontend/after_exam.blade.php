@extends('frontend.master')

@section('content')
<section class="last-wrapper-area">
    <div class="last-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="last-inner">
                        <h1>Congratulations <span>!!!</span></h1>
                        <p>Exam successfully submitted. After reviewing your Answers we will let you know the Result.</p>
                        <div class="last-btn">
                            <a href="{{url('/')}}" class="default">Back To Home Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection