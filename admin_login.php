<?php
if(isset($_POST['username'],$_POST['password'])){
  include_once('backend/db_connect.php');

  $username = $_POST['username'];  
  $password = $_POST['password'];

  $stm = $conn->query("SELECT Username,Password FROM admin_sms WHERE username='$username' and password='$password'");
  $db_admin = $stm->fetch(PDO::FETCH_ASSOC);

  if($username == isset($db_admin['Username']) && $password == isset($db_admin['Password'])){
    echo "<script>console.log('Logado com sucesso')</script>";
    header("Refresh: 5;url=admin/dashboard.php");
  }
  else{
    echo "<script>console.log('Usuario ou senha Incorreta')</script>";
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
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>

<body>
  <section class="gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-5">
          <div class="card rounded-3 text-black">
            <div class="col-lg-12">
              <div class="card-body p-md-5 mx-md-4">
                <div class="text-center">
                  <img src="Assets/img/admin.png" style="width: 128px; height: 128px;"  alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Admin Login</h4>
                </div>
                <form method="POST">
                  <div class="form-outline">
                    <input type="text" id="form2Example11" class="form-control" placeholder="Username" name="username"/>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" placeholder="Password" name="password" />
                  </div>

                  <div class="">
                    <button class="btn btn-primary btn-block mb-3" type="submit">Login</button>
                  </div>

                  <div class="text-center pt-1 pb-1">
                    <a class="text-muted" href="forgot.php">Forgot password?</a>
                  </div>

                  <div class="form-outline">
                    <a href="index.php"><i class="fa-solid fa-arrow-left"></i></a>
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