<?php

    include "koneksi.php";

    $username=$_POST['username'];
    $password=$_POST['password'];
    $namalengkap=$_POST['namalengkap'];
    $alamat=$_POST['alamat'];

    $sql=mysqli_query($conn, "insert into user values('','$username','$password','$namalengkap','$alamat')");
    header("location:login.php");

?>