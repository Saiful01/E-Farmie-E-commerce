<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/MiStilo.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        body {
            background: url(https://docentes.ufps.edu.co/assets/img/bg/bg1.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .row {
            margin-top: 10%;
        }

        p {
            font-family: "Homer Simpson", cursive;
            font-size: 30px;
            text-shadow: 1px 2px #000;
            color: blue;

        }

        label {
            font-family: "Homer Simpson", cursive;
            font-size: 15px;
        }

        button {
            font-family: "Homer Simpson", cursive;
            text-shadow: 1px 2px #000;

        }

        #col-Login {
            align-items: center;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            min-height: 100%;
            padding: 20px;
        }
    </style>
</head>
<body>
<section class="container-fluid">
    <div class="row justify-content-center  ">
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

        <div class="col-3 rounded border shadow p-3 m-5 bg-white " id="col-Login">
            <p class="text-center text-primary"><strong>কাস্টমার লগ ইন</strong></p>

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
                           name="customer_password">
                </div>

                <div class="pull-right">
                    <button class="btn btn-primary">লগ ইন</button>
                </div>
            </form>

        </div>
        <div class="col-3 rounded border shadow p-3 m-5 bg-white " id="col-Login">
            <p class="text-center text-success"><strong>ব্লগার লগ ইন</strong></p>

            <form method="post" action="/blogger/login-check" enctype="multipart/form-data"
                  class="ng-pristine ng-valid">
                <div class="form-group required">
                    <label for="input-payment-firstname" class="control-label">ইমেইল</label>
                    <input type="text" class="form-control" id="firstname"
                           name="blogger_email">
                    <input class="form-control" type="hidden" name="_token"
                           value="{{csrf_token()}}" autocomplete="off">
                </div>
                <div class="form-group required">
                    <label for="input-payment-lastname" class="control-label">পাসওয়ার্ড</label>
                    <input type="password" class="form-control" id="input-payment-lastname"
                           name="password">
                </div>

                <div class="pull-right">
                    <button class="btn btn-success">লগ ইন</button>
                </div>
            </form>
        </div>
        <div class="col-3 rounded border shadow p-3 m-5 bg-white " id="col-Login">

            <p class="text-center text-danger"><strong>অ্যাডমিন লগ ইন</strong></p>

            <form class="form-horizontal m-t-30" action="/admin/login-check" method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter Email">
                    <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>
                <div class="pull-right">
                    <button class="btn btn-danger">লগ ইন</button>
                </div>
                {{--  <div class="form-group m-t-10 mb-0 row">
                    <div class="col-12 m-t-20">
                        <a href="#" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                    </div>
                </div>--}}
            </form>
        </div>
    </div>
</section>
</body>
</html>

