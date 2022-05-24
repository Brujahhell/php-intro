<?php

function validaNome(string $nome) : bool
{
    if (empty($nome))
    {
        setarMensagemErro('Nome não pode ser vazio, por favor preencha-o novamente');
        return false;
    }

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

