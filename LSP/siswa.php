<?php

include ("koneksi.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
            <th scope="col">Id</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Role</th>
            <th scope="col">Option</th>


          </tr>
        </thead>
        <tbody>
          

        <?php


if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $delete = mysqli_query($koneksi, "DELETE FROM `user` WHERE `login_id`='$id'");
}
      
      $i = 1;

      while ($row = mysqli_fetch_array($select)): {
        echo " 
        <tr>
            <td> $i </td>
            <td>" . $row['username'] . "</td>
            <td>" . $row['password'] . "</td>
            <td>" . $row['role'] . "</td>

            <td> 
            <a href='siswa.php?id=" . $row['login_id'] . "'
                class='button button1 warn'>Hapus</a>
            </td>
            ";

            $i++;
      }
    endwhile;


      ?>
        </tbody>
      </table>

      <button class='button button2 blue'>
        <a href="inside/input.php">Tambah Pengguna</a>
    </button>

</body>
</html>