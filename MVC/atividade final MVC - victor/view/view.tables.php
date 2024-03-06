<!DOCTYPE html>
<html lang="en">
<head>
    <title>gink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style03.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <img class="back" src="../img/back.jpg" alt="">
    </header>
    <div class="container">
            <h1>Todos os Cadastros</h1>
            <?php
                class Pessoa {
                    private $con;
                
                    function __construct($con) {
                        $this->con = $con;
                    }
                
                    function view() {
                        $sql = "SELECT idusuario, ds_login, ds_senha FROM user";
                        $query = $this->con->query($sql);
                
                        echo "<table class='pessoa-table'>
                                <tr>
                                    <th>ID</th>
                                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                    <th>Nome</th>
                                    <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                    <th>Senha</th>
                                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                </tr>";
                
                        while ($row = $query->fetch_array()) {
                            $idusuario = $row["idusuario"];
                            $login = $row["ds_login"];
                            $senha = $row["ds_senha"];
                
                            echo "
                            <tr>
                                    <td>$idusuario</td>
                                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                    <td>$login</td>
                                    <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                    <td>$senha</td>
                                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                    <td>
                                        <a href='../controller/controller.del.php?idusuario=$idusuario'>
                                        Excluir
                                        </a>
                                    </td>             
                                </tr>
                            ";
                        }
                        echo '</table>';
                        echo '<p class="registro-count">Registros encontrados: ' . $query->num_rows . '</p><br/>';
                    }
                }
                
                // Instanciar a classe Pessoa
                $conexao = new mysqli("localhost", "root", "usbw", "MVC");
                $pessoa = new Pessoa($conexao);
                
                // Chamar o método view
                $pessoa->view();
            ?>
            
            <br/>
            <div class="a-1">
                <a href="../index.php" style="text-decoration:none">Voltar para o login<br/></a>
                <br>
                <a href="view.add.php" style="text-decoration:none">Voltar para o Cadastro<br/></a>
            </div>    
        </div>
</body>
</html>
