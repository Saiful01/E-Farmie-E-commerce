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


    <section class="contact-info-area">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="section-heading text-center">
                        <p>যোগাযোগের তথ্য</p>
                        <h2><span>সর্বোত্তম উপায়ে</span> সহায়তার জন্য আমাদের সাথে যোগাযোগ করার </h2>
                        <img src="img/core-img/decor2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-12 col-md-4">
                    <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="contact-icon">
                            <i class="icon_pin_alt"></i>
                        </div>
                        <h5>ঠিকানা</h5>
                        <h6>সেকশন: 14, মিরপুর রোড, ঢাকা</h6>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="contact-icon">
                            <i class="icon_phone"></i>
                        </div>
                        <h5>টেলিফোন</h5>
                        <h6>+880-</h6>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="1000ms">
                        <div class="contact-icon">
                            <i class="icon_mail_alt"></i>
                        </div>
                        <h5>ইমেইল</h5>
                        <h6><a href="#" class="__cf_email__" data-cfemail="c0a9aea6afeea4a5a5b2a3b2a5a1b4a9b6a580a7ada1a9aceea3afad">nusaira201@gmail.com</a></h6>
                        <h6><a href="#" class="__cf_email__" data-cfemail="c0a9aea6afeea4a5a5b2a3b2a5a1b4a9b6a580a7ada1a9aceea3afad">sumisayeeda@gmail.com</a></h6>
                    </div>
                </div>
            </div>
            <div class="c-border"></div>
        </div>
    </section>


    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-12 col-lg-5">
                    <div class="contact-content mb-100">

                        <div class="section-heading">
                            <p>এখনই যোগাযোগ করুন</p>
                            <h2><span>যোগাযোগ করুন</span> আমাদের সাথে </h2>
                            <img src="/farmie/img/core-img/decor.png" alt="">
                        </div>

                        <div class="contact-form-area">
                            <form method="post" action="/contact/store" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="hidden" class="form-control" name="_token"
                                               value="{{csrf_token()}}">
                                        <input type="text" class="form-control" name="contact_name"
                                               placeholder="আপনার নাম">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="contact_phone"
                                               placeholder="আপনার ফোন">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" class="form-control" name="contact_email"
                                               placeholder="আপনার ইমেইল">


                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" cols="30" rows="5"
                                                  placeholder="আপনার মেসেজ"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">মেসেজ পাঠান</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-maps mb-100">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="600" height="500" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=istt%20university%20college&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <a href="https://www.bitgeeks.net"></a></div>
                            <style>.mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 600px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 600px;
                                }</style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection

