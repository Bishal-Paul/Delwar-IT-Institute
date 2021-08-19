@extends('frontend.master')

@section('content')
<style>
    a:hover {
        color: none !important;
    }

    a {
        color: none !important;
    }
</style>
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
                        <h1>Our Courses</h1>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>/</li>
                            <li>Courses</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Inner Area-->
<!--Start course area-->
<section class="course-wrapper-area2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    @foreach($course as $item)
                    <li class="nav-item item" role="presentation">
                        <button class="nav-link active" type="button" role="tab" aria-controls="home" aria-selected="true"><a href="{{url('course', $item->slug)}}">{{$item->title}}</a></button>
                    </li>
                    @endforeach
                </ul>
                <div class="title">
                    <h4>Counselling Area</h4>
                </div>
                <form method="post">
                    <input type="text" placeholder="Your Name" name="name" value="" class="form-control  ">
                    <input type="number" placeholder="Phone Number" name="phone" value="" class="form-control  ">
                    <input type="email" placeholder="Email Address" name="email" value="" class="form-control  ">
                    <button type="submit" class="btn  default">Submit</button>
                </form>
            </div>
            <div class="col-lg-8">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="gd-left">
                                    <h4>{{$single_course->title}}</h4>
                                    <div class="em-bar-main">
                                        <div class="em-bar em-bar-big"></div>
                                    </div>
                                    <p>{!! $single_course->description !!}</p>
                                </div>
                                <div class="seat">
                                    <div class="btn">
                                        <button onclick="myFunction()" id="myBtn" class="default">Read more</button>
                                    </div>
                                    <div class="admission">
                                        <p>Admission Going On</p>
                                    </div>
                                </div>
                                <div class="career">
                                    <h4>Career Opportunity</h4>
                                    {!! $single_course->career !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($course as $item)
                    <div class="tab-pane fade" id="{{$item->slug}}" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="gd-left">
                                    <h4>Graphics Design</h4>
                                    <div class="em-bar-main">
                                        <div class="em-bar em-bar-big"></div>
                                    </div>
                                    <p>The main purpose here is to make you able to use the graphic design tools and techniques in a professional way. Graphic Design helps to build the brand identity of a company. Thus it needs to be conceptual and unique to represent a company, brand or any kind of products or services.<span id="dots1">...</span><span id="more1">The module is designed to cover all aspects of Graphic Design and it is mostly helpful for a fresher who can start afresh. To know more about the module, take a look in the highlights of the module and get insights of how we are conducting the course.</span></p>
                                </div>
                                <div class="seat">
                                    <div class="btn">
                                        <button onclick="myFunction1()" id="myBtn1" class="default">Read more</button>
                                    </div>
                                    <div class="admission">
                                        <p>Admission Going On</p>
                                    </div>
                                </div>
                                <div class="career">
                                    <h4>Career Opportunity</h4>
                                    <p>The career opportunity in graphic design is demanding all over the world. Two great opportunities in graphic design are freelancing and outsourcing. With the passing time, foreign countries are in need of more and more freelancers and outsourcers. They are looking for designers in the third world countries and according to the statistics, Bangladesh is in the third position. Graphic designers can explore their career in the different areas representing different titles. Such as-</p>
                                    <ul>
                                        <li> Graphics Designer</li>
                                        <li> Creative Directorr</li>
                                        <li> Creative Executive</li>
                                        <li> UI Designer</li>
                                        <li> Logo Designer</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Course area-->
<!--Start Premium Area-->
<section class="premium-wrapper-area">
    <div class="premium-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Premium-course</h2>
                    <div class="em-bar-main">
                        <div class="em-bar em-bar-big"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="premium-card">
                        <div class="card-image">
                            <img src="{{url('frontend')}}/assets/images/reactnative.png" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <h4>React Live Project & Next.js</h4>
                            <hr>
                            <p>Source code All web site project tutorials. With Lumen Rest API and Next JS classes for free.</p>
                            <hr>
                            <h6 class="course-card-count"> Class:<span class="text-red"> 244 </span> , Learning:<span class="text-red"> 354</span> </h6>
                            <hr>
                            <h6 class="course-card-count-fee">Course Fee: 2000 tk</h6>
                            <hr>
                            <div class="enroll">
                                <a target="_blank" href="https://www.youtube.com/watch?v=w7ejDZ8SWv8" class="default">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="premium-card">
                        <div class="card-image">
                            <img src="{{url('frontend')}}/assets/images/reactnative.png" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <h4>React Live Project & Next.js</h4>
                            <hr>
                            <p>Source code All web site project tutorials. With Lumen Rest API and Next JS classes for free.</p>
                            <hr>
                            <h6 class="course-card-count"> Class:<span class="text-red"> 244 </span> , Learning:<span class="text-red"> 354</span> </h6>
                            <hr>
                            <h6 class="course-card-count-fee">Course Fee: 2000 tk</h6>
                            <hr>
                            <div class="enroll">
                                <a target="_blank" href="https://www.youtube.com/watch?v=w7ejDZ8SWv8" class="default">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="premium-card">
                        <div class="card-image">
                            <img src="{{url('frontend')}}/assets/images/reactnative.png" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <h4>React Live Project & Next.js</h4>
                            <hr>
                            <p>Source code All web site project tutorials. With Lumen Rest API and Next JS classes for free.</p>
                            <hr>
                            <h6 class="course-card-count"> Class:<span class="text-red"> 244 </span> , Learning:<span class="text-red"> 354</span> </h6>
                            <hr>
                            <h6 class="course-card-count-fee">Course Fee: 2000 tk</h6>
                            <hr>
                            <div class="enroll">
                                <a target="_blank" href="https://www.youtube.com/watch?v=w7ejDZ8SWv8" class="default">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center top">Free-course</h2>
                    <div class="em-bar-main">
                        <div class="em-bar em-bar-big"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="premium-card">
                        <div class="card-image">
                            <img src="{{url('frontend')}}/assets/images/es6.png" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <h4>React Live Project & Next.js</h4>
                            <hr>
                            <p>Source code All web site project tutorials. With Lumen Rest API and Next JS classes for free.</p>
                            <hr>
                            <h6 class="course-card-count"> Class:<span class="text-red"> 244 </span> , Learning:<span class="text-red"> 354</span> </h6>
                            <hr>
                            <h6 class="course-card-count-fee">Course Fee: 2000 tk</h6>
                            <hr>
                            <div class="enroll">
                                <a target="_blank" href="https://www.youtube.com/watch?v=w7ejDZ8SWv8" class="default">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="premium-card">
                        <div class="card-image">
                            <img src="{{url('frontend')}}/assets/images/es6.png" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <h4>React Live Project & Next.js</h4>
                            <hr>
                            <p>Source code All web site project tutorials. With Lumen Rest API and Next JS classes for free.</p>
                            <hr>
                            <h6 class="course-card-count"> Class:<span class="text-red"> 244 </span> , Learning:<span class="text-red"> 354</span> </h6>
                            <hr>
                            <h6 class="course-card-count-fee">Course Fee: 2000 tk</h6>
                            <hr>
                            <div class="enroll">
                                <a target="_blank" href="https://www.youtube.com/watch?v=w7ejDZ8SWv8" class="default">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="premium-card">
                        <div class="card-image">
                            <img src="{{url('frontend')}}/assets/images/es6.png" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <h4>React Live Project & Next.js</h4>
                            <hr>
                            <p>Source code All web site project tutorials. With Lumen Rest API and Next JS classes for free.</p>
                            <hr>
                            <h6 class="course-card-count"> Class:<span class="text-red"> 244 </span> , Learning:<span class="text-red"> 354</span> </h6>
                            <hr>
                            <h6 class="course-card-count-fee">Course Fee: 2000 tk</h6>
                            <hr>
                            <div class="enroll">
                                <a target="_blank" href="https://www.youtube.com/watch?v=w7ejDZ8SWv8" class="default">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Premium Area-->
@endsection