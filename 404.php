<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */
get_header(); ?>
	 
      <header>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="intro-text">
                    <div class="intro-lead-in animated bounceInUp"><?php _e( '404', 'grayelephant' ); ?></div>
                    <div class="intro-heading animated bounceInLeft">
                        <h1><?php _e( 'WHOPPS! PAGE NOT FOUND.', 'grayelephant' ); ?></h1>
                        <p><?php _e( 'Sorry, nothing was found at this location.', 'grayelephant' ); ?></p>
                    </div>
                    <div class="button1 col-sm-6"> <a href="<?php echo site_url(); ?>"  class="page-scroll tellmore animated bounceInDown">Take Me Home</a> 
                    </div>
                    <div class="button3 col-sm-6"> <a href="mailto:info@grayelephant.co.nz?Subject=Gray%20Elephant%20-%20Start%20Project" target="_blank" class=" startproject animated bounceInDown">Contact Us</a> 
                    </div>
                </div>
            </div>
        </div>
    </header>

<!--=============================-->
<!--=============================-->
<!-- Company Contact Us Section -->
    <section id="company-contact-us">
        <div class="container">
           <div class="row clearfix">
              <div class="col-md-2"></div>
              <div class="col-md-8 ">
              <div class="company-contact-us"><h2>Wherever you are we are ready to work with you.</div>
              <div class="company-contact-us"><h2><a href="mailto:info@grayelephant.co.nz?Subject=Gray%20Elephant%20enquiry%20-%20Large%20or%20small" target="_blank">Contact Us Now</a></h2></div>
              </div>
              <div class="col-md-2">
              </div><!--/col-md-2 -->
            </div><!--/row -->
        </div><!--/Container -->
    </section>
<!--/Contact Us Section -->

<?php get_footer(); ?>