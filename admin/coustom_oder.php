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

    <div class="container">
        <h1 class="text-center">Coustom Oder List</h1>

        <table class="table">
  <thead  class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Size</th>
      <th scope="col">Materials</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include('C:\xampp\htdocs\Infinity_laser\php\conn.php');

  $sql ="SELECT * FROM `coustome_design_oder`;";
  
  $result_sql= mysqli_query($conn,$sql);
  
  while ($result=mysqli_fetch_array($result_sql)){ ?>
    <tr>
    <th scope="row"><?php echo $result['id'];?></th>
    <td><img src="<?php echo $result['image'];?>" height="50px" width="50px"></td>
    <td><?php echo $result['description'];?></td>
    <td><?php echo $result['size'];?></td>
    <td><?php echo $result['materials'];?></td>
    </tr>
<?php } ?>
    </tbody>
</table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>