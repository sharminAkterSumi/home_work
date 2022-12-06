<?php
// echo"hlw";
include "../database/inc_data.php";

$id=$_GET['id'];
// print_r($id);
$query="SELECT status FROM banner_image_input WHERE id='$id' ";
$data=mysqli_query($conn,$query);
$fetch=mysqli_fetch_assoc($data);
print_r($fetch['status']);

// print_r($fetch);


if($fetch['status'] ==0){
    $updata_status="UPDATE banner_image_input SET status='1' WHERE id='$id'";
}else{
    $updata_status="UPDATE banner_image_input SET status='0' WHERE id='$id'";

}
$execute=mysqli_query($conn,$updata_status);
if($execute){
    header("location:../backend/allpost.php");
}

?>