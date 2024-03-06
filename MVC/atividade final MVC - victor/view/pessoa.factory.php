<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ginko</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../image//imagem-login.png"> 
    <link rel="stylesheet" href="style03.css">

<?php


class Pessoa {
    public $idpessoa;
    public $nome;
    public $senha;
    private $con;

    function __construct($con) {
        $this->con = $con;
    }
    
function view(){
    $sql = "SELECT idusuario, ds_login, ds_senha FROM MVC";
    $query = $this->con->query($sql);
}

    function edit_bd($idpessoa){
        $sql = "SELECT * FROM user WHERE idusuario='" . $idusuario;
        $query = $this->con->query($sql);
        $res = $query->fetch_object();

        $this->idusuario = $res->idusuario;
        $this->login = $res->login;
        $this->senha = $res->senha;
    }

    function delete($idusuario){
        $sql = "DELETE FROM user WHERE idusuario='$idusuario'";
        return $this->con->query($sql);
    }

    function edit($idusuario, $login, $senha){
        $sql = "UPDATE user SET ds_senha='$senha', ds_login='$login' WHERE idusuario='$idusuario'";
        return $this->con->query($sql);
    }

    function add($login, $senha){
        $sql = "INSERT INTO user (ds_login, ds_senha) VALUES ('$login', '$senha')";
        $result = $this->con->query($sql);

        if ($result) {
            echo "<script>alert('cadastro realizado com sucesso'); window.location.href='../index.php';</script>";
        } else {
            echo "<script>alert('erro, tente novamente'); window.location.href='index.php';</script>"
            . $this->con->error;
            header("Location: ../index.php");
exit();
        }

        // Agora, chame a função view após o cadastro bem-sucedido
        $this->view();
        exit();
    }
}

$ds_login = $_GET['nomee'];  //campo de login
$ds_senha = $_GET['senhaa'];  // campo'senha'

// Exemplo de uso:
$conexao = new mysqli("localhost", "root", "usbw", "MVC");
$pessoa = new Pessoa($conexao);

// Adicione um registro
$pessoa->add($ds_login, $ds_senha);


?>


</head>
<body>