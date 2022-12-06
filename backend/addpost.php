<?php
// enctype="multipart/form-data
include "../slicedashboard/header.php";
?>
<h3>welcome to addpost</h3>
<!-- <?php
if(isset($_SESSION['toast'])){?> -->
  <div class="toast show" style="position:absolute; bottom:50px; right:50px" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
   
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
 good
  </div>
</div>
<!-- <?php
}
?> -->

<div class="card">
<div class="card-header bg-info text-white ">Add Banner</div>
<div class="card-body">
<form action="../controller/addpostphp.php" method="POST"  enctype="multipart/form-data" >

<div class="row">
<div class="col-lg-4">
<label for="img" class="w-100">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAC0CAMAAAAKE/YAAAAAKlBMVEXMzMzy8vL19fXk5OTU1NTc3Nzp6enJycnZ2dnPz8/s7Ozh4eHv7+/4+PihhnRhAAAEr0lEQVR4nO2ci5LiIBBFw/vp///uQhMCxKiZmI661admq8asJqfwBhrQmcQPMpkfZCIIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiCI/xX3aYED/N5neoxxUqlfamtjpBI6cq5/xDqFQorIZuyXB9tNKcJOBs854yz/MM7Dp62eAyEWKRKcNbj/4pZOxirkEJcWzm08u3+pcw5x8EuKORhrZTUExH5ab4uUCd9HgrPohYQeWueH+qv66uTlpBW9cRLWwbo6pig4+EXSOcRC1wSXEHuhZB9hCce/JdQQ4hZg+OdHYSB+S6hdCrFmQ7/GYpBbZYYR+VkfDnXuiVOIW3cGLZwyMW17GZtCzuMH85GMrdD+PsS1jd1091Ftdysj+WcwkwwxsnbfpSbWOcTN0qWcayH7VzkDnXf4SD76EPPSE4c5Et1bDyUH930YTIBQX6w71RC3SEQtlLu/7Zyeh+/YH5X5YJTrJ2PJ1hD3BdB9T9xQy5P6NLh4ZaiTcVdOzAVbysSDKZRxuvV//X/k9u/KU8T5l3MQ4rHInNPxkO5Jt3rsxseX3bDK6zQ6e3anexIcJyq264nZ+epcna9sJt2VbL4+eBaLndS5AYL0tEinmhiG4Yw+5btYZdKIIV2GA+Zh7Jil7TnfxbJoLT2f2pryIEv7s7op6P5Q4uFiPrVs0qfNlxyetMnFPRddSx+UdnlQHY5otBuxhNqX3w9Luzyx0StBPOm+xjksLX1ZABHDSxGlTRu4Dkv72r+r/rWY0nC/CPj1mLRRdSjlw/oSovRU+rl8tWPSbhJt2O5LDUxpWK2AUB+NRytTWZ8PTOlyzXzywy3dCi15lXSooT7a0nZxHicEmNJwzbxacbj3qPPF21A9o0pLmGbJN6SdL0tl4zwFVXo5+6b0rmmeU0lbr2bhuNIhnz0Vd1vSNvo9M6atPwyAK13K082WTm88jwcvjCsNqxVcbkkruMXEocIPV3perTAb0rFstGl3QBtX2kB7xvuWnidjubSwbeVx72mRW9qV8vS+pbs1ha47k2rXagaytJnrhpW06cZnzkWNiEyZETvaG1u6lKdrackG/GwN45+XL1OOLJ3LU56kVtKaD9Icarh5nYHfxKubE1tagpMcpS1bw4Mzbnng7XNrbOkJ5uR2lF41NKCFbw/i8/4bXRrK0zBIyw3nZf++xvxZstGlbZbxqpM2O9ZQOQTmY9IShr7QpOti5Etv/3CHBV26bEf4Ju38c9lmHR+t9qNLQ3laAlukw+4V9rwttxkRdGnT+jeQLnHZq33bHNbxW9otW1sgrf62k8H1RjeCL23q0hZIdztuO4nqzvoC6TBI/9U5N/Y62fjSpTyt0lsDy0trdt1Sb8XUix+VTogh2VdI11LjDWnur1qArNLqfenc2JdKLzffe9KcL8P6FdK1FIXeI76xWVunYpdIiyY9yXB8qzZcKa1aPE7hin7alNXTLH2KNuLm5/oqLO+bnCFt4I1DlzalPGXxpE8hXCO9lKcnfN6DY37eo8f9pYje2W2jS5utRYNvl57kOcHouOJ7L06eDL7y/NUVgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiCI9/gH31Uv/1c4NOAAAAAASUVORK5CYII=" 
  class="images" alt="" style="width:100%;display:block;">
<input type="file" id="img"  name="image" class="d-none bannerimg" >
<?php

if(isset($_SESSION['errors']['image'])) {  ?>
<span class="text-danger"><?php  print_r($_SESSION['errors']['image']) ;  ?></span> 
<?php
}    
 ?>
</label>

</div>
<div class="col-lg-8">
<label class="w-100">
<span class="text-primary">
Title name :
</span>

<input type="text" class="form-control" name="title">
<?php

if(isset($_SESSION['errors']['title'])) {  ?>
<span class="text-danger"><?php  print_r($_SESSION['errors']['title']) ;  ?></span> 
<?php
}    
 ?>
</label>
<label class="w-100">
<span class="text-primary">
video :
</span>

<input type="text" class="form-control" name="video">
<?php

if(isset($_SESSION['errors']['video'])) {  ?>
<span class="text-danger"><?php  print_r($_SESSION['errors']['video']) ;  ?></span> 
<?php
}    
 ?>
</label>
<label class="w-100">
<span class="text-primary">
Details :
</span>
<textarea type='text'class="form-control" name="detail"></textarea>
<?php

if(isset($_SESSION['errors']['detail'])) {  ?>
<span class="text-danger"><?php  print_r($_SESSION['errors']['detail']) ;  ?></span> 
<?php
}    
 ?>
</label>

</div>


</div>
<button name="submit" class="btn bg-info float-right">Submit</button>
</form>

</div>

</div>

<?php
include "../slicedashboard/footer.php";
unset($_SESSION['errors']);
?>

<script>


let bannerimginput=document.querySelector('.bannerimg')
  let bannerimg=document.querySelector('.images')
  bannerimginput.addEventListener('change',function (e) {
    let url=window.URL.createObjectURL(e.target.files[0])
     //console.log(url)
     bannerimg.src=url
       })
</script>