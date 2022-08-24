<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infinity laser Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <!-- include navnar -->
    <?php include('navbar.php'); ?>

    <div class="container">
        <h2 class="text-center">Welcome to Infinity laser Admin panel</h2>

        <div class="row">
            <div class="col-sm-10">
            <a href="oder_list.php"><button type="button" class="btn btn-outline-primary btn-lg mt-3 p-3">Order list</button></a>
            </div>
            <div class="col-sm-2">
                <a href="coustom_oder.php"><button type="button" class="btn btn-outline-primary btn-lg mt-3 p-1">Coustom
                        Design Order list</button></a>
            </div>
        </div><hr>

        <div class="row">
            <div class="col-sm-10">
            <a href="upload_product.php"><button type="button" class="btn btn-outline-primary btn-lg mt-3 p-3">Upload Product</button></a>
            </div>
            <div class="col-sm-2">
            </div>
        </div>

        <div>
            <h2 class="text-center">Product list</h2>
        </div>

        <table class="table">
  <thead  class="table-dark">
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Discreption</th>
      <th scope="col">Image</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>

  <?php 
    include('C:\xampp\htdocs\Infinity_laser\php\conn.php');

    $sql ="SELECT * FROM `product`;";
    $result_sql= mysqli_query($conn,$sql);

    while ($result=mysqli_fetch_array($result_sql)){
    ?>
    <tr>
      <th scope="row"><?php echo $result['id'];?></th>
      <td><?php echo $result['name'];?></td>
      <td><?php echo $result['description'];?></td>
      <td><img src=" <?php echo $result['image'];?>" height="50px" width="50px"></td>
      <td><?php echo $result['price'];?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>