<?php
// Informasi koneksi database
include 'admin/koneksi.php';

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $judul_saran = $conn->real_escape_string($_POST['judul_saran']);
    $isi_saran = $conn->real_escape_string($_POST['isi_saran']);
    $kategori_saran = $conn->real_escape_string($_POST['kategori_saran']);
    $anonim_rahasia = $_POST['anonim_rahasia'];

    // Memproses lampiran
    if (!empty($_FILES['lampiran']['name'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["lampiran"]["name"]);

        // Cek error pengunggahan
        if ($_FILES['lampiran']['error'] !== UPLOAD_ERR_OK) {
            die("Terjadi kesalahan saat mengunggah lampiran. Error code: " . $_FILES['lampiran']['error']);
        }

        // Cek jenis file
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "pdf") {
            die("Hanya file JPG, JPEG, PNG, dan PDF yang diizinkan.");
        }

        // Cek ukuran file
        if ($_FILES["lampiran"]["size"] > 5000000) { // 5MB
            die("Ukuran file terlalu besar. Maksimum 5MB.");
        }

        // Coba unggah file
        if (move_uploaded_file($_FILES["lampiran"]["tmp_name"], $target_file)) {
            $lampiran = $target_file;
        } else {
            die("Terjadi kesalahan saat mengunggah lampiran. Error: " . $_FILES["lampiran"]["error"]);
        }
    } else {
        $lampiran = null;
    }

    // Query SQL untuk menyimpan data ke tabel Saran
    $sql = "INSERT INTO saran (judul_saran, isi_saran, kategori_saran, lampiran, anonim_rahasia, tanggal_pengajuan)
            VALUES ('$judul_saran', '$isi_saran', '$kategori_saran', '$lampiran', '$anonim_rahasia', NOW())";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>
