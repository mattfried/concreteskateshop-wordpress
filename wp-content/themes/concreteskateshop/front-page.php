<!-- Insert Header -->
<?php get_header(); ?>





<!-- Featured Products -->
<div id="products" class="section md-padding">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <!-- Section header -->
      <div class="section-header text-center">
        <h2 class="title">Featured Products</h2>
      </div>
      <!-- /Section header -->



      <!-- product -->
      <!-- Insert product1 data for custom fields -->
      <?php $product1 = get_field('product1'); ?>

      <div class="col-sm-4">
        <div class="product">
          <div class="product-img">
            <img class="img-responsive" src="<?php echo $product1['image']; ?>" alt="">
            <a class="lightbox" href="<?php echo $product1['image']; ?>">
              <div class="overlay">
                <div class="product-social">
                  <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a> -->
                </div>
              </div>
            </a>
          </div>
          <div class="product-content">
            <h3>$<?php echo $product1['price']; ?></h3>
            <span><?php echo $product1['description']; ?></span>
          </div>
        </div>
      </div>
      <!-- /product -->



      <!-- product -->
      <!-- Insert product2 data for custom fields -->
      <?php $product2 = get_field('product2'); ?>

      <div class="col-sm-4">
        <div class="product">
          <div class="product-img">
            <img class="img-responsive" src="<?php echo $product2['image']; ?>" alt="">
            <a class="lightbox" href="<?php echo $product2['image']; ?>">
              <div class="overlay">
                <div class="product-social">
                  <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a> -->
                </div>
              </div>
            </a>
          </div>
          <div class="product-content">
            <h3>$<?php echo $product2['price']; ?></h3>
            <span><?php echo $product2['description']; ?></span>
          </div>
        </div>
      </div>
      <!-- /product -->


      <!-- product -->
      <!-- Insert product3 data for custom fields -->
      <?php $product3 = get_field('product3'); ?>
      <div class="col-sm-4">
        <div class="product">
          <div class="product-img">
            <img class="img-responsive" src="<?php echo $product3['image']; ?>" alt="">
            <a class="lightbox" href="<?php echo $product3['image']; ?>">
              <div class="overlay">
                <div class="product-social">
                  <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a> -->
                </div>
              </div>
            </a>
          </div>
          <div class="product-content">
            <h3>$<?php echo $product3['price']; ?></h3>
            <span><?php echo $product3['description']; ?></span>
          </div>
        </div>
      </div>
      <!-- /product -->


      <!-- product -->
      <!-- Insert product4 data for custom fields -->
      <?php $product4 = get_field('product4'); ?>

      <div class="col-sm-4">
        <div class="product">
          <div class="product-img">
            <img class="img-responsive" src="<?php echo $product4['image']; ?>" alt="">
            <a class="lightbox" href="<?php echo $product4['image']; ?>">
              <div class="overlay">
                <div class="product-social">
                  <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a> -->
                </div>
              </div>
            </a>
          </div>
          <div class="product-content">
            <h3>$<?php echo $product4['price']; ?></h3>
            <span><?php echo $product4['description']; ?></span>
          </div>
        </div>
      </div>
      <!-- /product -->


      <!-- product -->
      <!-- Insert product5 data for custom fields -->
      <?php $product5 = get_field('product5'); ?>

      <div class="col-sm-4">
        <div class="product">
          <div class="product-img">
            <img class="img-responsive" src="<?php echo $product5['image']; ?>" alt="">
            <a class="lightbox" href="<?php echo $product5['image']; ?>">
              <div class="overlay">
                <div class="product-social">
                  <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a> -->
                </div>
              </div>
            </a>
          </div>
          <div class="product-content">
            <h3>$<?php echo $product5['price']; ?></h3>
            <span><?php echo $product5['description']; ?></span>
          </div>
        </div>
      </div>
      <!-- /product -->


      <!-- product -->
      <!-- Insert product6 data for custom fields -->
      <?php $product6 = get_field('product6'); ?>

      <div class="col-sm-4">
        <div class="product">
          <div class="product-img">
            <img class="img-responsive" src="<?php echo $product6['image']; ?>" alt="">
            <a class="lightbox" href="<?php echo $product6['image']; ?>">
              <div class="overlay">
                <div class="product-social">
                  <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a> -->
                </div>
              </div>
            </a>
          </div>
          <div class="product-content">
            <h3>$<?php echo $product6['price']; ?></h3>
            <span><?php echo $product6['description']; ?></span>
          </div>
        </div>
      </div>
      <!-- /product -->

    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->

