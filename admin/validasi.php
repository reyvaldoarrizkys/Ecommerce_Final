<?php

require_once 'header.php';
require_once 'sidebar.php';

?>

<?php
// Validasi input
if (empty($_POST['email']) || empty($_POST['password'])) {
    header("Location: login.php?error=Kolom email dan password harus diisi");
    exit();
} else {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

// Validasi email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: login.php?error=Email tidak valid");
    exit();
}

// Validasi password
if (strlen($password) < 6) {
    header("Location: login.php?error=Password minimal 6 karakter");
    exit();
}

// Cek email dan password di database
if ($email == "admin@gmail.com" && $password == "admin") {
    // Login berhasil
    session_start();
    $_SESSION['email'] = $email;
    header("Location: index.php");
    exit();
} else {
    // Login gagal
    header("Location: login.php?error=Email atau password salah");
    exit();
}
?>

<?php

require_once 'footer.php';

?>