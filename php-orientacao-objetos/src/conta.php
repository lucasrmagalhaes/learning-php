<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;
    
    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }
    
    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }
    
    public function recuperaCpfTitular(): string
    {
        $this->$cpfTitular;
    }
    
    public function recuperaNomeTitular(): string
    {
        $this->nomeTitular;
    }
    
    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }
    
    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        
        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        
        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }
}  