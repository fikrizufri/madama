<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Resta Global Solution">
<meta name="author" content="Ediyono">
<title>{{ config('app.name') }}</title>
<link rel="stylesheet" href="{{ asset('admin/css/font-awesome.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('admin/css/animate.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('admin/css/waves.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('admin/css/layout.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('admin/css/components.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('admin/css/plugins.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('admin/css/common-styles.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('admin/css/pages.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('admin/css/responsive.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('admin/css/matmix-iconfont.css')}}" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,500italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" type="text/css">
</head>
<body class="login-page">
    <div class="page-container">
        <div class="login-branding">
            <br><br><br>
        </div>
        <div class="login-container">
            <div>
                <h4>e Asset</h4>
            </div>
            <img class="login-img-card" src="{{ asset('admin/images/logo-iconic-pemkot.png')}}" alt="login thumb" />
            <form class="form-signin" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="text" id="inputEmail" name="email" value="{{ old('email') }}" class="form-control floatlabel " placeholder="Email Address" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" id="inputPassword" name="password" class="form-control floatlabel " placeholder="Password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            </div>

            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" class="switch-mini" {{ old('remember') ? 'checked' : '' }} /> Remember Me
                </label>
            </div>

                <button class="btn btn-primary btn-block btn-signin" type="submit">Sign In</button>
            </form>

            <a href="{{ url('/password/reset') }}" class="forgot-password">
                Forgot the password?
            </a>
        </div>


        <div class="login-footer">
           <a href="#">Dinas Perumahan Dan Permukiman</a>

        </div>

    </div>
<script src="{{ asset('admin/js/jquery-1.11.2.min.js')}}"></script>
<script src="{{ asset('admin/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{ asset('admin/js/jRespond.min.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('admin/js/nav-accordion.js')}}"></script>
<script src="{{ asset('admin/js/hoverintent.js')}}"></script>
<script src="{{ asset('admin/js/waves.js')}}"></script>
<script src="{{ asset('admin/js/switchery.js')}}"></script>
<script src="{{ asset('admin/js/jquery.loadmask.js')}}"></script>
<script src="{{ asset('admin/js/icheck.js')}}"></script>
<script src="{{ asset('admin/js/bootbox.js')}}"></script>
<script src="{{ asset('admin/js/animation.js')}}"></script>
<script src="{{ asset('admin/js/colorpicker.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('admin/js/floatlabels.js')}}"></script>
<script src="{{ asset('admin/js/smart-resize.js')}}"></script>
<script src="{{ asset('admin/js/layout.init.js')}}"></script>
<script src="{{ asset('admin/js/matmix.init.js')}}"></script>
<script src="{{ asset('admin/js/retina.min.js')}}"></script>

</body>

</html>
