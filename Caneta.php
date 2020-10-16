<?php
class Caneta{
public $modelo;
public $cor;
private $ponta;
protected $carga;
protected $tampada;

public function rabiscar(){
    if($this->tampada == true){
        echo "<p>Erro! Impossível Rabiscar com a caneta tampada!</p>";
    }
    else{
        echo "<p>Estou rabiscando!</p>";
    }

}

//Método para modificar o atributo tampada para true
private function tampar(){
    $this->tampada = true;
}

//Método para modificar o atributo tampada para false
private function destampar(){
    $this->tampada = false;
}
}
?>