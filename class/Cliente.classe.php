<?php

class Cliente {
    //Atributos
    public $nome;
    public $cpf;
    public $saldo;
    public $limite;
    public $nConta;

    //Declarar os métodos
    function setClass($nome, $cpf, $saldo, $limite, $nConta){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->saldo = $saldo;
        $this->limite = $limite;
        $this->nConta = $nConta;
        
    }
       


    function sacar($valor){
        if($valor > ($this->saldo + $this->limite)){
            echo "Sem limite para saque!<br>";

        }else{
            $this->saldo = $this->saldo - $valor;
        }
        
    }
    function saldo(){

        
            echo "Saldo de {$this->saldo} da conta {$this->nConta}<br><br>";
      
        
    }

    function depositar($valor){
        $this->saldo = $this->saldo + $valor;

    }

    function tansferir(){

    }
    
}