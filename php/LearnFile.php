<?php
$file_name = $_FILES["file"]["name"];
$file_tmp  = $_FILES["file"]["tmp_name"];

move_uploaded_file($file_tmp, "uploads/" . $file_name);

echo "File uploaded successfully! <br>";
echo "<pre>";
print_r($_FILES);
echo "</pre>"
?>

