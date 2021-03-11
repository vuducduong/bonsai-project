<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Mar 2021 13:35:02 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="{{asset('back-end/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('back-end/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('back-end/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('back-end/css/style.css')}}" rel="stylesheet">


</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>

            <?php
                use Illuminate\Support\Facades\Session;
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
            ?>
            <form class="m-t" role="form" method="post" id="loginForm">

                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" name="email" maxlength="50" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
          <script>
         </script>
        </div>
    </div>

    <!-- Mainly scripts -->

    <script src="{{asset('back-end/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('back-end/js/popper.min.js')}}"></script>
    <script src="{{asset('back-end/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="{{ asset('back-end/js/my.js') }}"></script>
</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Mar 2021 13:35:02 GMT -->
</html>
