<?php
 
include "abstract.php";

class crud extends Users{
    
    use connect;
 
    public function addRecord(){
      
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $position = $_POST['position'];

        $query="INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`,`phone`,`position`)
        VALUES ('null','$first_name','$last_name','$email','$gender','$phone','$position')";
            
        $runQuery = mysqli_query($this->con,$query);
        if($runQuery){
            return true;
        }else{
            return mysqli_errno($this->con);
        }
    }
    //table is function is the display the employees record
    public function Display(){
        $query = "SELECT * FROM crud";
        $getQuery = mysqli_query($this->con,$query);
        $responseArray=[];
        while($data = mysqli_fetch_array($getQuery)){
            $responseArray[]=$data;
        }
       return $responseArray;
    }
    public function getFormData(){
        $id = $_GET['id'];
        $query = "SELECT * FROM crud where id = '".$id."' ";
        $getQuery = mysqli_query($this->con,$query);
        $getData = mysqli_fetch_array($getQuery);
        //echo "<pre>",print_r($getData).die;
        return $getData;
    }
    public function updatedata(){

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $position = $_POST['position'];
        $id = $_GET['id'];
      
        $query="UPDATE `crud` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',
        `gender`='$gender',`phone`='$phone',`position`='$position' WHERE `id`=$id";
         $runQuery = mysqli_query($this->con,$query);
         if($runQuery){
             return true;
         }else{
            return false;
         }
     }

    public function deleteData(){
        $id = $_GET['id'];
        $query = "delete FROM crud where id = '".$id."' ";
        $getQuery = mysqli_query($this->con,$query);
        if($getQuery){
            return true;
        }else{
            return  mysqli_errno($thid->con);
        }
    }

}

?>