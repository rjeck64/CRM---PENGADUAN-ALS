<?php
// Query SQL untuk mengambil data dari tabel Pengaduan
$sql = "SELECT id_pengaduan, judul_laporan, SUBSTRING(isi_laporan, 1, 50) AS potongan_isi, tanggal_kejadian, plat_kendaraan, asal, tujuan, jam_keberangkatan, tanggal_keberangkatan, lampiran, anonim_rahasia FROM Pengaduan";
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
        <div class="card-body">
            <h4 class="card-title">Data Pengaduan</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <th>No</th>
                        <th>Judul Laporan</th>
                        <th>Isi Laporan</th>
                        <th>Tanggal Kejadian</th>
                        <th>Anonim/Rahasia</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            // Menampilkan data untuk setiap baris
                            $no = 1;
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $no++ . "</td>";
                                echo "<td>" . $row["judul_laporan"] . "</td>";
                                echo "<td>" . $row["potongan_isi"] . "...</td>";
                                echo "<td>" . $row["tanggal_kejadian"] . "</td>";
                                echo "<td>" . ($row["anonim_rahasia"] ? 'Ya' : 'Tidak') . "</td>";
                                echo '<td>
                                        <a href="index.php?i=pengaduan_detail&id='. $row["id_pengaduan"] .'"><button type="button" class="btn btn-inverse-info btn-icon">
                                            <i class="ti-notepad"></i>
                                        </button></a>
                                        <a href="page/hapus/hapusPengaduan.php?id_pengaduan=' . $row["id_pengaduan"] . '"><button type="button" class="btn btn-danger btn-rounded btn-icon">
                                            <i class="ti-trash"></i>
                                        </button></a>
                                        </td>';
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='11'>Tidak ada data</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
