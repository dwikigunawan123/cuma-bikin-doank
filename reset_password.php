<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses pengaturan ulang password
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Update password di database menggunakan prepared statement
    $updateQuery = $conn->prepare ("UPDATE tb_login SET password = ? WHERE user_id = ?");

    // Validasi password
    if ($newPassword === $confirmPassword) {
        echo '<script>alert("Password berhasil diubah!")</script>';
        echo '<script>window.location="login.php"</script>';
    } else {
        echo "Konfirmasi password tidak cocok.";
    }
}
?>

<style>
    
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Quicksand', sans-serif;
    background-color: #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}

.box-reset {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 300px;
    margin: 20px;
    padding: 20px;
    text-align: center;
}

h2 {
    color: #333;
    margin-bottom: 20px;
}

.input-control {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

.btn {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
    padding: 10px;
    border: none;
    border-radius: 4px;
}

.btn:hover {
    background-color: #45a049;
}

#bg-reset {
    background-color: #f0f0f0;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-reset">
    <div class="box-reset">
        <h2>Reset Password</h2>
        <form action="" method="POST">
            <input type="username" name="username" placeholder="username" class="input-control" required>
            <input type="password" name="new_password" placeholder="New Password" class="input-control" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" class="input-control" required>
            <input type="submit" name="submit" value="Reset Password" class="btn"><br>
        </form>
    </div>
</body>
</html>
