<?php get_header(); ?>
  <section id="company"  class="container spacer company">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 ">  
          <h2>Meet the team</h2>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article <?php post_class('post'); ?>>
            <h2><a class="company" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><a class="service-listings company-text" href="<?php the_permalink(); ?>"><?php echo strip_tags( get_the_excerpt() ); ?></p>
              
            <?php if( get_the_post_thumbnail() ) : ?>
            <div class="img-container">
              <?php the_post_thumbnail('large'); ?>
            </div>  
            <?php endif; ?>           
          </article>
    
      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no pages found.' ); ?></p>
      <?php endif; ?>
      </div><!-- col-md-9 text-center -->
        <div class="col-sm-3 sidebar-news">
          <div>
          <?php get_sidebar(); ?>
          </div>
        </div><!-- col-md-3 -->
      </div><!-- row -->
    </div><!-- container -->
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
              <div class="company-contact-us"><h2><a href="mailto:#?Subject=#%20#%20#%20-%20#%20#%20#" target="_blank">Contact Us Now</a></h2></div>
              </div>
              <div class="col-md-2">
              </div><!--/col-md-2 -->
            </div><!--/row -->
        </div><!--/Container -->
    </section>
<!--/Contact Us Section -->


<?php get_footer(); ?>