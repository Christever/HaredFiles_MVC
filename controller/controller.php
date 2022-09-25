<?php
require_once("model/ImageManager.php");

function home(){
      require("./view/mainView.php");
}

function addImage($image){
      $imageManager = new ImageManager();
      $result = $imageManager->validateImage($image);
      if ($result === true){
            $send = true;
            $newImage = $imageManager->newImage;
            header('location: index.php?page=home&send='.$send.'&newImage='.$newImage);
            exit();
      }
      else {
            $send = false;
            header('location: index.php?page=home&send='.$send);
      }
}
