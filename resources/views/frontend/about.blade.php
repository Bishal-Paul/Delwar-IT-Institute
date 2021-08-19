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
                        <h1>About Us</h1>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>/</li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Inner Area-->

<!--Start Contnet Area-->
<section class="content-area-wrapper">
    <div class="content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-iamge">
                        <img src="{{url('frontend')}}/assets/images/Design.gif" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-box">
                        <div class="title">
                            <h2>We Are Digital Creators</h2>
                            <div class="em-bar-main">
                                <div class="em-bar em-bar-big"></div>
                            </div>
                            <p>Delwar IT is an institution where empowering the community for an excellent standard of learning is what we desire. We endeavor for the continuous improvement of our leaders who will work for constructing a better future.</p>
                            <div class="kc-elm kc-css-434039 kc_text_block">
                                <p>The institute is dedicated to serving the quality training programs under ISO 9001: 2015 certification which remarks us in the IT world. We will continue to share our knowledge for contributing to the success of individuals and to serve society with the best interest.</p>
                                <p>We are committed to providing our students with a platform where superiority is the mantra. We nurture the young talent by sharing knowledge, providing supports in learning techniques,co-operating them for international standard projects, making successful freelancers and driving our youth towards a world of entrepreneurship.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="mission-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="title">
                                <h2>_Mission_</h2>
                            </div>
                            <div class="list">
                                <ul>
                                    <li><i class="fas fa-circle" aria-hidden="true"></i> To raise opportunities and growth by broadening the areas and possibilities for our future leaders.</li>
                                    <li><i class="fas fa-circle" aria-hidden="true"></i> To raise opportunities and growth by broadening the areas and possibilities for our future leaders.</li>
                                    <li><i class="fas fa-circle" aria-hidden="true"></i> To raise opportunities and growth by broadening the areas and possibilities for our future leaders.</li>
                                    <li><i class="fas fa-circle" aria-hidden="true"></i> To raise opportunities and growth by broadening the areas and possibilities for our future leaders.</li>
                                    <li><i class="fas fa-circle" aria-hidden="true"></i>To raise opportunities and growth by broadening the areas and possibilities for our future leaders.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mission-image">
                                <img src="{{url('frontend')}}/assets/images/win.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="development">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="title">
                                <h2>_Office & Trainning Space_</h2>
                            </div>
                            <p>12,500 Sft with 200 students capacity per shift (Air Conditioned)</p>
                            <div class="list-one">
                               <ul>
                                <li><i class="fas fa-circle" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
                                <li><i class="fas fa-circle" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
                                <li><i class="fas fa-circle" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
                                <li><i class="fas fa-circle" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
                                <li><i class="fas fa-circle" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
                               </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="title">
                                <h2>_It Trainning Development_</h2>
                                <div class="list-one">
                                    <ul>
                                        <li><i class="fas fa-circle" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
                                        <li><i class="fas fa-circle" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
                                        <li><i class="fas fa-circle" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
                                        <li><i class="fas fa-circle" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
                                        <li><i class="fas fa-circle" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
</section>
<!--End Content Area-->

<!--Start Plan area-->
<section class="plan-area-wrapper">
    <div class="plan-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="features-text">
                        <h2>Get best plans</h2>
                        <div class="em-bar-main">
                            <div class="em-bar em-bar-big"></div>
                        </div>
                        <p>We work systematically to integrate corporate responsibility in our core business and make our expertise available for the benefit of the societies where we operate.</p>
                        <ul>
                            <li>We've been supporting WordPress since the beginning.</li>
                            <li>Perfect for large sites or agencies managing multiple clients.</li>
                            <li>Our easy-to-use control panel and API let you spend</li>
                        </ul>
                        <a href="contact.html" class="default">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-image">
                        <img src="{{url('frontend')}}/assets/images/started.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Plan Area-->

<!--Start Testimonial Area-->
<section class="testimonial-wrapper-area">
    <div class="testimonial-wrap">
        <div class="container">
            <div class="row">
                <div class="testimonial-title">
                    <h2>What Our Client Are Saying</h2>
                    <div class="em-bar-main">
                        <div class="em-bar em-bar-big"></div>
                    </div>
                    <p>We enjoy adapting our strategies to offer every client the best solutions that are at the forefront of the industry.</p>
                </div>
            </div>
            <div class="client-content-wrap">
                <div class="col-md-12">
                    <div class="owl-carousel client-carousel owl-theme">
                        <div class="item">
                            <div class="client-inner">
                                <div class="client-info">
                                    <div class="image">
                                        <img src="{{url('frontend')}}/assets/images/client1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="client-title">
                                    <h4>Josh buttler</h4>
                                    <span>Web Developer</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testimonial Area-->

