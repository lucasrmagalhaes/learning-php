<?php

class Titular
{
    private CPF $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;

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

    private function validaNomeTitular(string $nomeTitular) 
    {
        if (strlen($nomeTitular) < 3) {
            echo "Nome precisa ter no minímo 3 caracteres!";
            exit();
        }
    }
}