</div>
<!-- /Featured Products -->





<!-- Brands -->
<div id="brands" class="section md-padding bg-grey">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <!-- Section header -->
      <div class="section-header text-center">
        <h2 class="title">Our Brands</h2>
      </div>
      <!-- /Section header -->


      <!-- Brand -->
      <!-- Insert brand1 data for custom fields -->
      <?php $brand1 = get_field('brand1'); ?>

      <div class="col-md-4 col-xs-6 work">
        <img class="img-responsive" src="<?php echo $brand1['image']; ?>" alt="">
        <div class="overlay"></div>
        <div class="work-content">
          <!-- <span>Category</span> -->
          <h3><?php echo $brand1['name']; ?></h3>
          <div class="work-link">
            <a href="<?php echo $brand1['brand_link']; ?>" target="_blank"><i class="fa fa-external-link"></i></a>
            <!-- <a class="lightbox" href="<?php bloginfo('template_directory');?>/img/adidas.jpg"><i class="fa fa-search"></i></a> -->
          </div>
        </div>
      </div>
      <!-- /Brand -->


      <!-- Brand -->
      <!-- Insert brand1 data for custom fields -->
      <?php $brand2 = get_field('brand2'); ?>

      <div class="col-md-4 col-xs-6 work">
        <img class="img-responsive" src="<?php echo $brand2['image']; ?>" alt="">
        <div class="overlay"></div>
        <div class="work-content">
          <!-- <span>Category</span> -->
          <h3><?php echo $brand2['name']; ?></h3>
          <div class="work-link">
            <a href="<?php echo $brand2['brand_link']; ?>" target="_blank"><i class="fa fa-external-link"></i></a>
            <!-- <a class="lightbox" href="<?php bloginfo('template_directory');?>/img/kr3w.jpg"><i class="fa fa-search"></i></a> -->
          </div>
        </div>
      </div>
      <!-- /Brand -->


      <!-- Brand -->
      <!-- Insert brand1 data for custom fields -->
      <?php $brand3 = get_field('brand3'); ?>

      <div class="col-md-4 col-xs-6 work">
        <img class="img-responsive" src="<?php echo $brand3['image']; ?>" alt="">
        <div class="overlay"></div>
        <div class="work-content">
          <!-- <span>Category</span> -->
          <h3><?php echo $brand3['name']; ?></h3>
          <div class="work-link">
            <a href="<?php echo $brand3['brand_link']; ?>" target="_blank"><i class="fa fa-external-link"></i></a>
            <!-- <a class="lightbox" href="<?php bloginfo('template_directory');?>/img/vans.jpg"><i class="fa fa-search"></i></a> -->
          </div>
        </div>
      </div>
      <!-- /Brand -->


      <!-- Brand -->
      <!-- Insert brand1 data for custom fields -->
      <?php $brand4 = get_field('brand4'); ?>

      <div class="col-md-4 col-xs-6 work">
        <img class="img-responsive" src="<?php echo $brand4['image']; ?>" alt="">
        <div class="overlay"></div>
        <div class="work-content">
          <!-- <span>Category</span> -->
          <h3><?php echo $brand4['name']; ?></h3>
          <div class="work-link">
            <a href="<?php echo $brand4['brand_link']; ?>" target="_blank"><i class="fa fa-external-link"></i></a>
            <!-- <a class="lightbox" href="<?php bloginfo('template_directory');?>/img/rds.jpg"><i class="fa fa-search"></i></a> -->
          </div>
        </div>
      </div>
      <!-- /Brand -->


      <!-- Brand -->
      <!-- Insert brand1 data for custom fields -->
      <?php $brand5 = get_field('brand5'); ?>

      <div class="col-md-4 col-xs-6 work">
        <img class="img-responsive" src="<?php echo $brand5['image']; ?>" alt="">
        <div class="overlay"></div>
        <div class="work-content">
          <!-- <span>Category</span> -->
          <h3><?php echo $brand5['name']; ?></h3>
          <div class="work-link">
            <a href="<?php echo $brand5['brand_link']; ?>" target="_blank"><i class="fa fa-external-link"></i></a>
            <!-- <a class="lightbox" href="<?php bloginfo('template_directory');?>/img/emerica.jpg"><i class="fa fa-search"></i></a> -->
          </div>
        </div>
      </div>
      <!-- /Brand -->


      <!-- Brand -->
      <!-- Insert brand1 data for custom fields -->
      <?php $brand6 = get_field('brand6'); ?>

      <div class="col-md-4 col-xs-6 work">
        <img class="img-responsive" src="<?php echo $brand6['image']; ?>" alt="">
        <div class="overlay"></div>
        <div class="work-content">
          <!-- <span>Category</span> -->
          <h3><?php echo $brand6['name']; ?></h3>
          <div class="work-link">
            <a href="<?php echo $brand6['brand_link']; ?>" target="_blank"><i class="fa fa-external-link"></i></a>
            <!-- <a class="lightbox" href="<?php bloginfo('template_directory');?>/img/dragon.png"><i class="fa fa-search"></i></a> -->
          </div>
        </div>
      </div>
      <!-- /Brand -->


      <!-- Brand -->
      <!-- Insert brand1 data for custom fields -->
      <?php $brand7 = get_field('brand7'); ?>

      <div class="col-md-4 col-xs-6 work">
        <img class="img-responsive" src="<?php echo $brand7['image']; ?>" alt="">
        <div class="overlay"></div>
        <div class="work-content">
          <!-- <span>Category</span> -->
          <h3><?php echo $brand7['name']; ?></h3>
          <div class="work-link">
            <a href="<?php echo $brand7['brand_link']; ?>" target="_blank"><i class="fa fa-external-link"></i></a>
            <!-- <a class="lightbox" href="<?php bloginfo('template_directory');?>/img/baker.jpg"><i class="fa fa-search"></i></a> -->
          </div>
        </div>
      </div>
      <!-- /Brand -->


      <!-- Brand -->
      <!-- Insert brand1 data for custom fields -->
      <?php $brand8 = get_field('brand8'); ?>
      <div class="col-md-4 col-xs-6 work">
        <img class="img-responsive" src="<?php echo $brand8['image']; ?>" alt="">
        <div class="overlay"></div>
        <div class="work-content">
          <!-- <span>Category</span> -->
          <h3><?php echo $brand8['name']; ?></h3>
          <div class="work-link">
            <a href="<?php echo $brand8['brand_link']; ?>" target="_blank"><i class="fa fa-external-link"></i></a>
            <!-- <a class="lightbox" href="<?php bloginfo('template_directory');?>/img/santa-cruz.jpg"><i class="fa fa-search"></i></a> -->
          </div>
        </div>
      </div>
      <!-- /Brand -->

    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->

