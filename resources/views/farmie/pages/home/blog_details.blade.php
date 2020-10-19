@extends('layouts.farmie')
@section('title', 'Farmie')

@section('content')


    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/18.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>যোগাযোগ করুন</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="famie-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> হোম</a></li>
                    <li class="breadcrumb-item active" aria-current="page">যোগাযোগ </li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="news-details-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="news-details-content">
                        <h6>Post on <a href="#" class="post-date">{{$blog->created_at}}</a> / <a href="#" class="post-author">{{$blog->blogger_name}}</a></h6>
                        <h2 class="post-title">{{$blog->blog_title}}</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <img class="w-100 mb-30" src="/farmie/blog/{{$blog->featured_image}}" height="300px" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p> {!! $blog->blog_details !!}</p>
                            </div>

                        </div>
  {{--    <div class="share-tags d-flex flex-wrap align-items-center justify-content-between">

                            <div class="share-post d-flex align-items-center">
                                <span>Share This post:</span>

                                <div class="share-icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>

                            <ul class="famie-tags">
                                <li><a href="#">All product</a></li>
                                <li><a href="#">Freshy Fruit</a></li>
                                <li><a href="#">Sweet Corn</a></li>
                            </ul>
                        </div>--}}
                    </div>

                    <div class="post-author-area d-flex align-items-center">
                        <div class="post-author-img">
                            <img src="/farmie/profile_image/{{$blog->blogger_image}}" alt="">
                        </div>
                        <div class="post-author-description">
                            <a href="#">
                                <h5>{{$blog->blogger_name}}</h5>
                            </a>
                          {{--  <p>Duis tincidunt turpis sodales, tincidunt nisi et, auctor nisigama. Curabitur vulputate sapien espanyol metusi ultricies fermentum necvelpa.
                                Maecenas eget lacinia est molestie ligula, et euismod auctor. </p>--}}
                        </div>
                    </div>

                    <div class="comment_area clearfix mb-50">

                        <h3 class="mb-50"> Comments</h3>
                        <ul>
                            @foreach($comments as $comment)

                            <li class="single_comment_area">

                                <div class="comment-content d-flex">

                                    <div class="comment-author">
                                        <img src="/images/1.jpg" alt="author">
                                    </div>

                                    <div class="comment-meta">
                                        <a href="#" class="comment-date">{{$comment->created_at}}</a>
                                        <h6>{{$comment->comment_name}}</h6>
                                        <p>{{$comment->comment}}</p>
                                      {{--  <a href="#" class="reply">Reply</a>--}}
                                    </div>
                                </div>

                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="post-a-comment-area">

                        <h3 class="mb-50">Leave A Reply</h3>

                        <div class="contact-form-area">
                            @if(session('success'))

                                <div class="alert alert-success">{{session('success')}}!</div>

                            @endif
                            @if(session('failed'))
                                <div class="alert alert-danger">
                                    {{session('failed')}}!
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="/blog/comment/store" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="name" name="comment_name" placeholder="Your Name*">
                                        <input type="hidden" class="form-control" id="name" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" class="form-control" id="name" name="blog_id" value="{{$blog->blog_id}}">
                                        <input type="hidden" class="form-control" id="name" name="blogger_id" value="{{$blog->blogger_id}}">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" id="email" name="comment_email" placeholder="Your Email*">
                                    </div>
                                    <div class="col-12">
                                        <textarea  class="form-control" id="message" name="comment" placeholder="Message*"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-success famie-btn mt-30" type="submit">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







@endsection

