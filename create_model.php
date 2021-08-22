<?php
    require_once('database/database.php');
    if (isset($_POST["create"])){
        $text="";   
        $image =$_FILES["image"]["name"];
        $targe = "images/".basename($image); 
        echo $image; 
        Createpost($_POST);
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targe)){
            $text ="Upload picture Succesful";
        }else{
            $text="Upload Picture has problem";
        }
 } 