</div>
<!-- /Brands -->





<!-- About -->
<div id="about" class="section md-padding bg-grey">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <!-- why choose us content -->
      <div class="col-md-6">
        <div class="section-header">
          <h2 class="title">Who Are We?</h2>
        </div>

          <!-- Insert About Paragraph 1 data for custom fields -->
          <?php echo get_field('about_paragraph_1'); ?>

          <!-- Insert About Paragraph 2 data for custom fields -->
          <?php echo get_field('about_paragraph_2'); ?>
        <!-- <div class="feature">
          <i class="fa fa-check"></i>
          <p>Quis varius quam quisque id diam vel quam elementum.</p>
        </div> -->
      </div>
      <!-- /why choose us content -->

      <!-- About slider -->
      <div class="col-md-6">
        <div id="about-slider" class="owl-carousel owl-theme">
          <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/team1.jpg" alt="">
          <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/team2.jpg" alt="">
          <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/team3.jpg" alt="">
          <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/team4.jpg" alt="">
          <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/team5.jpg" alt="">
        </div>
      </div>
      <!-- /About slider -->

    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->

</div>
<!-- /About -->





<!-- Banner -->
<div id="banner" class="section lg-padding">

  <!-- Background Image -->
  <div class="bg-img" style="background-image: url('<?php bloginfo('template_directory');?>/img/banner-bg.jpg');">
    <div class="overlay"></div>
  </div>
  <!-- /Background Image -->

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <!-- number -->
      <!-- <div class="col-sm-3 col-xs-6">
        <div class="number">
          <i class="fa fa-users"></i>
          <h3 class="white-text"><span class="counter">451</span></h3>
          <span class="white-text">Happy clients</span>
        </div>
      </div> -->
      <!-- /number -->

      <!-- number -->
      <!-- <div class="col-sm-3 col-xs-6">
        <div class="number">
          <i class="fa fa-trophy"></i>
          <h3 class="white-text"><span class="counter">12</span></h3>
          <span class="white-text">Awards won</span>
        </div>
      </div> -->
      <!-- /number -->

      <!-- number -->
      <div class="col-xs-6">
        <div class="number">
          <i class="fa fa-coffee"></i>
          <!-- <h3 class="white-text"><span class="counter">154</span>K</h3> -->
          <h4 class="white-text">All Day Free Coffee</h4>
        </div>
      </div>
      <!-- /number -->

      <!-- number -->
      <div class="col-xs-6">
        <div class="number">
          <i class="fa fa-file"></i>
          <!-- <h3 class="white-text"><span class="counter">45</span></h3> -->
          <h4 class="white-text">Free Stickers with Purchase</h4>
        </div>
      </div>
      <!-- /number -->

    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->

