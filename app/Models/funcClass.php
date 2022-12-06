<?php

class Funcionario {
    private $nome;
    private $salario;
    private $departamento;
    
    public function getNome() {
        return $this->nome;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function getAltura() {
        return $this->altura;
    }

    public function setNome ($nome) {
        $this->nome = $nome;
    }

    public function setPeso ($peso) {
        if($peso > 600 ) $this->peso = $peso;
        else echo 'Peso inserido inválido... Tente novamente! <br><br>';
    }

    public function setDepto ($altura) {
        $this->altura = $altura;
    }

    public function imprimeDadosimc() {
        echo 'Nome: ' . $this->getNome() . '<br>';
        echo 'Peso: ' . $this->getPeso() . '<br>';
        echo 'Altura: ' . $this->getAltura() . '<br>'. '<br>'. '<br>';
    }

    public function imc() {
        
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        function imc($altura, $peso){
        $altura = str_replace(',', '.', $altura);
        $result = $altura * $altura / $peso;
        return $result;
        }

        echo"seu imc é: " .imc($altura , $peso);
    }
}