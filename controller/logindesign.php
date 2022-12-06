<?php
session_start();
include "../database/inc_data.php";
// echo"sumi";
// print_r($conn);



if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $poassword=$_POST['password'];
    $enc_pass=sha1($poassword);
    $errors=[];

    if(empty($email)){
        $errors['email']="plz enter your email address !";
    }


    if(empty($poassword)){
        $errors['password']="plz enter your password !";
    }

    if(count($errors)>0){
        $_SESSION['array']=$errors;
        header("location:../backend/login.php");
    }else {
        $query="SELECT * FROM `insertfood` WHERE email='$email'";
        $data=mysqli_query($conn,$query);
        // print_r($data);
        // exit();
        

        if(mysqli_num_rows($data)>0){
            $query="SELECT * FROM insertfood WHERE email='$email'and password='$enc_pass'";
        $data=mysqli_query($conn,$query);


                    if(mysqli_num_rows($data)>0){
                        $fetch=mysqli_fetch_assoc($data);
                       // print_r($fetch);
                        $_SESSION['userdata']=$fetch;
                        header("location:../backend/blank.php");
                    }else{
                        $_SESSION['array']['password']="plz enter your currect password !";
                    
                        header("location:../backend/login.php");
                    }
        
        }else {
            $_SESSION['array']['email']="plz enter your currect email address !";
          
            header("location:../backend/login.php");
        }
      
        


    }


   




}





?>