</div>
<!-- /Banner -->





<!-- Blog -->
<!-- <div id="blog" class="section md-padding bg-grey"> -->

  <!-- Container -->
  <!-- <div class="container"> -->

    <!-- Row -->
    <!-- <div class="row"> -->

      <!-- Section header -->
      <!-- <div class="section-header text-center">
        <h2 class="title">Recents news</h2>
      </div> -->
      <!-- /Section header -->

      <!-- blog -->
      <!-- <div class="col-md-4">
        <div class="blog">
          <div class="blog-img">
            <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/blog1.jpg" alt="">
          </div>
          <div class="blog-content">
            <ul class="blog-meta">
              <li><i class="fa fa-user"></i>John doe</li>
              <li><i class="fa fa-clock-o"></i>18 May/19</li>
              <li><i class="fa fa-comments"></i>57</li>
            </ul>
            <h3>Molestie at elementum eu facilisis sed odio</h3>
            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
            <a href="blog-single.html">Read more</a>
          </div>
        </div>
      </div> -->
      <!-- /blog -->

      <!-- blog -->
      <!-- <div class="col-md-4">
        <div class="blog">
          <div class="blog-img">
            <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/blog2.jpg" alt="">
          </div>
          <div class="blog-content">
            <ul class="blog-meta">
              <li><i class="fa fa-user"></i>John doe</li>
              <li><i class="fa fa-clock-o"></i>18 Oct</li>
              <li><i class="fa fa-comments"></i>57</li>
            </ul>
            <h3>Molestie at elementum eu facilisis sed odio</h3>
            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
            <a href="blog-single.html">Read more</a>
          </div>
        </div>
      </div> -->
      <!-- /blog -->

      <!-- blog -->
      <!-- <div class="col-md-4">
        <div class="blog">
          <div class="blog-img">
            <img class="img-responsive"  src="<?php bloginfo('template_directory');?>/img/blog3.jpg" alt="">
          </div>
          <div class="blog-content">
            <ul class="blog-meta">
              <li><i class="fa fa-user"></i>John doe</li>
              <li><i class="fa fa-clock-o"></i>18 Oct</li>
              <li><i class="fa fa-comments"></i>57</li>
            </ul>
            <h3>Molestie at elementum eu facilisis sed odio</h3>
            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
            <a href="blog-single.html">Read more</a>
          </div>
        </div>
      </div> -->
      <!-- /blog -->

    <!-- </div> -->
    <!-- /Row -->

  <!-- </div> -->
  <!-- /Container -->

<!-- </div> -->
<!-- /Blog -->

<!-- Contact -->
<div id="contact" class="section md-padding">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <!-- Section-header -->
      <div class="section-header text-center">
        <h2 class="title">Get In Touch</h2>
      </div>
      <!-- /Section-header -->

      <!-- contact -->
      <div class="col-sm-4">
        <div class="contact">
          <i class="fa fa-phone"></i>
          <h3>Phone</h3>
          <p>780-409-6339</p>
        </div>
      </div>
      <!-- /contact -->

      <!-- contact -->
      <div class="col-sm-4">
        <div class="contact">
          <i class="fa fa-envelope"></i>
          <h3>Email</h3>
          <p>contact@concreteskateshop.com</p>
        </div>
      </div>
      <!-- /contact -->

      <!-- contact -->
      <div class="col-sm-4">
        <div class="contact">
          <i class="fa fa-map-marker"></i>
          <h3>Address</h3>
          <p>
            4873 Jasper Avenue
            <br/>
            Edmonton, AB T5J 3N2
          </p>
        </div>
      </div>
      <!-- /contact -->

      <!-- contact form -->
      <!-- <div class="col-md-8 col-md-offset-2">
        <form class="contact-form">
          <input type="text" class="input" placeholder="Name">
          <input type="email" class="input" placeholder="Email">
          <input type="text" class="input" placeholder="Subject">
          <textarea class="input" placeholder="Message"></textarea>
          <button class="main-btn">Send message</button>
        </form>
      </div> -->
      <!-- /contact form -->

    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->

</div>
<!-- /Contact -->


<!-- Insert Footer -->
<?php get_footer(); ?>
