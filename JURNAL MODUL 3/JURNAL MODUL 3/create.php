<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
$connected = mysqli_connect('localhost:3306', 'root', '','db_wad_modul3');


// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
include('connect.php');
// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil
    $car_name = $_POST['nama_mobil'];

    // b. Ambil data brand mobil
    $car_brand = $_POST['brand_mobil'];

    // c. Ambil data warna mobil
    $car_color = $_POST['brand_mobil'];

    // d. Ambil data tipe mobil
    $car_type = $_POST['tipe_mobil'];

    // e. Ambil data harga mobil
    $car_price= $_POST['harga_mobil'];

    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
    $query_db = mysqli_query ($connected, "INSERT INTO showroom_mobil(car_name, car_brand, car_color, car_type, car_price) VALUES ('$car_name, $car_brand, $car_color, $car_type, $car_price')");


    // (5) Buatkan kondisi jika eksekusi query berhasil
    if ($query_db){
        echo"<script>alert('Data ditambahkan!')</script>";
        echo "<meta http-equiv='refresh' content='1 url=list_mobil.php'>";
    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
    }else {
        echo "<script>alert('Gagal untuk menambahkan</script>')";
        echo "<meta http-equiv='refresh' content='1 url=list_mobil.php'>";
    }

// (7) Tutup koneksi ke database setelah selesai menggunakan database
$connected->close();
?>