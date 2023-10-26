<?php

// **********************  1  ************************** 
// ========== tangkap nilai tinggi_badan dan berat_badan yang ada pada form html
// silakan taruh code kalian di bawah
if(isset($_GET['process'])){
    $tbp = $_GET['tb'];
    $bb = $_GET['bb'];
// **********************  1  ************************** 


// **********************  2  ************************** 
// ========== buatkan sebuah perkondisian di mana 
// tinggi_badan atau $berat_badan tidak boleh kosong nilainya, kalau kosong buatkanlah pesan error
// silakan taruh code kalian di bawah
$tb = $tbp/100;
        $hitung = $bb / ($tb * $tb);
        if($hitung <= 18.4){
        echo'
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Tinggi_Badan: '.$tbp.' Cm<br>
            Berat_Badan : '.$bb.' Kg<br>
            BMI         : '.number_format($hitung,1).'<br>
            Keterangan : Underweight
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
         </div>
         ';
        }elseif($hitung <= 25){
          echo'
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
              Tinggi Badan: '.$tbp.' Cm<br>
              Berat Badan : '.$bb.' Kg<br>
              BMI         : '.number_format($hitung,1).'<br>
              Keterangan : Normal
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
           </div>
           ';
        }elseif($hitung <= 40){
            echo'
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Tinggi_Badan: '.$tbp.' Cm<br>
                Berat_Badan : '.$bb.' Kg<br>
                BMI         : '.number_format($hitung,1).'<br>
                Keterangan : Overweight
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ';
        }elseif($hitung >= 40 ){
            echo'
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Tinggi Badan: '.$tbp.' Cm<br>
                Berat Badan : '.$bb.' Kg<br>
                BMI         : '.number_format($hitung,1).'<br>
                Keterangan : Obese
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ';
        }
    }?>
}

// **********************  2  ************************** 


// **********************  3  ************************** 
// ========== buatkanlah perkondisian di mana Jika kesalahan Error-nya "empty", 
// masukkan perhitungan BMI sesuai dengan rumus yang tertera pada jurnal
// silakan taruh code kalian di bawah
?<php
if ($tb = 0 || $tb = '' || $bb = 0 || $bb = ''){
    echo 'ERROR! Tinggi badan dan Berat Badan tidak boleh kosong';

// **********************  3  ************************** 



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 p-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kalkulator BMI</h4>
                    <form action="" method="POST">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="175">
                            <label for="tinggi_badan">Tinggi Badan (CM)</label>
                        </div>
                        <div class="form-floating">
                            <input type="number" class="form-control" name="berat_badan" id="berat_badan" placeholder="53">
                            <label for="berat_badan">Berat Badan (KG)</label>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3 mt-3 w-100">Hitung BMI</button>
                    </form>

                    <!--  **********************  4  **************************     -->
                    <!-- Hasilnya perhitungan BMI taruh di sini yaaa!! 😊 -->
                    <!-- silakan taruh code kalian di bawah -->
                    if($hitung <= 18.4){
        echo'
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Tinggi_Badan: '.$tbp.' Cm<br>
            Berat_Badan : '.$bb.' Kg<br>
            BMI         : '.number_format($hitung,1).'<br>
            Keterangan : Underweight
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
         </div>
         ';
        }elseif($hitung <= 25){
          echo'
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
              Tinggi Badan: '.$tbp.' Cm<br>
              Berat Badan : '.$bb.' Kg<br>
              BMI         : '.number_format($hitung,1).'<br>
              Keterangan : Normal
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
           </div>
           ';
        }elseif($hitung <= 40){
            echo'
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Tinggi_Badan: '.$tbp.' Cm<br>
                Berat_Badan : '.$bb.' Kg<br>
                BMI         : '.number_format($hitung,1).'<br>
                Keterangan : Overweight
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ';
        }elseif($hitung >= 40 ){
            echo'
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Tinggi Badan: '.$tbp.' Cm<br>
                Berat Badan : '.$bb.' Kg<br>
                BMI         : '.number_format($hitung,1).'<br>
                Keterangan : Obese
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ';
        }
    }?>
}
                    
                    <!--  **********************  4  **************************     -->



                    <!--  **********************  5  **************************     -->
                    <!-- Hasil pesan error nya taruh di sini yaaa!! 😊  -->
                    <!-- silakan taruh code kalian di bawah -->
                    

                    <!--  **********************  5  **************************     -->


                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>