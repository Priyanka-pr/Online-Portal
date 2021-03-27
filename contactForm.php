<?php
include ('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Contact Us</title>
<style>
/* .form {
    
    padding: 20px;
    margin: 90px 180px;
    margin: 60px 314px;
    color:white;
    font-size:20px;
}
body{
    background-image: url("img/contactUs.jpg"); 
}
.btn{
    background-color: white;
    border:2px solid black;
    color:black;
} */

</style>
</head>
<body class="bg-light">
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#about">About us</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link disabled" href="contactForm.php">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>
    <div class="container-fluid">
    <form method="POST" action="">
  <div class="row">
    <div class="col-md-6">
    <div class="form-group">
      <label for="fname">FName:</label>
      <input type="text" class="form-control"  placeholder="Enter name" name="fname">
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
      <label for="lname">LName:</label>
      <input type="text" class="form-control"  placeholder="Enter lname" name="lname">
    </div>
</div>
</div>
<div class="row">
    <div class="col-md-6">
    <div class="form-group">
      <label for="contact">Contact No:</label>
      <input type="type" class="form-control"  placeholder="contact" name="contact">
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" class="form-control"  placeholder="Enter email" name="email">
    </div>
</div>
</div>
<div class="row">
    <div class="col-md-6">
    <div class="form-group">
      <label for="dob">DOB: </label>
      <input type="date" class="form-control"  placeholder="Enter Dob" name="dob">
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control"  placeholder="Enter Address" name="addres">
    </div>
</div>
</div>
<div class="row">
    <div class="col-md-6">
    <div class="form-group">
      <label for="gender">Gender: </label>
      &nbsp;&nbsp;<input type="radio"    value="male" name="gender">Male &nbsp;&nbsp;
      <input type="radio"   value="Female"  name="gender">Female
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
      <label for="yourself">Write about yourself:</label>
      <input type="text" class="form-control"  placeholder="Enter Yourself" name="yourself">
    </div>
</div>
</div>
  
<input type="submit" value="submit" name="submit" class="btn btn-default"> 
  </form> 
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php
if (isset($_POST['submit']))
{
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $addres = $_POST['addres'];
  $gender = $_POST['gender'];
  $yourself = $_POST['yourself'];
  $sql = "INSERT INTO mycontactlist (fname, lname, contact, email, dob, addres, gender, yourself) VALUES ('$fname', '$lname', '$contact', '$email', '$dob', '$addres', '$gender', '$yourself')";
  $exe = mysqli_query($conn, $sql);
  if($exe)
  {
    echo "done";
  }
  else{
      echo "error";
  }
}
?> 