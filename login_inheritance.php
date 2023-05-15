<?php

include "login_abstract.php";


class loginData extends login{

   use CONNECT;

    public function registration(){
     $username = $_POST['username'];
     $password = $_POST['password'];
     $password2 = $_POST['password2'];

     $name = mysqli_query($this->conn,"select * from users where username = '$username';");
     if(mysqli_num_rows($name)>0){
         return 10;
         //Username has already taken
     }else{
         if($password == $password2){
             $query = "insert into users values('','$username','$password') ";
             mysqli_query($this->conn,$query);
             return 1;
             //registration successfuls
 
         }else{
             return 100;
             //Password does not match
         }
     }
    }
    public $id;
    public function login_function(){
     
     $username = $_POST['username'];
     $password = $_POST['password'];
 
     $result = mysqli_query($this->conn,"select * from users where username = '$username'");
     $row = mysqli_fetch_assoc($result);
 
     if(mysqli_num_rows($result)>0){
        if($password == $row['password']){
            $this->id = $row['id'];
            return 1;
            //login successful
        }else{
         return 10;
         //wrong password
        }
     }
     else{
         return 100;
         //User not registered
     }
    }
    public function idUser(){
     return $this->id;
    }
 }
?>