<?php
  $dirname = "img/";
  $images = glob($dirname . "*.jpg");
  $add = " active";
  foreach ($images as $image) {
      ?>
<div class="carousel-item<?= $add ?>">
  <img class="d-block w-100" src="<?= $image ?>" alt="<?= $image ?>">
</div>
<?php
  $add = "";
  }
?>
