<?php
include('../includes/header.php');
include('../includes/topbar.php');
include('../includes/sidebar.php');
include('../config/dbcon.php');
?>

<style>
     .table th, .table td {
    white-space: nowrap;
  }

  .table td.spec-offered {
    white-space: pre-line;
  }
</style>

<div class="content-wrapper">

<!-- Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Cars</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
    </div>
  </div>
</div>

<!-- Delete User -->
<!-- Modal -->
<div class="modal fade" id="DeletModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">remove Car</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <form action="code.php" method="POST">
    <div class="modal-body">
        <input type="hidden" name="delete_id" class="delete_user_id">>
        <p>
        Are you sure, you want to remove this car?
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="DeleteCar"class="btn btn-primary">Yes, Remove.</button>
      </div>
</form>
    </div>
  </div>
</div>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Cars</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
</div>

<section class="content">
<div class="container">

    <div class="row">
        <div class="col-md-12">
    <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>
                <a href="addCars.php"  data-target="#AddUserModal" class="btn btn-primary float-right">Add Car</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover" >
                <thead>
                <tr>
                <th>S.No.</th>
                    <th>Vehicle Name</th>
                    <th>Vehicle Model</th>
                    <th>VehicleNumber</th>
                    <th>Seating Capacity</th>
                    <th>Rent Per Day</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $query= "SELECT * FROM totalcars";
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run)> 0){
                     foreach($query_run as $row){
                        $formatted_rent = "$" . number_format($row['rent']);
                      ?>
                      <tr>
                  <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['carname']; ?></td>
                    <td><?php echo $row['carmodel']; ?></td>
                    <td><?php echo $row['carnum']; ?></td>
                    <td ><?php echo $row['seat']; ?></td>
                    <td><?php echo $formatted_rent; ?></td>
                <td>
                    <a href="editcar.php?car_id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm">Edit</a>
                    <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-danger btn-sm deletebtn">Delete</button></td>
                </tr>
                    <?php
                    }
                    }
                    else{
                    ?>
                    <tr>
                    <td>No record Found</td>
                    </tr>
                    <?php
                    }
                    ?>
</tbody>
                </table>
                </div>
            </div>
        
            </div>
            </div>
    </div>
</div>
</section>
</div>

<?php include('../includes/script.php'); ?>
<script>
  $(document).ready(function () {
    $('.deletebtn').click(function (e){
      e.preventDefault();
      var user_id = $(this).val();
$('.delete_user_id').val(user_id);
$('#DeletModal').modal('show');

    });
  });
  </script>
<?php include('../includes/script.php'); ?>
<?php include('../includes/footer.php'); ?>
