@extends('frontend.master')

@section('content')
<!--Start job-oofer-->
<section class="job-offer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="job-title text-center">
                    <h2>{{$job->title}}</h2>
                </div>
                <div class="job-post-meta-group text-center">
                    <span class="job-post-meta">
                        <i class="fas fa-box"></i>
                        <span>{{$job->category}}</span>
                    </span>
                    <span class="job-post-meta">
                        <i class="fas fa-calendar-week"></i>
                        <span>{{$job->created_at->format('d-M-Y')}}</span>
                    </span>
                    <span class="job-post-meta">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>{{$job->location}}</span>
                    </span>
                </div>
                <div class="social-post-share text-center">
                    Share:&nbsp;
                    <div class="social-shared-item">
                        <a href="#0" target="_blank" class="facebook-share"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    </div>
                    <div class="social-shared-item">
                        <a href="#0" target="_blank" class="twitter-share">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="social-shared-item">
                        <a href="#0" target="_blank" class="linkdin-share">
                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="social-shared-item">
                        <a href="javascript:void(0)" class="linkdin-share">
                            <i class="far fa-envelope" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="group text-center">
                    <a href="{{url('apply-job', $job->slug)}}" class="default">Apply Now</a>
                </div>
            </div>
        </div>
        <div class="description-block">
            <div class="row">
                <div class="col-md-3 col-lg-2 offset-lg-1">
                    <h3>Job Description</h3>
                </div>
                <div class="col-md-7 col-lg-8">
                    {!! $job->description !!}
                </div>
            </div>
        </div>
        <div class="description-block">
            <div class="row">
                <div class="col-md-3 col-lg-2 offset-lg-1">
                    <h3>Job Responsibilities</h3>
                </div>
                <div class="col-md-7 col-lg-8">
                    {!! $job->responsivilities !!}
                </div>
            </div>
        </div>
        <div class="description-block">
            <div class="row">
                <div class="col-md-3 col-lg-2 offset-lg-1">
                    <h3>Primary Requirements</h3>
                </div>
                <div class="col-md-7 col-lg-8">
                    {!! $job->requirement !!}
                </div>
            </div>
        </div>
        <div class="description-block">
            <div class="row">
                <div class="col-md-3 col-lg-2 offset-lg-1">
                    <h3>Experience</h3>
                </div>
                <div class="col-md-7 col-lg-8">
                    {{$job->experience}}
                </div>
            </div>
        </div>

        <div class="description-block">
            <div class="row">
                <div class="col-md-3 col-lg-2 offset-lg-1">
                    <h3>Job Location</h3>
                </div>
                <div class="col-md-7 col-lg-8">
                    <p>{{$job->location}}</p>
                </div>
            </div>
        </div>
        <div class="description-block">
            <div class="row">
                <div class="col-md-3 col-lg-2 offset-lg-1">
                    <h3>Educational Requirements</h3>
                </div>
                <div class="col-md-7 col-lg-8">
                    <p>{{$job->education}}</p>
                </div>
            </div>
        </div>
        <div class="description-block">
            <div class="row">
                <div class="col-md-3 col-lg-2 offset-lg-1">
                    <h3>Job Type</h3>
                </div>
                <div class="col-md-7 col-lg-8">
                    <p>{{$job->type}}</p>
                </div>
            </div>
        </div>
        <div class="description-block">
            <div class="row">
                <div class="col-md-3 col-lg-2 offset-lg-1">
                    <h3>Shift</h3>
                </div>
                <div class="col-md-7 col-lg-8">
                    <p>{{$job->shift}}</p>
                </div>
            </div>
        </div>

        <div class="description-block">
            <div class="row">
                <div class="col-md-3 col-lg-2 offset-lg-1">
                    <h3>Category</h3>
                </div>
                <div class="col-md-7 col-lg-8">
                    <p>{{$job->category}}</p>
                </div>
            </div>
        </div>
        <div class="description-block">
            <div class="row">
                <div class="col-md-3 col-lg-2 offset-lg-1">
                    <h3>Salary Range</h3>
                </div>
                <div class="col-md-7 col-lg-8">
                    <p>{{$job->salary}}</p>
                </div>
            </div>
        </div>
        <div class="description-block">
            <div class="row">
                <div class="col-md-3 col-lg-2 offset-lg-1">
                    <h3>Benefits</h3>
                </div>
                <div class="col-md-7 col-lg-8">
                    <p>{!! $job->benefits !!}</p>
                </div>
            </div>
        </div>

        <div class="description-block">
            <div class="row">
                <div class="col-md-3 col-lg-2 offset-lg-1">
                    <h3>Application Deadline</h3>
                </div>
                <div class="col-md-7 col-lg-8">
                    <p>{{$job->deadline}}</p>
                </div>
            </div>
        </div>
        <div class="description-block">
            <div class="row">
                <div class="col-md-3 col-lg-2 offset-lg-1">
                    <h3>Additional Notes</h3>
                </div>
                <div class="col-md-7 col-lg-8">
                    {!! $job->aditional_note !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 offset-lg-1">
                <div class="apply">
                    <a href="{{url('apply-job', $job->slug)}}" class="default">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Job Offer-->
@endsection