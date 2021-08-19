@extends('frontend.master')

@section('content')
<style>
    .blog-content-area {
        padding: 75px 0px 100px 0px !important;
    }

    .blog-content-area .pager {
        display: flex;
        padding-left: 0px;
        margin-left: 32px;
        margin-top: 20px;
    }

    .blog-content-area .pager li {
        margin-left: 8px;
        border: 1px solid #023e8a;
        border-radius: 50%;
        padding: 10px 20px;
        font-size: 22px;
        font-weight: 700;
    }

    .blog-image {
        width: 95%;
        height: 450px;
    }
</style>

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
                        <h1>Blog</h1>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>/</li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Start Blog content area-->
<section class="blog-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach($blogs as $item)
                <div class="content-area">
                    <div class="blog-image">
                        <img src="{{asset('thumbnails/'.$item->image)}}" alt="" class="img-fluid">
                    </div>
                    <div class="item-content">
                        <h3><a href="{{url('single-blog', $item->slug)}}">{{$item->title}}</a></h3>
                        <p>{!! substr(strip_tags($item->description), 0, 150) !!}</p>
                        <a href="{{url('single-blog', $item->slug)}}" class="default">Read More</a>
                    </div>
                </div>
                @endforeach

                {{ $blogs->links('vendor.pagination.custom') }}

            </div>
            <div class="col-lg-4">
                <form action="{{url('blogs')}}" method="get" class="search-form">
                    <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="search" name="search" class="search-field" placeholder="Search …" value="" name="s">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>
                <div class="recent">
                    <h4>Recent Blogs</h4>
                    <ul class="clearfix">
                        @foreach($blogs as $item)
                        <li>
                            <div class="small-blog clearfix">
                                <a href="{{url('single-blog', $item->slug)}}" class="item-image">
                                    <img width="130" height="110" src="{{asset('thumbnails/'.$item->image)}}" alt="" class="img-fluid">
                                </a>
                                <div class="item-content">
                                    <span class="post-date">{{$item->created_at->format('d-m-Y')}}</span>
                                    <h4 class="item-title mb-0">
                                        <a href="{{url('single-blog', $item->slug)}}">{{$item->title}}</a>
                                    </h4>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="catagories">
                    <h4>Catagories</h4>
                    <ul>
                        @foreach($blogs as $item)
                        <li> {{$item->category}} </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!--End Blog content area-->
@endsection