<?php
include('C:\xampp\htdocs\Infinity_laser\php\conn.php');
$showalrt=false;
if(isset($_POST['submit'])){
  $img=$_FILES["image"]['name'];
  $size=$_POST["productname"];
  $dis=$_POST["productDescription"];
  $material=$_POST["price"];

  $sql="INSERT INTO `product`(`image`, `name`, `description`, `price`) VALUES ('$img','$size','$dis','$material')";

  if(mysqli_query($conn, $sql)){
    $showalrt=true;
  }else{
    $showalrt=false;
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infinity laser Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>

    <!-- include navnar -->
    <?php include('navbar.php'); ?>

      <!-- Showing Alart  -->
<?php
if($showalrt){
echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Successful!</strong> Your Coustom Design oder is placed.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<div class="container">
  <h2 class="text-center">Upload Product</h2>


  <form action="upload_product.php" method="post" enctype="multipart/form-data">
    <legend>Upload Your Coustome Design Information</legend>
    <div class="mb-3">
    <label  class="form-label">Upload Product Image</label>
    <input type="file" class="form-control" name="image">
    </div>
    <div class="mb-3">
      <label  class="form-label">Product name</label>
      <input type="text" id="disabledTextInput" class="form-control" name="productname">
    </div>
    <div class="mb-3">
      <label  class="form-label">Product Description</label>
      <input type="text" id="disabledTextInput" class="form-control" name="productDescription">
    </div>
    <div class="mb-3">
      <label  class="form-label">Price</label>
      <input type="text" id="disabledTextInput" class="form-control" name="price">
    </div>
    <div class="mb-3">
    </div>
    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
</form>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>