<?php
include  ("koneksi.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>

  <!-- Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Icon END -->

  <!-- Boostrap -->
  <link rel="stylesheet" href="./bootstrap-5.3.2-dist/css/bootstrap.min.css">
  <!-- Boostrap END-->

  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- Navbar -->
<?php
require "navbar.php";

?>
  <!-- Rest of your HTML code -->


  <section>
    <div class="container">
      <div class="heading">
        <h3>Hai Admin Selamat Datang</h3>
      </div>

      <div class="info">
        <div class="box">
          <i class="fa-solid fa-book"></i>
          <div class="text">
            <a href="#">Data</a>
          </div>
        </div>

        <div class="box">
          <i class="fa-solid fa-circle-plus"></i>
          <div class="text">
            <a href="#">Update</a>
          </div>
        </div>

        <div class="box">
        <i class="fa-solid fa-clock-rotate-left"></i>
          <div class="text">
            <a href="borrow.php">Peminjaman</a>
          </div>
        </div>

        <div class="box">
          <i class="fa-solid fa-user"></i>
          <div class="text">
            <a href="siswa.php">Siswa</a>
          </div>
        </div>
      </div>
      </div>

      


    </div>
  </section>





      
      


</body>

</html>



</body>

</html>