<?php
include "../database/inc_data.php";
$id=$_GET['id'];
$query="SELECT * FROM allchefs WHERE id='$id'";
$data=mysqli_query($conn,$query);

$cheffetch=mysqli_fetch_assoc($data);
// print_r($cheffetch);

$path="../uploads/banner_image/" .$cheffetch['img '];
if(file_exists($path)){
    unlink($path);

}
// print_r(file_exists($path));
$query="DELETE FROM allchefs WHERE id='$id'";
$dlt=mysqli_query($conn,$query);
if($dlt){
    header("location:../backend/allchefs.php");
}
?>