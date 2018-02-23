<?php
include("init.php");
   session_start();

if(!isset($_SESSION['username'])){
    header('location:index.php');

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>InternShip-Homepage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="font-awesome.min.css">
         <link rel="stylesheet" href="form-elements.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

         <style type="text/css">
    body{
      background-image: url('1.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0px;
      padding: 0px;
      width: 100%;
      height: 100vh;
    }
    a{
    font-family: 'Roboto', sans-serif;
    font-size: 24px;
    }
   a:hover { 
    background-color: aqua;
    text-decoration: underline;
}

    </style>
</head>
<body>
<div class="container">
    <center><h1 style="color:white">InternShip</h1></center>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-box">
            <div class="form-top">
            <div class="form-top-left">
                <h3>User Details.</h3>
            </div>
            </div>
            <div class="form-bottom">
            <form method="post" class="login-form">
            <div class="form-group">
   <?php
  include('init.php');
  $condition = $_GET['link'];

  $sql="SELECT firstname,lastname,dob,experience,primaryskill,secondaryskill from registerdata where firstname like '$condition';";
  $result = mysqli_query($con,$sql);
  if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
              $fname = $row["firstname"];
              $lname = $row["lastname"];
              $udob = $row["dob"];
              $uexperience = $row["experience"];
              $uprimary = $row["primaryskill"];
              $usecondary = $row["secondaryskill"];

              echo "FirstName: ".$fname."<br>LastName: ".$lname."<br>Experience: ".$uexperience."<br>Primary Skill: ".$uprimary."<br>Secondary Skill: ".$usecondary; 
              }
  }
  else
  {
    echo "No Entry";
  }
$con->close();
?> 
</body>
</html>
