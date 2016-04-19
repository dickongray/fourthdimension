<?php get_header(); ?>
<!-- Work -->
            <div class="container service-space">
                <div class="row">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-12">
                        <!-- service Details Go Here -->                 
                        <?php the_content(); ?>
                        <?php endwhile; else: ?>
                        <?php endif; ?>   
                        </div>     
                    </div>
                </div>
            </div>
<?php get_footer(); ?>