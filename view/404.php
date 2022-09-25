<?php
$title = "SharedFiles | Page introuvable";
ob_start();
?>
<div id="page_404">
      <section>
            <h1>
                  <i class="fas fa-paper-plane"></i>      
            </h1>

            
      </section>

      <h2 class="text-center">OUPS ... La Page n'existe pas (plus)...</h2>
      <p class="text-center">
            Reformulez votre recheche ou allez 
            <a href="home">sur la page d'accueil.</a>
      </p>
</div>
 <?php
 $content =  ob_get_clean();
 require("./view/base.php");