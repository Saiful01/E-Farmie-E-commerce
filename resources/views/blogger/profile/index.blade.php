@extends('layouts.blogger')


@section('content')



    <section  class=" ">
        <div class="row ">
            <div class="col-md-6 mt-5">
                <h4 class="text-info">Your Profile</h4>


                <h6><span class="mr-2 font-weight-bold"> Name:</span> <span>{{$blogger->blogger_name}}</span></h6>
                <h6><span class="mr-2 font-weight-bold">Phone:</span>  <span>{{$blogger->blogger_phone}}</span></h6>
                <h6><span class="mr-2 font-weight-bold">Email:</span>  <span>{{$blogger->blogger_email}}</span></h6>
                <h6><span class="mr-2 font-weight-bold">Address:</span> <span>{{$blogger->blogger_address}}</span></h6>






            </div>
            <div class="col-md-6 mt-5">
                <p>
                    <img src="/farmie/profile_image/{{$blogger->blogger_image}}" alt="Image" height="100px" width="200px"
                         class="img-thumbnail">
                </p>
            </div>
        </div>
        <!-- End row -->

        <div class="divider"></div>
        <form action="/blogger/profile/update" method="post" enctype="multipart/form-data">
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
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-info">Edit profile</h4>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Name </label>
                        <input class="form-control" name="blogger_name"  type="text"
                               value="{{$blogger->blogger_name}}">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                        <input type="hidden" name="blogger_id" value="{{$blogger->blogger_id}}">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone</label>
                        <input class="form-control" name="blogger_phone" type="text"
                               value="{{$blogger->blogger_phone}}">
                    </div>
                </div>
            </div>
            <!-- End row -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="blogger_email"  type="email"
                               value="{{$blogger->blogger_email}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Profile Image
                        </label>
                        <input class="form-control" name="blogger_image" type="file"
                               value="{{$blogger->blogger_image}}">
                    </div>
                </div>
            </div>
            <!-- End row -->
                <!-- End row -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Address</label>
                        <input class="form-control" name="blogger_address"  type="text"
                               value="{{$blogger->blogger_address}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Password
                        </label>
                        <input class="form-control" name="password"  type="password">
                    </div>
                </div>
            </div>
            <!-- End row -->

            <hr>
            <button type="submit" class="btn btn-success">Update</button>

        </form>


    </section>


@endsection
