<?php
    session_start();
    
    if( !isset($_SESSION["login"]) )
    {
        header("Location: login.php");
        exit;
    }
    require 'function.php';

    // Koneksi ke Database
    $conn = mysqli_connect("localhost", "root", "", "fatloss");

    // Cek apakah tombol submit sudah ditekan?
    if( isset($_POST["submit"]) )
    {
        // Cek apakah data berhasil ditambahkan atau tidak
        if( tambah($_POST) > 0)
        {
            echo "
                <script>
                    alert('Makanan berhasil ditambahkan!');
                </script>
            ";
        }
        else
        {
            echo "
                <script>
                    alert('Makanan gagal ditambahkan!');
                </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Makanan</title>
</head>
<body>
    <h1>Tambah Data Makanan</h1>
    <br>
    <a href="index.php">Kembali ke Home</a>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <br>
            <li>
                <label for="kalori">Kalori :</label>
                <input type="text" name="kalori" id="kalori">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>