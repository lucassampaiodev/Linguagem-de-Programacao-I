<?php

class Caneta{
    public $modelo;
    private $ponta;
    private $cor;
    private $tampada;
    
    //MÉTODOS CONSTRUTORES (MESMO NOME DA CLASSE)
    
    public function Caneta($m, $p, $c){ //Método Construtor que recebe parâmetros para os atributos
        $this->setModelo($m);
        $this->setPonta($p);
        $this->setCor($c);
        $this->tampar();
    }

    /*
    public function Caneta(){  //Método construtor que possui atributos pré-definidos
        $this->cor = "Azul";
        $this->tampar();
    }
    */
    public function tampar(){
        $this->tampada = true;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($c){
        $this->cor = $c;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }


    
}
?>