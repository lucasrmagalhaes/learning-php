<?php

class Titular
{
    private CPF $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->endereco = $endereco;

        $this->validaNomeTitular($nome);
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    private function validaNomeTitular(string $nomeTitular) 
    {
        if (strlen($nomeTitular) < 3) {
            echo "Nome precisa ter no minímo 3 caracteres!";
            exit();
        }
    }
}