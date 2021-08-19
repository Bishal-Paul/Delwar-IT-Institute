@extends('frontend.master')

@section('content')
<style>
    .right_content {
        position: absolute;
        bottom: 45%;
        left: 15%;
        top: 50px;
    }

    .mb {
        margin-bottom: 20px;
    }
</style>
<!--Start job Apply Requer Information Area-->
<section class="job_apply_requer_info_area">
    <div class="container">
        @if(session('success'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{session('success')}}.
        </div>
        @endif
        <div class="row">

            <form action="{{url('post-apply-job')}}" method="post" enctype="multipart/form-data" id="form" class="form">
                @csrf
                <input type="hidden" name="job_id" value="{{$career->id}}">
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 m-auto">
                    <div class="aplicant_img_up profile-badge">
                        <div class="info_title">
                            <h6>Applicant required information</h6>
                        </div>
                        <div class="profile-pic">
                            <img alt="User Pic" class="im_g" src="{{url('frontend')}}/assets/images/user.png" id="profile-image1">
                            <input id="profile-image-upload" class="hidden" type="file" onchange="previewFile()">
                            <div class="right_content">
                                <p>Upload Your Image</p>
                                <input type="file" name="image" class="@error('image') is-invalid @enderror">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="aplicant_info">
                                <div class="form-group mb">
                                    <label>Full Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id=" full_name" placeholder="Full Name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Your Email Address">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="aplicant_info">
                                <div class="form-group mb">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone_number" placeholder="Your Phone Number">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb">
                                    <label>Upload Your Resume</label>
                                    <input type="file" name="resume" class="form-control @error('resume') is-invalid @enderror" id="resume">
                                    @error('resume')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb">
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="confirm_password" placeholder="Confirm Password">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="submit_btn text-center">
                        <button class="btn aply_submit" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</section>

<!--End job Apply Requer Information Area-->
@endsection