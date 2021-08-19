@extends('frontend.master')

@section('content')
<!-- EXAM AREA START -->
<section class="exam_wrapper_area">
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-5 col-12 d-flex align-items-center">
                <div class="exam_nav content_box_shadow">
                    <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li>
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Start Exam</button>
                        </li>
                        <li>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Certifficate</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-7 col-12">
                <div class="exam_tab_content">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="chose_sub content_box_shadow">
                                <div class="titel">
                                    <h4>Select your course</h4>
                                </div>
                                @if(session('message'))
                                <div class="alert alert-danger">
                                    <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{session('message')}}
                                </div>
                                @endif
                                <form action="{{url('post-cat')}}" method="post">
                                    @csrf
                                    <div class="select">
                                        <select name="selectcategory" id="slct">
                                            <option value="">Select Category</option>
                                            @foreach($category as $item)
                                            <option value="{{$item->id}}">{{$item->cat_name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="exam_btn text-center">
                                        <button class="btn ex_submit_btn default">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- EXAM AREA END -->
@endsection