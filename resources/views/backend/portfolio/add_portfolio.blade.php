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
                    @if(session('cat_success'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session('cat_success')}}.
                    </div>
                    @endif
                    <h4 class="header-title mb-4" style="float: left;">Add Portfolio Category</h4>
                    <h4 class="header-title mb-4" style="float: right;"><a href="{{url('view-portfolio')}}">View Portfolio Category</a></h4><br>

                    <br><br>
                    <form method="post" action="{{url('post-portfolio-category')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="cat_name" class="col-3 col-form-label">Portfolio Category *</label>
                            <div class="col-9">
                                <input type="text" id="cat_name" class="form-control @error('cat_name') is-invalid @enderror" name="cat_name">
                                @error('cat_name')
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
                    <h4 class="header-title mb-4" style="float: left;">Add Portfolio</h4>
                    <h4 class="header-title mb-4" style="float: right;"><a href="{{url('view-portfolio')}}">View Portfolio</a></h4><br>

                    <br><br>
                    <form method="post" action="{{url('post-portfolio')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-3 col-form-label">Portfolio Title *</label>
                            <div class="col-9">
                                <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-3 col-form-label">Category *</label>
                            <div class="col-9">
                                <select name="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach($category as $item)
                                    <option value="{{$item->id}}">{{$item->cat_name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
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
                            <label for="github" class="col-3 col-form-label">Github Link </label>
                            <div class="col-9">
                                <input type="url" id="github" class="form-control @error('github') is-invalid @enderror" name="github">
                                @error('github')
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