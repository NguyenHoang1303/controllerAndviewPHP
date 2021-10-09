<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/build/css/custom.min.css" rel="stylesheet">
    <link href="/css/loginAndRegister.css" rel="stylesheet">
</head>

<body class="login">
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="POST" name="login" action="{{route('auth.login')}}">
                    @csrf
                    <h1>Login</h1>
                    @if(Session::has('loginFail'))
                        <div class="error ">{{ session()->get('loginFail') }}</div>
                    @endif
                    <div class="mb-4">
                        <input type="text" class="form-control mb-0" name="username" value="{{ Request::old('username') }}"
                               placeholder="Username"/>
                        @if($errors->has('username'))
                            <div class="error">{{ $errors->first('username') }}</div>
                        @endif
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control mb-0" name="password" value="{{ Request::old('password') }}"
                               placeholder="Password"/>
                        @if($errors->has('password'))
                            <div class="error">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                    <div>
                        <button style="font-size: 12px; margin-top: 20px;
                         border: none;background-color: #f7f7f7; text-shadow: 0 1px 0 #fff;">Login
                        </button>
                        <a style="font-size: 12px; margin-top: 20px;
                         border: none;background-color: #f7f7f7; text-shadow: 0 1px 0 #fff; text-decoration: none; color: #000000"
                        >Lost your password?
                        </a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="/register" class="to_register"> Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br/>

                        <div>
                            <h1><i class="fa fa-university" aria-hidden="true"></i> Spring HeroBank!</h1>
                            <p>©2016 All Rights Reserved. Spring HeroBank! is an anti-slip bank for FPT students.
                                Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
