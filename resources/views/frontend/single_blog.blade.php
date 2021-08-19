@extends('frontend.master')

@section('content')
<style>
    .widget_categories {
        margin-left: 15px;
    }

    .widget_tag_cloud {
        margin-left: 15px !important;
    }

    #toolbar_hupso_toolbar_0 img {
        width: 30px !important;
        height: 30px !important;
        padding-right: 0px !important;
        padding-top: 0px !important;
        margin: 5px !important;
    }

    .single-blog-wrapper-area .article-content .comment-form textarea {
        padding: 10px 0 0 15px;
        height: 150px;
    }
</style>
<section class="job-banner-wrapper">
    <div class="job-wrap">
        <div class="container">
            <div class="ellipse1">
                <img src="{{url('frontend')}}/{{url('frontend')}}/assets/images/Ellipse1.svg" alt="" class="img-fluid">
            </div>
            <div class="ellipse2">
                <img src="{{url('frontend')}}/{{url('frontend')}}/assets/images/Ellipse2.svg" alt="" class="img-fluid">
            </div>
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto">
                    <div class="title text-center">
                        <h1>Blog Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="single-blog-wrapper-area">
    <div class="single-blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="image">
                        <img src="{{asset('thumbnails/'.$blog->image)}}" alt="{{$blog->title}}" class="img-fluid">
                    </div>
                    <div class="article-content">
                        <div class="entry-meta">
                            <ul>
                                <li><i class="fas fa-box-open"></i><span>Category</span><a href="#0">{{$blog->category}}</a>
                                </li>
                                <li><i class="far fa-eye"></i><span>View</span><a href="#0">813,454</a>
                                </li>
                                <li><i class="fas fa-calendar-plus"></i><span>Last Updated</span><a href="">{{$blog->created_at->format('d-m-Y')}}</a>
                                </li>
                            </ul>
                        </div>
                        <h3>{{$blog->title}}</h3>
                        <p>{!!$blog->description!!}</p>
                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class="fas fa-tag"></i></span>
                                <a href="">{{$blog->tags}}</a>
                            </div>
                            <div class="article-share">
                                <!-- Hupso Share Buttons - http://www.hupso.com/share/ -->
                                <div class="hupso-share-buttons"><a class="hupso_toolbar" href="http://www.hupso.com/share/"><img src="//static.hupso.com/share/buttons/share-medium.png" style="border:0px; padding-top:5px; float:left;" /></a>
                                    <script type="text/javascript">
                                        var hupso_services_t = new Array("Facebook", "Twitter", "Pinterest", "Email", "Linkedin", "Reddit", "Tumblr", "StumbleUpon");
                                        var hupso_toolbar_size_t = "medium";
                                    </script>
                                    <script type="text/javascript" src="//static.hupso.com/share/js/share_toolbar.js"></script>
                                </div><!-- Hupso Share Buttons -->
                            </div>
                        </div>
                        <div class="comments-area">
                            @if(session('success'))
                            <div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Success!</strong> {{session('success')}}.
                            </div>
                            @endif
                            <h3 class="comments-title">{{$comment->count()}} Comments:</h3>
                            <ol class="comment-list">
                                <li class="comment">
                                    @foreach($comment as $item)
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <div class="comment-author vcard">
                                                <b class="fn">{{$item->name}}</b><span class="says">says:</span>
                                            </div>
                                            <div class="comment-metadata"><span>{{$item->created_at->format('d-m-Y H:i:s')}}</span>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>{{$item->comment}}</p>
                                        </div>

                                    </div>
                                    @endforeach
                                </li>
                            </ol>
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Reply</h3>
                                <form class="comment-form" method="POST" action="{{url('post-blog-comment')}}">
                                    @csrf
                                    <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span>Required fields are marked<span class="required">*</span>
                                    </p>
                                    <p class="comment-form-author">
                                        <label>Name <span class="required">*</span>
                                        </label>
                                        <input type="text" id="author" placeholder="Your Name*" name="name" required="">
                                    </p>
                                    <p class="comment-form-email">
                                        <label>Email <span class="required">*</span>
                                        </label>
                                        <input type="email" id="email" placeholder="Your Email*" name="email" required="">
                                    </p>
                                    <p class="comment-form-url">
                                        <label>Website</label>
                                        <input type="url" id="url" placeholder="Website" name="website">
                                    </p>
                                    <p class="comment-form-comment">
                                        <label>Comment</label>
                                        <textarea name="comment" id="comment" cols="65" placeholder="Your Comment..." rows="15" required=""></textarea>
                                    </p>
                                    <p class="comment-form-cookies-consent">
                                        <input type="checkbox" value="yes" name="comment-cookies-consent" id="comment-cookies-consent">
                                        <label>Save my name, email, and website in this browser for the next time I comment.</label>
                                    </p>
                                    <p class="form-submit">
                                        <input type="submit" id="submit" class="submit" value="Post A Comment">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="widget-area">
                        <div class="widget widget_search">
                            <h3 class="widget-title">Search</h3>
                            <form class="search-form" action="{{url('blogs')}}" method="get">
                                <label><span class="screen-reader-text">Search for:</span>
                                    <input type="search" name="search" class="search-field" placeholder="Search...">
                                </label>
                                <button type="submit"><i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            @foreach($blog_cat as $item)
                            <li><a href="">{{$item->category}} </a>
                            </li>
                            @endforeach
                        </ul>
                    </div><br>
                    <div class="widget widget_tag_cloud">
                        <h3 class="widget-title">Recent Blogs</h3>
                        <li>
                            <div class="small-blog clearfix">
                                <a href="{{url('single-blog', $item->slug)}}" class="item-image">
                                    <img width="130" height="110" src="{{asset('thumbnails/'.$item->image)}}" alt="" class="img-fluid">
                                </a>
                                <div class="item-content" style="padding-top: 12px;">
                                    <h6 class="item-title mb-0">
                                        <a href="{{url('single-blog', $item->slug)}}">{{$item->title}}</a>
                                    </h6>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer_js')

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-609c295a449b07db"></script>

@endsection