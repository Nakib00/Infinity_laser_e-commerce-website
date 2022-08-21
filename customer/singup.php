<?php
include('C:\xampp\htdocs\Infinity_laser\php\conn.php');
$showalrt=false;
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['pass'])){
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $phone=$_POST["phone"];
  $email=$_POST["email"];
  $password=$_POST["pass"];

  $sql="INSERT INTO `customer` (`fname`, `lname`, `phone`, `email`, `password`) 
        VALUES ('$fname', '$lname', '$phone', '$email', '$password');";

  if(mysqli_query($conn, $sql)){
    $showalrt=true;
  }else{
    $showalrt=false;
  }
}
?>
<!-- html  -->
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
  </div>
</nav>

<!-- Showing Alart  -->
<?php
if($showalrt){
echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Successful!</strong> your account is created now you can log in.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<br><br><br>
<div class="container">
    <h2 class="text-center">singup for Infinity laser</h2><br>

    <!-- Form  -->
<form action="singup.php" method="post">
    <!-- Firstname -->
    <div class="form-outline mb-4">
    <input type="fname" id="fname" name="fname" class="form-control"/>
    <label class="form-label" for="fname">Firstname</label>
  </div>
      <!-- Lestname -->
      <div class="form-outline mb-4">
    <input type="lname" id="lname" name="lname" class="form-control"/>
    <label class="form-label" for="lname">Lestname</label>
  </div>
      <!-- Phone number -->
      <div class="form-outline mb-4">
    <input type="phone" id="phone" name="phone" class="form-control"/>
    <label class="form-label" for="phone">Phone number</label>
  </div>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="email" name="email" class="form-control"/>
    <label class="form-label" for="email">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="pass" name="pass" class="form-control"/>
    <label class="form-label" for="pass">Password</label>
  </div>
  <!-- Submit button -->
  <button type="submit" value="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
</form>
<!-- Login  -->
<a href="login.php"><button type="button" class="btn btn-outline-primary mb-4">Log in</button></a>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>