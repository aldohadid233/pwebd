<?php
require 'function.php';
    if( isset($_POST["register"]) )
    {
        if ( registrasi($_POST) > 0 )
        {
            echo "
                <script>
                    alert('User baru berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else 
        {
            echo mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>
    Registrasi
  </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">
  

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-lower">FatLoss</span>
    <span class="site-heading-upper text-primary mb-3">Calories Counting Website</span>
  </h1>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
                <h1>Halaman Registrasi</h1>
                <form action="" method="post">

                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
                <br>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
                <br>
                <label for="password2">Konfirmasi password : </label>
                <input type="password" name="password2" id="password2">
                <br>
                <button type="submit" name="register">Register!</button>

                </form>
                <br>
                <center><div style="font-size:15px" class="label">Sudah punya akun? <a href="login.php">Login</a></div></center>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>