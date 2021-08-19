@extends('frontend.master')

@section('content')
<!--Start About Inner Area-->
<section class="about-wrapper-inner">
    <div class="about-wrap">
        <div class="container">
            <div class="ellipse1">
                <img src="{{url('frontend')}}/assets/images/Ellipse1.svg" alt="" class="img-fluid">
            </div>
            <div class="ellipse2">
                <img src="{{url('frontend')}}/assets/images/Ellipse2.svg" alt="" class="img-fluid">
            </div>
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="inner-content">
                        <h1>Portfolio</h1>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a>
                            </li>
                            <li>/</li>
                            <li>Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Inner Area-->
<!--Strat Portfolio area-->
<section class="portfolio-wrapper-area">
    <div class="portfolio-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All Works</button>
                        </li>
                        @foreach($portfolio_category as $item)
                        <li class="nav-item item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#category{{$item->id}}" type="button" role="tab" aria-controls="profile" aria-selected="false">{{$item->cat_name}}</button>
                        </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row justify-content-center">
                                @foreach($portfolio as $item)
                                <div class="col-lg-4 col-sm-6 col-md-6">
                                    <div class="portfolio-content">
                                        <a class="popup-youtube" href="{{$item->github}}">
                                            <div class="portfolio-image">
                                                <img src="{{asset('thumbnails/'.$item->image)}}" alt="" class="img-fluid">
                                            </div>
                                        </a>
                                        <hr>
                                        <div class="portfolio-inner">
                                            <h4>{{$item->title}}</h4>
                                            <div class="cart">
                                                <p><a href="{{$item->github}}">Preview→</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @foreach($portfolio_category as $item)
                        <div class="tab-pane fade" id="category{{$item->id}}" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row justify-content-center">
                                @foreach(App\Models\Portfolio::with('category')->where('cat_id', $item->id)->get() as $item)
                                <div class="col-lg-4 col-sm-6 col-md-6">
                                    <div class="portfolio-content">
                                        <a class="popup-youtube" href="{{$item->github}}">
                                            <div class="portfolio-image">
                                                <img src="{{asset('thumbnails/'.$item->image)}}" alt="" class="img-fluid">
                                            </div>
                                        </a>
                                        <hr>
                                        <div class="portfolio-inner">
                                            <h4>{{$item->title}}</h4>
                                            <div class="cart">
                                                <p><a href="{{$item->github}}">Preview→</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Portfolio area-->
<section class="project-wrapper-area">
    <div class="project-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="project-information text-center">
                        <h5>01722892349</h5>
                        <h2>Start a project with us!</h2>
                        <div class="project-box"> <a href="{{url('start-project')}}" class="default">Start a project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection