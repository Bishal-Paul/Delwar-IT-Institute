@extends('frontend.master')

@section('content')
<style>
    .admission-form-wrapper input.form-control {
        margin-bottom: 0px;
        margin-top: 12px;
        padding: 10px 15px;
    }

    .mt {
        margin-top: 12px;
    }

    .admission-form-wrapper .form-control {
        font-family: "Poppins", sans-serif;
        font-size: 15px;
        color: #999;
    }

    .admission-form-wrapper .form-box .form-head {
        margin-top: 25px;
        margin-bottom: 20px;
    }

    .pl {
        padding: 0px 25px;
    }
</style>
<!--Start About Inner Area-->
<section class="about-wrapper-inner">
    <div class="about-wrap">
        <div class="container">
            <div class="ellipse1">
                <img src="{{asset('frontend')}}/assets/images/Ellipse1.svg" alt="" class="img-fluid">
            </div>
            <div class="ellipse2">
                <img src="{{asset('frontend')}}/assets/images/Ellipse2.svg" alt="" class="img-fluid">
            </div>
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="inner-content">
                        <h1>Admission</h1>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>/</li>
                            <li>Get Admission</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Inner Area-->
<!--Start Admssion Form-->
<section class="admission-form-wrapper">
    <div class="admission-wrap">
        <div class="container">
            <div class="form-box">
                <form action="{{url('post-admission')}}" method="post">
                    @csrf
                    <div class="box">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-12">
                                    @if(session('success'))
                                    <div class="alert alert-success">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Success!</strong> {{session('success')}}.
                                    </div>
                                    @endif
                                    <div class="row form pl">
                                        <div class="col-lg-12 form-head">
                                            <h3>PERSONAL &amp; CONTACT INFORMATION</h3>
                                        </div>

                                        <div class="col-lg-6 col-sm-12">
                                            <input type="text" name="name" value="" placeholder="Student Name*" class="form-control @error('name') is-invalid @enderror">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <input type="text" name="father_name" value="" placeholder="Father’s Name*" class="form-control @error('father_name') is-invalid @enderror">
                                            @error('father_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <input type="text" name="mother_name" value="" placeholder="Mother’s Name*" class="form-control @error('mother_name') is-invalid @enderror">
                                            @error('mother_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <input type="text" name="present_address" value="" placeholder="Present Address*" class="form-control @error('present_address') is-invalid @enderror">
                                            @error('present_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" name="permanent_address" value="" placeholder="Permanent Address*" class="form-control @error('permanent_address') is-invalid @enderror">
                                            @error('permanent_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <input type="text" name="occupation" value="" placeholder="Occupation*" class="form-control @error('occupation') is-invalid @enderror">
                                            @error('occupation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <input type="date" name="dob" value="" class="form-control @error('dob') is-invalid @enderror">
                                            @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <select class="form-control mt @error('nationality') is-invalid @enderror" name="nationality" style="height: 45px;">
                                                <option value="">Nationality*</option>
                                                <option value="1">Bangladeshi</option>
                                                <option value="2">Other Country</option>
                                            </select>
                                            @error('nationality')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-5 col-sm-4">
                                                    <select class="form-control mt @error('blood_group') is-invalid @enderror" name="blood_group" style="height: 45px;">
                                                        <option value="">Blood Group*</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                    </select>
                                                    @error('blood_group')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-7 col-sm-8 ru-main text-right">
                                                    <span class="ru @error('gender') is-invalid @enderror" style="padding-right: 35px;">Gender*</span>
                                                    <label class="customcheck mt">Male
                                                        <input type="radio" name="gender" value="Male">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="customcheck mt">Female
                                                        <input type="radio" name="gender" value="Female">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <input type="text" name="phone" value="" placeholder="Phone*" class="form-control mt @error('phone') is-invalid @enderror">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <input type="email" name="email" value="" placeholder="Email*" class="form-control mt @error('email') is-invalid @enderror">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" id="getintouch-part">
                                <div class="form-head">
                                    <h3>Educational Background</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row pl">
                            <div class="col-lg-12">
                                <textarea name="education" class="form-control mt @error('education') is-invalid @enderror" id="message" rows="5">                                                </textarea>
                            </div>
                            @error('education')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="reference">
                            <div class="row pl">
                                <div class="col-lg-12">
                                    <div class="row form">
                                        <div class="col-lg-12 form-head">
                                            <h3>Reference Details</h3>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <input type="text" name="ref_name" value="" placeholder="Name" class="form-control mt @error('ref_name') is-invalid @enderror">
                                            @error('ref_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <input type="text" name="ref_phone" value="" placeholder="Mobile Number" class="form-control mt @error('ref_phone') is-invalid @enderror">
                                            @error('ref_phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <input type="text" name="ref_batch_name" value="" placeholder="Batch" class="form-control mt @error('ref_batch_name') is-invalid @enderror">
                                            @error('ref_batch_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <input type="text" name="ref_batch_id" value="" placeholder="ID" class="form-control mt @error('ref_batch_id') is-invalid @enderror">
                                            @error('ref_batch_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <input type="text" name="ref_relation" value="" placeholder="Relation with Student" class="form-control mt @error('ref_relation') is-invalid @enderror">
                                            @error('ref_relation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pl">
                            <div class="col-lg-12">
                                <div class="admission-button mt">
                                    <button type="submit" class="btn default">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--End Admission Form-->
@endsection