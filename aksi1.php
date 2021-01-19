<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>
    Calculator
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

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
        
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Home</a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="calculator.php">Calculator</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="akg.php">AKG</a>
          </li>
          <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?php 
    $tinggibadan = $_POST['tinggibadan'];
    $beratbadan = $_POST['beratbadan'];
    $usia = $_POST['usia'];
    $aktivitas = $_POST['aktivitas'];
    $kelamin	= $_POST['kelamin'];
    $tinggibadan1 = $tinggibadan /100;

if ($kelamin == "pria" && $aktivitas == "sedentary") 
{
  $kalori = round(((88.362 + (13.397 * $beratbadan) + (4.799 * $tinggibadan) - (5.677 * $usia)) * 1.2),0);
  $bmi = round(($beratbadan / ($tinggibadan1 * $tinggibadan1)),1);

  if ($bmi<18.5) 
  {
 		$golongan = "Underweight";
  }

  elseif($bmi>=18.5 && $bmi<=24.9)
  {
 		$golongan = "Ideal";
  }
  
  elseif($bmi>=25 && $bmi<=29.9)
  {
 		$golongan = "Overweight";
  }

  elseif($bmi>=30)
  {
 		$golongan = "Obesitas";
  };
  ?>

  <br>
  <?php
} elseif ($kelamin == "pria" && $aktivitas == "sedang"){
	$kalori = round(((88.362 + (13.397 * $beratbadan) + (4.799 * $tinggibadan) - (5.677 * $usia)) * 1.3),0);
	$bmi = round(($beratbadan / ($tinggibadan1 * $tinggibadan1)),1);

      if ($bmi<18.5) {
 		$golongan = "Underweight";
 	}elseif($bmi>=18.5 && $bmi<=24.9){
 		$golongan = "Ideal";
 	}elseif($bmi>=25 && $bmi<=29.9){
 		$golongan = "Overweight";
 	}elseif($bmi>=30){
 		$golongan = "Obesitas";
 	};
      ?>

      <br><?php

} elseif ($kelamin == "pria" && $aktivitas == "berat"){
	$kalori = round(((88.362 + (13.397 * $beratbadan) + (4.799 * $tinggibadan) - (5.677 * $usia)) * 1.4),0);
	$bmi = round(($beratbadan / ($tinggibadan1 * $tinggibadan1)),1);

      if ($bmi<18.5) {
 		$golongan = "Underweight";
 	}elseif($bmi>=18.5 && $bmi<=24.9){
 		$golongan = "Ideal";
 	}elseif($bmi>=25 && $bmi<=29.9){
 		$golongan = "Overweight";
 	}elseif($bmi>=30){
 		$golongan = "Obesitas";
 	};
      ?>

      <br><?php

} elseif ($kelamin == "wanita" && $aktivitas == "sedentary"){
	$kalori = round(((447.593 + (9.247 * $beratbadan) + (3.098 * $tinggibadan) - (4.33 * $usia)) * 1.2),0);
	$bmi = round(($beratbadan / ($tinggibadan1 * $tinggibadan1)),1);

      if ($bmi<18.5) {
 		$golongan = "Underweight";
 	}elseif($bmi>=18.5 && $bmi<=24.9){
 		$golongan = "Ideal";
 	}elseif($bmi>=25 && $bmi<=29.9){
 		$golongan = "Overweight";
 	}elseif($bmi>=30){
 		$golongan = "Obesitas";
 	};
      ?>

      <br><?php

} elseif ($kelamin == "wanita" && $aktivitas == "sedang"){
	$kalori = round(((447.593 + (9.247 * $beratbadan) + (3.098 * $tinggibadan) - (4.33 * $usia)) * 1.3),0);
	$bmi = round(($beratbadan / ($tinggibadan1 * $tinggibadan1)),1);

      if ($bmi<18.5) {
 		$golongan = "Underweight";
 	}elseif($bmi>=18.5 && $bmi<=24.9){
 		$golongan = "Ideal";
 	}elseif($bmi>=25 && $bmi<=29.9){
 		$golongan = "Overweight";
 	}elseif($bmi>=30){
 		$golongan = "Obesitas";
 	};
      ?>

      <br><?php
} elseif ($kelamin == "wanita" && $aktivitas == "berat"){
	$kalori = round(((447.593 + (9.247 * $beratbadan) + (3.098 * $tinggibadan) - (4.33 * $usia)) * 1.4),0);
	$bmi = round(($beratbadan / ($tinggibadan1 * $tinggibadan1)),1);
      if ($bmi<18.5) {
 		$golongan = "Underweight";
 	}elseif($bmi>=18.5 && $bmi<=24.9){
 		$golongan = "Ideal";
 	}elseif($bmi>=25 && $bmi<=29.9){
 		$golongan = "Overweight";
 	}elseif($bmi>=30){
 		$golongan = "Obesitas";
 	};
      ?>
      <br><?php
} 
      ?>  
    <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div style="font-size:30px" class="col-xl-9 mx-auto">
        Kalkulator Kalori
          <div style="font-size:20px" class="cta-inner text-center rounded">
            Anda <?php echo $kelamin; ?>. 
            Aktivitas harian anda <?php echo $aktivitas; ?>. 
            Kebutuhan energi harian anda adalah <?php echo $kalori; ?> kkal.
            BMI anda adalah <?php echo $bmi; ?>.
            Menurut perhitungan standar BMI, Anda termasuk golongan <?php echo $golongan; ?>.
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
   