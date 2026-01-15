<?php 
    if(isset($_POST["submit"])) {
        echo "<pre>" ;
        print_r($_FILES);
        echo "</pre>" ;
        $file = $_FILES["myfile"]["name"] ;
        echo "file name: " .$file ;
        
    }
?>