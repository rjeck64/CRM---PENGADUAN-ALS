<?php
// Query SQL untuk mengambil data dari tabel Saran
$sql = "SELECT id_saran, judul_saran, SUBSTRING(isi_saran, 1, 50) AS potongan_isi, kategori_saran, tanggal_pengajuan, lampiran, anonim_rahasia FROM Saran";
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
        <h4 class="card-title">Data Saran</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Saran</th>
                            <th>Isi Saran</th>
                            <th>Kategori Saran</th>
                            <th>Anonim/Rahasia</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            // Menampilkan data untuk setiap baris
                            $no = 1;
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $no++ . "</td>";
                                echo "<td>" . htmlspecialchars($row["judul_saran"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["potongan_isi"]) . "...</td>";
                                echo "<td>" . htmlspecialchars($row["kategori_saran"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["tanggal_pengajuan"]) . "</td>";
                                echo "<td>" . ($row["anonim_rahasia"] ? 'Ya' : 'Tidak') . "</td>";
                                echo '<td>
                                        <a href="index.php?i=saran_detail&id='. $row["id_saran"] .'"><button type="button" class="btn btn-inverse-info btn-icon">
                                            <i class="ti-notepad"></i>
                                        </button></a>
                                        <a href="page/hapus/hapusSaran.php?id_saran=' . $row["id_saran"] . '"><button type="button" class="btn btn-danger btn-rounded btn-icon">
                                            <i class="ti-trash"></i>
                                        </button></a>
                                        </td>';
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>