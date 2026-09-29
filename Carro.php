<?php

class Carro {
    public $ligado;
    public $captanque;
    public $tanque;


    public function ligar(){
        if($this->ligado==0){
            $this->ligado =1;
            echo "<br>Ligando o carro....";
        } else{
            echo "<br>Carro ligado";
        }
    }

    public function desligar(){
        if($this->ligado==0){
            echo "Carro desligado...";
        } else {
            $this->ligado = 0;
            echo "<br> Desligando o carro..";
        }
    }

    public function abastecer(){
        
    }




    public function exibir(){
        echo "Modelo" .$this->modelo;
    }

    public function exibirstatus(){
        echo "Ligado?<br>";
        if($this->ligado==0){
            echo "Desligado.";
        } else {
            echo "Ligado.";
        }
    }
}