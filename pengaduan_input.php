<?php
// Informasi koneksi database
include 'admin/koneksi.php';


// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $judul_laporan = $conn->real_escape_string($_POST['judul_laporan']);
    $isi_laporan = $conn->real_escape_string($_POST['isi_laporan']);
    $tanggal_kejadian = $_POST['tanggal_kejadian'];
    $plat_kendaraan = $conn->real_escape_string($_POST['plat_kendaraan']);
    $asal = $conn->real_escape_string($_POST['asal']);
    $tujuan = $conn->real_escape_string($_POST['tujuan']);
    $jam_keberangkatan = $_POST['jam_keberangkatan'];
    $tanggal_keberangkatan = $_POST['tanggal_keberangkatan'];
    $anonim_rahasia = $_POST['anonim_rahasia'];

    // Memproses lampiran
    $lampiran = NULL;
    if (!empty($_FILES['lampiran']['name'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["lampiran"]["name"]);
        if (move_uploaded_file($_FILES["lampiran"]["tmp_name"], $target_file)) {
            $lampiran = $target_file;
        } else {
            echo "Terjadi kesalahan saat mengunggah lampiran.";
        }
    }

    // Query SQL untuk menyimpan data ke tabel Pengaduan
    $sql = "INSERT INTO pengaduan (judul_laporan, isi_laporan, tanggal_kejadian, plat_kendaraan, asal, tujuan, jam_keberangkatan, tanggal_keberangkatan, lampiran, anonim_rahasia)
            VALUES ('$judul_laporan', '$isi_laporan', '$tanggal_kejadian', '$plat_kendaraan', '$asal', '$tujuan', '$jam_keberangkatan', '$tanggal_keberangkatan', '$lampiran', '$anonim_rahasia')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Mengambil data dari form
//     $judul_laporan = $conn->real_escape_string($_POST['judul_laporan']);
//     $isi_laporan = $conn->real_escape_string($_POST['isi_laporan']);
//     $tanggal_kejadian = $_POST['tanggal_kejadian'];
//     $plat_kendaraan = $conn->real_escape_string($_POST['plat_kendaraan']);
//     $asal = $conn->real_escape_string($_POST['asal']);
//     $tujuan = $conn->real_escape_string($_POST['tujuan']);
//     $jam_keberangkatan = $_POST['jam_keberangkatan'];
//     $tanggal_keberangkatan = $_POST['tanggal_keberangkatan'];
//     $anonim_rahasia = $_POST['anonim_rahasia'];

//     if ($_FILES['lampiran']['error'] !== UPLOAD_ERR_OK) {
//         die("Terjadi kesalahan saat mengunggah lampiran. Error code: " . $_FILES['lampiran']['error']);
//     }

//     // Memproses lampiran
//     if (!empty($_FILES['lampiran']['name'])) {
//         $target_dir = "uploads/";
//         $target_file = $target_dir . basename($_FILES["lampiran"]["name"]);

//         // Cek jenis file
//         $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//         if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "pdf") {
//             die("Hanya file JPG, JPEG, PNG, dan PDF yang diizinkan.");
//         }

//         // Cek ukuran file
//         if ($_FILES["lampiran"]["size"] > 5000000) { // 5MB
//             die("Ukuran file terlalu besar. Maksimum 5MB.");
//         }

//         // Coba unggah file
//         if (move_uploaded_file($_FILES["lampiran"]["tmp_name"], $target_file)) {
//             $lampiran = $target_file;
//         } else {
//             die("Terjadi kesalahan saat mengunggah lampiran. Error: " . $_FILES["lampiran"]["error"]);
//         }
//     } else {
//         die("Lampiran tidak terunggah. Pastikan Anda memilih file untuk diunggah.");
//     }

//     // Query SQL untuk menyimpan data ke tabel Pengaduan
//     $sql = "INSERT INTO Pengaduan (judul_laporan, isi_laporan, tanggal_kejadian, plat_kendaraan, asal, tujuan, jam_keberangkatan, tanggal_keberangkatan, lampiran, anonim_rahasia)
//             VALUES ('$judul_laporan', '$isi_laporan', '$tanggal_kejadian', '$plat_kendaraan', '$asal', '$tujuan', '$jam_keberangkatan', '$tanggal_keberangkatan', '$lampiran', '$anonim_rahasia')";

//     if ($conn->query($sql) === TRUE) {
//         echo "Data berhasil disimpan.";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

// Menutup koneksi
$conn->close();
?>
