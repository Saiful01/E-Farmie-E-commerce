@extends('layouts.farmie')
@section('title', 'Farmie')

@section('content')


    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/18.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>কৃষিকাজ ব্লগ</h2>
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
                    <li class="breadcrumb-item active" aria-current="page">কৃষিকাজ ব্লগ</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row mb-5">
        <div class="container">
            <div class="row ">
                <h2 class="mb-2 mx-auto ">ব্লগ ক্যাটাগরি</h2>

            </div>
            <div class="btn-group">
                @foreach($categories as $category)
                    <a type="button" href="/blog/category/{{$category->blog_category_id}}" class="btn btn-success mr-2">{{$category->blog_category_name}}</a>
                @endforeach
            </div>
        </div>
    </div>


    <section class="about-us-area">
        @foreach($blogs as $blog)
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-12 col-lg-6">
                        <div class="about-us-thumbnail mb-100">
                            <img src="/farmie/blog/{{$blog->featured_image}}" alt="">
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="about-us-content mb-100">

                            <div class="section-heading">
                                {{-- <p>FARMING PROCESS</p>--}}
                                <h2><span>{{$blog->blog_title}}</span></h2>
                                <img src="img/core-img/decor.png" alt="">
                            </div>
                            <p>{!! substr( $blog->blog_details,0,500) !!}</p>
                            <a href="/blog/details/{{$blog->blog_id}}" class="btn btn-success farmie-btn mt-30">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $blogs->links() }}
    </section>







@endsection

