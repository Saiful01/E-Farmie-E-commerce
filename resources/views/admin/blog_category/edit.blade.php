@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box"><h4 class="page-title">Category Edit</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
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

                <div class="card-body"><h4 class="mt-0 header-title"> Edit Category </h4>

                    <form method="post" action="/admin/blog/category/update" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Category Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="blog_category_name" value="{{$result->blog_category_name}}">
                                <input class="form-control" type="hidden" name="_token" value="{{csrf_token()}}">
                                <input class="form-control" type="hidden" name="blog_category_id" value="{{$result->blog_category_id}}">

                            </div>
                        </div>

                        {{--
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Featured Image <span style="color: red">270*140PX</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="file" name="feature_image" required>
                                                    </div>
                                                </div>--}}

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
