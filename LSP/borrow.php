<?php

include ("koneksi.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Navbar -->
<?php 
require "navbar.php";
?>

<style>

table, td, th {
  border: 1px solid;
}

table {
  width: 100% !important;
  border-collapse: collapse;
}


</style>

<!-- Navbar End -->


<section>
    <div class="container">
      <div class="heading">
        <h3>Data Peminjaman</h3>
      </div>




    </div>
  </section>



<table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Status</th>
            <th scope="col">Opsi</th>
            <th scope="col">Gambar</th>


          </tr>
        </thead>
        <tbody>
          

        <?php


if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $delete = mysqli_query($koneksi, "DELETE FROM `buku` WHERE `id`='$id'");
}
      
      $i = 1;

      while ($row = mysqli_fetch_array($buku)): {
        echo " 
        <tr>
            <td> $i</td>
            <td>" . $row['nama_peminjam'] . "</td>
            <td>" . $row['judul_buku'] . "</td>
            <td>" . $row['status'] . "</td>

            <td> 
            <a href='borrow.php?id=" . $row['id'] . "'
                class='button button1 warn'>Hapus</a>
            </td>

            <td>" . $row['gambar'] . "</td>

            ";

            

            $i++;
      }
    endwhile;


      ?>
        </tbody>
      </table>

</body>
</html>