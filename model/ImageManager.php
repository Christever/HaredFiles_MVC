<?php
class ImageManager {

      function validateImage($image){
            if ($image["size"]<=3000000){
                  $infoImage = pathinfo($image["name"]);
                  $extensionImage = $infoImage["extension"];
                  $extensionArray  = ["jpg", "jpeg", "gif", "png"];
                  if (in_array($extensionImage, $extensionArray)){
                        $this->newImage = "uploads/".time().rand().rand().'.'.$extensionImage;
                        move_uploaded_file($image["tmp_name"], $this->newImage);
                       return true;
                  }
            }
            return false;
      }
}