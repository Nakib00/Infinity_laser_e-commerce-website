<?php
include('C:\xampp\htdocs\Infinity_laser\php\conn.php');
$showalrt=false;
if(isset($_POST['submit'])){
  $img=$_FILES["image"]['name'];
  $dis=$_POST["designDescription"];
  $size=$_POST["size"];
  $material=$_POST["materials"];

  $sql="INSERT INTO `coustome_design_oder`(`image`, `description`, `size`, `materials`) VALUES ('$img','$dis','$size','$material')";

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
    <title>Infinity laser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
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
   <h1 class="text-center">Coustome Design</h1>
   <p class="container">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus dignissimos reiciendis consequatur aut dolor odio? Nulla accusamus fuga voluptatum, aperiam, quis ullam, excepturi saepe temporibus corrupti error dolorum doloribus adipisci?</p><hr>


   <form action="coustome_design.php" method="post" enctype="multipart/form-data">
    <legend>Upload Your Coustome Design Information</legend>
    <div class="mb-3">
    <label  class="form-label">Upload Design</label>
    <input type="file" class="form-control" name="image">
    </div>
    <div class="mb-3">
      <label  class="form-label">Design Description</label>
      <input type="text" id="disabledTextInput" class="form-control" name="designDescription">
    </div>
    <div class="mb-3">
      <label  class="form-label">Size</label>
      <input type="text" id="disabledTextInput" class="form-control" name="size">
    </div>
    <div class="mb-3">
      <label  class="form-label">Choose the materials</label>
      <select id="disabledSelect" class="form-select" name="materials">
        <option>Metal</option>
        <option>wooden</option>
        <option>Acrylic</option>
      </select>
    </div>
    <div class="mb-3">
    </div>
    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
</form>
  </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>