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

  <div class="container">
    <h1 class="text-center">Welcome to Infinity laser</h1><hr>
    <div class="row">
      <div class="col-sm-10">
        </div>
        <div class="col-sm-2">
          <a href="coustome_design.php"><button type="button" class="btn btn-outline-primary btn-lg mt-3 p-3">Coustom Design</button></a>
      </div><hr class="mt-3">
    </div>
    
    <?php 
    include('C:\xampp\htdocs\Infinity_laser\php\conn.php');

    $sql ="SELECT * FROM `product`;";
    $result_sql= mysqli_query($conn,$sql);

    while ($result=mysqli_fetch_array($result_sql)){
    ?>
    <div class="card" style="width: 18rem mt-1 p-3;">
  <img src="<?php echo $result['image'];?>" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?php echo $result['name'];?></h5>
    <p class="card-text"><?php echo $result['description'];?></p>
    <a href="#" class="btn btn-primary"><?php echo $result['price'];?></a>
  </div>
</div>
<br>
<?php } ?>

  </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>