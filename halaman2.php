<!DOCTYPE html>
<html>
<head>
    <title>Data yang Diinputkan</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
    <h1>Data yang Diinputkan</h1>
    <?php
    if (isset($_POST)) {
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $telepon = $_POST["telepon"];
        
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Alamat:</strong> $alamat</p>";
        echo "<p><strong>No Telepon:</strong> $telepon</p>";
        
        if(isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0){
            $target_file = "uploads/".basename($_FILES["foto"]["name"]);
            move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
            echo "<p><strong>Foto:</strong> <img src='uploads/" . basename($_FILES["foto"]["name"]) . "' alt='Foto'></p>";
        }

    }
    ?>
</body>
</html>
