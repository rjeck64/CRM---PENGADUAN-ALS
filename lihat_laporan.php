<?php

include 'admin/koneksi.php';

try {
    // Membuat koneksi PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query untuk menggabungkan data dari kedua tabel
    $sql = "
    SELECT id_pengaduan, judul_laporan as judul, tanggal_kejadian AS informasi, 'pengaduan' AS sumber
    FROM pengaduan
    UNION ALL
    SELECT id_saran, judul_saran as judul, tanggal_pengajuan AS informasi, 'saran' AS sumber
    FROM saran
    WHERE anonim_rahasia = 0
    ";

    // Eksekusi query
    $stmt = $pdo->query($sql);

    // Menyimpan hasil dalam array
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Menangani kesalahan koneksi atau query
    echo "Error: " . $e->getMessage();
    die();
}
$no = 1;
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
        <div class="container-xl">
            <nav >
                <p>ALS</p>
                <ul class="d-flex align-items-center">
                    <li><a href="https://tiketals.com/" class="text-light">TENTANG ALS</a></li>
                    <li><a href="lihat_laporan.php" class="text-light">LIHAT LAPORAN</a></li>
                </ul>
            </nav>
            <div class="form col-12 stretch-card">
                <div class="card p-5">
                  <div class="card-body">
                    <h4 class="card-title text-center">LAPORAN</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal Kejadian</th>
                                <th>Sumber</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $row): ?>
                            <tr>
                                <td><?= htmlspecialchars($no++) ?></td>
                                <td><?= htmlspecialchars($row['judul']) ?></td>
                                <td><?= htmlspecialchars($row['informasi']) ?></td>
                                <td><?= htmlspecialchars($row['sumber']) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
            </div>
</body>
</html>