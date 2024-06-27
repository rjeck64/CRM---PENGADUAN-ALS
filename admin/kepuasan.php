<?php
// Query SQL untuk mengambil data dari tabel Kepuasan
$sql = "SELECT id_kepuasan, nama, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, tanggal_submit FROM Kepuasan";
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

    function convertRating($rating){
        switch ($rating) {
            case '1':
                $hasil =  "Sangat Tidak Puas";
                break;
            case '2':
                $hasil =  "Tidak Puas";
                break;
            case '3':
                $hasil =  "Netral";
                break;
            case '4':
                $hasil =  "Puas";
            break;
            case '5':
                $hasil =  "Sangat Puas";
                break;
            default:
                $hasil = "";
                break;
    
            }
        return $hasil;
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
                        <th>Nama</th>
                        <th>P1</th>
                        <th>P2</th>
                        <th>P3</th>
                        <th>P4</th>
                        <th>P5</th>
                        <th>P6</th>
                        <th>P7</th>
                        <th>P8</th>
                        <th>P9</th>
                        <th>P10</th>
                        <th>P11</th>
                        <th>P12</th>
                        <th>P13</th>
                        <th>P14</th>
                        <th>P15</th>
                        <th>Tanggal Submit</th>
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
                                    echo "<td>" . htmlspecialchars($row["nama"]) . "</td>";
                                    echo "<td>" . convertRating($row["p1"]) . "</td>";
                                    echo "<td>" . convertRating($row["p2"]) . "</td>";
                                    echo "<td>" . convertRating($row["p3"]) . "</td>";
                                    echo "<td>" . convertRating($row["p4"]) . "</td>";
                                    echo "<td>" . convertRating($row["p5"]) . "</td>";
                                    echo "<td>" . convertRating($row["p6"]) . "</td>";
                                    echo "<td>" . convertRating($row["p7"]) . "</td>";
                                    echo "<td>" . convertRating($row["p8"]) . "</td>";
                                    echo "<td>" . convertRating($row["p9"]) . "</td>";
                                    echo "<td>" . convertRating($row["p10"]) . "</td>";
                                    echo "<td>" . convertRating($row["p11"]) . "</td>";
                                    echo "<td>" . convertRating($row["p12"]) . "</td>";
                                    echo "<td>" . htmlspecialchars($row["p13"]) . "</td>";
                                    echo "<td>" . htmlspecialchars($row["p14"]) . "</td>";
                                    echo "<td>" . htmlspecialchars($row["p15"]) . "</td>";
                                    echo "<td>" . htmlspecialchars($row["tanggal_submit"]) . "</td>";
                                    echo '<td>
                                            <a href="page/hapus/hapusKepuasan.php?id_kepuasan=' . $row["id_kepuasan"] . '"><button type="button" class="btn btn-danger btn-rounded btn-icon">
                                            <i class="ti-trash"></i>
                                        </button></a>
                                            </td>';
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='18'>Tidak ada data</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>