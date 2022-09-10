<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - LaraJobs</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><i class="icon-briefcase"></i> larajobs</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="jobs"><i class="icon-grid"></i> Minhas vagas</a></li>
                    <li><a href="jobs/new"><i class="icon-note"></i> Cadastrar nova vaga</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/profile"><i class="icon-user"></i> Meu perfil</a></li>
                    <li><a href="{{ route('logout') }}"><i class="icon-logout"></i> Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer class="container" style="background: #F8F5F0; position: fixed; height: 50px; bottom: 0; width: 100%;">
        <div class="row">
            <div class="col-md-12" style="padding: 10px; margin-top: 20px;">
                <p class="text-center">Larajobs 2022</p>
            </div>
        </div>
    </footer>
</body>

</html>
