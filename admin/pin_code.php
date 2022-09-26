<?php
include_once('../backend/pin_code_verify.php');
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PIN-CODE | SMS</title>
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

                  <h2 class="fw-bold mb-2 text-uppercas">Enter your PIN CODE</h2>
                  <p class="text-white-50 mb-5">Enter a PIN CODE to reset your password!</p>
                  <div class="form-outline form-white mb-4">
                    <input type="password" id="typeUsernameX" class="form-control form-control-lg" placeholder="PIN" name="pin_code" required/>
                  </div>

                  <button class="btn btn-outline-light btn-lg px-5" type="submit" name="send">Send</button>
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