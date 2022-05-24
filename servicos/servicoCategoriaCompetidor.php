<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';

    if (validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
        $categoria = 2;
        if ($idade >= 6 && $idade <= 12) {
            $categoria = 0;
        }
        if ($idade >= 13 && $idade <= 18) {
            $categoria = 1;
        }
        setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$categoria] . ". ");
        return null;
    }
    removerMensagemSucesso();
    return obterMensagemErro();
}