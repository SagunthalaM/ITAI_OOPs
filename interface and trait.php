<?php
interface ConfigureBase{
    public function __construct();
}
trait connect{
    private $con;
    public function __construct(){
        $this->con = mysqli_connect("localhost","root","","tutorial");
        if(mysqli_connect_error()){
            echo mysqli_connect_error();
        }
    }
}

?>

   