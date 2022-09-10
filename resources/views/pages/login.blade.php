<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - LaraJobs</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6" style="margin-top: 50px;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3><i class="icon-suitcase"></i> larajobs - Acesso ao sistema</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('auth') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Seu e-mail" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Sua senha" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-sm btn-block btn-info">
                                    <i class="icon-login"></i> Acessar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
