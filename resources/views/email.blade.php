<!DOCTYPE html>
<html lang="en">
<head>
    <title>Qualimentos Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- @todo: fill with your company info or remove -->
    <meta name="description" content="">
    <meta name="author" content="Themelize.me">

    <!-- Bootstrap 4.0.0-alpha.6 CSS via CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

    <!-- Font Awesome 4.7.0 via CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 -->

    <!-- Plugin: flag icons - http://lipis.github.io/flag-icon-css/ -->
    <link href="assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!-- Theme style -->
    <link href="assets/css/theme-style.min.css" rel="stylesheet">

    <!-- Your custom override -->
    <link href="assets/css/custom-style.css" rel="stylesheet">

</head>
<body>
<!-- ======== @Region: #content ======== -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3><i class="fa fa-envelope" aria-hidden="true"></i> Novo Contato </h3>
                <hr>
                <h4>Nome</h4>
                    <p>{{$nome}}</p>
                <h4>E-mail</h4>
                    <p>{{$email}}</p>
                <h4>Assunto</h4>
                    <p>{{$assunto}}</p>
                <h4>Mensagem</h4>
                    <p>{{$mensagem}}</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>