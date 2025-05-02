<?php
include "koneksi.php"; // koneksi ke database
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pesan = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $passwordBaru = $_POST['password'];

    $passwordHash = password_hash($passwordBaru, PASSWORD_DEFAULT);

    $query = "UPDATE tb_user SET pass = '$passwordHash' WHERE email = '$email'";
    $hasil = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("Location: konten/logindanregister.php?reset=success");
        exit;
    } else {
        $pesan = "Gagal mengubah password. Periksa email yang dimasukkan.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reset Password - NanyaDuluBang</title>
  <link rel="stylesheet" href="/tubes/css/forgotpswrd.css" />
</head>
<body>
  <div class="form-container">
    <div class="title">Reset Password</div>

    <?php if (isset($_GET['error'])): ?>
      <p style="color: red;">Gagal reset password. Silakan coba lagi.</p>
    <?php endif; ?>

    <?php if ($pesan): ?>
      <p style="color: red;"><?php echo $pesan; ?></p>
    <?php endif; ?>

    <form class="form" method="POST" action="reset_password.php">
      <div class="form-group">
        <label for="email">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Masukkan email terdaftar"
          required
        />
      </div>
      <div class="form-group">
        <label for="password">Password Baru</label>
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Masukkan password baru"
          required
        />
      </div>
      <button class="form-submit-btn" type="submit">Reset Password</button>
    </form>

    <p class="signup-link">
      Sudah ingat akunmu?
      <a href="/tubes/konten/logindanregister.php" class="signup-link link">Login sekarang</a>    </p>
  </div>
</body>
</html>