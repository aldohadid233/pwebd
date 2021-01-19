<?php

    $conn = mysqli_connect("localhost", "root", "", "fatloss");
    function query($query)
    {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) )
        {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data)
    {
        global $conn;

        // Ambil data dari tiap elemen dalam form
        //$id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $kalori = htmlspecialchars($data["kalori"]);

        // Query Insert Data
        $query = "INSERT INTO makanan 
                    VALUES 
                    ('', '$nama', '$kalori')
                    ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id)
    {
        global $conn;
        mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    function ubah($data)
    {
        global $conn;

        // Ambil data dari tiap elemen dalam form
        $nama = htmlspecialchars($data["nama"]);
        $kalori = htmlspecialchars($data["kalori"]);

        // Query Insert Data
        $query = "UPDATE makanan SET
                    nama = '$nama',
                    kalori = '$kalori'
                    WHERE id= $id
                    ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword)
    {
        $query = "SELECT * FROM makanan
                    WHERE
                    nama LIKE '%$keyword%'
                ";
        return query($query);
    }

    function registrasi($data)
    {
        global $conn;
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        
        // Cekusername sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        if( mysqli_fetch_assoc($result) )
        {
            echo "<script>
            alert('Username sudah ada!');
        </script>";
        return false;
        }

        // Cek konfirmasi password
        if( $password !== $password2)
        {
            echo "<script>
            alert('Konfirmasi password tidak sesuai!');
        </script>";
        return false;
        }

        // Enkripsi Password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Tambahkan user baru ke database
        mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");
        return mysqli_affected_rows($conn);
    }

    // Menguji status user
    function cek_status($nama)
    {
        global $conn;
        $nama = escape($nama);

        $query = "SELECT roles FROM user WHERE username ='$nama'";

        $result = mysqli_query($conn, $query);
        $status = mysqli_fetch_assoc($result)['roles'];

        die(status);
        return $status;

    }
?>