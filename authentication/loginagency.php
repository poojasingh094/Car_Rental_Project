<?php
include('header.php');
?>
<style>
.section {
  background: linear-gradient(to right, #CCCCFF 50%, transparent 30%);
  min-height: 100vh; 
  display: flex;
  justify-content: center;
  align-items: center;
}

.card {
  margin: 50px auto;
  max-width: 1000px; 
  border: 1px solid #ccc;
  border-radius: 10px;
  display: flex; 
  flex-direction: row; 
  box-shadow: 0 2px 3px rgba(0,0,0,0.1);
}

.card-img {
  flex: 1; 
  display: flex;
  justify-content: center; 
  align-items: center; 
  border-radius: 10px 0 0 10px; 
  overflow: hidden; 
}

.card-img img {
  max-width: 150%;
  height: 300px;
}

.card-body {
  flex: 2; 
  padding: 30px;
  text-align: center; 
}
h5{
  font-weight: bold;
  font-size: 22px;
}
.form-group {
  margin-bottom: 20px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 20px;
  border-radius: 3px;
  border: 1px solid #ccc;
}

.button1 {
  width: 100%;
  padding: 13px;
  background-color: orange;
  color: white;
  font-weight: bold;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  margin-top: 20px;
}
.button1:hover {
  background-color: green;
}
@media (max-width: 768px) {
  .card {
    flex-direction: column; 
  }
  .card-img {
    max-width: 100%; 
    min-width: auto;
    height: auto; 
  }
  .card-img img {
    border-radius: 10px 10px 0 0; 
  }
}
</style>
<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 my-5">
                <div class="card my-5">
                    <div class="card-img">
                        <img src="../images/carg.png" alt="Login Image">
                    </div>
                    <div class="card-body">
                        <div class="card-header">
                            <h5>Login Your Account</h5>
                        </div>
                        <?php
                        include('message.php');
                        ?>
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <hr>
                            <div class="form-group">
                                <button type="submit" name="login_btn" class="btn btn-primary button1">Login </button>
                                <p>Don't have an account? <a href="registeragency.php">Register now</a></p>
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
