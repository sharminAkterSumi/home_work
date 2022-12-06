<?php
session_start();
include "../database/inc_data.php";


$title=$_POST['title'];
$price=$_POST['price'];
$detail=$_POST['detail'];
$image=$_FILES['image'];
// print_r($image);
// print_r(pathinfo($image['name']));
// exit();
$extension=pathinfo($image['name'])['extension'];
// print_r($extension);
$accepted_extension=['jpg','png','wrbp','svg'];
$array= in_array($extension,$accepted_extension);
// var_dump($array);

$errors=[];


if(isset($_POST['submit'])){
 
    if(empty($title)){
        $errors['title']="Plz enter chef name";
    }

    if(empty($price)){
        $errors['price']="Plz enter chef work  position ";
    }

    if(empty($detail)){
        $errors['detail']="Plz enter chef detail";
    }
    if($image['size']==0){
        $errors['image']="plz enter a image";

    }elseif(in_array($extension,$accepted_extension)==false){
        $errors['image']="plz enter a proper image";
        
    }
if(count($errors)>0){
    $_SESSION['errors']=$errors;
    header("location:../backend/event.php");
}else{
    $newimage_name='image'.uniqid() ."." . $extension;
//    print_r($newimage_name);
//    exit()   ;
  $move_image=move_uploaded_file($image['tmp_name'],"../uploads/banner_image/$newimage_name");
print_r($move_image);
// exit();
if($move_image){
    $query="INSERT INTO allchefs( name, work, detail, img) 
    VALUES ('$title','$price','$detail','$newimage_name')";
    // $query="INSERT INTO event(image, title, price, details) 
    // VALUES ('$newimage_name','$title','$price','$detail')";
    // $query="INSERT INTO banner_image_input(image, title, video, detail)
    // VALUES ('$newimage_name','$title','$video','$detail')" ;
     //   $query="INSERT INTO banner(image, title, video, detail)
     //    VALUES ('$image','$title','$video','$detail')";
     //    INSERT INTO `banner`(`id`, `image`, `title`, `video`, `detail`, `status`) 
     //    VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
        $insert=mysqli_query($conn,$query);
        // var_dump($insert);
 
if($insert){
// $_SESSION['toast']="successfully added";
            header("location:../backend/people.php");
        }
}
 

}

}

?>