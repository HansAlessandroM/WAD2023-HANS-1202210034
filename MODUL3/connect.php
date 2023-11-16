<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$DATABASE_HOST = 'localhost:3306';
$DATABASE_USER = 'root';
$DATABASE_NAME = 'db_wad_modul3';
$DATABASE_PASS = '';

// 
$connected = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_NAME, $DATABASE_PASS);

// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if ($connected-> connect_error){
    die("connection failed". $connected->connect_error);
}
$connected->close();
// 
?>