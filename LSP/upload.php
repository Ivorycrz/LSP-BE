<?php

include ("koneksi.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.3.2-dist/css/bootstrap.min.css">

</head>
<body>

<?php

if(isset($_POST["submit"])){
    if($_POST["submit"] == "add"){
        add();
    }

    else if($_POST["submit"] == "edit"){
        edit();
    }
    else {
        delete();
    }
}


?>


    
    <form class="" method="post" action="" enctype="multipart/form-data">
     Name 
    <input type="text" name="name" required> <br>
    Image
    <input type="file" name="file" required> <br>
    <button type="submit" name="submit" value="add">Add</button>
    </form>
    <br>
    <a href="show.php">Output</a>
</body>
</html>