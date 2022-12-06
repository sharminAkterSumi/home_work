<?php
session_start();
include "../database/inc_data.php";


$title=$_POST['title'];
$video=$_POST['video'];
$detail=$_POST['detail'];
$image=$_FILES['image'];

// print_r(pathinfo($image['name']));
$extension=pathinfo($image['name'])['extension'];
// print_r($extension);
$accepted_extension=['jpg','png','wrbp','svg'];
// $array= in_array($extension,$accepted_extension);
// var_dump($array);
$errors=[];


if(isset($_POST['submit'])){
 
    if(empty($title)){
        $errors['title']="Plz enter your title";
    }

    if(empty($video)){
        $errors['video']="Plz enter your video";
    }

    if(empty($detail)){
        $errors['detail']="Plz enter your detail";
    }
    if($image['size']==0){
        $errors['image']="plz enter a image";

    }elseif(in_array($extension,$accepted_extension)==false){
        $errors['image']="plz enter a proper image";
        
    }
if(count($errors)>0){
    $_SESSION['errors']=$errors;
    header("location:../backend/addpost.php");
}else{
    $newimage_name='image'.uniqid() ."." . $extension;
   // print_r($newimage_name);
  $move_image=  move_uploaded_file($image['tmp_name'],"../uploads/banner_image/$newimage_name");

if($move_image){
    $query="INSERT INTO banner_image_input(image, title, video, detail)
    VALUES ('$newimage_name','$title','$video','$detail')" ;
     //   $query="INSERT INTO banner(image, title, video, detail)
     //    VALUES ('$image','$title','$video','$detail')";
     //    INSERT INTO `banner`(`id`, `image`, `title`, `video`, `detail`, `status`) 
     //    VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
        $insert=mysqli_query($conn,$query);
        // var_dump($insert);
 
if($insert){
// $_SESSION['toast']="successfully added";
            header("location:../backend/addpost.php");
        }
}
 

}

}

?>