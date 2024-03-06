
<html>
	<head>
		<title>ginko</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" sizes="32x32" href="../image/imagem-login.png">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
	</head>
	<body>
    <header>
        <img class="back" src="../img/back.jpg" alt="">
    </header>
	<div class="container">
		<div class="form-group">
		<div class="centro1">
		<h1>Area de Cadastro</h1>
		<form action="pessoa.factory.php" action="_GET">
            <br>
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Nome</label>
					<input name="nomee" class="form-control" type="text" required><br/>
                </div>
                <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input name="senhaa" class="form-control" type="password" required><br/>
                </div>
                <input type="submit" class="btn btn-primary" value="Cadastrar"></input>
            </form>
		<br/>
		<div class="a-1">
		<a href="view.tables.php" style="text-decoration:none">Ver todos<br/></a>
		</div>	
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
