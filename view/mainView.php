<?php
$title = "SharedFiles";
ob_start();
?>

<section>
      <h1>
            <?php 
      
            if (isset($_GET["send"]) && $_GET["send"]) {
                  $image = $_GET["newImage"];
                  echo '<img src='.$image.' alt="sharedFiles" style="max-width: 75%">';
                  
            }
            else {
                 echo  '<i class="fas fa-paper-plane"></i>';
            }
            ?>
      </h1>

      <?php if (isset($_GET["send"]) && $_GET["send"]) { 
            $image = $_GET["newImage"];
           
            ?>
            <div class="text-center">
                  <h2>Fichier envoyé avec succès</h2>
                  <p>Retrouvez ci-dessous le lien vers votre fichier</p>
                  <input type="text" name="link" id="link" 
                  value= "http://localhost/sharedfiles/<?= $image ?>"
                  disabled
                  >
            </div>
      <?php } 
      else { ?>
            <form action="home" method="post" enctype="multipart/form-data">
            <p>
                  <label for="image">Sélectionner votre fichier</label>
                  <input type="file" name="image" id="image">
            </p>

            <p>
                  <button type="submit">Envoyer <i class="fas fa-long-arrow-alt-right"></i></button>
            </p>
      </form>
      <?php  } ?>

      

      
       
 </section>

 <?php
 $content =  ob_get_clean();
 require("./view/base.php");