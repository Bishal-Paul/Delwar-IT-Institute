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
                    <h4 class="header-title mb-4" style="float: left;">Add Freelancer</h4>
                    <h4 class="header-title mb-4" style="float: right;"><a href="{{url('view-freelancer')}}">View Freelancer</a></h4><br>

                    <br><br>
                    <form method="post" action="{{url('post-freelancer')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-3 col-form-label">Name *</label>
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
                            <label for="username" class="col-3 col-form-label">Username *</label>
                            <div class="col-9">
                                <input type="text" placeholder="username should be in lowercase" id="username" class="form-control @error('username') is-invalid @enderror" name="username">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="post" class="col-3 col-form-label">Current Post *</label>
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
                            <label for="summary" class="col-3 col-form-label">Summary *</label>
                            <div class="col-9">
                                <textarea name="summary" class="form-control @error('summary') is-invalid @enderror" cols="20" rows="8"></textarea>
                                @error('summary')
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
                        <div class="form-group row">
                            <label for="experience" class="col-3 col-form-label">Experiences *</label>
                            <div class="col-9">
                                <textarea name="experience" id="editor" class="form-control @error('experience') is-invalid @enderror"></textarea>
                                @error('experience')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ex_img" class="col-3 col-form-label">Experience Image *</label>
                            <div class="col-9">
                                <input type="file" class="form-control" name="ex_img">
                                @error('ex_img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="success_story" class="col-3 col-form-label">Success Story *</label>
                            <div class="col-9">
                                <textarea name="success_story" class="form-control @error('success_story') is-invalid @enderror" cols="20" rows="8"></textarea>
                                @error('success_story')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="success_img" class="col-3 col-form-label">Success Image *</label>
                            <div class="col-9">
                                <input type="file" class="form-control" name="success_img">
                                @error('success_img')
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


@section('footer_js')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: 'textarea#editor',
        menubar: false
    });
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection