
<?php
// enctype="multipart/form-data
include "../slicedashboard/header.php";
include "../database/inc_data.php";
?>


<h3>welcome to chefs System.</h3>
<?php
$query="SELECT * FROM allchefs WHERE 1";
$data=mysqli_query($conn,$query);
// $featch=mysqli_fetch_assoc($data);
$fetchchef=mysqli_fetch_all($data,1);
//  print_r($fetchchef);
//  exit();

?>

<table class="table ">
<tr class="bg-info text-white w-100">

<th>id</th>
<th>Name</th>
<th>image</th>
<th>work position</th>
<th>Detail</th>

<th>Action</th>
</tr>
<?php
foreach($fetchchef as $key=>$fetch){?>

  <tr>
<td><?=++$key?></td>

<td><?php print_r($fetch['name']); ?></td>
<td>
<img src="<?="../uploads/banner_image/".$fetch['img'] ?>" alt=""style="height:100px">
</td>
<td><?php print_r($fetch['work']); ?></td>

<td><?php print_r($fetch['detail']); ?></td>




<td>


<!-- </a> -->
<a class="btn btn-warning" href=""> edit</a>
<a class="btn btn-danger event" href="../controller/chefdlt.php?id=<?php print_r($fetch['id']); ?>">Delete</a>
</td>
</tr>
<?Php
}

?>


</table>








<?php
include "../slicedashboard/footer.php";

?>
