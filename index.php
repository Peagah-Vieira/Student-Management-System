<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page | SMS</title>
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <style>
    img {
      height: 150px;
      width: 100%;
    }

    div [class^="col-"] {
      padding-left: 5px;
      padding-right: 5px;
    }

    .card {
      transition: 0.5s;
      cursor: pointer;
    }

    .card-title {
      font-size: 15px;
      transition: 1s;
      cursor: pointer;
    }

    .card-title i {
      font-size: 15px;
      transition: 1s;
      cursor: pointer;
      color: #ffa710
    }

    .card-text {
      height: 80px;
    }

    .card::before,
    .card::after {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      transform: scale3d(0, 0, 1);
      transition: transform .3s ease-out 0s;
      background: rgba(255, 255, 255, 0.1);
      content: '';
      pointer-events: none;
    }

    .card::before {
      transform-origin: left top;
    }

    .card::after {
      transform-origin: right bottom;
    }

    .card:hover::before,
    .card:hover::after,
    .card:focus::before,
    .card:focus::after {
      transform: scale3d(1, 1, 1);
    }
  </style>
</head>

<body style="background-color:#F8F9FC;">
  <!-- Responsive navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark py-2" style="background: rgb(13,13,14);background: linear-gradient(330deg, rgba(13,13,14,1) 0%, rgba(29,32,34,1) 100%);">
    <div class="container px-lg-5">
      <a class="navbar-brand" href="index.php"><img src="assets/img/favicon.ico" style="height:33px;;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="admin_login.php">Admin</a></li>
          <li class="nav-item"><a class="nav-link" href="student_login.php">Student</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header-->
  <header>
    <div class="container px-lg-5">
      <div class="px-4 p-lg-3 rounded-3 text-center">
        <div class="m-4 m-lg-5">
          <h1 class="display-5 fw-bold">Student Management System</h1>
          <p class="fs-4">Nam quis nulla. Integer malesuada. In in enim a arcu imperdiet malesuada. Sed vel lectus. Donec odio urna, tempus molestie, porttitor ut, iaculis quis, sem. Phasellus rho</p>
        </div>
      </div>
    </div>
  </header>
  <!-- Page Content-->
  <section>
    <div class="container px-lg-5">
      <!-- Page Features-->
      <div class="row gx-lg-3 mb-5 p-3">
          <div class="col-md-3 col-sm-3 mt-2">
            <div class="card card-block p-2 text-center">
              <img src="assets/img/useful_tools.jpg" alt="Photo of sunset">
              <h5 class="card-title mt-3 mb-3 fw-bold fs-5">Useful Tools</h5>
              <p class="card-text">Nam quis nulla. Integer malesuada. In in enim a arcu imperdiet malesuada.</p>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 mt-2">
            <div class="card card-block p-2 text-center">
              <img src="assets/img/student_management.jpg" alt="Photo of sunset">
              <h5 class="card-title mt-3 mb-3 fw-bold fs-5">Student Management</h5>
              <p class="card-text">Nam quis nulla. Integer malesuada. In in enim a arcu imperdiet malesuada.</p>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 mt-2">
            <div class="card card-block p-2 text-center">
              <img src="assets/img/class_management.jpg" alt="Photo of sunset">
              <h5 class="card-title mt-3 mb-3 fw-bold fs-5">Class Management</h5>
              <p class="card-text">Nam quis nulla. Integer malesuada. In in enim a arcu imperdiet malesuada.</p>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 mt-2">
            <div class="card card-block p-2 text-center">
              <img src="assets/img/encrypted_password.jpg" alt="Photo of sunset">
              <h5 class="card-title mt-3 mb-3 fw-bold fs-5">Encrypted Password</h5>
              <p class="card-text">Nam quis nulla. Integer malesuada. In in enim a arcu imperdiet malesuada.</p>
            </div>
          </div>
      </div>
    </div>
  </section>
  <footer class="text-center text-white"
    style="background: rgb(13,13,14);background: linear-gradient(330deg, rgba(13,13,14,1) 0%, rgba(29,32,34,1) 100%);">
    <div class="container">
      <section>
        <div class="row text-center d-flex justify-content-center pt-4">
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="index.php" class="text-white" style="text-decoration:none">Home</a>
            </h6>
          </div>
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="admin_login.php" class="text-white" style="text-decoration:none">Admin</a>
            </h6>
          </div>
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="student_login.php" class="text-white" style="text-decoration:none">Student</a>
            </h6>
          </div>
        </div>
      </section>
      <hr class="my-3" />
      <section class="mb-2">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
              distinctio earum repellat quaerat voluptatibus placeat nam,
              commodi optio pariatur est quia magnam eum harum corrupti
              dicta, aliquam sequi voluptate quas.
            </p>
          </div>
        </div>
      </section>
      <section class="text-center mb-3">
        <a href="https://twitter.com/Pea_gah" class="text-white me-4" target="_blank" style="text-decoration:none">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.instagram.com/pea_gah/" class="text-white me-4" target="_blank" style="text-decoration:none">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/in/pedro-henrique-vieira-073b62236/" class="text-white me-4" target="_blank" style="text-decoration:none">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://github.com/Peagah-Vieira" class="text-white me-4" target="_blank" style="text-decoration:none">
          <i class="fab fa-github"></i>
        </a>
      </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">© 2022 Copyright:
      <a class="text-white" href="https://github.com/Peagah-Vieira" target="_blank">Peagah</a>
    </div>
  </footer>

  <script src="https://kit.fontawesome.com/0527a7a8a4.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</php>