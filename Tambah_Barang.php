<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('images/12.jpg');
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h3 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
        }

        table tr {
            margin-bottom: 15px;
        }

        table td {
            padding: 8px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> ID Buku </td>
        <td> <input type="text" name="id_buku"> </td>
    </tr>
    <tr>
        <td> Nama Buku </td>
        <td> <input type="text" name="nama_buku"> </td>
    </tr>
    <tr>
        <td> Harga </td>
        <td> <input type="text" name="harga"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    $id = $_POST['id_buku'];
    $nama = $_POST['nama_buku'];
    $harga = $_POST['harga'];
    
    if(empty($id) || empty($nama) || empty($harga)){
        echo '<script>alert("Semua kolom harus diisi!")</script>';
    } else {
        $conn->query("INSERT INTO tambah_barang (id_buku, nama_buku, harga) VALUES ('$id', '$nama', '$harga')");
        echo '<script>alert("Data Baru Telah ditambahkan!!")</script>';
    }
}
?>