<?php
if(isset($_POST['username']) && isset($_POST['password'])){
  include_once('backend/db_connect.php');

  $username = $_POST['username'];  
  $password = $_POST['password'];

  $stm = $conn->query("SELECT Username,Password FROM admin_sms WHERE username = '$username' and password = '$password'");
  $db_admin = $stm->fetch(PDO::FETCH_ASSOC);

  if($username == isset($db_admin['Username']) && $password == isset($db_admin['Password'])){
    echo "<script>alert('Successfully logged in, you will be redirected in 3 seconds!')</script>";
    header("Refresh: 3;url=admin/dashboard.php");
  }
  else{
    echo "<script>alert('Incorrect username or password')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login | SMS</title>
  <link rel="icon" href="Assets/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>

<body>
  <section class="vh-100" style="background: rgb(63,81,181);background: linear-gradient(65deg, rgba(63,81,181,1) 0%, rgba(48,75,222,1) 100%);">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body px-5 pt-5 text-center">
              <form action="" method="POST">

                <div class="mb-md-5 mt-md-4 pb-5">

                  <h2 class="fw-bold mb-2 text-uppercase">Admin Login</h2>
                  <p class="text-white-50 mb-5">Please enter your Username and Password!</p>

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="typeUsernameX" class="form-control form-control-lg" placeholder="Username" name="username"/>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" id="typePasswordX" class="form-control form-control-lg"
                      placeholder="Password" name="password"/>
                  </div>

                  <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="forgot.php">Forgot password?</a></p>

                  <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                  
                  <div class="d-flex justify-content-center text-center mt-4 pt-1">
                    <a href="index.php"><i class="fa-solid fa-arrow-left"></i></a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://kit.fontawesome.com/0527a7a8a4.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>