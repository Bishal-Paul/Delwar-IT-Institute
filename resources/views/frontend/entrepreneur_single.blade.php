@extends('frontend.master')

@section('content')
<style>
    .video-icon {
        display: none;
    }
</style>
<section class="single-banner-wrapper">
    <div class="job-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-content-area text-left">
                        <h4>Entrepreneurs In Sylhet</h4>
                        <h1>{{$entrepreneur->name}}</h1>
                        <div class="p-text">
                            <p>{{$entrepreneur->post}}</p>
                        </div>
                        <p class="p-text1">{{$entrepreneur->summary}}</p>
                        <div class="video-icon">
                            <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i class="fas fa-play-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-thumb">
                <div class="hero-thumb-inner">
                    <img src="{{asset('thumbnails/'.$entrepreneur->image)}}" alt="{{$entrepreneur->name}}">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="experience-wrapper-area">
    <div class="experience-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image">
                        <img src="{{asset('thumbnails/'.$entrepreneur->ex_img)}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-content">
                        <div class="title">
                            <h2>Entrepreneur Experience</h2>
                            <div class="em-bar-main">
                                <div class="em-bar em-bar-big"></div>
                            </div>

                        </div>
                    </div>
                    <p>{!! $entrepreneur->experience !!}</p>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="single-wrapper-area">
    <div class="single-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image">
                        <img src="{{asset('thumbnails/'.$entrepreneur->success_img)}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-item">
                        <h1>Success Story</h1>
                        <div class="em-bar-main">
                            <div class="em-bar em-bar-big"></div>
                        </div>
                    </div>
                    <p>{!! $entrepreneur->success_story !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection