<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Infinity laser</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand">Infinity laser</a>
      <form>
        <a href="login.php" class="active"><button type="button" class="btn btn-primary btn-sm">Login</button></a>
        <a href="singup.php" class="active"><button type="button" class="btn btn-secondary btn-sm">Sing up</button></a>
      </form>
    </div>
  </nav>

  <div class="container">
    <br><br>
    <?php
    include('C:\xampp\htdocs\Infinity_laser\php\conn.php');

    $sql = "SELECT * FROM `product`;";
    $result_sql = mysqli_query($conn, $sql);

    while ($result = mysqli_fetch_array($result_sql)) {
    ?>
      <div class="card d-inline-flex p-1 m-1" style="width: 18rem;">
        <img src="product_img<?php echo $result['image']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $result['name']; ?></h5>
          <p class="card-text"><?php echo $result['description']; ?></p>
          <a href="#" class="btn btn-primary"><?php echo $result['price']; ?></a>
        </div>
      </div>
      <br>
    <?php } ?>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>