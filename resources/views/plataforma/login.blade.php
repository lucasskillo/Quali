
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Qualimentos | Login</title>

    <link href="{{ asset('assets/css/plataforma/Content/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plataforma/Content/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plataforma/Content/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plataforma/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown" style="width: 400px;">
    <div class="row">
        <div>
            <img src="{{ asset('assets/img/site/Logo.png') }}" class="img" style="width: 400px;">
        </div>
        <br>
        <p>Por favor informe seu usuário e senha</p>
        <form class="m-t"  method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
        </form>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{ asset('assets/js/plataforma/Scripts/jquery-2.1.1.min.js') }}"></script>

<script src="{{ asset('assets/js/plataforma/Scripts/bootstrap.min.js') }}"></script>

</body>

</html>
