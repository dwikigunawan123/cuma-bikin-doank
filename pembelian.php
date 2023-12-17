<!DOCTYPE html>

<html>
<head>
    <title>Pembelian</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Selamat Datang Di Toko Kami</h2>
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                <th>id_Buku</th>
                <th>Judul_Buku</th>
                <th>Halaman</th>
                <th>Kategori</th>
                  </p></th>
                </tr>
              </thead>
              <tbody>

              <?php
              $conn = mysqli_connect("localhost", "root", "", "book_store");
              $result = mysqli_query($conn, "select * from toko_buku");
                ?>

              <?php
                    include "koneksi.php";
                    $data = $conn->query("select * from toko_buku");

                ?>

                <tbody>
                    <?php
                    //looping data
                    $no=1;
                    while ($row=$data->fetch_assoc()) {

                    ?>
                        <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['judul'] ?></td>
                        <td><?php echo $row['halaman'] ?></td>
                        <td><?php echo $row['kategori'] ?></td>
                        <td>
                        <a href="beli.php?id_beli=<?php echo $row['id_buku'] ?>">Beli</a>
                            </td>
                        </tr>
                    <?php }
                        
                    ?>

              </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>