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
        // Cek apakah data berhasil diubah atau tidak
        if( ubah($_POST) > 0)
        {
            echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
        else
        {
            echo "
                <script>
                    alert('Data gagal diubah!');
                    document.location.href = 'index.php';
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
    <title>Ubah Data Makanan</title>
</head>
<body>
    <h1>Ubah Data Makanan</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <br>
            <li>
                <label for="kalori">Kalori :</label>
                <input type="text" name="kalori" id="kalori">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>