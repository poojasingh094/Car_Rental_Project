<?php
include('../includes/header.php');
include('../includes/topbar.php');
include('../includes/sidebar.php');
include('../config/dbcon.php');
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Cars</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div><!-- /.content-header -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit-Cars</h3>
                            <a href="dashboard.php" class="btn btn-danger float-right">BACK</a>
                        </div>
                        <div class="card-body">
                            <div class="row"></div>
                            <div class="col-md-6">
                                <form action="code.php" method="POST">
                                    <div class="modal-body">

                                        <?php
                                        if (isset($_GET['car_id'])) {
                                            $user_id = $_GET['car_id'];
                                            $query = "SELECT * FROM totalcars WHERE id='$user_id' LIMIT 1";
                                            $query_run = mysqli_query($con, $query);

                                            if (mysqli_num_rows($query_run) > 0) {
                                                foreach ($query_run as $row) {
                                                    ?>
                                                    <input type="hidden" name="car_id" value="<?php echo $row['id'] ?>">
                                                    <div class="form-group">
                                                        <label for="">Vehicle Name </label>
                                                        <input type="text" name="cname" value="<?php echo $row['carname'] ?>"
                                                            class="form-control" placeholder="Vehicle Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Vehicle Model</label>
                                                        <input type="text" name="model" value="<?php echo $row['carmodel'] ?>"
                                                            class="form-control" placeholder="Vehicle Model">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Vehicle Number</label>
                                                        <input type="text" name="carnum" value="<?php echo $row['carnum'] ?>"
                                                            class="form-control" placeholder="Vehicle Number"></input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Seating Capacity</label>
                                                        <input type="number" name="seat" value="<?php echo $row['seat'] ?>"
                                                            class="form-control" placeholder="Seating Capacity">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Rent Per Day</label>
                                                        <input type="text" name="rent" value="<?php echo $row['rent'] ?>"
                                                            class="form-control" placeholder="Rent Per Day">
                                                    </div>
                                                    <?php
                                                }
                                            } else {
                                                echo "<h4>No Record Found!</h4>";
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="updateCar" class="btn btn-info">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<?php include('../includes/script.php'); ?>
<?php include('../includes/footer.php'); ?>
