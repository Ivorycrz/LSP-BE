<?php

$koneksi = mysqli_connect("localhost", "root", "", "multiuser");

if (!$koneksi) {
    die("Koneksi Gagal");
}

$select = mysqli_query($koneksi, "SELECT * FROM user");

$buku = mysqli_query($koneksi, "SELECT * FROM buku");

$lihat = mysqli_query($koneksi, "SELECT * FROM users");




function add(){
    global $koneksi;

    $name = $_POST["name"];
    $filename = $_FILES["file"]["name"];
    $tmpName = $_FILES["file"]["tmp_name"];

    $newfilename = uniqid() . "-" . $filename;

    move_uploaded_file($tmpName, 'uploads/' . $newfilename);
    $query = "insert into users values('', '$name', '$newfilename')";
    mysqli_query($koneksi, $query);
    echo
    "
    
    <script> alert('Buku berhasil ditambahkan'); document.location.href = 'show.php'; </script>
    
    ";


}

function edit(){
    
}

function delete(){
    
}