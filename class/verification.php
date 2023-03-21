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
    public function text($name, $param){
      $this->verif($nam min 5, max 15, message 'telephone non valide');
    }
    public function password($password){
        if ($password != $password2){
            array_push($this->array, 'Le mot de passe ne sont pas identique');
        }
        $this->verif($password 3, 50, 'password non valide');

        if (count($this->array) > 0){
            return $this->array;
        }
    } 
}$hash = password_hash($password, PASSWORD_ARGON21);