    <?php wp_footer(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/slick.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/main.js" type="text/javascript"></script>
    <!-- Contact Us Modal -->
    <div id="contacts" class="modal-window modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close-gray" data-dismiss="modal"></button>
                    <h4 class="modal-title">Get in touch</h4>
                    <img class="separator" src="<?php bloginfo( 'template_url' ); ?>/img/sep-black-blue.png" alt="">
                    <h5 class="modal-subtitle">Say hello to us, we will answer as soon as possible.</h5>
                </div>
                <div class="modal-body text-center">
                    <?php echo do_shortcode( '[contact-form-7 id="1067" title="contact-us"]' ); ?>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact Us Modal -->
    <!-- PORTFOLIO MODALS -->
    <?php

    $args = array (
        'post_type' => 'portfolio',
        'showposts' => 200 );
    query_posts( $args );

    if ( have_posts() ):
        while ( have_posts() ) :
            the_post(); ?>
            <div id="<?php the_title(); ?>" class="portfolio-modal modal-window modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"></button>
                            <h4 class="modal-title"><?php the_title(); ?></h4>
                            <div class="description"><?php the_content(''); ?></div>
                            <a href="http://<?php echo get_post_meta($post->ID, 'project_link', true); ?>" class="white-border-btn" target="_blank">VISIT WEBSITE</a>
                        </div>
                        <div class="modal-body">
                            <img src="<?php echo get_post_meta($post->ID, 'perlink', true); ?>" alt="<?php the_title(); ?>">
                        </div>
                    </div>

                </div>
            </div>
        <?php endwhile;
    else:
    endif;

    wp_reset_query();

    ?>
    <!-- PORTFOLIO MODALS -->
    </body>
</html>