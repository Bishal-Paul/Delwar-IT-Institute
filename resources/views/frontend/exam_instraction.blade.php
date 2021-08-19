@extends('frontend.master')

@section('content')
<!-- EXAM AREA START -->
<section class="exam_wrapper_area">
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-5 col-12">
                <div class="exam_nav content_box_shadow m_top">
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
            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-8 col-sm-7 col-12 m-auto">
                <div class="exam_tab_content">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="test_instraction">
                                <div class="titel">
                                    <h4>{{$cat_info->cat_name}}</h4>
                                </div>

                                <div class="ins_box content_box_shadow">
                                    <div class="box_titel">
                                        <h3>test syllabus</h3>
                                        <p>{!! $cat_info->cat_syllabus !!}</p>
                                    </div>
                                </div>
                                <div class="ins_box content_box_shadow">
                                    <div class="box_titel">
                                        <h3>Duration</h3>
                                        <ul>
                                            <li>{{$cat_info->cat_duration}} minutes</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ins_box content_box_shadow">
                                    <div class="box_titel">
                                        <h3>Questions</h3>
                                        <ul>
                                            <li>{{$cat_info->cat_questions}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ins_box content_box_shadow">
                                    <div class="box_titel">
                                        <h3>Instructions</h3>
                                        <p>{!!$cat_info->cat_instraction!!}</p>
                                    </div>
                                </div>
                                <div class="exam_btn text-center">
                                    <a href="{{url('start-exam')}}" class="btn test_btn default">start test</a>
                                </div>
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