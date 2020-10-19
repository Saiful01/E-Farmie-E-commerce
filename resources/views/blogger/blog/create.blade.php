@extends('layouts.blogger')


@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box"><h4 class="page-title">Blog Create</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Create</a></li>
                </ol>
            </div>
        </div>
    </div><!-- end row -->
    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{session('success')}}!</strong>
                    </div>
                @endif
                @if(session('failed'))
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{session('failed')}}!</strong>
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

                <div class="card-body"><h4 class="mt-0 header-title"> Create Blog </h4>

                    <form method="post" action="/blogger/blog/store" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> Category</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="blog_category_id">
                                    @foreach($categories as $category)
                                        <option
                                            value="{{$category->blog_category_id}}"> {{$category->blog_category_name}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="blog_title">
                                <input class="form-control" type="hidden" name="_token" value="{{csrf_token()}}">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> Details</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" type="text" name="blog_details"> </textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Featured Image <span
                                    style="color: red">900*800PX</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="featured_image" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace( 'blog_details' );
    </script>


@endsection
