<?php
include('../includes/header.php');
include('../config/dbcon.php');
session_start();

$query = "SELECT * FROM totalcars";
$query_run = mysqli_query($con, $query);

$vehicles = [];
if(mysqli_num_rows($query_run) > 0) {
    while($row = mysqli_fetch_assoc($query_run)) {
        $vehicles[] = [
            'model' => $row['carmodel'],
            'number' => $row['carnum'],
            'seating_capacity' => $row['seat'],
            'rent_per_day' => $row['rent'],
            'image' => '../images/carg.png' // Placeholder for car image
        ];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numDays = $_POST['num_days'];
    $startDate = $_POST['start_date'];
    
    // Redirect with query parameters
    header("Location: " . $_SERVER['PHP_SELF'] . "?startDate=" . urlencode($startDate) . "&numDays=" . urlencode($numDays));
    exit();
}
?>

<style>
    .top {
        background-color: #034694;
        height: 60px;
        margin: 0;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999; /* Ensure it appears above other content */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }
    .card {
        background-color: #f8f9fa; 
        max-width: 100%; 
        margin: 0 auto; /* Center cards horizontally */
    }
    .container-fluid {
        background-color: #e9ecef; /* Background color for the container */
        padding: 20px; /* Padding around the container */
    }
    .card-img-top {
        height: 180px; /* Fixed height for images */
        object-fit: cover; /* Ensure images cover the area */
    }
    .text{
        color: white;
        font-size: 25px;
        font-weight: bold;
    }
    .text-right {
        margin-bottom: 20px; /* Add margin at the bottom */
    }
    .btn-danger {
        position: absolute;
        top: 10px;
        right: 10px;
    }
</style>

<div class="top">
    <div class="text">Want to Rent Your Dream Car? Book Now</div>
    <a href="../index.php" class="btn btn-danger">Logout</a>
</div>

<div class="container-fluid mt-5">
    <div class="row">
        <?php foreach ($vehicles as $vehicle): ?>
        <div class="col-md-3 mb-4"> <!-- Adjust column size to fit 4 cards per row -->
            <div class="card">
                <img src="<?php echo $vehicle['image']; ?>" class="card-img-top" alt="Car Image">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $vehicle['model']; ?></h5>
                    <p class="card-text">Vehicle Number: <?php echo $vehicle['number']; ?></p>
                    <p class="card-text">Seating Capacity: <?php echo $vehicle['seating_capacity']; ?></p>
                    <p class="card-text">Rent per Day: $<?php echo number_format($vehicle['rent_per_day']); ?></p>

                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="num_days">Number of Days</label>
                            <select class="form-control" id="num_days" name="num_days">
                                <?php for ($i = 1; $i <= 30; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Rent Car</button>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include('../includes/script.php'); ?>
<?php include('../includes/footer.php'); ?>

<!-- Bootstrap Modal -->
<div class="modal fade" id="rentalSuccessModal" tabindex="-1" aria-labelledby="rentalSuccessModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"> <!-- Center the modal vertically -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rentalSuccessModalLabel">Rental Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      </div>
      <div class="modal-body text-center">
        <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Success" style="width: 50px; height: 50px;">
        <p id="modalMessage">Car rented successfully from [Start Date] for [Number of Days] days.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
      const urlParams = new URLSearchParams(window.location.search);
      const startDate = urlParams.get('startDate');
      const numDays = urlParams.get('numDays');

      if (startDate && numDays) {
          const message = 'Car rented successfully from ' + startDate + ' for ' + numDays + ' days.';
          document.getElementById('modalMessage').textContent = message;
          
          var rentalSuccessModal = new bootstrap.Modal(document.getElementById('rentalSuccessModal'));
          rentalSuccessModal.show();

          // Clear the query parameters after showing the modal
          history.replaceState({}, document.title, window.location.pathname);
      }
  });
</script>
