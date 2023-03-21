<?php
class Verification
{

    private $array=[];

    private function Verif($name,$min,$max,$message){
        if (strlen($name) < $min || strlen($_GET["nom"]) > $max){
            array_push($this->array, $message);
        }
        return $this->array;
    }

    public function getArray(){
        return $this->array;
    }

    public function getIndexError($index){
        if(count($this->array) > 0) {
            return $this->array[$index];
        }
        return null;
    }

    public function setArray($array){

        return $this->array=$array;
    }
    public function Email($name) {
        $this->Verif($name, 5, 255, 'Email Non valide');
    }
}