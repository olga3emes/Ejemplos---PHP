<?php
if (is_uploaded_file($_FILES['archivoEnviado']['tmp_name'])) {
    $uploads_dir = "/";
    $tmp_name = $_FILES['archivoEnviado']['tmp_name'];
    $pic_name = $_FILES['archivoEnviado']['name'];
    move_uploaded_file($tmp_name, $uploads_dir.$pic_name);
    echo "$uploads_dir.$pic_name";
}
else{
    echo "File not uploaded successfully.";
}
?>
