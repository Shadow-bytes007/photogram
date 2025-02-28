<?php
  include 'libs/load.php';
 
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
  <?load_template('_head');?>


    <? load_template('_header'); ?>
  </head>
  
  <body>
    <?
    load_template('_autobright');
    ?>
    


<main>
  
  <? 
  load_template('_login'); 
  ?>
</main>
<script src="/legacy_php/photogram_app/assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
