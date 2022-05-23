<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if (empty($nome))
{
    $_SESSION['mensagem de erro'] = 'Nome não pode ser vazio, por favor preencha-o novamente';
    header('location: nadador-index.php');
    return;
}
//else if(strlen($nome) < 3 )
//{
//  $_SESSION['mensagem de erro'] = 'Nome não pode conter menos de 3 caracteres';
//  header('location: nadador-index.php');
//  return;
//}
//else if (!is_numeric($idade))
//{
//  $_SESSION['mensagem de erro'] = 'Informe apenas números para idade';
//  header('location: nadador-index.php');
//  return;
//}
if ($idade >= 6 && $idade <= 12)
{
    for ($i = 0 ; $i == count($categorias); $i++)
    {
        if ($categorias[1] == 'infantil')
        {
            $_SESSION['mensagem de sucesso'] = "O nadador" . $nome . " compete na categoria infantil. ";
            header('location: nadador-index.php');
            return;
        }
    }
}
else if ($idade >=13 && $idade <= 18)
{
    for ($i = 0 ; $i == count($categorias); $i++)
    {
        if ($categorias[2] == 'adolescente')
        {
            $_SESSION['mensagem de sucesso'] = "O nadador" . $nome . " compete na categoria adolescente. ";
            header('location: nadador-index.php');
            return;
        }
    }


}
else
{
    for ($i = 0 ; $i == count($categorias); $i++)
    {
        if ($categorias[3] == 'adulto')
        {
            $_SESSION['mensagem de sucesso'] = "O nadador" . $nome . " compete na categoria adulto. ";
            header('location: nadador-index.php');
            return;
        }
    }

}

