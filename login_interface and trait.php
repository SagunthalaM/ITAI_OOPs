<?php
interface function_login{
    public function __construct();
}
trait CONNECT{
    private $conn;
    public function __construct(){
     $this->conn = mysqli_connect("localhost","root","","mysite");
    }

}
?>