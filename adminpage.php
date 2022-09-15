<?php
include 'config.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="css/adminpage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>

<body>
    <nav class="navbar">
        <div class="max-width">
            <img class="log" src="img/logo.png" alt="">
            <div class="logo" ><a href="#">Student<span>  Forum</span></a></div>
            <div class="login-container">
                <form action="index.html">
                  <button type="submit"> Admin Logout</button>
                </form>
        </div>
        
    </nav>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">sl.no</th>
      <th scope="col">name</th>
      <th scope="col">email id</th>
    </tr>
  </thead>
  <tbody>



  <?php
  $select="SELECT *FROM user_form";
  $result=mysqli_query($conn,$select);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $name=$row['name'];
      $email=$row['email'];
      echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
    </tr>';
    }
    

  }




?>
    