<?php
session_start();
include('../config/dbcon.php');

if (isset($_POST['addcar'])) {
    $cname = $_POST['carname'];
    $model = $_POST['carmodel'];
    $num = $_POST['carno'];
    $seat = $_POST['seat'];
    $rent = $_POST['rent'];
    
    $user_query = "INSERT INTO totalcars (carname,carmodel,carnum,seat,rent) VALUES ('$cname',' $model','$num','$seat',$rent)";
    $user_query_run = mysqli_query($con, $user_query);
    
    if ($user_query_run) {
        $_SESSION['status'] = " New Car added successfully";
        header("location: dashboard.php");
    } else {
        $_SESSION['status'] = "Car modification failed";
        header("location: dashboard.php");
    }
}

if (isset($_POST['updateCar'])) {
    $car_id = $_POST['car_id'];
    $cname = $_POST['cname'];
    $model = $_POST['model'];
    $num = $_POST['carnum'];
    $seat = $_POST['seat'];
    $rent = $_POST['rent'];
    
    $query = "UPDATE totalcars SET carname='$cname', carmodel='$model', carnum='$num',seat='$seat', rent='$rent' WHERE id='$car_id'";
    $query_run = mysqli_query($con, $query);
    
    if ($query_run) {
        $_SESSION['status'] = "Car updated successfully";
        header("location: dashboard.php");
    } else {
        $_SESSION['status'] = "Car updation failed";
        header("location: dashboard.php");
    }
}

if (isset($_POST['DeleteCar'])) {
    $car_id = $_POST['delete_id'];
    $query = "DELETE FROM totalcars WHERE id= '$car_id'";
    $query_run = mysqli_query($con, $query);
    
    if ($query_run) {
        $_SESSION['status'] = "Car deleted successfully";
        header("location: dashboard.php");
    } else {
        $_SESSION['status'] = "Car deletion failed";
        header("location: dashboard.php");
    }
}
?>
