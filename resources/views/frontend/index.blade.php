@extends('frontend.master')

@section('content')
<!--Start Banner Area-->
<section class="banner-wrapper-area">
    <div class="banner">
        <img src="{{url('frontend')}}/assets/images/banner.svg" alt="" class="img-fluid">
    </div>
    <div class="round-3">
        <img src="{{url('frontend')}}/assets/images/shape4.png" alt="" class="img-fluid">
    </div>
    <div class="banner-wrap">
        <div class="container">
            <div class="ellipse1">
                <img src="{{url('frontend')}}/assets/images/Ellipse1.svg" alt="" class="img-fluid">
            </div>
            <div class="ellipse2">
                <img src="{{url('frontend')}}/assets/images/Ellipse2.svg" alt="" class="img-fluid">
            </div>
            <!--Desktop view-->
            <div class="desktop-area">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="banner-content">
                            <h1>Digitalized Up Your Business With <span>Delwar IT</span></h1>
                            <div class="em-bar-main">
                                <div class="em-bar em-bar-big"></div>
                            </div>
                            <p>6 Years Of Exprience in IT industry.</p>
                            <div class="btn-default">
                                <div class="button-one">
                                    <a href="#0" class="default">Get Started</a>
                                </div>
                                <div class="button-two">
                                    <a href="{{url('about')}}" class="default-one">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="image">
                            <img src="{{url('frontend')}}/assets/images/wedevs-hero-image.svg" alt="" class="img-fluid bounce-2">
                        </div>
                    </div>
                </div>
            </div>
            <!--Desktop view end-->
            <!--laptop view-->
            <div class="laptop-area">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="image">
                            <img src="{{url('frontend')}}/assets/images/wedevs-hero-image.svg" alt="" class="img-fluid bounce-2">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="banner-content">
                            <h1>Digitalized Up Your Business With <span>Delwar IT</span></h1>
                            <div class="em-bar-main">
                                <div class="em-bar em-bar-big"></div>
                            </div>
                            <p>6 Years Of Exprience in IT industry.</p>
                            <div class="btn-default">
                                <div class="button-one">
                                    <a href="#0" class="default">Get Started</a>
                                </div>
                                <div class="button-two">
                                    <a href="{{url('about')}}" class="default-one">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--laptop view end-->
        </div>
    </div>
</section>
<!--End Banner Area-->
</div>

<section class="glassmo">
    <div class="banner-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="mail">
                        <div class="mail-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="mail-description">
                            <h4>Contact Number</h4>
                            <p>01722892349<br>01747724236</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="mail">
                        <div class="mail-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="mail-description">
                            <h4>Our Location</h4>
                            <p>Blue Water Shopping City<br> Sylhet, Bangladesh</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="mail">
                        <div class="mail-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="mail-description">
                            <h4>Opening Hours</h4>
                            <p>9am - 8pm<br> Saturday - Thursday</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="mail">
                        <div class="mail-icon">
                            <i class="fas fa-envelope-open"></i>
                        </div>
                        <div class="mail-description">
                            <h4>Our Email
                            </h4>
                            <p>info.delwarit@gmail.com<br>admin@delwarit.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Start Solution Area-->
