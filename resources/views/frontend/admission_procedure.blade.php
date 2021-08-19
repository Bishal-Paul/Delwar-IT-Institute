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
                        <h1>Admission Procedure</h1>
                        <ul>
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>/</li>
                            <li>Admission Procedure</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Inner Area-->
<!--Start Procedure area-->
<section class="procedure-wrapper-area">
    <div class="procedure-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Online Procedure</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Offline Procedure</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Admission Procedure</h3>
                                    <div class="em-bar-main">
                                        <div class="em-bar em-bar-big"></div>
                                    </div>
                                    <p>To become a student of Delwar IT you need to fulfill several formalities to maintain records of both end. And while taking admission we need several important documents for records. Here are few steps that you need to follow for completing the admission procedures.</p>
                                    <ul>
                                        <li>Documents that are required need to submit while taking admission.</li>
                                        <li>You must pay your Course fee on time. With every extension of the given date late fee will be added to the course fee.</li>
                                        <li>Admission Fee BDT 2000/- is compulsory.</li>
                                        <li>When you are paying the course fee in installments the must follow rules are given
                                            <ul class="sub-list">
                                                <li>You must pay 50% of the course fee in time of admission and extra 50% of the course fee you must pay within 25-30 days after the admission.</li>
                                                <li>You must pay 50% of the course fee in time of admission and extra 50% of the course fee you must pay within 25-30 days after the admission.</li>
                                                <li>Paid course fee is not refundable.</li>
                                                <li>One can change the course and batch only if it is justified with reasons and within given time periods.</li>
                                                <li>You must write present/permanent address, phone number and other informations correctly in admission from. If you fail to provide the correct information then your admission will be cancelled.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <h3>Requirements</h3>
                                    <div class="em-bar-main">
                                        <div class="em-bar em-bar-big"></div>
                                    </div>
                                    <p>The list of documents that are required for admission –</p>
                                    <ul>
                                        <li>Documents that are required need to submit while taking admission.</li>
                                        <li>You must pay your Course fee on time. With every extension of the given date late fee will be added to the course fee.</li>
                                        <li>Admission Fee BDT 2000/- is compulsory.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Admission Procedure</h3>
                                    <div class="em-bar-main">
                                        <div class="em-bar em-bar-big"></div>
                                    </div>
                                    <p>To become a student of Delwar IT you need to fulfill several formalities to maintain records of both end. And while taking admission we need several important documents for records. Here are few steps that you need to follow for completing the admission procedures.</p>
                                    <ul>
                                        <li>Documents that are required need to submit while taking admission.</li>
                                        <li>You must pay your Course fee on time. With every extension of the given date late fee will be added to the course fee.</li>
                                        <li>Admission Fee BDT 2000/- is compulsory.</li>
                                        <li>When you are paying the course fee in installments the must follow rules are given
                                            <ul class="sub-list">
                                                <li>You must pay 50% of the course fee in time of admission and extra 50% of the course fee you must pay within 25-30 days after the admission.</li>
                                                <li>You must pay 50% of the course fee in time of admission and extra 50% of the course fee you must pay within 25-30 days after the admission.</li>
                                                <li>Paid course fee is not refundable.</li>
                                                <li>One can change the course and batch only if it is justified with reasons and within given time periods.</li>
                                                <li>You must write present/permanent address, phone number and other informations correctly in admission from. If you fail to provide the correct information then your admission will be cancelled.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <h3>Requirements</h3>
                                    <div class="em-bar-main">
                                        <div class="em-bar em-bar-big"></div>
                                    </div>
                                    <p>The list of documents that are required for admission –</p>
                                    <ul>
                                        <li>Documents that are required need to submit while taking admission.</li>
                                        <li>You must pay your Course fee on time. With every extension of the given date late fee will be added to the course fee.</li>
                                        <li>Admission Fee BDT 2000/- is compulsory.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Procedure area-->
@endsection