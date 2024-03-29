<!-- Footer -->
<footer id="footer" class="sm-padding bg-dark">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <div class="col-md-12">

        <!-- footer logo -->
        <div class="footer-logo">
          <a href="#home"><img src="<?php bloginfo('template_directory');?>/img/concrete-logo.svg" alt="logo"></a>
        </div>
        <!-- /footer logo -->

        <!-- Insert socila media data for custom fields -->
        <?php
        $fb_link = get_field('facebook_link');
        $inst_link = get_field('instagram_link');
        $yout_link = get_field('youtube_link');
        ?>
        <!-- footer follow -->
        <ul class="footer-follow">
          <li><a href="<?php echo $fb_link; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
          <!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
          <li><a href="<?php echo $inst_link; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
          <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
          <li><a href="<?php echo $yout_link; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
        </ul>
        <!-- /footer follow -->

        <!-- footer copyright -->
        <div class="footer-copyright">
          <p>© 2019 Concrete Skateboard Shop. &nbsp; Developed by <a href="https://mattfried.ca/" target="_blank">Matt Fried</a></p>
        </div>
        <!-- /footer copyright -->

      </div>

    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->

</footer>
<!-- /Footer -->

<!-- Back to top -->
<div id="back-to-top"></div>
<!-- /Back to top -->

<!-- Preloader -->
<div id="preloader">
  <div class="preloader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
<!-- /Preloader -->


<?php wp_footer(); ?>

</body>

</html>
