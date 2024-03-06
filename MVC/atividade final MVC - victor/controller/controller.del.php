<?php
    include "../validalogin.php";

    // Verifica se o parâmetro idusuario foi passado na URL
    if (isset($_GET['idusuario'])) {
        $idusuario = $_GET['idusuario'];

        // Cria uma instância da classe Pessoa
        class Pessoa {
            private $con;
            
            function __construct($con) {
                $this->con = $con;
            }

            // Método para excluir usuário
            function delete($idusuario) {
                $sql = "DELETE FROM user WHERE idusuario = ?";
                $stmt = $this->con->prepare($sql);
                $stmt->bind_param("i", $idusuario);

                // Executa a exclusão
                if ($stmt->execute()) {
                    $stmt->close();
                    return true;
                } else {
                    $stmt->close();
                    return false;
                }
            }
        }

        // Instancia a classe Pessoa
        $conexao = new mysqli("localhost", "root", "usbw", "MVC");
        $pessoa = new Pessoa($conexao);

        // Chama o método delete e verifica se a exclusão foi bem-sucedida
        if ($pessoa->delete($idusuario)) {
            $retorno = "Exclusão efetuada com sucesso";
        } else {
            $retorno = "Erro ao tentar excluir dados";
        }
    } else {
        $retorno = "Parâmetro idusuario não encontrado na URL";
    }
?>

<html>
    <head>
        <title>Deletar</title>
    </head>
    <body>
    <script>
    // Redirecionar para outra página após um determinado tempo (em milissegundos)
    setTimeout(function() {
      window.location.href = '../view/view.tables.php'; // Substitua 'URL_DA_NOVA_PAGINA' pela URL da página para onde deseja redirecionar
    }, 3); // Tempo de espera em milissegundos (aqui, 3000ms ou 3 segundos)
  </script>
    </body>
</html>
