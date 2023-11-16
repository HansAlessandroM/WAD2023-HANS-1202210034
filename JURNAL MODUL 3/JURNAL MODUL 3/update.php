<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
$DATABASE_HOST = 'localhost:3306';
$DATABASE_USER = 'root';
$DATABASE_NAME = 'db_wad_modul3';
$DATABASE_PASS = '';

$connected = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_NAME, $DATABASE_PASS);
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    $car_id = $_GET ['id'];
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    if(isset($_POST['ubah'])){
        $car_id = $id;
        $car_name = $_POST['nama_mobil'];
        $car_brand = $_POST['brand_mobil'];
        $car_color = $_POST['warna_mobil'];
        $car_type = $_POST['tipe_mobil'];
        $car_price = $_POST['harga_mobil'];
        mysqli_query($connected,"UPDATE showroom_mobil set nama_mobil='$car_name', brand_mobil='$car_brand', warna_mobil='$car_color', tipe_mobil='$car_type', harga_mobil='$car_price' where id='$car_id'");
    }
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        header("Location: create.php")
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil

        // Eksekusi perintah SQL

        // Buatkan kondisi jika eksekusi query berhasil
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya

    // Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database

?>