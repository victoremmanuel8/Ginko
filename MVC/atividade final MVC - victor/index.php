<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./image/imagem-login.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>ginko</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style> @font-face{
            font-family: tan;
            src: url(TAN-NIMBUS.otf);
            } </style>
    <header>
        <img class="logo" src="img/Texto_do_seu_parágrafo-removebg-preview.png" alt="" width="150" height="320">
        <img class="back" src="img/back.jpg" alt="">
    </header>
        <div class="centro">
            <div class="lado1">
                <h3 class="ginko">Ginkō</h3>
            </div>
            <div class="lado2">
                <form action="validalogin.php" method="post">
                <h1>Area de Login</h1>
                <br>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="login">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Entrar"></input>
                </form>
            </div>
        </div>
</body>
</html>