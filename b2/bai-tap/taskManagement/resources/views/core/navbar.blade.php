<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />

</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <a href="{{route('home')}}" class="navbar-brand">Home</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <a href="{{route('customer.customerList')}}" class="nav-item active nav-link">List Customer</a>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nossos serviços</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a href="#" class="dropdown-item">Divisão Militar</a>
                    <a href="#" class="dropdown-item">Divisão Corporativa</a>
                    <a href="#" class="dropdown-item">Aplicações para a área de saúde</a>
                </div>
            </li>
        </ul>

        <form action="#" method="post" class="form-inline my-2 mylg-0">
            <input type="search" name="buscar" id="buscar" class="form-control mr-sm-2" placeholder="Buscar em todo o site" aria-label="Buscar">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
    </div>
</nav></body>
</html>
