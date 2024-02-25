<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChatIn</title>
    <link rel="stylesheet" href="\css\login.css">
    <script src="https://cdn.socket.io/4.7.4/socket.io.min.js" integrity="sha384-Gr6Lu2Ajx28mzwyVR8CFkULdCU7kMlZ9UthllibdOSo6qAiN+yXNHqtgdTvFXMT4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Preencha suas informações</div>
            <div class="card-body">
                <form id="formLogin" method="POST" action="{{ route('processLogin') }}">

                    @csrf

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" required autofocus>
                        @error('nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <input type="hidden" id="user" name="user">
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="\js\login.js"></script>

</body>

</html>