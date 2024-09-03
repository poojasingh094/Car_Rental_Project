<?php
include('header.php');
?>
<style>
.section {
  background-image: url('../images/car8.jpg'); 
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  min-height: 100vh; 
  display: flex;
  justify-content: center;
  align-items: center;
}

.card {
  margin: 50px auto;
  max-width: 600px;
  padding: 30px;
  border: 1px solid #ccc;
  border-radius: 10px;
  text-align: center;
  box-shadow: 0 2px 3px rgba(0,0,0,1);
  background-color: rgba(255, 255, 255, 0.1);
}
.form-group {
  margin-bottom: 20px;
}
h5 {
  font-weight: bold;
  font-size: 24px;
  color: white;
  background-color: lightseagreen;
  padding: 15px;
}
p {
  color: white;
  font-size: 19px;
}
.btn {
  background-color: brown;
  border-radius: 40px;
}
a {
  color: white;
  text-decoration: none;
}
input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 25px;
  border-radius: 3px;
  border: 1px solid #ccc;
}
.brand-image {
  width: 125px;
  margin-left: 15px;
}
.button1 {
  width: 100%;
  padding: 12px;
  background-color: #3457D5;
  color: white;
  font-size: 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  margin-top: 25px;
}
.button1:hover {
  background-color: green;
}
</style>
<div class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5 my-5">
        <div class="card my-5">
          <div class="card-header">
            <h5>Welcome Back!</h5>
          </div>
          <div class="card-body">
            <?php include('message.php'); ?>
            <form action="logincode.php" method="POST">
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email Id">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <hr>
              <div class="form-group">
                <button type="submit" name="login_btn" class="btn btn-primary button1">Login</button>
                <p>Don't have an account? <button class="btn"><a href="rentreg.php">register now</a></button></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include('script.php');
?>
