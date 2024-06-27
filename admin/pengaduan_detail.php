<?php
// Query SQL untuk mengambil data dari tabel Pengaduan

$id_pengaduan = $_GET['id'];
$sql = "SELECT * FROM Pengaduan WHERE id_pengaduan='$id_pengaduan'";
$result = $conn->query($sql);
?>

<?php

    if (isset($_GET["notif"])) {
        if ($_GET["notif"] == "delete") {
            echo '<div class="alert alert-danger" role="alert">
                    Data Berhasil dihapus!
                </div>';
        }
        if ($_GET["notif"] == "edit") {
            echo '<div class="alert alert-success" role="alert">
                    Data Berhasil Dirubah.
                </div>';
        }
    }

?>


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body m-5">
            <?php
            if ($result->num_rows > 0) {
                // Menampilkan data pengaduan
                while($row = $result->fetch_assoc()) {
                    echo "<h2 class='mb-4'>Detail Pengaduan</h2>";
                    echo "<p><strong>ID Pengaduan:</strong> " . $row["id_pengaduan"] . "</p>";
                    echo "<p><strong>Judul Laporan:</strong> " . $row["judul_laporan"] . "</p>";
                    echo "<p><strong>Isi Laporan:</strong> " . $row["isi_laporan"] . "</p>";
                    echo "<p><strong>Tanggal Kejadian:</strong> " . $row["tanggal_kejadian"] . "</p>";
                    echo "<p><strong>Plat Kendaraan:</strong> " . $row["plat_kendaraan"] . "</p>";
                    echo "<p><strong>Asal:</strong> " . $row["asal"] . "</p>";
                    echo "<p><strong>Tujuan:</strong> " . $row["tujuan"] . "</p>";
                    echo "<p><strong>Jam Keberangkatan:</strong> " . $row["jam_keberangkatan"] . "</p>";
                    echo "<p><strong>Tanggal Keberangkatan:</strong> " . $row["tanggal_keberangkatan"] . "</p>";
                    if ($row["lampiran"]) {
                        $file_extension = pathinfo($row["lampiran"], PATHINFO_EXTENSION);
                        if (in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                            echo "<p><strong>Lampiran:</strong><br><img src='uploads/" . $row["lampiran"] . "' alt='Lampiran' style='max-width: 100%; height: auto;'></p>";
                        } elseif ($file_extension == 'pdf') {
                            echo "<p><strong>Lampiran:</strong><br><a href='uploads/" . $row["lampiran"] . "' target='_blank'>Unduh PDF</a></p>";
                        } else {
                            echo "<p><strong>Lampiran:</strong><br><a href='uploads/" . $row["lampiran"] . "' target='_blank'>Unduh File</a></p>";
                        }
                    } else {
                        echo "<p><strong>Lampiran:</strong> Tidak ada lampiran</p>";
                    }
                    echo "<p><strong>Anonim/Rahasia:</strong> " . ($row["anonim_rahasia"] ? 'Ya' : 'Tidak') . "</p>";
                }
            } else {
                echo "Tidak ada data dengan ID pengaduan tersebut.";
            }
            ?>
            <a href="index.php?i=pengaduan"><button class="btn btn-primary mt-3">Kembali</button></a>
        </div>
    </div>
</div>