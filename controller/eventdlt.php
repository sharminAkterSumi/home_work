<?php
include "../database/inc_data.php";
$id=$_GET['id'];
// print_r($id);
$query="SELECT image FROM event WHERE id='$id' ";
$data=mysqli_query($conn,$query);
print_r($data);
$fetch=mysqli_fetch_assoc($data);

// $path="../uploads/banner_image/" .$fetch['image'];
//  print_r($path);

if(file_exists($path)){
    unlink($path);

}
$dlt_query="DELETE FROM event WHERE id='$id'";
$datass=mysqli_query($conn,$dlt_query);

    if($datass){
        header("location:../backend/uploadevent.php");}
    // }else{
    //     echo"false";
    // }

?>