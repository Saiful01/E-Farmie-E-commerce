@extends('layouts.farmie')

@section('title', 'Resigtration')

@section('content')


    <div class="slider pt-5 pb-5" style="background-color: #b4bfcc">
        <div class="container">
            <div class="row">

                <div class="col-md-5 mx-auto">

                    <div class="row">
                        <div class="col-md">

                            <div class="card">
                                <div class="col-md-6">
                                    <h5 class="mt-2">ব্লগার রেজিস্ট্রেশন</h5>
                                    <hr class="horizontal-line" style="background-color: rgb(39,178,39) ">
                                </div>

                                <div class="card-body">
                                    @if(Session::has('success'))
                                        <div class="alert alert-success mt-5" role="alert">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif

                                    @if(Session::has('failed'))
                                        <div class="alert alert-danger mt-5" role="alert">
                                            {{ Session::get('failed') }}
                                        </div>
                                    @endif
                                    <form method="post" action="/blogger/registration/store" enctype="multipart/form-data"
                                          class="ng-pristine ng-valid">
                                        <div class="form-group required">
                                            <label for="input-payment-firstname" class="control-label">পুরো নাম<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="firstname"
                                                   name="blogger_name" required="">
                                            <input class="form-control" type="hidden" name="_token"
                                                   value="{{csrf_token()}}" autocomplete="off">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-lastname" class="control-label">ফোন নাম্বার<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control"
                                                   name="blogger_phone" >
                                        </div>

                                        <div class="form-group">
                                            <label for="input-payment-email" class="control-label">ইমেইল<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control"
                                                   name="blogger_email" required>
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-telephone" class="control-label">ঠিকানা<span style="color: red;">*</span></label>
                                            <textarea type="text" class="form-control"
                                                      name="blogger_address"
                                                      required="" ></textarea>
                                        </div>


                                        <div class="form-group">
                                            <label for="input-payment-email" class="control-label">পাসওয়ার্ড<span style="color: red;">*</span></label>
                                            <input type="password" class="form-control"
                                                   name="password" required>
                                        </div>

                                        <div class="pull-left">
                                            <button class="btn btn-success">রেজিস্ট্রেশন</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection



