<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = 'Eduardo';
$idade = "18";

//print_r($categorias);

//var_dump($nome);
//var_dump($idade);

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

?>