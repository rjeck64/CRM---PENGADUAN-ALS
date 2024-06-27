<?php
session_start();

// Hapus semua variabel session
session_unset();

// Hancurkan sesi
session_destroy();

// Redirect ke index.php
header("Location: index.php");
exit();
?>