<!-- Definindo os cookies, seus valores e tempo de duração: -->
<?php

// Inicia a sessão
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Obtém os dados do formulário
    $email = $_POST['email'];
    $password = $_POST['senha'];

    //Armazena os dados na sessão
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $password;

    // Redireciona para a página logada após a autenticação
    header("Location: loggedin.php");
    exit();
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Definindo o conjunto de caracteres e a escala da tela para dispositivos móveis -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Título da página -->
    <title>Tela de Login com Cookies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<!--   Corpo da página   -->
<body style="background-color: #80DEEA;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Primeira linha: espaçamento superior -->
    <div class="container text-center">
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
            <div class="col">
                &nbsp;
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>

    <!-- Segunda linha: contém um card -->
    <div class="container">
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
            <div class="col">

                <!-- Card -->
                <div class="card position-absolute top-50 start-50 translate-middle" style="width: 25rem; height: 28rem;">
                    <div class="card-body">

                        <!-- Título e subtítulo do card -->
                        <br><h3 class="card-title text-center">Login</h3>
                        <p class="card-text text-secondary text-center">Olá, seja bem vindo(a)!</p><br>

                        <!-- Formulário -->
                        <form method="POST">

                            <!-- Label e campo de email, "mb-3" ou "margin-bottom" é o espaçamento entre os componentes da div -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Endereço de email</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            </div>

                            <!-- Label e campo de senha -->
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha">
                            </div>

                            <!-- Checkbox -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Lembrar meu login</label>
                            </div><br>

                            <!-- Botão -->
                            <div style="text-align: center;">
                                <button class="btn btn-primary" type="submit">Fazer login</button>
                            </div><br>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>

    <!-- Terceira linha: espaçamento inferior -->
    <div class="container text-center">
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
            <div class="col">
                &nbsp;
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>

</body>

</html>
