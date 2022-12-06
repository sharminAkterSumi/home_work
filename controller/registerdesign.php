<?php
session_start();
//echo"sumi";
//print_r($_POST);
include "../database/inc_data.php";
if(isset($_POST['button'])){

$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$con_pass=$_POST['confirmm_password'];
$enp_pass=sha1($password);
// if(filter_var($email,FILTER_VALIDATA_EMAIL)){
//     echo"yes";
// }else {
//     echo"no";
// }
// var_dump(filter_var($email,'FILTER_VALIDATA_EMAIL'));
// exit();
$error=[];

if(empty($first_name)){
    $error['fname']="plz enter your firstname !";
}

if(empty($last_name)){
    $error['lname']="plz enter your lastname !";
}

if(empty($email)){
    $error['email']="plz enter your email address !";
}
// elseif(!filter_var($email,FILTER_VALIDATA_EMAIL)){
//     $error['email']="plz enter your vailed email  address!";
// }

if(empty($password)){
    $error['password']="plz enter your password !";
}


if(empty($con_pass)){
    $error['con_password']="plz enter your confirm password !";
}
 elseif($password!==$con_pass){
          $error['con_password']="plz enter your verify password !";
}


if(count($error)>0){
    $_SESSION['errors']=$error;
   //print_r($_SESSION['errors']);
   header("location:../backend/register.php");
}else {
   
    //  print_r($conn);
    //  exit();
//    // print_r($first_name);
//    $query="INSERT INTO website_of_food(first_name, last_name, email, password,)
//   VALUES ('$first_name','$last_name','$email','$password')";
// $query= "INSERT INTO post( Name, Email, password, msg) 
// VALUES ('$name','$email','$pass','$comment')";
// $stor=mysqli_query($mysqlconn,$query);
// //  var_dump($stor);
//  $query="INSERT INTO insertfood(first_name,last_name,email,password)
//  VALUES('$first_name','$last_name','$email','$enp_pass')" ;
$query="INSERT INTO insertfood(first_name, last_name,email, password) 
VALUES ('$first_name','$last_name','$email','$enp_pass')" ;

$data=mysqli_query($conn,$query);


if($data){
    header("location:../backend/login.php");
}
//$_SESSION['success']="successfully register";


}








}


?>