<!--Start Fun area-->
<section class="funfacts-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="funfact">
                    <div class="fun-box">
                        <h3>
                            <span class="odometer odometer-auto-theme" data-count="200">
                                <div class="odometer-inside">
                                    <span class="odometer-digit">
                                        <span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">2</span>
                                                </span>
                                            </span></span>
                                    </span>
                                    <span class="odometer-formatting-mark">,</span>
                                    <span class="odometer-digit">
                                        <span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">0</span>
                                                </span></span>
                                        </span></span>
                                    <span class="odometer-digit">
                                        <span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">2</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="odometer-digit">
                                        <span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">3</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </span>+
                        </h3>
                        <p>Project Completed</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="funfact">
                    <div class="fun-box">
                        <h3>
                            <span class="odometer odometer-auto-theme" data-count="250">
                                <div class="odometer-inside">
                                    <span class="odometer-digit">
                                        <span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">2</span>
                                                </span></span>
                                        </span>
                                    </span>
                                    <span class="odometer-formatting-mark">,</span>
                                    <span class="odometer-digit">
                                        <span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">5</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="odometer-digit">
                                        <span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">0</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="odometer-digit">
                                        <span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">0</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </span>
                        </h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="funfact">
                    <div class="fun-box">
                        <h3>
                            <span class="odometer odometer-auto-theme" data-count="30">
                                <div class="odometer-inside">
                                    <span class="odometer-digit">
                                        <span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">3</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="odometer-digit">
                                        <span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">5</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="odometer-digit">
                                        <span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">0</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </span>+
                        </h3>
                        <p>Team Members</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="funfact">
                    <div class="fun-box">
                        <h3>
                            <span class="odometer odometer-auto-theme" data-count="5">
                                <div class="odometer-inside"><span class="odometer-digit">
                                        <span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">7</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="odometer-digit">
                                        <span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">8</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="odometer-digit">
                                        <span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">9</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </span>+
                        </h3>
                        <p>Winning Awards</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Fun area-->

<!--Start Team area-->
<section class="team-wrapper-area">
    <div class="team-wrap">
        <div class="container">
            <div class="row">
                <div class="team-title text-center">
                    <h2>Our Team</h2>
                    <div class="em-bar-main">
                        <div class="em-bar em-bar-big"></div>
                    </div>
                    <p>We enjoy adapting our strategies to offer every client<br> the best solutions that are at the forefront of the industry.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 colmd-6 col-sm-6">
                    <div class="single-team">
                        <div class="team-image">
                            <img src="{{url('frontend')}}/assets/images/team1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="team-content">
                            <h3>Matthew Hunter</h3>
                            <p>Marketing Head</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 colmd-6 col-sm-6">
                    <div class="single-team">
                        <div class="team-image">
                            <img src="{{url('frontend')}}/assets/images/team2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="team-content">
                            <h3>Matthew Hunter</h3>
                            <p>Marketing Head</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 colmd-6 col-sm-6">
                    <div class="single-team">
                        <div class="team-image">
                            <img src="{{url('frontend')}}/assets/images/team1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="team-content">
                            <h3>Matthew Hunter</h3>
                            <p>Marketing Head</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 colmd-6 col-sm-6">
                    <div class="single-team">
                        <div class="team-image">
                            <img src="{{url('frontend')}}/assets/images/team2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="team-content">
                            <h3>Matthew Hunter</h3>
                            <p>Marketing Head</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Team Area-->

<!--Start Trainning Area-->
<section class="trainning-wrapper-area">
    <div class="trainning-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="trainning-title">
                        <h2>IT Training for Development</h2>
                        <div class="em-bar-main">
                            <div class="em-bar em-bar-big"></div>
                        </div>
                        <ul>
                            <li>Graphics Design</li>
                            <li>Web Design & Development</li>
                            <li>Digital Maketing</li>
                            <li>Video Editing</li>
                            <li>Avanced UI/UX Design</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="trainning-title">
                        <h2>Capacity & Training Scenario</h2>
                        <div class="em-bar-main">
                            <div class="em-bar em-bar-big"></div>
                        </div>
                        <ul>
                            <li>Total number of Trained participants till date : 30000+</li>
                            <li>Number of equipped computer Lab : 1</li>
                            <li>Number of theory classroom : 2</li>
                            <li>Total perticipent per month 30%</li>
                            <li>Number of Trainer : 10 (In house)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Trainning Area-->
@endsection