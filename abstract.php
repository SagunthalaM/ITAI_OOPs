<?php
include "interface and trait.php";

abstract class Users implements ConfigureBase{
   
        use connect;

    abstract public function addRecord();

    abstract public function Display();

    abstract public function getFormData();

    abstract public function updatedata();
    
    abstract public function deleteData();

}








?>