<?php
    include "servicos/servicoMensagemSessao.php"
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Formulário de inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewpoint" content="width=device.width, initial-scale=1">
</head>

<body>

<p> FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES <p>

<form action="script1.php" method="post">
    <?php
        $mensagemDeSucesso = obterMensagemSucesso();
        if(!empty($mensagemDeSucesso))
        {
        echo $mensagemDeSucesso;
        }

        $mensagemDeErro = obterMensagemErro();
        if(!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }
    ?>
    <p> Seu nome: <input type="text" minlength="3" maxlength="40" name="nome"/></p>
    <p> Sua idade: <input type="text" min="1" max="110" name="idade"/></p>
    <p><input type="submit"/></p>
</form>

</body>

</html>



