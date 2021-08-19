@extends('frontend.master')

@section('content')
<style>
    .error {
        background: #f3f5f9;
        color: red;
        text-align: center;
        font-weight: 600;
        padding: 20px;
    }

    .font-medium {
        font-size: 18px;
    }
</style>
<!--Start Login area-->
<section class="login-wrapper-area">
    <div class="login-wrap">
        <div class="container">
            <div class="login-area">
                <div class="area">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h2>Get Started</h2>
                                    <x-jet-validation-errors class="mb-4 error" />
                                    <form class="form" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="email" name="email" :value="old('email')" required class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="text" name="address" :value="old('address')" required class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required autocomplete="new-password">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" placeholder="Confirm-Password" aria-label="password" aria-describedby="basic-addon1" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="number" name="phone" :value="old('phone')" required class="form-control" placeholder="Phone Number" aria-label="number" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" name="trainer" :value="old('trainer')" required class="form-control" placeholder="Trainer-Name" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" name="batch" :value="old('batch')" required class="form-control" placeholder="Batch-Number" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="number" name="student_id" :value="old('student_id')" required class="form-control" placeholder="Id" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                    <label for="vehicle1"> By signing up, you agree to <span><a href="">Terms &amp; Conditions</a></span></label><br>
                                                </div>
                                            </div>
                                        </div>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active default" type="submit" style="border: none;">Submit</button>
                                        </li>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <h2>Login</h2>
                                    <form class="form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1" name="email" :value="old('email')" required autofocus>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required autocomplete="current-password">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="f-1">
                                                    @if (Route::has('password.request'))
                                                    <p>Forget Password? <a href="{{ route('password.request') }}">Reset It.</a></p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active default" type="submit" style="border: none;">Submit</button>
                                        </li>
                                    </form>
                                </div>
                                <hr>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active default" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Sign Up</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link default" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Sign In</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image">
                                <img src="{{url('frontend')}}/assets/images/login.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Login area-->
@endsection