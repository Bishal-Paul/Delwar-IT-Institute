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
                    <h4 class="header-title mb-4"><strong>Add Exam Category</strong></h4>

                    <form method="post" action="{{url('post-exam-category')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="cat_name" class="col-3 col-form-label">Category Name *</label>
                            <div class="col-9">
                                <input type="text" id="cat_name" class="form-control @error('cat_name') is-invalid @enderror" name="cat_name">
                                @error('cat_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cat_slug" class="col-3 col-form-label">Category Slug *</label>
                            <div class="col-9">
                                <input type="text" id="cat_slug" class="form-control @error('cat_slug') is-invalid @enderror" name="cat_slug">
                                @error('cat_slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cat_syllabus" class="col-3 col-form-label">Exam Syllabus *</label>
                            <div class="col-9">
                                <textarea name="cat_syllabus" class="form-control" id="editor" cols="30" rows="10"></textarea>
                                @error('cat_syllabus')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cat_duration" class="col-3 col-form-label">Exam Duration *</label>
                            <div class="col-9">
                                <input type="text" name="cat_duration" class="form-control" placeholder="20 minutes">
                                @error('cat_duration')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cat_questions" class="col-3 col-form-label">Exam Questions *</label>
                            <div class="col-9">
                                <input type="text" name="cat_questions" class="form-control" placeholder="20 multiple choice questions">
                                @error('cat_questions')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cat_instraction" class="col-3 col-form-label">Exam Instractions *</label>
                            <div class="col-9">
                                <textarea name="cat_instraction" class="form-control" id="editor2" cols="30" rows="10"></textarea>
                                @error('cat_instraction')
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
    tinymce.init({
        selector: 'textarea#editor2',
        menubar: false
    });
</script>
<script>
    $('#cat_name').keyup(function() {
        $('#cat_slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g, "-"));
    });
</script>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection

@section('header_css')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection