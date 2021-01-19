<?php
    session_start();

    require 'function.php';
    if( isset($_POST["login"]) )
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        // Cek username
        if ( mysqli_num_rows($result) === 1 )
        {
            // Cek Password
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row["password"]) )
            {
                // Set Session
              $_SESSION ["Login"] = true;

                header("Location: index.php");
                exit;
            }
        }
        $error = true;
    }

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

    <style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: center;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
</style>
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
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="calculator.php">Calculator</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="akg.php">AKG</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div style="font-size:30px" class="col-xl-9 mx-auto">
        Angka Kebutuhan Gizi
          <div class="cta-inner text-center rounded">
    <br>
    <table style="font-size:13px" id="t01" border="1" cellpading="20" cellspacing="0">
        <tr>
            <th>Umur</th>
            <th>Berat Badan (kg)</th>
            <th>Tinggi Badan (cm)</th>
            <th>Energi (kkal)</th>
            <th>Protein (g)</th>
            <th>Lemak (g)</th>
            <th>Karbohidrat (g)</th>
            <th>Serat (g)</th>
            <th>Air (ml)</th>
        </tr>
        <tr>
            <td><b>Bayi/Anak</b></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>0-5 bulan</td>
            <td>6</td>
            <td>60</td>
            <td>550</td>
            <td>9</td>
            <td>31</td>
            <td>59</td>
            <td>0</td>
            <td>700</td>
        </tr>
        <tr>
            <td>6-11 bulan</td>
            <td>9</td>
            <td>72</td>
            <td>800</td>
            <td>15</td>
            <td>35</td>
            <td>105</td>
            <td>11</td>
            <td>900</td>
        </tr>
        <tr>
            <td>1-3 tahun</td>
            <td>13</td>
            <td>92</td>
            <td>1350</td>
            <td>20</td>
            <td>45</td>
            <td>215</td>
            <td>19</td>
            <td>1150</td>
        </tr>
        <tr>
            <td>4-6 tahun</td>
            <td>19</td>
            <td>113</td>
            <td>1400</td>
            <td>25</td>
            <td>50</td>
            <td>220</td>
            <td>20</td>
            <td>1450</td>
        </tr>
        <tr>
            <td>7-9 tahun</td>
            <td>27</td>
            <td>130</td>
            <td>1650</td>
            <td>40</td>
            <td>55</td>
            <td>250</td>
            <td>23</td>
            <td>1650</td>
        </tr>
        <tr>
            <td><b>Laki-laki</b></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>10-12 tahun</td>
            <td>36</td>
            <td>145</td>
            <td>2000</td>
            <td>50</td>
            <td>65</td>
            <td>300</td>
            <td>28</td>
            <td>1850</td>
        </tr>
        <tr>
            <td>13-15 tahun</td>
            <td>50</td>
            <td>163</td>
            <td>2400</td>
            <td>70</td>
            <td>80</td>
            <td>350</td>
            <td>34</td>
            <td>2100</td>
        </tr>
        <tr>
            <td>16-18 tahun</td>
            <td>60</td>
            <td>168</td>
            <td>2650</td>
            <td>75</td>
            <td>85</td>
            <td>400</td>
            <td>27</td>
            <td>2300</td>
        </tr>
        <tr>
            <td>19-29 tahun</td>
            <td>60</td>
            <td>168</td>
            <td>2650</td>
            <td>65</td>
            <td>75</td>
            <td>430</td>
            <td>37</td>
            <td>2500</td>
        </tr>
        <tr>
            <td>30-49 tahun</td>
            <td>60</td>
            <td>166</td>
            <td>2550</td>
            <td>65</td>
            <td>70</td>
            <td>415</td>
            <td>36</td>
            <td>2500</td>
        </tr>
        <tr>
            <td>50-64 tahun</td>
            <td>60</td>
            <td>166</td>
            <td>2150</td>
            <td>65</td>
            <td>60</td>
            <td>340</td>
            <td>30</td>
            <td>2500</td>
        </tr>
        <tr>
            <td>65-80 tahun</td>
            <td>58</td>
            <td>164</td>
            <td>1800</td>
            <td>64</td>
            <td>50</td>
            <td>275</td>
            <td>25</td>
            <td>1800</td>
        </tr>
        <tr>
            <td>80+ tahun</td>
            <td>58</td>
            <td>164</td>
            <td>1600</td>
            <td>64</td>
            <td>45</td>
            <td>235</td>
            <td>22</td>
            <td>1600</td>
        </tr>
        <tr>
            <td><b>Perempuan</b></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>10-12 tahun</td>
            <td>38</td>
            <td>147</td>
            <td>1900</td>
            <td>55</td>
            <td>65</td>
            <td>280</td>
            <td>27</td>
            <td>1850</td>
        </tr>
        <tr>
            <td>13-15 tahun</td>
            <td>48</td>
            <td>156</td>
            <td>2050</td>
            <td>65</td>
            <td>70</td>
            <td>300</td>
            <td>29</td>
            <td>2100</td>
        </tr>
        <tr>
            <td>16-18 tahun</td>
            <td>52</td>
            <td>159</td>
            <td>2100</td>
            <td>65</td>
            <td>70</td>
            <td>300</td>
            <td>29</td>
            <td>2150</td>
        </tr>
        <tr>
            <td>19-29 tahun</td>
            <td>55</td>
            <td>159</td>
            <td>2250</td>
            <td>60</td>
            <td>65</td>
            <td>360</td>
            <td>32</td>
            <td>2350</td>
        </tr>
        <tr>
            <td>30-49 tahun</td>
            <td>56</td>
            <td>158</td>
            <td>2150</td>
            <td>60</td>
            <td>60</td>
            <td>340</td>
            <td>30</td>
            <td>2350</td>
        </tr>
        <tr>
            <td>50-64 tahun</td>
            <td>56</td>
            <td>158</td>
            <td>1800</td>
            <td>60</td>
            <td>50</td>
            <td>280</td>
            <td>25</td>
            <td>2350</td>
        </tr>
        <tr>
            <td>65-80 tahun</td>
            <td>53</td>
            <td>157</td>
            <td>1550</td>
            <td>58</td>
            <td>45</td>
            <td>230</td>
            <td>22</td>
            <td>1550</td>
        </tr>
        <tr>
            <td>80+ tahun</td>
            <td>53</td>
            <td>157</td>
            <td>1400</td>
            <td>58</td>
            <td>40</td>
            <td>200</td>
            <td>20</td>
            <td>1400</td>
        </tr>
        <tr>
            <td><b>Hamil (+an)</b></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Trimester 1</td>
            <td></td>
            <td></td>
            <td>+180</td>
            <td>+1</td>
            <td>+2,3</td>
            <td>+25</td>
            <td>+3</td>
            <td>+300</td>
        </tr>
        <tr>
            <td>Trimester 2</td>
            <td></td>
            <td></td>
            <td>+300</td>
            <td>+10</td>
            <td>+2,3</td>
            <td>+40</td>
            <td>+4</td>
            <td>+300</td>
        </tr>
        <tr>
            <td>Trimester 3</td>
            <td></td>
            <td></td>
            <td>+300</td>
            <td>+30</td>
            <td>+2,3</td>
            <td>+40</td>
            <td>+4</td>
            <td>+300</td>
        </tr>
        <tr>
            <td><b>Manyusui (+an)</b></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6 Bulan Pertama</td>
            <td></td>
            <td></td>
            <td>+330</td>
            <td>+20</td>
            <td>+2,2</td>
            <td>+45</td>
            <td>+5</td>
            <td>+800</td>
        </tr>
        <tr>
            <td>6 Bulan Kedua</td>
            <td></td>
            <td></td>
            <td>+400</td>
            <td>+15</td>
            <td>+2,2</td>
            <td>+55</td>
            <td>+6</td>
            <td>+650</td>
        </tr>
    </table>
          </div>
        </div>
      </div>
    </div>
  </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Script to highlight the active date in the hours list -->
    <script>
      $('.list-hours li').eq(new Date().getDay()).addClass('today');
    </script>

  </body>

</html>
