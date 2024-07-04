<?php include("header.php"); ?>

<?php
    //Bloco para declaração de Variaveis
    $fotoUsuario = $nomeUsuario = $cidadeUsuario = $telefoneUsuario = $emailUsuario = $senhaUsuario = $confirmarSenhaUsuario = "";
    $erroPreencimento = false;

    //Verifica o método de envio do FORM
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //Verifica se o campo do Usuario está vazio ultilizando a função empty
        if(empty($_POST["nomeUsuario"])){
            echo "<div class='alert alert-warning text-center'> O campo <strong>NOME</strong> é obrigatório! </div>

            ";
            $erroPreencimento = true;
        }
        else{
            $nomeUsuario = $_POST["nomeUsuario"];
        }
        
        if(empty($_POST["cidadeUsuario"])){
            echo "<div class='alert alert-warning text-center'> O campo <strong>CIDADE</strong> é obrigatório! </div>

            ";
            $erroPreencimento = true;
        }
        else{
            $cidadeUsuario = $_POST["cidadeUsuario"];
        }

        if(empty($_POST["telefoneUsuario"])){
            echo "<div class='alert alert-warning text-center'> O campo <strong>TELEFONE</strong> é obrigatório! </div>

            ";
            $erroPreencimento = true;
        }
        else{
            $telefoneUsuario = $_POST["telefoneUsuario"];
        }

        if(empty($_POST["emailUsuario"])){
            echo "<div class='alert alert-warning text-center'> O campo <strong>EMAIL</strong> é obrigatório! </div>

            ";
            $erroPreencimento = true;
        }
        else{
            $emailUsuario = $_POST["emailUsuario"];
        }

        if(empty($_POST["senhaUsuario"])){
            echo "<div class='alert alert-warning text-center'> O campo <strong>SENHA</strong> é obrigatório! </div>

            ";
            $erroPreencimento = true;
        }
        else{
            $senhaUsuario = $_POST["senhaUsuario"];
        }

        if(empty($_POST["confirmarSenhaUsuario"])){
            echo "<div class='alert alert-warning text-center'> O campo <strong>Confirmar Senha</strong> é obrigatório! </div>

            ";
            $erroPreencimento = true;
        }
        else{
            $confirmarSenhaUsuario = $_POST["confirmarSenhaUsuario"];
        }
    }
?>

<?php include("footer.php"); ?>