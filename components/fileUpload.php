<?php

function fileUpload($picture){

    if($picture["error"] == 4){ 
       $pictureName = "default.png"; 
       $message = "The picture is not selected. You can add your picture anytime.";
   } else{
       $checkIfImage = getimagesize($picture["tmp_name"]); 
       $message = $checkIfImage ? "Perfect" : "Not an image";
   }

    if($message == "Perfect"){
       $ext = strtolower(pathinfo($picture[ "name"],PATHINFO_EXTENSION));
       $pictureName = uniqid(""). "." . $ext; 
       $destination = "assets/{$pictureName}";
       move_uploaded_file($picture["tmp_name"], $destination); 
   }

    return [$pictureName, $message];
}
?>
