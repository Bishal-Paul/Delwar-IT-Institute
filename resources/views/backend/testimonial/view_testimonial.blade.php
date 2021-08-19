@extends('backend.master')

@section('content')
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
                    <h4 class="header-title mb-4" style="float: left;">View Testimonials</h4>
                    <h4 class="header-title mb-4" style="float: right;"><a href="{{url('add-testimonial')}}">Add Testimonials</a></h4>

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Post</th>
                                <th scope="col">Message</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonial as $key => $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->post }}</td>
                                <td>{{ $item->message }}</td>
                                <td><img src="{{asset('thumbnails/'.$item->image)}}" width="100px"></td>

                                <td>
                                    <a class="btn btn-outline-danger" href="{{url('delete-testimonial')}}/{{$item->id}}">Delete Testimonial</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>

@endsection