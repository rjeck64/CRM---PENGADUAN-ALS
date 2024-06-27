<?php
// Query SQL untuk mengambil data dari tabel Pengaduan

$id_saran = $_GET['id'];
$sql = "SELECT * FROM saran WHERE id_saran='$id_saran'";
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
                // Menampilkan data saran
                while($row = $result->fetch_assoc()) {
                    echo "<h2>Detail Saran</h2>";
                    echo "<p><strong>ID Saran:</strong> " . $row["id_saran"] . "</p>";
                    echo "<p><strong>Judul Saran:</strong> " . $row["judul_saran"] . "</p>";
                    echo "<p><strong>Isi Saran:</strong> " . $row["isi_saran"] . "</p>";
                    echo "<p><strong>Kategori Saran:</strong> " . $row["kategori_saran"] . "</p>";
                    echo "<p><strong>Tanggal Pengajuan:</strong> " . $row["tanggal_pengajuan"] . "</p>";
        
                    // Menampilkan lampiran
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
                echo "Tidak ada data dengan ID saran tersebut.";
            }
            ?>
            <a href="index.php?i=saran"><button class="btn btn-primary mt-3">Kembali</button></a>
        </div>
    </div>
</div>