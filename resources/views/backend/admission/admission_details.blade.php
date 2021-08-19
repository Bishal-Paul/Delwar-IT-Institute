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
                    <h4 class="header-title mb-4">Change admission Role</h4>

                    @if(session('success'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session('success')}}.
                    </div>
                    @endif

                    <form>

                        <input type="hidden" name="id" value="{{$admission->id}}">

                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Name :</label>
                            <div class="col-9">
                                <p>{{$admission->name}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Email :</label>
                            <div class="col-9">
                                <p>{{$admission->email}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Phone :</label>
                            <div class="col-9">
                                <p>{{$admission->phone}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Father's Name :</label>
                            <div class="col-9">
                                <p>{{$admission->father_name}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mothers" class="col-3 col-form-label">Mother's Name :</label>
                            <div class="col-9">
                                <p>{{$admission->mother_name}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Present Address :</label>
                            <div class="col-9">
                                <p>{{$admission->present_address ?? ""}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Permanent Address :</label>
                            <div class="col-9">
                                <p>{{$admission->permanent_address ?? ""}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Occupation :</label>
                            <div class="col-9">
                                <p>{{$admission->occupation}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Date of Birth :</label>
                            <div class="col-9">
                                <p>{{$admission->dob}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Nationality :</label>
                            <div class="col-9">
                                <p>{{$admission->nationality}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Blood Group :</label>
                            <div class="col-9">
                                <p>{{$admission->blood_group}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Gender :</label>
                            <div class="col-9">
                                <p>{{$admission->gender}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Education :</label>
                            <div class="col-9">
                                <p>{{$admission->education}}</p>
                            </div>
                        </div>
                        <br>
                        <h5>Reference</h5>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Refer Name :</label>
                            <div class="col-9">
                                <p>{{$admission->ref_name}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Refer Phone :</label>
                            <div class="col-9">
                                <p>{{$admission->ref_phone}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Refer ID :</label>
                            <div class="col-9">
                                <p>{{$admission->ref_batch_id}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Refer Batch :</label>
                            <div class="col-9">
                                <p>{{$admission->ref_batch_name}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-3 col-form-label">Relation :</label>
                            <div class="col-9">
                                <p>{{$admission->ref_relation}}</p>
                            </div>
                        </div>

                        <div class="form-group mb-0 justify-content-end row text-center">
                            <div class="col-12">
                                <button type="button" class="btn btn-info waves-effect waves-light"> <a href="{{ url('show-admission-list') }}" style="color: #fff;">Back to View</a> </button>
                                <button type="button" class="btn btn-success waves-effect waves-light"> <a href="{{ url('admin-dashboard') }}" style="color: #fff;">Back to dashboard</a> </button>
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