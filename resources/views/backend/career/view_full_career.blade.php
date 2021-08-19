@extends('backend.master')

@section('content')
<style>
    .mycls p {
        border: 1px solid #c1c1c1;
        padding: 11px;
    }
</style>

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <!-- end col -->
            <div class="col-md-12">
                <div class="card-box">
                    @if(session('success'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session('success')}}.
                    </div>
                    @endif
                    <h4 class="header-title mb-4" style="float: left;">View Full Job Details</h4>
                    <br><br><br>

                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Title :</label>
                        <div class="col-9">
                            <p>{{$job->title }}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Job Description :</label>
                        <div class="col-9">
                            <p>{!! $job->description !!}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Responsivilities :</label>
                        <div class="col-9">
                            <p>{!! $job->responsivilities !!}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Requirements :</label>
                        <div class="col-9">
                            <p>{!! $job->requirement !!}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Experience :</label>
                        <div class="col-9">
                            <p>{{ $job->experience }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Location :</label>
                        <div class="col-9">
                            <p>{{ $job->location }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Education :</label>
                        <div class="col-9">
                            <p>{{ $job->education }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Type :</label>
                        <div class="col-9">
                            <p>{{ $job->type }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Shift :</label>
                        <div class="col-9">
                            <p>{{ $job->shift }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Category :</label>
                        <div class="col-9">
                            <p>{{ $job->category }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Salary :</label>
                        <div class="col-9">
                            <p>{{ $job->salary }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Deadline :</label>
                        <div class="col-9">
                            <p>{{ $job->deadline }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Benefits :</label>
                        <div class="col-9">
                            <p>{!! $job->benefits !!}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Aditional Note :</label>
                        <div class="col-9">
                            <p>{{ $job->aditional_note ?? "" }}</p>
                        </div>
                    </div>
                    <div class="form-group mb-0 justify-content-end row text-center">
                        <div class="col-12">
                            <button type="button" class="btn btn-success waves-effect waves-light"> <a href="{{ url('view-career') }}" style="color: #fff;">Back to View</a> </button>
                            <button type="button" class="btn btn-info waves-effect waves-light"> <a href="{{ url('edit-career', $job->id) }}" style="color: #fff;">Edit Job Post</a> </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>

@endsection