@extends('layouts.blogger')


@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box"><h4 class="page-title">Blog Post</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Show</a></li>
                </ol>
            </div>
        </div>
    </div><!-- end row -->


    <div class="row">
        <div class="col-lg-12">
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
                <div class="card-body">
                    <h4 class="mt-0 header-title">Blog Post</h4>
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Title</th>
                            <th>Details</th>
                            <th>Image</th>
                            <th>Published Status</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($result as $res)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{$res->blog_category_name}}</td>
                                <td>{{$res->blog_title}}</td>
                                <td>
                                {!! $res->blog_details !!}
                                </td>
                                <td>
                                    <img alt="image" src="/farmie/blog/{{$res->featured_image}}" width="100px">
                                </td>
                                <td>
                                    @if($res->publish_status==1)
                                        <span class="badge badge-pill badge-info">Published</span>
                                    @else
                                        <span class="badge badge-pill badge-danger">Unpublished</span>

                                    @endif
                                </td>

                                <td>
                                    <div class="btn-group m-b-10">
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start"
                                             style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 33px, 0px);">

                                            <a class="dropdown-item" href="/admin/blog/edit/{{$res->blog_id}}">Edit</a>
                                            <a class="dropdown-item" href="/admin/blog/delete/{{$res->blog_id}}">Delete</a>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
