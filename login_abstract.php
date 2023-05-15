<?php

include "login_interface and trait.php";

abstract class login implements function_login{
    use CONNECT;

    abstract public function registration();
    abstract public function login_function();
}

?>