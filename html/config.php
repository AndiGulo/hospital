<?php 
 $server = "localhost";
 $user = "root";
 $pass = "";
 $database = "dbrumahsakit";
 

 $conn = mysqli_connect($server,$user,$pass,$database); 
 if (!$conn) {
    die(" <script>alert ('periksa koneksi anda.')</script>");
}
 
 ?>