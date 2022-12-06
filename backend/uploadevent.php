
<?php
// enctype="multipart/form-data
include "../slicedashboard/header.php";
include "../database/inc_data.php";
?>


<h3>welcome to Allpost System.</h3>
<?php
$query="SELECT * FROM event WHERE 1";
$data=mysqli_query($conn,$query);
// $featch=mysqli_fetch_assoc($data);
$fetchs=mysqli_fetch_all($data,1);
//  print_r($fetchs);

?>

<table class="table ">
<tr class="bg-info text-white w-100">

<th>id</th>
<th>title</th>
<th>image</th>
<th>price</th>
<th>Detail</th>
<th>status</th>
<th>Action</th>
</tr>
<?php
foreach($fetchs as $key=>$fetch){?>

  <tr>
<td><?=++$key?></td>

<td><?php print_r($fetch['title']); ?></td>
<td>
<img src="<?="../uploads/banner_image/".$fetch['image'] ?>" alt=""style="height:100px">
</td>
<td><?php print_r($fetch['price']); ?></td>

<td><?php print_r($fetch['details']); ?></td>
<td>
<?php print_r($fetch['status']); ?>
  
</td>



<td>


<!-- </a> -->
<a class="btn btn-warning" href=""> edit</a>
<a class="btn btn-danger event" href="../controller/eventdlt.php?id=<?php print_r($fetch['id']); ?>">Delete</a>
</td>
</tr>
<?Php
}

?>


</table>








<?php
include "../slicedashboard/footer.php";

?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
let bannerinputdlt=document.querySelectorAll('.event')
console.log(bannerinputdlt)
for(i=0; i<bannerinputdlt.length; i++){
  bannerinputdlt[i].addEventListener('click',function (e)  {
  e.preventDefault();
let url=e.target.href


  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
  window.location=url
  }
})
})

}




// bannerinputdlt.addEventListener('click',function (e) {
//     // let url=window.URL.createObjectURL(e.target.files[0])
//     e.preventDefault();
// // let url=e.target.href
// Swal.fire({
//   title: 'Are you sure?',
//   text: "You won't be able to revert this!",
//   icon: 'warning',
//   showCancelButton: true,
//   confirmButtonColor: '#3085d6',
//   cancelButtonColor: '#d33',
//   confirmButtonText: 'Yes, delete it!'
// }).then((result) => {
//   if (result.isConfirmed) {
//     Swal.fire(
//       'Deleted!',
//       'Your file has been deleted.',
//       'success'
//     )
//   }

// })
// }
</script>



