<?php 
/* 
  Template Name: Contact Page
*/
?>
<?php get_header(); ?>
<div id="contact-page"  class="container spacer company">
  <div class="row">
    <div class="col-sm-6 ">
      <h2 class="text-center company">Contact 4D</h2>   
      <p class="service-listings company-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis recusandae ea cum atque deleniti, dolorum esse necessitatibus reprehenderit ut ex natus nihil, numquam asperiores praesentium dicta iure deserunt sunt temporibus.</p>
      <p class="service-listings company-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque quo quos distinctio aperiam odio modi saepe laudantium debitis, asperiores quae, est neque provident officiis iure optio maiores. Placeat nisi, voluptatum!</p> 
    </div>
    <div class="col-sm-6">
      <h2 class="text-center company contact-info">Information</h2> 
      <ul id="contact-infomation">
         <li><a href="tel:+64021624457">PHONE: +64 021 643 708</a></li>
         <li><a href="mailto:info@grayelephant.co.nz?Subject=Gray%20Elephant%20-%20Contact%20Gray%20Elephant" target="_blank">Email: hello@4d.co.nz</a></li>
      </ul>
    </div>
  </div>
  <hr>
<!--=============================-->
<!--=============================-->
  <div class="row">
    <div class="col-xs-12">
      <h2 class="text-center company">Follow 4d</h2>   
      <ul id="social-media-infomation" class="text-center">
         <li><a href="#" target="_blank">Twitter</a></li>
         <li><a href="#" target="_blank">Instergram</a></li>
         <li><a href="#" target="_blank">Facebook</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- #Contact -->
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
<!--
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                    
                        <?php the_content(); ?>
                        <?php endwhile; else: ?>
                        <?php endif; ?>  
--> 
             
<?php get_footer(); ?>