<section class="solution-wrapper">
    <span class="it-up-service-shape position-absolute deco1"><img src="{{url('frontend')}}/assets/images/s-shape1.png" alt=""></span>
    <span class="it-up-service-shape position-absolute deco2"><img src="{{url('frontend')}}/assets/images/s-shape2.png" alt=""></span>
    <div class="solution-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="solution-content">
                        <h5>_What We Do_</h5>
                        <h2>Perfect Solution For Your Business</h2>
                        <div class="em-bar-main">
                            <div class="em-bar em-bar-big"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="content">
                        <p>As our motto, we always provide the bst service<br> especially for your company by growing your<br>company to be better</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($service as $item)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-box text-center">
                        <div class="service-icon">
                            <img src="{{asset('thumbnails/'.$item->front_img)}}" alt="{{$item->title}}" class="img-fluid">
                        </div>
                        <div class="service-content">
                            <h4>{{$item->title}}</h4>
                            <p>{!! Str::limit($item->summary, 140) !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="solution-box">
                    <a href="{{url('services')}}" class="default">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Solution Area-->

<!--Start About Section-->
<section class="about-wrapper-area">
    <div class="triangle">
        <img src="{{url('frontend')}}/assets/images/triangle.png" alt="" class="img-fluid">
    </div>
    <div class="about-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{url('frontend')}}/assets/images/about-image.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>About our Company</h2>
                        <div class="em-bar-main">
                            <div class="em-bar em-bar-big"></div>
                        </div>
                        <p><span>Delwar IT</span> is an institution where empowering the community for an excellent standard of learning is what we desire. DELWAR IT also provides training in various IT fields to Create Skilled & Professionally Committed IT Experts.</p>
                        <div class="about-box">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="about-feature">
                                        <div class="feature-box">
                                            <img src="{{url('frontend')}}/assets/images/seetings.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="feature-content">
                                            <h4>It Trainning</h4>
                                            <p>Providing best quality of class</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-feature">
                                        <div class="feature-box">
                                            <img src="{{url('frontend')}}/assets/images/idea.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="feature-content">
                                            <h4>Great Idea</h4>
                                            <p>IT solutions expertise allows your business.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-box">
                            <div class="about-btn">
                                <a href="{{url('about')}}" class="default">About Us</a>
                            </div>
                            <div class="play-btn">
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=Y5KCDWi7h9o"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Section-->

<!--Start Service Section-->
<section class="course-wrapper-area">
    <span class="it-up-service-shape position-absolute deco1"><img src="{{url('frontend')}}/assets/images/s-shape1.png" alt=""></span>
    <span class="it-up-service-shape position-absolute deco2"><img src="{{url('frontend')}}/assets/images/s-shape2.png" alt=""></span>
    <div class="dots">
        <img src="{{url('frontend')}}/assets/images/dots.png" alt="" class="img-fluid">
    </div>
    <div class="course-wrap">
        <div class="container">
            <div class="row">
                <div class="course-title">
                    <h2>Our Courses</h2>
                    <div class="em-bar-main">
                        <div class="em-bar em-bar-big"></div>
                    </div>
                    <p>Explore the weapons of Latest Information Technology!</p>
                </div>
            </div>
            <div class="course-box">
                <div class="row">
                    @foreach($course as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="home-service-item fluid-height">
                            <div class="home-service-details full-height">
                                <div class="home-service-image">
                                    <img src="{{asset('thumbnails/'.$item->image)}}" alt="service">
                                </div>
                                <div class="home-service-text">
                                    <h3>{{$item->title}}</h3>
                                    <p>{!! Str::limit($item->description, 140) !!}</p>
                                    <div class="default-btn">
                                        <a href="{{url('course',$item->slug)}}">Read More +</a>
                                    </div>
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
<!--End Service Section-->

<!--Start Categori area-->
<section class="categories-wrapper-area">
    <div class="categories-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-center">Popular categories</h2>
                    <div class="em-bar-main">
                        <div class="em-bar em-bar-big"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="card-deck">
                        <a href="#0">
                            <div class="card-body-one">
                                <svg id="popular_business-intelligence" viewBox="0 0 400 400">
                                    <path fill="none" d="M105.45 247.8l210.55.46M15 211.99l375.62.6M47.39 176.3l309.33.63M58 140.63l335.8.63M32.38 105.03l322.08.57M22.99 266.11l.27-70.61m43.66 64.83l.3-177.22m43.68 191.66l.28-191.6m43.68 191.66l.28-191.59m43.64 216.32l.32-216.26m44.41 168.05l.25-167.98m43.67 176.96l.29-176.9m43.67 163.07l.29-150.63m43.67 138.81l.29-123.68"></path>
                                    <path fill="none" stroke="#2979ff" stroke-miterlimit="10" stroke-width="3" d="M24.81 157.69l37.33-33.19 73.8 39.99 172.56-21.85" opacity=".3"></path>
                                    <path fill="none" stroke="#2979ff" stroke-miterlimit="10" stroke-width="3" d="M199.02 138.04l132.79 87.79 43.79-25.59" opacity=".3"></path>
                                    <path fill="none" stroke="#ff6e40" stroke-miterlimit="10" stroke-width="3" d="M22.52 248.26l39.47-62.79 49.56 15.89 87.47-63.32m176.69-8.72l-43.88 19.13-27.33 11.05" opacity=".3"></path>
                                    <circle cx="331.8" cy="148.07" r="4.03" fill="#f9d3c7"></circle>
                                    <circle cx="331.8" cy="148.07" r="2.35" fill="none"></circle>
                                    <circle cx="23.65" cy="247.14" r="4.03" fill="#f9d3c7"></circle>
                                    <circle cx="23.65" cy="247.14" r="2.35" fill="none"></circle>
                                    <circle cx="62.08" cy="124.7" r="4.03" fill="#c4d9ff"></circle>
                                    <circle cx="62.08" cy="124.7" r="2.35" fill="none"></circle>
                                    <circle cx="23.65" cy="159.22" r="4.03" fill="#c4d9ff"></circle>
                                    <circle cx="23.65" cy="159.22" r="2.35" fill="none"></circle>
                                    <circle cx="375.8" cy="129.07" r="4.03" fill="#f9d3c7"></circle>
                                    <circle cx="375.8" cy="129.07" r="2.35" fill="none"></circle>
                                    <circle cx="331.8" cy="225.07" r="4.03" fill="#c4d9ff"></circle>
                                    <circle cx="331.8" cy="225.07" r="2.35" fill="none"></circle>
                                    <circle cx="375.29" cy="200.07" r="4.03" fill="#c4d9ff"></circle>
                                    <circle cx="375.29" cy="200.07" r="2.35" fill="none"></circle>
                                    <circle cx="195.17" cy="146.4" r="99.53" fill="#fff"></circle>
                                    <path fill="none" stroke="#e4e8e2" stroke-miterlimit="10" d="M155.5 50.13l-.29 192.55m74.94-192.44l-.29 192.55M88.2 115.39l212.34.31M88.95 186.99l212.34.32"></path>
                                    <path fill="none" stroke="#2979ff" stroke-miterlimit="10" stroke-width="3" d="M94 135.21l62.01-30.66 74.73 86.44 60.18 3.5"></path>
                                    <path fill="none" stroke="#ff6e40" stroke-miterlimit="10" stroke-width="3" d="M105 199.43L154.89 172l75.32-24.73 65.29 10.23"></path>
                                    <circle cx="155.29" cy="106.32" r="11.09" fill="#448aff"></circle>
                                    <circle cx="155.29" cy="106.32" r="6.46" fill="#fff"></circle>
                                    <circle cx="155.29" cy="172.32" r="11.09" fill="#ff6e40"></circle>
                                    <circle cx="155.29" cy="172.32" r="6.46" fill="#fff"></circle>
                                    <circle cx="231.29" cy="190.32" r="11.09" fill="#448aff"></circle>
                                    <circle cx="231.29" cy="190.32" r="6.46" fill="#fff"></circle>
                                    <circle cx="231.29" cy="146.32" r="11.09" fill="#ff6e40"></circle>
                                    <circle cx="231.29" cy="146.32" r="6.46" fill="#fff"></circle>
                                    <path fill="#e8e8e8" d="M227.12 260.43l3.37 25.48 30.1-12.99-14.52-21.58-18.95 9.09z"></path>
                                    <path fill="#b5b7a7" d="M291 215.9a118.71 118.71 0 1 1-27.2-165.66A118.71 118.71 0 0 1 291 215.9zM251.94 66.76a98.38 98.38 0 1 0 22.56 137.29 98.37 98.37 0 0 0-22.56-137.29z"></path>
                                    <path fill="#c6c7bd" d="M287.76 376.13A19.45 19.45 0 0 1 262.17 366l-33.06-76.84a2.39 2.39 0 0 1 1.25-3.14l31.35-13.54a2.4 2.4 0 0 1 3.15 1.26l33.07 76.88a19.46 19.46 0 0 1-10.17 25.51z"></path>
                                    <circle cx="62.08" cy="185.7" r="4.03" fill="#f9d3c7"></circle>
                                    <circle cx="62.08" cy="185.7" r="2.35" fill="none"></circle>
                                </svg>
                                <p class="popular-categories-link">Business Intelligence<br>Software</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="card-deck">
                        <a href="#0">
                            <div class="card-body-one">
                                <svg id="popular_crm" viewBox="0 0 400 400">
                                    <path fill="#e8e8e8" d="M359.06 204.88A158.67 158.67 0 0 0 345.22 140h.08l-1.08-2.31c-.23-.51-.49-1-.73-1.5s-.34-.71-.52-1.07q-1.47-3-3.06-6c-.08-.15-.15-.3-.24-.45-2.41-4.43-5-8.72-7.82-12.87l-.25-.36c-1.36-2-2.77-4-4.21-5.93l-.14-.18q-4.32-5.77-9.13-11.09l-1.39-1.52q-1.59-1.73-3.24-3.39c-.6-.62-1.2-1.25-1.82-1.87-1.13-1.11-2.29-2.21-3.45-3.29q-2.12-2-4.29-3.85l-1-.9a159.33 159.33 0 0 0-74.63-35.58l-1.07-.19c-1.77-.31-3.54-.61-5.33-.86s-3.59-.5-5.39-.69c-1-.1-1.95-.18-2.92-.27-1.54-.14-3.08-.26-4.63-.35l-2.44-.14c-2.39-.1-4.78-.18-7.18-.18-2.56 0-5.1.08-7.64.2l-1.92.12q-3 .17-5.93.45l-1.67.17c-2.28.24-4.54.53-6.8.87l-.5.07a157.48 157.48 0 0 0-64.7 25.39l-.21.14c-2 1.34-3.93 2.73-5.85 4.17l-.52.39c-.72.54-1.44 1.05-2.16 1.6l-4.88 3.8h.3a161.57 161.57 0 0 0-28.55 31.21l-.06-.12-1.67 2.48A159 159 0 0 0 44.65 165c-.6 2.32-1.13 4.65-1.62 7-.1.47-.2.94-.29 1.41q-.66 3.27-1.18 6.57c0 .25-.08.5-.12.76-.37 2.42-.67 4.85-.93 7.29-.06.56-.1 1.12-.15 1.68q-.27 2.87-.44 5.73c0 .69-.08 1.37-.11 2.06-.12 2.45-.19 4.9-.19 7.35 0 3.3.13 6.55.33 9.79.06 1 .14 1.88.21 2.82.19 2.41.43 4.82.73 7.21.12.92.22 1.85.35 2.77.44 3 .93 6.06 1.53 9 0 .15.06.31.09.47.63 3.06 1.37 6.09 2.17 9.09.29 1.08.6 2.14.91 3.2q.84 2.89 1.79 5.76c.41 1.24.82 2.48 1.26 3.71.63 1.77 1.31 3.51 2 5.24q1.5 3.78 3.2 7.45c.48 1 .94 2.09 1.44 3.12.89 1.83 1.83 3.63 2.78 5.43l1.08 2a159.42 159.42 0 0 0 49.13 54.3c.61.42 1.21.86 1.83 1.27 1.5 1 3 2 4.56 2.93 1.25.79 2.52 1.54 3.8 2.29.93.54 1.82 1.14 2.76 1.67h-.2l11.14 5.86-.44-.53c.78.37 1.59.68 2.38 1 1.37.61 2.74 1.22 4.13 1.79s2.57 1 3.86 1.53 2.4.91 3.61 1.34c1.48.52 2.95 1 4.44 1.5 1 .33 2.05.65 3.08 1 1.65.49 3.29 1 4.95 1.4.9.24 1.8.46 2.71.68 1.76.43 3.53.85 5.31 1.23.85.18 1.72.33 2.57.49 1.82.36 3.64.7 5.47 1 .95.15 1.91.26 2.86.39 1.75.24 3.49.49 5.25.67 1.31.13 2.65.21 4 .32s2.84.25 4.26.32c2.78.14 5.58.22 8.41.22a158.76 158.76 0 0 0 64.29-13.56l.55-.25c2.18-1 4.34-2 6.47-3.05l1.66-.85c1.69-.88 3.38-1.78 5-2.71.92-.51 1.83-1.05 2.74-1.58 1.23-.72 2.44-1.45 3.65-2.2s2.5-1.58 3.73-2.4l2.32-1.57c1.56-1.08 3.12-2.18 4.65-3.31l1-.78a158.31 158.31 0 0 0 21.88-19.83l1-1.11-.06-.07a159.12 159.12 0 0 0 40.82-106.43z"></path>
                                    <path fill="#b5b7a7" d="M126.21 342.87c-5.28-6.42-14.58-24.7-12.88-30.06.9-2.82.93-4.42.13-5.52a2.74 2.74 0 0 0-2.29-1.08 9.72 9.72 0 0 0-2.85.64 8.19 8.19 0 0 1-3.3.63c-6.36-1.35-25.46-6.1-29.6-10a22.22 22.22 0 0 0-2.22-1.86l.58-.59c3.08-3.31 1.49-6.33.64-7.95a5.72 5.72 0 0 0-.46-.77 12.63 12.63 0 0 1 1.26-1.94c1.42-1.92 3-4.1 2.61-6.34a33.4 33.4 0 0 0-1.83-5.67c2.25-1.69 6.91-5.49 8.22-8.87a12.07 12.07 0 0 0 .69-4.46l.4.19c1.31.68 2 1.47 2.09 2.37l.56 6.35 2.77-5.75a.93.93 0 0 1 .56-.51c1.73-.61 12.09-3.15 15.93-4.07l.32-.08a4.22 4.22 0 0 1 1 .45 12.08 12.08 0 0 0 5.58 1.12 18.94 18.94 0 0 0 4-.42 3.89 3.89 0 0 1 2.26.15 30.17 30.17 0 0 0 4.42.78c4.87.51 11.83-1.09 11.92-1.11a7.85 7.85 0 0 1 1.17-.08c.75 0 2.5.1 2.59 1a12.74 12.74 0 0 1-.9 5.54l-1.82 4.2 4.16-1.9a54 54 0 0 1 8.77-3.06 37 37 0 0 1 6.56-.95l8.7-1.67 3.35-1.16 12.9.26.4-.21a10 10 0 0 1 2.24-.84 9.62 9.62 0 0 1-.46 1.09 43.93 43.93 0 0 1-3.64 6c-1.89 2.74-3.38 4.91-2.8 7.56a18.44 18.44 0 0 0 1.05 2.85c2.51 5.91 4.44 12-1.73 15.62-9.93 5.85-12.8 8.8-12.91 8.93l-1 1.1.94 1.19c.05.07 4.92 6.45 1.9 10.32a12.28 12.28 0 0 0-2.61 5.84c-.29 1.53-.38 2-2.78 2.83l-9.32 3.25.58 1.66c.54 1.52 2.61 1.72 4.57 1.72h.55l-.58.43a18.21 18.21 0 0 1-4 2.05c-1.76.7-3.58 1.42-4.1 3.41a7.71 7.71 0 0 0-.13 2.52c.07 1 .07 1-.46 1.24l-.41.19c-1 .45-1.81.81-2.07 1.81a2.38 2.38 0 0 0 .62 2.11 8.42 8.42 0 0 1 .89 1.42 5.14 5.14 0 0 1-.26 4.18c-.92 1.47-2.91 1.4-5.75 0-7.23-3.5-10.08-4.87-12.45-5-.78-.32-1.48-.69-2.27-1.08z"></path>
                                    <path fill="#dbd9ca" d="M143.61 190.15a14.8 14.8 0 0 0 2.69-.15c.73-.07 1.5-.16 2.22-.16 1.09 0 1.32.22 1.32.22a1 1 0 0 1 .06.47 8.34 8.34 0 0 0 1.55 4.85c-.32.05-.74.11-1.29.17-5.12.55-6.3-4.17-6.41-4.68zm-7.17-128.21a19.79 19.79 0 0 1-6.09 7.51l-7.49 2.94-7 3.18-3.5.27a2.7 2.7 0 0 0-.68-.19 156.33 156.33 0 0 1 24.76-13.71z"></path>
                                    <path fill="#b5b7a7" d="M316.91 307.57v-.76c.32-3.45-1.86-7.19-4.17-11.14-1.79-3.05-3.63-6.21-3.84-8.66a48 48 0 0 1-.07-4.83c.08-4.92.17-10.49-3.15-18.14-2.84-6.53-1.42-8.06.92-10.6a21.59 21.59 0 0 0 2.54-3.16c2.82-4.45 5.43-11 .52-22.37-3.88-9-3.25-9.52-1.37-11.11 2.8-2.36 1.74-7.09 1-10.55-.18-.84-.36-1.58-.42-2.16-.47-3.86-10.13-8.87-12.58-9.14-.48 0-1.85-.43-3.3-.83-4.45-1.22-11.89-3.27-19.49-3.67l-3.32-.16c-7.12-.31-7.4-.32-11.4-4.46-4.95-5.13-6.77-10.54-8.1-24.11-1.07-10.82 3.54-17 6.9-21.44a33.42 33.42 0 0 0 2.18-3.13c1-1.64 3.51-2.88 6-4.08 3.28-1.59 6.67-3.23 7.68-6.35.86-2.66 4.27-5.09 6.76-6.87a21.16 21.16 0 0 0 3-2.37 2.61 2.61 0 0 1 1.86-.55 8.87 8.87 0 0 1 2.16.31 141.36 141.36 0 0 0 16.18 2.6c5 .37 13.39-.61 17.52-1.17-.3 1.71-.69 4.14-1 6.75-.55 4.3.27 7.75 2.43 10.28 3.81 4.46 10.84 4.64 13.14 4.7h1.24c1.5 0 3.08-.09 4.79-.19a155.7 155.7 0 0 1-24.57 167.34zM103.35 81.78c1.89-.24 5.27-.83 7.11-2.14a2.39 2.39 0 0 1 .22-.16l5.77-.44 7.77-3.42 7.71-3.07a22.25 22.25 0 0 0 8.19-10.36c.8-2.23 1.75-2.24 2.07-2.24a4.8 4.8 0 0 1 2 .7l4.5 5.29 5.89-2.36c-.68 1.34-1.39 2.71-1.92 3.93-.22.5-.27.46-1.72.46h-.39a7.19 7.19 0 0 0-4.86 1.71c-.7.58-1.39 1.24-2.11 1.78a51.57 51.57 0 0 0-9.72 9.25c-1.8 2.13-2.6 4.26-2.39 6.33.35 3.35 3.23 5.61 5.14 7.11a9.68 9.68 0 0 1 1.42 1.22c2.39 3.35 10.18 4 16.78.79 6.78-3.28 7.63-13.22 7.71-16.77l8.16-3.2a13 13 0 0 0 6-1 7.66 7.66 0 0 0 2.79-1.84 16.34 16.34 0 0 0 5.07 3c2.21 1 4.72 2.11 5.24 3.45s-2.17 3.9-3.87 5c-.08.06-7.51 5.5-15.32 8-2.54.79-5.21 1.81-4.88 4s3 2.33 5.33 2.33a32.66 32.66 0 0 0 6.62-.74 10.47 10.47 0 0 1 2.11-.23c2.2 0 3.37.83 3.44 1.13s-.8 1.18-3.76 1.91c-5.27 1.3-8.12 2.79-9 4.69a3.22 3.22 0 0 0-.24.77c-2 2.21-9.14 10.84-11.57 21.31s-8.47 13-8.72 13.15l-1.63.64 6.25 15.9a2.63 2.63 0 0 1 .13 2.12 2.3 2.3 0 0 1-.9.88c-1.72-1.3-5.92-3.74-14.92-5.67a16.58 16.58 0 0 0-3.42-.38c-11 0-13.77 12.61-14.93 18-1.4 6.48-1.75 9.51-.89 13.57.45 2.13 2.3 3.41 4.93 3.41 3.35 0 7.49-1.93 10.32-4.81a17 17 0 0 1 5.12-3.81c-.6 3.92-.18 6.5 1.34 8.31a2.27 2.27 0 0 0 .31.31l-3.15 1.24-6.28-2.15-.71.45c-.06 0-5.65 3.49-17.15 4.29-3.14.23-5.15-.38-6.08-1.73-1.24-1.81-.47-4.9-.07-6l.5-1.3-1.15-.79c-2.42-1.62-10.55-6.94-13.87-7.06-.78 0-2.58-2.09-3.9-3.59a32.77 32.77 0 0 0-7.72-7.06c-6-3.58-8.58-6.55-9.11-10.6-.32-2.47.93-5.8 2.25-9.34a45.3 45.3 0 0 0 2.58-8.5 9.87 9.87 0 0 0-4.58-10.23 69.47 69.47 0 0 0-3.2-9.85 157.67 157.67 0 0 1 33.36-35.59z"></path>
                                    <path fill="#a8a38c" d="M359.06 204.88A158.67 158.67 0 0 0 345.22 140h.08l-1.08-2.31c-.23-.51-.49-1-.73-1.5s-.34-.71-.52-1.07q-1.47-3-3.06-6c-.08-.15-.15-.3-.24-.45-2.41-4.43-5-8.72-7.82-12.87l-.25-.36c-1.36-2-2.77-4-4.21-5.93l-.14-.18q-4.32-5.77-9.13-11.09l-1.39-1.52q-1.59-1.73-3.24-3.39c-.6-.62-1.2-1.25-1.82-1.87-1.13-1.11-2.29-2.21-3.45-3.29q-2.12-2-4.29-3.85l-.93-.8q3.28 3.83 6.32 7.88l.14.19q2.18 2.91 4.22 5.93l.25.36c2.79 4.15 5.41 8.44 7.82 12.87l.24.44q1.59 3 3.06 6c.17.35.35.71.52 1.07s.5 1 .73 1.5l1.07 2.31h-.07a159.27 159.27 0 0 1-26.94 171.37l.07.07-1 1.11a160.18 160.18 0 0 1-21.88 19.83l-1 .78c-1.53 1.13-3.08 2.22-4.65 3.3-.76.53-1.53 1.06-2.31 1.57-1.24.82-2.48 1.62-3.74 2.4s-2.42 1.49-3.64 2.21c-.91.53-1.82 1.06-2.74 1.58-1.66.93-3.35 1.83-5.05 2.7-.55.29-1.1.58-1.66.86q-3.19 1.59-6.46 3.05l-.56.25a158.76 158.76 0 0 1-64.29 13.56c-2.82 0-5.63-.08-8.4-.22-1.43-.08-2.84-.22-4.26-.32s-2.66-.19-4-.33c-1.75-.18-3.49-.43-5.24-.66-.95-.13-1.91-.24-2.86-.39-1.83-.28-3.65-.63-5.47-1l-2.57-.49c-1.78-.38-3.55-.8-5.32-1.24l-2.7-.67q-2.49-.66-5-1.41c-1-.3-2.06-.62-3.09-1-1.48-.48-3-1-4.43-1.51-1.21-.43-2.42-.88-3.61-1.34s-2.59-1-3.86-1.52-2.77-1.18-4.13-1.79c-.8-.36-1.6-.67-2.39-1l.45.52-11.15-5.85h.21c-1-.53-1.84-1.12-2.77-1.66q-1.9-1.12-3.8-2.29c-1.53-1-3.06-1.93-4.56-2.93-.61-.41-1.21-.85-1.82-1.27a161.57 161.57 0 0 1-13-10 159.82 159.82 0 0 0 30.93 27.94c.61.42 1.21.86 1.83 1.27 1.5 1 3 2 4.56 2.93 1.25.79 2.52 1.54 3.8 2.29.93.54 1.82 1.14 2.76 1.67h-.2l11.14 5.86-.44-.53c.78.37 1.59.68 2.38 1 1.37.61 2.74 1.22 4.13 1.79s2.57 1 3.86 1.53 2.4.91 3.61 1.34c1.48.52 2.95 1 4.44 1.5 1 .33 2.05.65 3.08 1 1.65.49 3.29 1 4.95 1.4.9.24 1.8.46 2.71.68 1.76.43 3.53.85 5.31 1.23.85.18 1.72.33 2.57.49 1.82.36 3.64.7 5.47 1 .95.15 1.91.26 2.86.39 1.75.24 3.49.49 5.25.67 1.31.13 2.65.21 4 .32s2.84.25 4.26.32c2.78.14 5.58.22 8.41.22a158.76 158.76 0 0 0 64.29-13.56l.55-.25c2.18-1 4.34-2 6.47-3.05l1.66-.85c1.69-.88 3.38-1.78 5-2.71.92-.51 1.83-1.05 2.74-1.58 1.23-.72 2.44-1.45 3.65-2.2s2.5-1.58 3.73-2.4l2.32-1.57c1.56-1.08 3.12-2.18 4.65-3.31l1-.78a158.31 158.31 0 0 0 21.88-19.83l1-1.11-.06-.07a159.12 159.12 0 0 0 40.83-106.5z" opacity=".25"></path>
                                    <path fill="#ffd21a" d="M134.65 287.23L115 266.69c-11-11.54-10.54-30.27 1.72-40.52a27.69 27.69 0 0 1 18-6.45 27.71 27.71 0 0 1 17.95 6.45c12.25 10.25 12.77 29 1.72 40.52z"></path>
                                    <circle cx="134.65" cy="245.89" r="12.92" fill="#fff" transform="rotate(-30.58 134.68 245.923)"></circle>
                                    <path fill="#edc418" d="M152.6 226.17a27.55 27.55 0 0 0-11.46-5.72 27.68 27.68 0 0 1 6.94 4.25c12.26 10.26 12.77 29 1.72 40.52l-18.11 18.92 3 3.09 19.67-20.54c11.01-11.54 10.49-30.27-1.76-40.52z"></path>
                                    <path fill="#8bc34a" d="M97.78 105.91L75 82.07C62.13 68.68 62.73 47 77 35.05a32.17 32.17 0 0 1 20.83-7.48 32.14 32.14 0 0 1 20.82 7.48c14.22 11.9 14.82 33.63 2 47z"></path>
                                    <circle cx="97.78" cy="57.94" r="15.36" fill="#fff" transform="rotate(-27.97 97.766 57.93)"></circle>
                                    <path fill="#82af43" d="M118.6 35.05a31.85 31.85 0 0 0-13.3-6.63 32.21 32.21 0 0 1 8.06 4.93c14.22 11.9 14.82 33.63 2 47l-21 21.95 3.44 3.59 22.8-23.82c12.82-13.39 12.22-35.07-2-47.02z"></path>
                                    <path fill="#ff6e40" d="M293.6 151.18l-14.75-15.4c-8.29-8.66-7.9-22.7 1.29-30.39a20.79 20.79 0 0 1 13.46-4.83 20.79 20.79 0 0 1 13.46 4.83c9.19 7.69 9.58 21.73 1.29 30.39z"></path>
                                    <circle cx="293.6" cy="120.18" r="8.97" fill="#fff" transform="rotate(-32.9 292.146 120.82)"></circle>
                                    <path fill="#ed694a" d="M307.06 105.39a20.69 20.69 0 0 0-8.6-4.28 20.72 20.72 0 0 1 5.21 3.18c9.19 7.69 9.58 21.74 1.29 30.39l-13.58 14.18 2.22 2.32 14.75-15.4c8.29-8.66 7.9-22.7-1.29-30.39z"></path>
                                </svg>
                                <p class="popular-categories-link">CRM<br>Software</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="card-deck">
                        <a href="#0">
                            <div class="card-body-one">
                                <svg id="popular_billing-invoicing" viewBox="0 0 400 400">
                                    <path fill="#2979ff" d="M166.46 158.53l-7.67-7.93-5.44 9.59-7.66-7.92-5.44 9.59-7.66-7.93-5.44 9.59-7.66-7.93-5.43 9.59-7.67-7.92-5.43 9.59-7.66-7.93-5.44 9.59-7.66-7.93-5.44 9.59-7.65-7.92-5.44 9.59-7.66-7.93-5.43 9.59-7.66-7.93-5.44 9.59-7.65-7.93 27.12 211.7 5.43-9.59 7.66 7.92 5.43-9.58 7.66 7.92 5.43-9.59 7.66 7.93 5.44-9.59 7.66 7.93 5.43-9.59 7.67 7.92 5.43-9.59 7.66 7.93 5.44-9.59 7.66 7.93 5.43-9.59 7.67 7.93 5.43-9.59 7.66 7.92 5.45-9.59 7.66 7.93 5.44-9.59 7.15 7.39-26.96-210.52-5.08 8.95z" opacity=".2"></path>
                                    <rect width="105.4" height="8.57" x="51.41" y="188.41" fill="#2979ff" opacity=".2" rx="4.29" transform="rotate(-7.24 104.063 192.577)"></rect>
                                    <rect width="105.4" height="8.57" x="54.36" y="211.61" fill="#2979ff" opacity=".2" rx="4.29" transform="rotate(-8.1 100.741 210.365)"></rect>
                                    <rect width="105.4" height="8.57" x="57.3" y="234.82" fill="#2979ff" opacity=".2" rx="4.29" transform="rotate(-8.1 103.318 232.87)"></rect>
                                    <rect width="105.4" height="8.57" x="60.25" y="258.03" fill="#2979ff" opacity=".2" rx="4.29" transform="rotate(-7.24 112.911 262.17)"></rect>
                                    <rect width="105.4" height="8.57" x="63.2" y="281.24" fill="#2979ff" opacity=".2" rx="4.29" transform="rotate(-7.24 115.808 285.365)"></rect>
                                    <rect width="302.23" height="209.01" x="92.38" y="84.49" fill="#b5b7a7" rx="8" transform="rotate(-83.77 243.498 189)"></rect>
                                    <rect width="302.23" height="209.01" x="82.38" y="74.49" fill="#e8e8e8" rx="8" transform="rotate(-83.77 233.498 178.996)"></rect>
                                    <path fill="#93c049" d="M163.153 41.313l165.835 18.103-5.01 45.887L158.145 87.2z"></path>
                                    <path fill="#ff6e40" d="M156.034 106.466l165.835 18.103-1.503 13.768-165.835-18.103z"></path>
                                    <path fill="#c6c7bd" d="M152.4 131.816l165.151 18.35-2.64 23.76-165.152-18.35zm-2.974 35.225l165.835 18.104-2.604 23.858L146.822 190.9zm-4.712 34.22l165.152 18.35-2.64 23.76-165.152-18.35zm-2.911 35.511l165.835 18.104-2.604 23.858-165.835-18.103zm-3.693 33.958l165.836 18.104-2.605 23.858-165.835-18.103z"></path>
                                    <path fill="#3e9612" d="M166.65 45.4l161.93 17.68.4-3.66-165.83-18.1-5.01 45.88 3.9.42 4.61-42.22z"></path>
                                    <path fill="#b5b7a7" d="M150.83 154.179l165.834 18.103-.213 1.949-165.835-18.104z"></path>
                                    <path fill="#cc3a1d" d="M153.954 117.787l165.152 18.35-.216 1.941-165.152-18.35z"></path>
                                    <path fill="#b5b7a7" d="M147.03 188.941l165.834 18.104-.213 1.948-165.834-18.103zm-4.74 34.129l165.151 18.35-.216 1.94-165.151-18.35zm-2.864 35.614l165.835 18.103-.213 1.948-165.835-18.103zm-3.713 33.956l165.835 18.104-.213 1.948L135.5 294.59z"></path>
                                    <path fill="#e8e8e8" d="M234.17 114.072l9.751 1.064-21.816 199.853-9.753-1.065zm43.91 4.697l9.752 1.065-21.817 199.852-9.752-1.064zm-87.79-9.59l9.751 1.064-21.817 199.853-9.752-1.065z"></path>
                                    <path fill="#455a64" stroke="#455a64" stroke-miterlimit="10" stroke-width=".5" d="M303.392 67.183l12.775 1.395-.1.914-12.774-1.394zm-1.506 13.687l12.774 1.394-.1.915-12.774-1.395zm-.123.919l-1.394 12.774-.915-.1 1.395-12.774zm13.73 1.497L314.1 96.06l-.915-.1 1.395-12.774zm-15.094 11.271l12.774 1.395-.1.914-12.774-1.394zm2.861-26.452l-1.395 12.775-.914-.1 1.394-12.774zm13.72 1.497l-1.395 12.774-.914-.1 1.394-12.774zm-35.539-4.807l12.775 1.395-.1.914-12.774-1.394zm-1.496 13.688l12.774 1.394-.1.915-12.774-1.395zm-.124.906l-1.394 12.774-.915-.1 1.395-12.774z"></path>
                                    <path fill="#455a64" stroke="#455a64" stroke-miterlimit="10" stroke-width=".5" d="M293.531 80.885l-1.394 12.774-.915-.1 1.395-12.774zM278.448 92.17l12.774 1.394-.1.914-12.774-1.394zm2.758-27.691L279.792 77.2l-.91-.1 1.413-12.722zm-21.714-2.092l12.774 1.395-.1.915-12.774-1.395zm-1.497 13.698l12.774 1.394-.1.915-12.774-1.395zm-.127.914l-1.395 12.774-.914-.1 1.394-12.774zm-1.37 12.772l12.774 1.395-.1.914-12.774-1.394zm16.587-24.959l-1.394 12.774-.915-.1 1.395-12.774z"></path>
                                </svg>
                                <p class="popular-categories-link">Billing and Invoicing<br>Software</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="card-deck">
                        <a href="#0">
                            <div class="card-body-one">
                                <svg id="popular_email-management" viewBox="0 0 400 400">
                                    <path fill="#b5b7a7" d="M342.49 155.37l-135-114.1a15.46 15.46 0 0 0-21.52 0L51 155.37a27.93 27.93 0 0 0-8.51 20.07v172.47a15 15 0 0 0 15 15H336a15 15 0 0 0 15-15V175.44a27.93 27.93 0 0 0-8.51-20.07z"></path>
                                    <path fill="#fafafa" d="M74 56.33h247.53a4.93 4.93 0 0 1 4.93 4.93v213H69v-213a5 5 0 0 1 5-4.93z"></path>
                                    <path fill="#ff6e40" d="M101.68 93.87q11-11 27.43-11.18 16.42 0 26.47 10t10 23.23q-.18 12.59-5.42 19t-12.75 6.38q-10.14 0-10.66-8h-.18q-4.89 8-13.8 8a11.9 11.9 0 0 1-9.47-4.3q-3.58-4.2-3.59-11.54a26.49 26.49 0 0 1 5.29-16.65 16.59 16.59 0 0 1 13.72-6.9 13.33 13.33 0 0 1 7.34 2 9.6 9.6 0 0 1 4.19 5.32l1.05-6.29h5.94l-4.19 24.47a16.38 16.38 0 0 0-.35 3.32c0 3.72 1.92 5.59 5.76 5.59q4.38 0 7.78-5.16t3.58-15.29a26.84 26.84 0 0 0-8.21-19.48q-8.22-8.3-22.54-8.12-14 0-23.33 9.34t-9.17 24.73q.18 15 8.82 24t23.68 9q15.55 0 21.67-8.38h7.86q-8 13.62-29.53 13.63-17.3.16-27.78-10.49t-10.45-27.75q-.16-17.47 10.84-28.48zM129.46 107a12 12 0 0 0-10.22 5.51 21.24 21.24 0 0 0-3.93 12.66q0 5.25 2.53 8.22a8 8 0 0 0 6.38 3 12.37 12.37 0 0 0 10.48-5.59 22.16 22.16 0 0 0 4-13.28q.02-10.52-9.24-10.52z"></path>
                                    <g fill="#2979ff" opacity=".2">
                                        <rect width="119.38" height="9.71" x="184.39" y="83.18" rx="4.85"></rect>
                                        <rect width="119.38" height="9.71" x="184.39" y="102.64" rx="4.85"></rect>
                                        <rect width="119.38" height="9.71" x="184.39" y="122.09" rx="4.85"></rect>
                                        <rect width="119.38" height="9.71" x="184.39" y="141.54" rx="4.85"></rect>
                                        <rect width="119.4" height="9.71" x="184.37" y="160.99" rx="4.85"></rect>
                                        <rect width="212.59" height="9.71" x="91.18" y="180.45" rx="4.85"></rect>
                                        <rect width="212.59" height="9.71" x="91.18" y="199.9" rx="4.85"></rect>
                                        <rect width="212.59" height="9.71" x="91.18" y="219.35" rx="4.85"></rect>
                                    </g>
                                    <path fill="#e8e8e8" d="M348.3 163.6L196.24 268.22 45.36 163.1a27.83 27.83 0 0 0-2.88 12.34v172.47a15 15 0 0 0 15 15H336a15 15 0 0 0 15-15V175.44a27.82 27.82 0 0 0-2.65-11.86"></path>
                                    <path fill="#d7d8d2" d="M46.64 358.29a15 15 0 0 0 10.87 4.65H336a15 15 0 0 0 10.41-4.19l-129.3-116a30.56 30.56 0 0 0-40.74-.07L46.64 358.28"></path>
                                    <path fill="#448aff" d="M321.53 56.33H74a5 5 0 0 0-5 5V65h257.46v-3.75a4.93 4.93 0 0 0-4.93-4.92z"></path>
                                </svg>
                                <p class="popular-categories-link">Email Management<br>Software</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="card-deck">
                        <a href="#0">
                            <div class="card-body-one">
                                <svg id="popular_campaign-management" viewBox="0 0 400 400">
                                    <path fill="#cc3a1d" d="M154 246s3.52 16.69 5.1 22.23c2.27 7.92-7.79 12.45-13.44 10.19L140 248.26z"></path>
                                    <ellipse cx="281.74" cy="169.3" fill="#cc3a1d" rx="39.16" ry="41.03" transform="rotate(-5.65 281.54 169.198)"></ellipse>
                                    <path fill="none" stroke="#455a64" stroke-miterlimit="10" stroke-width="3" d="M334 95.41c23.11 13.09 38.86 38.65 39 68.11a79.24 79.24 0 0 1-24.62 58.17"></path>
                                    <path fill="none" stroke="#455a64" stroke-miterlimit="10" stroke-width="3" d="M326.65 127.84A43.56 43.56 0 0 1 347.24 165a44.17 44.17 0 0 1-10.69 29.19"></path>
                                    <path fill="#e8e8e8" d="M271.21 271.81s-20.69-31.4-101.49-23.41v.13L94.36 256l-14-141.13 75.37-7.45c80.8-8 94.94-42.83 94.94-42.83"></path>
                                    <rect width="29.83" height="254.27" x="260.53" y="39.69" fill="#b5b7a7" rx="10.75" transform="rotate(-5.65 275.262 166.755)"></rect>
                                    <path fill="#ff6e40" d="M81 114.66A44.21 44.21 0 0 0 41.4 163l-.23-2.29-16.49 1.63a9.21 9.21 0 0 0-8.26 10.07l3.9 39.41a9.2 9.2 0 0 0 10.07 8.25l16.49-1.63c2.41 24.3 23.82 39.75 48.12 37.35z"></path>
                                    <path fill="#b5b7a7" d="M147.72 343.12l-21.29 2.11A12 12 0 0 1 113.8 337L95 255.79l45.82-4.53L158 327.41a12 12 0 0 1-10.28 15.71z"></path>
                                    <rect width="91.03" height="8.95" x="109.15" y="174.16" fill="#d7d8d2" rx="3.6" transform="rotate(-5.65 154.619 178.577)"></rect>
                                    <path fill="#d7d8d2" d="M271.21 271.81L270 259.63c-3.25-4.18-26.69-30.2-101.08-22.85v.13L94 245l1 11 74.73-7.47v-.13c80.79-7.99 101.48 23.41 101.48 23.41z"></path>
                                    <path fill="#ed694a" d="M93.86 244.32c-23.2.92-43.16-14.11-45.47-37.52l-16.5 1.63a9.21 9.21 0 0 1-10.07-8.26l-3.4-34.45a9.16 9.16 0 0 0-2 6.69l3.9 39.41a9.2 9.2 0 0 0 10.07 8.25l16.49-1.63c2.41 24.3 23.82 39.75 48.12 37.35z"></path>
                                    <path fill="#aeb0a0" d="M158 327.41l-17.16-76.15-7.43.74 17 74.23c2.39 7.31-4.21 11.36-11.86 12.12l-21.29 2.1a11.73 11.73 0 0 1-1.56.05 12 12 0 0 0 10.79 4.73l21.29-2.11A12 12 0 0 0 158 327.41zm138.47-39.59l-3.09.31c-7.35.72-13.85-4.26-14.53-11.13L256.29 48.85a11.89 11.89 0 0 1 1.91-7.69 12.7 12.7 0 0 0-8.88 13.06l22.56 228.14c.68 6.87 7.19 11.86 14.53 11.13l3.09-.3a13.71 13.71 0 0 0 10.16-6.07 14.49 14.49 0 0 1-3.19.7z"></path>
                                </svg>
                                <p class="popular-categories-link">Campaign Management<br>Software</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="card-deck">
                        <a href="#0">
                            <div class="card-body-one">
                                <svg id="popular_project-management" viewBox="0 0 400 400">
                                    <path fill="none" stroke="#455a64" stroke-miterlimit="10" stroke-width="3" d="M270.27 117.9l-66.46 70a6.34 6.34 0 0 1-9.32 0l-66.49-70a7.23 7.23 0 0 1 0-9.83l66.47-70a6.36 6.36 0 0 1 9.32 0l66.46 70a7.21 7.21 0 0 1 .02 9.83z"></path>
                                    <path fill="#e8e8e8" d="M42.8 73.41h313.6v271.35H42.8z"></path>
                                    <rect width="326.8" height="16.43" x="36.2" y="57.1" fill="#c6c7bd" rx="2.59"></rect>
                                    <path fill="#c6c7bd" d="M359.66 348.92h-322c-1.32 0-2.38-.36-2.36-.81l.31-6c0-.44 1.12-.81 2.44-.81h322c1.32 0 2.38.37 2.36.81l-.31 6c-.02.45-1.1.81-2.44.81z"></path>
                                    <path fill="#aeb0a0" d="M358.33 57.15a2.56 2.56 0 0 1 0 .39v8.57c0 2.11-2.41 3.83-5.36 3.83H36.23c.27 1.92 2.57 3.44 5.34 3.44h316.07c2.95 0 5.36-1.73 5.36-3.83v-8.61c0-1.94-2-3.54-4.67-3.79zm.01 284.32a.77.77 0 0 1 0 .15v4c0 .95-2.37 1.73-5.27 1.73H36.22c.24.88 2.51 1.58 5.25 1.58h316.26c2.9 0 5.27-.78 5.27-1.73v-4c0-.9-2-1.63-4.66-1.73z"></path>
                                    <rect width="270.21" height="18.02" x="64.5" y="96.4" fill="#448aff" rx="7"></rect>
                                    <rect width="54.4" height="18.02" x="64.5" y="129.76" fill="#1c62b7" rx="7"></rect>
                                    <path fill="#3e9612" d="M318.64 147.66H287.3a7 7 0 0 1-7-7v-3.9a7 7 0 0 1 7-7h40.4a7 7 0 0 1 7 7v3.9a7 7 0 0 1-7 7h-9.06"></path>
                                    <rect width="54.4" height="18.02" x="280.3" y="296.61" fill="#8bc34a" rx="7"></rect>
                                    <rect width="54.4" height="18.02" x="108.93" y="163.13" fill="#ff6e40" rx="7"></rect>
                                    <rect width="56.91" height="18.02" x="234.06" y="263.24" fill="#448aff" rx="7"></rect>
                                    <rect width="136.01" height="18.02" x="108.93" y="229.87" fill="#1c62b7" rx="7"></rect>
                                    <rect width="88.86" height="18.02" x="155.17" y="196.5" fill="#448aff" rx="7"></rect>
                                </svg>
                                <p class="popular-categories-link">Project Management<br>Software</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="card-deck">
                        <a href="#0">
                            <div class="card-body-one">
                                <svg id="popular_customer-support" viewBox="0 0 400 400">
                                    <path fill="#d7d8d2" d="M169.89 286.81s13.34 28.84 13.79 33.39-9.75 20.45 16 36.71 85.13-13.07 74.84-50.72c0 0-24.1-54.7-34.75-74.44s-69.88 55.06-69.88 55.06z"></path>
                                    <path fill="#e8e8e8" d="M68.54 178.6c4.29 83.85 36.86 138.61 65.18 137.89 32.15-.82 83.95-26.17 101.17-45.67 26.45-30 39.94-49.78 39.87-114.08-.08-83.22-38.59-119.18-113.93-117.91S64.74 104.09 68.54 178.6z"></path>
                                    <g clip-path="url(#a)" style="isolation:isolate">
                                        <path fill="#455a64" d="M245.92 131a39.5 39.5 0 0 0-19.9-.56 46 46 0 0 0-19.75 10.23 58.47 58.47 0 0 0-15.19 20.9 66.69 66.69 0 0 0-5.54 28.25A61.39 61.39 0 0 0 192 216.4a48.72 48.72 0 0 0 14.68 17.49 39.68 39.68 0 0 0 36.32 5.74 46.52 46.52 0 0 0 15.29-8.55 55.86 55.86 0 0 0 11-12.52 63.57 63.57 0 0 0 7.15-15 66.93 66.93 0 0 0 3.17-17 65.35 65.35 0 0 0-1.3-17.33 58.9 58.9 0 0 0-5.83-15.86 49.68 49.68 0 0 0-10.59-13.45 41.7 41.7 0 0 0-16-8.9"></path>
                                    </g>
                                    <path fill="#c6c7bd" d="M231 376c44.86 0 71.53-21.36 84.45-46.25-22.69-13.21-41.36-24-41.36-24.23-13.54 21.58-68.8 47.88-90.24 14L145.74 343c14.46 19.17 41.81 33 85.26 33z"></path>
                                    <path fill="#ff6e40" d="M133 43c32.4-7.37 116.31 1.69 97.6 124.83-2.74 18.08 23.12 4.35 23.12 4.35C261.84 105.64 252.22 70.61 219 46c-25.41-18.83-77-19-86-3z"></path>
                                    <path fill="none" stroke="#818a8c" stroke-miterlimit="10" stroke-width="3" d="M143 269.11c41.4-2 85.25-19.9 101-61.74"></path>
                                    <ellipse cx="142.22" cy="267.7" fill="#455a64" rx="16.96" ry="13.85" transform="rotate(-6.89 142.338 267.897)"></ellipse>
                                    <g clip-path="url(#b)" style="isolation:isolate">
                                        <path fill="#b5b7a7" d="M245.38 151.11a24.85 24.85 0 0 0-12.42 1 30.51 30.51 0 0 0-11.5 7.31 39 39 0 0 0-8.49 12.9 44 44 0 0 0-3.22 16.68 40.6 40.6 0 0 0 3.2 16 32.43 32.43 0 0 0 8.05 11.37 26 26 0 0 0 10.76 5.84 24.51 24.51 0 0 0 11.68.11 28.24 28.24 0 0 0 10.45-4.88 35.24 35.24 0 0 0 7.88-8.18 41.13 41.13 0 0 0 5.23-10.39 43.94 43.94 0 0 0 2.25-12 42.38 42.38 0 0 0-1.14-12.1 37.07 37.07 0 0 0-4.42-10.65 30.17 30.17 0 0 0-7.58-8.38 25.06 25.06 0 0 0-10.73-4.66"></path>
                                    </g>
                                </svg>
                                <p class="popular-categories-link">Customer Support<br>Software</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="card-deck">
                        <a href="#0">
                            <div class="card-body-one">
                                <svg id="popular_employee-scheduling" viewBox="0 0 400 400">
                                    <rect width="362.04" height="238.57" x="17.61" y="95.55" fill="#c6c3b3" rx="8.69" transform="rotate(5.35 198.698 214.978)"></rect>
                                    <rect width="362.04" height="249.33" x="17.92" y="82.67" fill="#e8e8e8" rx="8.69" transform="rotate(5.35 198.99 207.457)"></rect>
                                    <rect width="179.97" height="185.25" x="180.2" y="133.63" fill="#fff" rx="3.86" transform="rotate(5.35 270.335 226.324)"></rect>
                                    <path fill="#d7d8d2" d="M181.11 103.89l-20.86-25.11 26.66 2.38-5.8 22.73z"></path>
                                    <path fill="#ffb74d" d="M190.792 39.93l43.738 12.575-16.927 58.875a8 8 0 0 1-9.899 5.478l-28.37-8.157a8 8 0 0 1-5.479-9.899l16.927-58.875.01.003z"></path>
                                    <path fill="#455a64" d="M199.81 106.93a12.26 12.26 0 0 1-4.49-.44 12.27 12.27 0 0 1-8.4-15.17 12.26 12.26 0 1 1 17.72 14.12 12.47 12.47 0 0 1-4.83 1.49zm-2.14-23.67a11.53 11.53 0 0 0-10 8.28 11.48 11.48 0 1 0 22.07 6.34 11.49 11.49 0 0 0-7.86-14.21 11.6 11.6 0 0 0-4.21-.41z"></path>
                                    <circle cx="101.47" cy="206.11" r="65.35" fill="#fff" transform="rotate(-75.35 101.482 206.117)"></circle>
                                    <g fill="#455a64" clip-path="url(#a)">
                                        <path d="M81.25 268.25l-5.54-34.92-26.59 4.39-4.84-1.43a3 3 0 0 0-.83-.13 65.37 65.37 0 0 0 37.8 32.09zm66.39-15.88l-.37-4a3.31 3.31 0 0 0-3.6-3l-5.58.52-23.47-8.81L102 271.46a65.26 65.26 0 0 0 45.64-19.09z"></path>
                                    </g>
                                    <path fill="#e8e8e8" d="M82.41 232.956l2.79-28.453 28.454 2.79-2.79 28.453z"></path>
                                    <path fill="#818a8c" d="M120 222l-17.31-7.54a17.71 17.71 0 0 0-6.22-1.46l-23.12-3.15c-9.43-1-14.11-7.44-12.44-15.37l8.28-25.93a43.4 43.4 0 0 0 1.74-8l1.76-14.69a21.89 21.89 0 0 1 6.5-13.27c8.16-7.75 22.3-13.77 36.16-10.38l9.76 2.39a7.47 7.47 0 0 1 1 .29c11.74 4.35 17.48 11 20.84 19.61 1.68 4.3 3 8.71 2.22 13.25l-2 10.75a41.44 41.44 0 0 0-.65 6.38l-.86 35.12a12.61 12.61 0 0 1-6.49 10.83 25.21 25.21 0 0 1-11.33 2.76A22.78 22.78 0 0 1 120 222z"></path>
                                    <path fill="#d8d7d4" d="M113 213c-6.84 9.54-18.61 15.61-29.93 13.51L86 196l24.62 8.89L113 213"></path>
                                    <path fill="#e8e8e8" d="M99.503 142.681l30.63 9.085a12.24 12.24 0 0 1 8.244 15.254l-10.851 36.584a22.47 22.47 0 0 1-27.932 15.154l-11.016-3.268a22.47 22.47 0 0 1-15.153-27.931l10.851-36.585a12.24 12.24 0 0 1 15.215-8.254z"></path>
                                    <rect width="13.82" height="20.96" x="129.96" y="175.61" fill="#eee" rx="2.42" transform="rotate(32.86 136.876 186.107)"></rect>
                                    <rect width="13.82" height="20.96" x="67.76" y="157.46" fill="#e8e8e8" rx="2.42" transform="rotate(-6.94 74.65 167.897)"></rect>
                                    <path fill="#d8d7d4" d="M136.51 162.06c.61 3.38-.1 8.94-1.2 14.52a12.75 12.75 0 0 1 1.46-2.34 7.24 7.24 0 0 1 2.87-2.25 18 18 0 0 0 0-11.92c-2.07-5.46-12.51-4.18-17.48-5-7-1.14-13.82-3.08-20.82-4.09-3.87-.56-7.74-.83-11.63-1.11-1.16-.08-2.39 0-3.56-.24a13.28 13.28 0 0 1-3.49 4.72c-.81.7-1.83 1.14-2.69 1.75l-.58.39c-.28 2.29.59 4.92.39 7.18l1-3.72c.28-1.5 1.23-2.56 2.59-1.86a46.12 46.12 0 0 0 19 4.37c8.27.26 15.73-1.27 20.84-3.91l-1.05.51a1.49 1.49 0 0 1 2 1.34c.33 2-6.79 8.42-1 7.8 3.22-.35 6.57-4.39 9.4-7.33a2.3 2.3 0 0 1 3.95 1.19z"></path>
                                    <path fill="#818a8c" d="M144.92 154.1c-2.62-1.93-10-7.45-13-8.53a5.06 5.06 0 0 1-.52-.23c-5.14-.66-10.24-1.27-15.45-1.67-7-.56-21.88-7.39-28.94-7.84-2.38-.15-5.41 2.86-5.52 3.72-.22 1.7-3.61 9.89-3.77 11.61-.38 4.16-.6 10.4-1 12.13-.06.25-2.78 12.52-1.79 18.46l6-22.84c.29-1.5 1.24-2.56 2.6-1.86a46.08 46.08 0 0 0 19 4.37c8.27.26 15.73-1.27 20.84-3.91l-1.05.51a1.48 1.48 0 0 1 2 1.34c.34 2-6.79 8.43-1 7.8 3.22-.34 6.56-4.39 9.4-7.33a2.3 2.3 0 0 1 3.93 1.15c1.59 8.9-5.88 32.83-5.88 32.83l.59.11c.43-1.19 10.4-20 11.68-23.11 1.65-4.07 3.3-15.66 1.88-16.71z"></path>
                                    <path fill="#8bc34a" d="M282.14 250.17l1.69-17.25-26.39-2.64-1.69 17.25 26.39 2.64z"></path>
                                    <path fill="#c6c7bd" d="M276.44 308.4l1.69-17.25-26.39-2.64-1.69 17.26 26.39 2.63z"></path>
                                    <path fill="#8bc34a" d="M230.44 156.81l26.39 2.63 1.69-17.25-26.39-2.63-1.69 17.25z"></path>
                                    <path fill="#c6c7bd" d="M298.14 163.56l26.39 2.64 1.68-17.26-26.39-2.63-1.68 17.25z"></path>
                                    <path fill="#eee" d="M331.98 166.94l26.39 2.63 1.69-17.25-26.39-2.64-1.69 17.26zm-67.69-6.75l26.39 2.63 1.69-17.25-26.39-2.64-1.69 17.26z"></path>
                                    <path fill="#8bc34a" d="M279.29 279.29l1.69-17.26-26.39-2.63-1.69 17.25 26.39 2.64z"></path>
                                    <path fill="#eee" d="M315.99 253.54l1.68-17.25-26.39-2.63-1.68 17.25 26.39 2.63z"></path>
                                    <path fill="#ffb74d" d="M313.14 282.66l1.69-17.25-26.39-2.64-1.69 17.26 26.39 2.63z"></path>
                                    <path fill="#eee" d="M310.29 311.78l1.69-17.26-26.39-2.63-1.69 17.25 26.39 2.64z"></path>
                                    <path fill="#3e9612" d="M292.44 221.79l26.39 2.64 1.69-17.25-26.39-2.64-1.69 17.25z"></path>
                                    <path fill="#eee" d="M322.28 266.15l-1.69 17.25 26.4 2.64 1.68-17.26-26.39-2.63z"></path>
                                    <path fill="#8bc34a" d="M327.98 207.91l-1.69 17.26 26.39 2.63 1.69-17.25-26.39-2.64z"></path>
                                    <path fill="#eee" d="M344.14 315.15l1.69-17.25-26.4-2.64-1.68 17.26 26.39 2.63zm-19.01-78.12l-1.69 17.26 26.39 2.63 1.69-17.25-26.39-2.64z"></path>
                                    <path fill="#3e9612" d="M295.29 192.68l26.39 2.63 1.69-17.25-26.39-2.64-1.69 17.26zm-10.3 28.37l1.68-17.25-26.39-2.64-1.68 17.26 26.39 2.63zm-23.55-31.75l26.39 2.64 1.69-17.26-26.39-2.63-1.69 17.25zm67.7 6.75l26.39 2.64 1.68-17.26-26.39-2.63-1.68 17.25z"></path>
                                    <path fill="#c6c7bd" d="M213.29 255.28l-26.52-2.65-1.69 17.26 26.52 2.65 1.69-17.26z"></path>
                                    <path fill="#eee" d="M216.13 226.16l-26.52-2.64-1.68 17.25 26.52 2.65 1.68-17.26zm-5.69 58.24l-26.52-2.65-1.69 17.25 26.52 2.65 1.69-17.25zm14.24-145.58l-26.52-2.65-1.69 17.25 26.52 2.65 1.69-17.25zm-2.85 29.11l-26.52-2.65-1.69 17.26 26.52 2.65 1.69-17.26z"></path>
                                    <path fill="#3e9612" d="M218.98 197.05l-26.52-2.65-1.69 17.26 26.52 2.64 1.69-17.25zm35.01-8.49l1.69-17.25-26.4-2.64-1.68 17.26 26.39 2.63z"></path>
                                    <path fill="#ff6e40" d="M242.6 305.03l1.69-17.26-26.39-2.63-1.69 17.25 26.39 2.64z"></path>
                                    <path fill="#3e9612" d="M251.14 217.68l1.69-17.26-26.39-2.63-1.69 17.25 26.39 2.64z"></path>
                                    <path fill="#8bc34a" d="M245.45 275.91l1.68-17.25-26.39-2.64-1.68 17.26 26.39 2.63z"></path>
                                    <path fill="#eee" d="M248.29 246.79l1.69-17.25-26.39-2.63-1.69 17.25 26.39 2.63z"></path>
                                </svg>
                                <p class="popular-categories-link">Employee Scheduling <br>Software</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Categori area-->

<!--Start Leader Section-->
<section class="leader-wrapper-area">
    <div class="circle">
        <img src="{{url('frontend')}}/assets/images/circle.png" alt="" class="img-fluid">
    </div>
    <div class="leader-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="leader-title text-center">
                        <h2>Creating Future Leader</h2>
                        <div class="em-bar-main">
                            <div class="em-bar em-bar-big"></div>
                        </div>
                        <p>We are the makers of Future Leaders!</p>
                    </div>
                </div>
            </div>
            <div class="leader-content-area">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5 col-sm-6">
                        <div class="leader-image">
                            <img src="{{url('frontend')}}/assets/images/leader.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-12">
                        <div class="leader-speech">
                            <p>As one of the leading IT solution providers of Bangladesh,<br> we are working with the vision of making the nation proficient in the <br> Global ITvillage by building a platform which serves business owners <br> as well as freelancers with comprehensive training for IT skills and<br> professional enterprise solutions.Where we develop a progressive, empower and consumer focused corporate culture to growing market leadership along with the passion of corporate social responsibility to extend our leadership through performance.
                            </p>
                            <h4>Syed Delwar Hussain <span>Founder, Chairman, and CEO at Delwar IT</span></h4>
                            <div class="leader-btn">
                                <a href="{{url('ceo-page')}}" class="default">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Leader Section-->

<!--Start Blog Area-->
<section class="blog-wrapper-area">
    <div class="blog-wrap">
        <div class="container">
            <div class="row">
                <div class="blog-title text-center">
                    <h2>Our Blog</h2>
                    <div class="em-bar-main">
                        <div class="em-bar em-bar-big"></div>
                    </div>
                    <p>We are the makers of Future Leaders!</p>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($blog as $item)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-box">
                        <div class="blog-image">
                            <img src="{{url(asset('thumbnails/'.$item->image))}}" alt="" class="img-fluid">
                        </div>
                        <div class="blog-text">
                            <div class="bc-header">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6">
                                        <p> <i class="far fa-clock"></i> {{$item->created_at->format('d-M-Y')}}</p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6">
                                        <p class="bch-comments"><i class="far fa-comment"></i>{{$blog_comment ?? ""}} Comments</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bc-text">
                                <h3><a href="{{url('single-blog', $item->slug)}}">{{$item->title}}</a>
                                </h3>
                            </div>
                            <div class="bc-btn">
                                <a href="{{url('single-blog', $item->slug)}}">Read More +</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--End Blog Area-->

<!--Start Counselling Section-->
<section class="counselling-wrapper">
    <div class="shape-one">
        <img src="{{url('frontend')}}/assets/images/shape1.png" alt="" class="img-fluid">
    </div>
    <div class="counselling-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="counseling-form" id="counseling-form">
                        <h3>Career Counselling</h3>
                        <div class="em-bar-main">
                            <div class="em-bar em-bar-big"></div>
                        </div>
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
                <div class="col-lg-6">
                    <img src="{{url('frontend')}}/assets/images/animation_640_kmndncpb.gif" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Counselling Section-->

@endsection