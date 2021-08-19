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
                        <h1>Start A Project</h1>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a>
                            </li>
                            <li>/</li>
                            <li>Project</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Inner Area-->
<!--Start Project area-->
<section class="project-wrapper-area-two">
    <div class="project-wrap">
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{session('success')}}.
            </div>
            @endif
            <div class="project-area">
                <form action="{{url('post-project')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="project-title">
                                <h2>Let's create something great together.</h2>
                                <div class="em-bar-main">
                                    <div class="em-bar em-bar-big"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" name="name" id="name" placeholder="Name" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="number" name="phone" id="number" placeholder="Phone Number" class="form-control" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" name="company" id="msg_subject" placeholder="Company/ Organisation Name" class="form-control" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="project-type">
                                <h6>Type of project</h6>
                                <p>Select all that apply</p>
                                <div class="field clearfix">
                                    <div class="website">
                                        <input type="radio" value="Website" name="project_type" id="type-website" required>
                                        <label for="type-website">Website</label>
                                    </div>
                                    <div>
                                        <input type="radio" value="Mobile / App" name="project_type" id="type-mobile" required>
                                        <label for="type-mobile">Graphics Design</label>
                                    </div>
                                    <div>
                                        <input type="radio" value="eCommerce" name="project_type" id="type-ecommerce" required>
                                        <label for="type-ecommerce">eCommerce</label>
                                    </div>
                                    <div>
                                        <input type="radio" value="Photography" name="project_type" id="type-photography" required>
                                        <label for="type-photography">Digital Marketing</label>
                                    </div>
                                    <div>
                                        <input type="radio" value="Video" name="project_type" id="type-video" required>
                                        <label for="type-video">Video</label>
                                    </div>
                                    <div>
                                        <input type="radio" value="Virtual Tours" name="project_type" id="type-virtual-tours" required>
                                        <label for="type-virtual-tours">Web Design</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="range">
                                <h4>Budget</h4>
                                <label for="currency-field">Enter Amount</label>
                                <input type="text" name="ammount" id="currency-field" placeholder="$1,000,000.00" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-project">
                                <h4>About Project</h4>
                                <p>Describe the project, requirements and objectives.</p>
                                <textarea id="about_project" name="about_project" required></textarea>
                                <div class="field">
                                    <input type="text" id="hear_about" name="hear_about" placeholder="How did you hear about us?" required>
                                </div>
                                <button type="submit" class="btn default">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--End Project area-->
@endsection