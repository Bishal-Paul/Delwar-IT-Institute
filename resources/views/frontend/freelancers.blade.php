@extends('frontend.master')

@section('content')
<style>
    .freelance-wrapper-area .inner-item .content p {
        margin-top: 12px !important;
        padding: 6px 0px 0px 10px !important;
    }

    .freelance-wrapper-area .inner-item .content .group-btn {
        padding: 16px 8px !important;
    }

    .custom {
        font-size: 15px;
    }
</style>
<section class="job-banner-wrapper">
    <div class="job-wrap">
        <div class="container">
            <div class="ellipse1">
                <img src="{{url('frontend')}}/assets/images/Ellipse1.svg" alt="" class="img-fluid">
            </div>
            <div class="ellipse2">
                <img src="{{url('frontend')}}/assets/images/Ellipse2.svg" alt="" class="img-fluid">
            </div>
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto">
                    <div class="title text-center">
                        <h1>Top Freelancers in Sylhet</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="freelance-wrapper-area">
    <div class="download">
        <img src="{{url('frontend')}}/assets/images/download.png" alt="" class="img-fluid">
    </div>
    <div class="freelance-wrap">
        <div class="container">
            <div class="row">
                @foreach($freelancer as $item)
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="inner-item">
                        <div class="image">
                            <img src="{{asset('thumbnails/'.$item->image)}}" alt="{{$item->name}}" class="img-fluid">
                        </div>
                        <div class="content">
                            <div class="title">
                                <h4>{{$item->name}}</h4>
                            </div>
                            <p><strong>{{$item->post}}</strong></p>
                            <p class="custom">{{$item->summary = substr($item->summary, 0, 50) . '...';}}</p>
                            <div class="group-btn">
                                <a href="{{url('freelancer', $item->username)}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="load-btn">
                    <a href="#0" class="default">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection