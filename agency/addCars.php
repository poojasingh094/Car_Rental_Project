<?php
session_start();
include('../includes/header.php');
include('../includes/topbar.php');
include('../includes/sidebar.php');
include('../config/dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: #CCCCFF;
    }
    .container {
      display: flex;
      justify-content: center;
      margin-top: 90px;
      margin-right: 170px;
    }

    .card {
      margin-top: -3vh;
    }
.form-control {
  height: 6vh; 
  width: 30vw; 
  min-width: 190px;
  /* max-width: 438px;  */
}
    .card-body {
      margin: 9vh 8vh;
    }
  </style>
</head>

<body>
  <form action="code.php" method="post">
    <div class="container">
      <div class="card">
        <div class="card-body">
          <label for="add">Vehicle Name</label>
          <input id="add" type="text" name="carname" class="form-control" ><br>
          <label for="add">Vehicle Model</label>
          <input id="add" type="text" name="carmodel" class="form-control" ><br>
          <label for="add">Vehicle Number</label>
          <input id="add" type="text" name="carno" class="form-control" ><br>
          <label for="ad">Seating Capacity</label>
          <input id="ad" type="number" name="seat" class="form-control"><br>
          <label for="ad">Rent Per Day</label>
          <input id="ad" type="text" name="rent" class="form-control" ><br>
          <button type="submit" class="btn btn-primary " name="addcar">Add Car</button>
        </div>
      </div>
    </div>
  </form>
</body>

</html>