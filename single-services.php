<?php get_header(); ?>
<!-- Services Modal 1 -->
            <div class="container">
                <div class="row">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="service-space">
                        <!-- service Details Go Here -->                 
                        <?php the_content(); ?>
                        <?php endwhile; else: ?>
                        <?php endif; ?>   
                        </div>     
                    </div>
                </div>
            </div>
<?php get_footer(); ?>