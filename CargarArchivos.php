<?php
if (isset($_POST['btnSubmit'])) {
    $uploadfile = $_FILES["uploadImage"]["tmp_name"];
    $folderRuta = "subidas/";
    
    if (! is_writable($folderRuta) || ! is_dir($folderRuta)) {
        echo "error";
        exit();
    }
    if (move_uploaded_file($_FILES["uploadImage"]["tmp_name"], $folderRuta . $_FILES["uploadImage"]["name"])) {
        echo '<img src="' . $folderRuta . "" . $_FILES["uploadImage"]["name"] . '">';
        exit();
    }
   
}
?>