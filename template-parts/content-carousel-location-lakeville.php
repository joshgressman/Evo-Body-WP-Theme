<?php
$slider_image_1 = get_field('slide_1');
$slider_image_2 = get_field('slide_2');
$slider_image_3 = get_field('slide_3');
?>

<!--  Carousel -->
<section class="slider">
<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo $slider_image_1['url']; ?>" style="width: 100%" alt="<?php echo $slider_image_1['alt'] ?>" />
    </div>
    <div class="item">
      <img src="<?php echo $slider_image_2['url']; ?>" style="width: 100%" alt="<?php echo $slider_image_2['alt'] ?>" />
    </div>
    <div class="item">
      <img src="<?php echo $slider_image_3['url']; ?>" style="width: 100%" alt="<?php echo $slider_image_3['alt'] ?>" />
    </div>
  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
    <a id="arrow-location" class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
    <a id="arrow-location" class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->
</section>
<!-- END CAROUSEL -->
