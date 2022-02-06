<?php

class Conjunto{
    private $elementos;
    private $n;

    public function __construct($n){
        $this->n=$n;
        $this->elementos=array();
        $this->llenar();
    }

    public function agregar($elemento){
        if(!in_array($elemento, $this->elementos)){
            $this->elementos[]=$elemento;
            return true;
        }
        return false;
    }

    public function llenar(){
        for($i=0;$i<$this->n;$i++){
            $agregado=false;
            while(!$agregado){
                $elemento=rand(1,20);
                $agregado=$this->agregar($elemento);
            }
        }
    }

    public function union($conjunto1, $conjunto2){
        for($i=0;$i<$conjunto1->n;$i++){
            $this->agregar($conjunto1->elementos[$i]);
        }
        for($i=0;$i<$conjunto2->n;$i++){
            $this->agregar($conjunto2->elementos[$i]);
        }
        
    }

    public function interseccion($conjunto1, $conjunto2){
        for($i=0;$i<$conjunto1->n;$i++){
            if(in_array($conjunto1->elementos[$i], $conjunto2->elementos)){
                $this->agregar($conjunto1->elementos[$i]);
            }
        }
    }

    public function diferencia($conjunto1, $conjunto2){
        for($i=0;$i<$conjunto1->n;$i++){
            if(!in_array($conjunto1->elementos[$i], $conjunto2->elementos)){
                $this->agregar($conjunto1->elementos[$i]);
            }
        }
    }

    public function toString(){
        $string="";
        for($i=0;$i<count($this->elementos);$i++){
            $string=$string.$this->elementos[$i]." ";
        }
        return $string;
    }

}

?>