<?php
    include 'koneksi.php';
    $username = $_POST['username'];
    $pass = $_POST['password']
    $login = $_POST['login'];
    $query = 'SELECT * FROM login WHERE username="$username"';
    $sql = mysqli_query($koneksi,$query);
    $result = mysqli_fetch_array($sql);
    if (mysqli_num_rows($result) > 0){
        echo "<script>alert('login berhasil')</script>";
        echo "<script>location.href = 'home.php'</script>";
    } else {
        echo "<script>alert('login gagal')</script>"
    }
?>