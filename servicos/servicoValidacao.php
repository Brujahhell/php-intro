<?php
//declare(strict_types=1);
function validaNome(string $nome) : bool
{
    if (empty($nome))
    {
        setarMensagemErro('Nome não pode ser vazio, por favor preencha-o novamente');
        return false;
    }
//else if(strlen($nome) < 3 )
//  setarMensagemErro('Nome não pode conter menos de 3 caracteres');
//  return false;
//}

//else if(strlen($nome) < 40 )
//{
//  setarMensagemErro('Nome não pode conter mais que 40 caracteres');
//  return false;
//}
    return true;
}

function validaIdade(string $idade) : bool
{
    if (!is_numeric($idade))
    {
        setarMensagemErro('Informe apenas números para idade');
        return false;
    }
    return true;
}


