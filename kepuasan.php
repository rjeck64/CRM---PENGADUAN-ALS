<?php
    include 'admin/koneksi.php';
    session_start();


    $no_params = empty($_GET);
    
    if (isset($_GET['p1'])) {
        $_SESSION['p1'] = $_GET['p1'];
    }
    if (isset($_GET['p2'])) {
        $_SESSION['p2'] = $_GET['p2'];
    }
    if (isset($_GET['p3'])) {
        $_SESSION['p3'] = $_GET['p3'];
    }
    if (isset($_GET['p4'])) {
        $_SESSION['p4'] = $_GET['p4'];
    }
    if (isset($_GET['p5'])) {
        $_SESSION['p5'] = $_GET['p5'];
    }
    if (isset($_GET['p6'])) {
        $_SESSION['p6'] = $_GET['p6'];
    }
    if (isset($_GET['p7'])) {
        $_SESSION['p7'] = $_GET['p7'];
    }
    if (isset($_GET['p8'])) {
        $_SESSION['p8'] = $_GET['p8'];
    }
    if (isset($_GET['p9'])) {
        $_SESSION['p9'] = $_GET['p9'];
    }
    if (isset($_GET['p10'])) {
        $_SESSION['p10'] = $_GET['p10'];
    }
    if (isset($_GET['p11'])) {
        $_SESSION['p11'] = $_GET['p11'];
    }
    if (isset($_GET['p12'])) {
        $_SESSION['p12'] = $_GET['p12'];
    }
    if (isset($_GET['p13'])) {
        $_SESSION['p13'] = $_GET['p13'];
    }
    if (isset($_GET['p14'])) {
        $_SESSION['p14'] = $_GET['p14'];
    }
    if (isset($_GET['p15'])) {
        $_SESSION['p15'] = $_GET['p15'];
    }

    // if () {
    //     // Menyimpan input form ke session
    //     $_SESSION['name'] = "Reyhan";
    //     for ($i = 1; $i <= 15; $i++) {
    //         $_SESSION["p$i"] = $_POST["p$i"];
    //     }
    
    //     // Menyiapkan data untuk dimasukkan ke database
    //     $name = $_SESSION['name'];
    //     $values = [];
    //     for ($i = 1; $i <= 15; $i++) {
    //         $values[] = $_SESSION["p$i"];
    //     }
    
    //     // Memasukkan data ke database
    //     $stmt = $conn->prepare("INSERT INTO kepuasan (name, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    //     $stmt->bind_param("ssssssssssssssss", $name, ...$values);
        
    //     if ($stmt->execute() === TRUE) {
    //         echo "New record created successfully";
    //     } else {
    //         echo "Error: " . $stmt->error;
    //     }
    
    //     $stmt->close();
    // }
    // Proses ketika tombol submit ditekan
    
