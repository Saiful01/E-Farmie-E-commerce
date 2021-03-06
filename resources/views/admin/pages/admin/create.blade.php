@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box"><h4 class="page-title">Admin</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
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

                <div class="card-body"><h4 class="mt-0 header-title">Admin Details</h4>

                    <form method="post" action="/admin/store" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Admin Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" required>
                                <input class="form-control" type="hidden" name="_token" value="{{csrf_token()}}">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="email" required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="password" required>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="user_type">
                                    <option value="1">Admin</option>
                                    <option value="2" selected>Operator</option>

                                </select>

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


@endsection