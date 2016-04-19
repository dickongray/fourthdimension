<?php get_header(); ?>


<!-- Services section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="section-heading"><h2><?php the_title(); ?></h2></div>
                </div>
            </div><!--/row -->
        </div><!--/Container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php the_content(); ?>
                </div>
            </div><!--/row -->
        </div><!--/Container -->
        <?php endwhile; endif; ?>
    </section>



  <!--=============================-->
<!--=============================-->
<!-- Company Contact Us Section -->
    <section id="company-contact-us">
        <div class="container">
           <div class="row clearfix">
              <div class="col-md-2"></div>
              <div class="col-md-8 ">
              <div class="company-contact-us"><h2>Based in Gisborne, but we supplies New Zealand wide.</h2></div>
              <div class="company-contact-us"><h2><a href="mailto:#?Subject=#%20#%20#%20-%20#%20or%20#" target="_blank">Contact Us Now</a></h2></div>
              </div>
              <div class="col-md-2">
              </div><!--/col-md-2 -->
            </div><!--/row -->
        </div><!--/Container -->
    </section>
<!--/Contact Us Section -->


<?php get_footer(); ?>