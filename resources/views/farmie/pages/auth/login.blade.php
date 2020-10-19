@extends('layouts.farmie')

@section('title', 'Login')

@section('content')


    <div class="slider pt-5 pb-5" style="background-color: #b4bfcc">
        <div class="container">
            <div class="row">

                <div class="col-md-5 mx-auto">

                    <div class="row">
                        <div class="col-md">
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
                            <div class="card">
                                <div class="col-md-6">
                                    <h5 class="mt-2">কাস্টমার লগ ইন</h5>
                                    <hr class="horizontal-line" style="background-color: rgb(39,178,39) ">
                                </div>
                                <div class="card-body">
                                    <form method="post" action="/customer/login-check" enctype="multipart/form-data"
                                           class="ng-pristine ng-valid">
                                    <div class="form-group required">
                                        <label for="input-payment-firstname" class="control-label">ফোন নাম্বার</label>
                                        <input type="text" class="form-control" id="firstname"
                                               name="customer_phone">
                                        <input class="form-control" type="hidden" name="_token"
                                               value="{{csrf_token()}}" autocomplete="off">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-payment-lastname" class="control-label">পাসওয়ার্ড</label>
                                        <input type="text" class="form-control" id="input-payment-lastname"
                                               name="customer_password" >
                                    </div>

                                    <div class="pull-right">
                                        <button class="btn btn-success">লগ ইন</button>
                                    </div>
                                    {{-- </form>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection



