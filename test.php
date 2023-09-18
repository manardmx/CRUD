<?php
class UserOpration{
    private $proprties;
    public function __get($proprtyName){
        if(array_variables($proprtyName,$proprties)){
            return $this->proprties[$proprtyName];
        }
    }

    public function __set($proprtyName,$proprtyValue){
        $this->proprties[$proprtyName]=$proprtyValue;
    }


    public function n(){
        return $this->proprties['name'];
    }
}

$test= new UserOpration();

echo $test->name='manar';

echo $test->n();