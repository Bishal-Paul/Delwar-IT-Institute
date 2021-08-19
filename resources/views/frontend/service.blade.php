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
                        <h1>Services</h1>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>/</li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Inner Area-->

<!--Start Service content area-->
<section class="service-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar">
                    <div class="menu-service">
                        <ul>
                            @foreach($service as $item)
                            <li><a href="{{url('single-service', $item->slug)}}">{{$item->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="service-content-box">
                        <div class="service-title">
                            <h3>Need Any Help For Business ?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur sed adipiscing elit.</p>
                            <div class="box-btn">
                                <a href="" class="default">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <h4>Counselling Area</h4>
                    <form method="post">
                        <input type="text" placeholder="Your Name" name="name" value="" class="form-control  ">
                        <input type="number" placeholder="Phone Number" name="phone" value="" class="form-control  ">
                        <input type="email" placeholder="Email Address" name="email" value="" class="form-control  ">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                        <button type="submit" class="btn  default">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-area">
                    <div class="service-image">
                        <img src="{{url(asset('thumbnails/'.$single_service->image))}}" alt="" class="img-fluid">
                    </div>
                    <div class="service-content">
                        <p>{!! $single_service->summary !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service content area-->

<!--Start project section-->
<section class="project-wrapper-area">
    <div class="project-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="project-information text-center">
                        <h2>Start a project with us!</h2>
                        <div class="project-box">
                            <a href="{{url('start-project')}}" class="default">Start a project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Project section-->

<!--Start Box area-->
<section class="box-wrapper-area">
    <div class="container">
        <div class="process-inner-box">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process">
                        <i class="fab fa-researchgate"></i>
                        <p>Research</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process bg-36CC72">
                        <i class="fas fa-diagnoses"></i>
                        <p>Analyze</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process bg-FF414B">
                        <i class="fas fa-pencil-ruler"></i>
                        <p>Design</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process bg-FF6D3D">
                        <i class="fas fa-comment"></i>
                        <p>Testing</p>
                    </div>
                </div>
            </div>
            <div class="process-bar-shape">
                <img src="{{url('frontend')}}/assets/images/process-bar.png" alt="image">
            </div>
        </div>
    </div>
</section>
<!--End Box area-->

@endsection