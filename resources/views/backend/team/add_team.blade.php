@extends('backend.master')

@section('content')
<!-- Start Page content -->
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <!-- end col -->
            <div class="col-md-12">
                <div class="card-box">
                    @if(session('success'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session('success')}}.
                    </div>
                    @endif
                    <h4 class="header-title mb-4" style="float: left;">Add Team Members</h4>
                    <h4 class="header-title mb-4" style="float: right;"><a href="{{url('view-team')}}">View Team Members</a></h4><br>


                    <br><br>
                    <form method="post" action="{{url('post-team')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-3 col-form-label">Member Name *</label>
                            <div class="col-9">
                                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="post" class="col-3 col-form-label">Current Position *</label>
                            <div class="col-9">
                                <input type="text" id="post" class="form-control @error('post') is-invalid @enderror" name="post">
                                @error('post')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="facebook" class="col-3 col-form-label">Facebook Link</label>
                            <div class="col-9">
                                <input type="url" id="facebook" class="form-control @error('facebook') is-invalid @enderror" name="facebook">
                                @error('facebook')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="twitter" class="col-3 col-form-label">Twitter Link</label>
                            <div class="col-9">
                                <input type="url" id="twitter" class="form-control @error('twitter') is-invalid @enderror" name="twitter">
                                @error('twitter')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="instagram" class="col-3 col-form-label">Instagram Link</label>
                            <div class="col-9">
                                <input type="url" id="instagram" class="form-control @error('instagram') is-invalid @enderror" name="instagram">
                                @error('instagram')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="linkedin" class="col-3 col-form-label">Linkedin Link</label>
                            <div class="col-9">
                                <input type="url" id="linkedin" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin">
                                @error('linkedin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-3 col-form-label">Image *</label>
                            <div class="col-9">
                                <input type="file" class="form-control" name="image">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-0 justify-content-end row text-center">
                            <div class="col-12">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>
@endsection