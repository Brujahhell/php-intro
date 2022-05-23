<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if (empty($nome))
{
    echo 'Nome não pode ser vazio';
    return;
}
if(strlen($nome) < 3 )
{
    echo 'Nome deve conter mais que 3 caracteres';
    return;
}
//if (!is_numeric($idade))
//{
//    echo 'Informe apenas números em idade';
//    return
//}
if ($idade >= 6 && $idade <= 12)
{
    for ($i = 0 ; $i == count($categorias); $i++)
    {
        if ($categorias[1] == 'infantil')
            echo "O nadador" .$nome. " compete na categoria infantil. ";
    }
}
else if ($idade >=13 && $idade <= 18)
{
    for ($i = 0 ; $i == count($categorias); $i++)
    {
        if ($categorias[2] == 'adolescente')
            echo "O nadador" .$nome. " compete na categoria adolescente. ";
    }

}
else
{
    for ($i = 0 ; $i == count($categorias); $i++)
    {
        if ($categorias[3] == 'adulto')
            echo "O nadador" .$nome. " compete na categoria adulto. ";
    }

}

