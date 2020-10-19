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

        <div class="col-3 rounded border shadow p-3 m-5 bg-white " id="col-Login">
            <p class="text-center text-primary"><strong>কাস্টমার রেজিস্ট্রেশন</strong></p>

            <div class="text-center mt-3" >
                <a style="width: 300px" class="btn btn-big btn-primary" href="/customer/registration">কাস্টমার রেজিস্ট্রেশন </a>
            </div>



        </div>
        <div class="col-3 rounded border shadow p-3 m-5 bg-white " id="col-Login">
            <p class="text-center text-success"><strong>ব্লগার রেজিস্ট্রেশন</strong></p>
            <div class="text-center" >
                <a style="width: 300px" class="btn btn-big btn-success" href="/blogger/registration">ব্লগার রেজিস্ট্রেশন</a>
            </div>

        </div>
    </div>
</section>
</body>
</html>