if (isset($_GET['submit'])) {
    // Memeriksa apakah semua data session p1 sampai p15 ada
    $_SESSION['name'] = $_GET['p9'];
    $_SESSION['umur'] = $_GET['p10'];
    $_SESSION['jk'] = $_GET['p11'];
    $allSet = isset($_SESSION['name']);
    for ($i = 1; $i <= 11; $i++) {
        if (!isset($_SESSION["p$i"])) {
            $allSet = false;
            break;
        }
    }
    // Jika semua data ada, masukkan ke dalam database
    if ($allSet) {
        $name = $_SESSION['name'];
        $values = [];
        for ($i = 1; $i <= 11; $i++) {
            if ($i <= 8 ) {
                // Konversi nilai p1 hingga p13 ke integer
                $values[] = (int)$_SESSION["p$i"];
            } else {
                $values[] = $_SESSION["p$i"];
            }
        }

        // Menyiapkan dan menjalankan statement SQL
        $stmt = $conn->prepare("INSERT INTO kuesioner (rasa_kopi, variasi_menu, keramahan_staf, kecepatan_layanan, harga, kenyamanan, kebersihan, kepuasan_keseluruhan, nama, usia, jenis_kelamin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iiiiiiiisis", ...$values);

        if ($stmt->execute() === TRUE) {
            echo "";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();

    } else {
        echo "Session data is missing.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Skydas</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="admin/vendors/feather/feather.css">
        <link rel="stylesheet" href="admin/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
        
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="admin/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="admin/js/select.dataTables.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="admin/css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="admin/images/favicon.png" />
        <link rel="stylesheet" href="css/style.css">
      </head>
<body>
    <div class="main">
    </div>
        <div class="container-xl mb-5">
            <nav >
                <p>KR</p>
                <ul class="d-flex align-items-center">
                    
                </ul>
            </nav>
            <div class="content">
                <h1>Kuesioner Kepuasan Pelanggan Toko Kopi Rasa</h1>
                <h2>Sampaikan Kesan Anda</h2>
            </div>
            <div class="form col-12 stretch-card">
                <div class="card p-5">
                  <div class="card-body">
                    <?php  if (!isset($_GET['p11']) && !isset($_GET['p8']) ) {; ?>
                        <h4 class="card-title">Jawab Bagaimana Kesan anda bagaimana tentang :</h4>
                    <?php } ?>
                    <form class="forms-sample radio-toolbar">
                        <?php  if ($no_params) {; ?>
                            <div class="mb-5">
                                <p>1. Rasa Kopi?</p>
                                <input type="radio" id="radio1" name="p1" value="1">
                                <label id="label1" for="radio1">Sangat Buruk</label>

                                <input type="radio" id="radio2" name="p1" value="2">
                                <label id="label2" for="radio2">Buruk</label>

                                <input type="radio" id="radio3" name="p1" value="3">
                                <label id="label3" for="radio3">Cukup</label>

                                <input type="radio" id="radio4" name="p1" value="4">
                                <label id="label4" for="radio4">Baik</label>

                                <input type="radio" id="radio5" name="p1" value="5">
                                <label id="label5" for="radio5">Sangat Baik</label>
                            </div>
                        <?php } ?>
                        <?php  if (isset($_GET['p1'])) {; ?>
                            <div class="mb-5">
                                <p>2. Variasi Menu?</p>
                                <input type="radio" id="radio1" name="p2" value="1">
                                <label id="label1" for="radio1">Sangat Buruk</label>

                                <input type="radio" id="radio2" name="p2" value="2">
                                <label id="label2" for="radio2">Buruk</label>

                                <input type="radio" id="radio3" name="p2" value="3">
                                <label id="label3" for="radio3">Cukup</label>

                                <input type="radio" id="radio4" name="p2" value="4">
                                <label id="label4" for="radio4">Baik</label>

                                <input type="radio" id="radio5" name="p2" value="5">
                                <label id="label5" for="radio5">Sangat Baik</label>
                            </div>
                        <?php } ?>
                        <?php  if (isset($_GET['p2'])) {; ?>
                            <div class="mb-5">
                                <p>3. Keramahan Staf?</p>
                                <input type="radio" id="radio1" name="p3" value="1">
                                <label id="label1" for="radio1">Sangat Buruk</label>

                                <input type="radio" id="radio2" name="p3" value="2">
                                <label id="label2" for="radio2">Buruk</label>

                                <input type="radio" id="radio3" name="p3" value="3">
                                <label id="label3" for="radio3">Cukup</label>

                                <input type="radio" id="radio4" name="p3" value="4">
                                <label id="label4" for="radio4">Baik</label>

                                <input type="radio" id="radio5" name="p3" value="5">
                                <label id="label5" for="radio5">Sangat Baik</label>
                            </div>
                        <?php } ?>
                        <?php  if (isset($_GET['p3'])) {; ?>
                            <div class="mb-5">
                                <p>4. Kecepatan Layanan?</p>
                                <input type="radio" id="radio1" name="p4" value="1">
                                <label id="label1" for="radio1">Sangat Buruk</label>

                                <input type="radio" id="radio2" name="p4" value="2">
                                <label id="label2" for="radio2">Buruk</label>

                                <input type="radio" id="radio3" name="p4" value="3">
                                <label id="label3" for="radio3">Cukup</label>

                                <input type="radio" id="radio4" name="p4" value="4">
                                <label id="label4" for="radio4">Baik</label>

                                <input type="radio" id="radio5" name="p4" value="5">
                                <label id="label5" for="radio5">Sangat Baik</label>
                            </div>
                        <?php } ?>
                        <?php  if (isset($_GET['p4'])) {; ?>
                            <div class="mb-5">
                                <p>5. Harga?</p>
                                <input type="radio" id="radio1" name="p5" value="1">
                                <label id="label1" for="radio1">Sangat Buruk</label>

                                <input type="radio" id="radio2" name="p5" value="2">
                                <label id="label2" for="radio2">Buruk</label>

                                <input type="radio" id="radio3" name="p5" value="3">
                                <label id="label3" for="radio3">Cukup</label>

                                <input type="radio" id="radio4" name="p5" value="4">
                                <label id="label4" for="radio4">Baik</label>

                                <input type="radio" id="radio5" name="p5" value="5">
                                <label id="label5" for="radio5">Sangat Baik</label>
                            </div>
                        <?php } ?>
                        <?php  if (isset($_GET['p5'])) {; ?>
                            <div class="mb-5">
                                <p>6. Kenyamanan?</p>
                                <input type="radio" id="radio1" name="p6" value="1">
                                <label id="label1" for="radio1">Sangat Buruk</label>

                                <input type="radio" id="radio2" name="p6" value="2">
                                <label id="label2" for="radio2">Buruk</label>

                                <input type="radio" id="radio3" name="p6" value="3">
                                <label id="label3" for="radio3">Cukup</label>

                                <input type="radio" id="radio4" name="p6" value="4">
                                <label id="label4" for="radio4">Baik</label>

                                <input type="radio" id="radio5" name="p6" value="5">
                                <label id="label5" for="radio5">Sangat Baik</label>
                            </div>
                        <?php } ?>
                        <?php  if (isset($_GET['p6'])) {; ?>
                            <div class="mb-5">
                                <p>7. Kebersihan?</p>
                                <input type="radio" id="radio1" name="p7" value="1">
                                <label id="label1" for="radio1">Sangat Buruk</label>

                                <input type="radio" id="radio2" name="p7" value="2">
                                <label id="label2" for="radio2">Buruk</label>

                                <input type="radio" id="radio3" name="p7" value="3">
                                <label id="label3" for="radio3">Cukup</label>

                                <input type="radio" id="radio4" name="p7" value="4">
                                <label id="label4" for="radio4">Baik</label>

                                <input type="radio" id="radio5" name="p7" value="5">
                                <label id="label5" for="radio5">Sangat Baik</label>
                            </div>
                        <?php } ?>
                        <?php  if (isset($_GET['p7'])) {; ?>
                            <div class="mb-5">
                                <p>8. Kepuasan Keseluruhan?</p>
                                <input type="radio" id="radio1" name="p8" value="1">
                                <label id="label1" for="radio1">Sangat Buruk</label>

                                <input type="radio" id="radio2" name="p8" value="2">
                                <label id="label2" for="radio2">Buruk</label>

                                <input type="radio" id="radio3" name="p8" value="3">
                                <label id="label3" for="radio3">Cukup</label>

                                <input type="radio" id="radio4" name="p8" value="4">
                                <label id="label4" for="radio4">Baik</label>

                                <input type="radio" id="radio5" name="p8" value="5">
                                <label id="label5" for="radio5">Sangat Baik</label>
                            </div>
                        <?php } ?>
                        <?php  if (isset($_GET['p8'])) {; ?>
                            <div class="mb-5">
                                <p>Masukan Nama Anda</p>
                                <div class="form-group mt-4">
                                    <input type="text" class="form-control form-control-lg" id="exampleFormControlTextarea1" name="p9" rows="5" placeholder="Isi Nama Anda *"></input>
                                </div>
                            </div>
                            <div class="mb-5">
                                <p>Berapa Umur Anda</p>
                                <div class="form-group mt-4">
                                    <input type="number" class="form-control form-control-lg" id="exampleFormControlTextarea1" name="p10" rows="5" placeholder="Isi Umur Anda *"></input>
                                </div>
                            </div>
                            <div class="mb-5">
                                <p>Jenis Kelamin</p>
                                <div class="form-group mt-4">
                                    <select class="form-control form-control-lg" name="p11" id="">
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                            </div>
                        <?php } ?>
                        <?php  if (isset($_GET['p11'])) {; ?>
                            <div class="mb-5 text-center">
                                <h4 class="card-title">Terima Kasih atas waktunya.</h4>
                                <a href="clear_session.php" class="btn btn-primary mr-2 mt-4">HOME</a>
                            </div>
                        <?php } ?>
                        

                        <div class="d-flex flex-row-reverse mt-5">   
                        <?php  if (isset($_GET['p11'])) {; ?>
                            
                        <?php  }else if (isset($_GET['p8'])) {; ?>
                            <button type="submit" name="submit" class="btn btn-primary mr-2">Kirim</button>
                        <?php }else{ ?>
                            <button type="submit" class="btn btn-primary mr-2">Selanjutnya</button>
                        <?php } ?>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
   
</body>
</html>