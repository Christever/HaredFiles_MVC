<?php
require("controller/controller.php");

try {
      if (isset($_GET["page"])){
            if ($_GET["page"] == "home"){
                  if (isset($_FILES["image"]) && $_FILES["image"]["error"]===0){
                        addImage($_FILES["image"]);
                        home();
                  }
                  else {
                        home();
                  }
            }
            else {
                  // page non trouvée
                  require("./view/404.php");
            }
      }
      else {
            home();
      }
}
catch (Exception $e){

}