
       
      <?php
rwmb_the_value( 'image', array( 'size' => 'original' ) );
?>   
         <div class="main-info">


          <div class="title"><?php echo rwmb_meta( 'title' ) ?>
</div>
          <div class="sinopsis"><?php echo rwmb_meta( 'sinopsis' ) ?>
</div>
         <div class="row">
          <div class="ficha-tecnica col-5"><?php echo rwmb_meta( 'techdetails' ) ?>
</div>
<div class="screenings col-5">
<?php echo rwmb_meta( 'screenings' ) ?>
</div>
</div>

<p class="trailer">
  <?php echo rwmb_meta( 'trailer' ) ?>
</div>
</div>




