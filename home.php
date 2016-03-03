<?php get_header(); ?>
<header id="header">
    <div class="container text-center">
        <h1>Design. Development. Dedication.</h1>
        <img class="separator" src="<?php bloginfo( 'template_url' ); ?>/img/sep_head.png" alt="">
        <a href="#about_us" class="mouse-icon">
            <span></span>
        </a>
    </div>
</header>
<div id="about_us">
	<div class="container text-center">
		<h4 class="subtitle gray-txt">all you need to know</h4>
		<h3 class="title black-txt">About Us</h3>
        <img class="separator" src="<?php bloginfo( 'template_url' ); ?>/img/sep-black.png" alt="">
		<p class="light-gray-txt al-just">WE3 is a full service web development company. We have the ability to work with clients and
            projects of all sizes from small startups to multinationals. Within our team we have dedicated developers
            and designers with over 10 years of development experience between them along with our project manager who
            has been in the industry for over 5 years making them old enough to know yet fresh enough to keep your
            websites up to date with all of the latest trends. We pride ourselves in being small enough to care for
            each customer on an individual basis yet we have the capability to get the job done within a suitable
            timeframe as required.</p>
    </div>
</div>
<div id="services">
    <div class="container text-center white-txt">
		<div class="service-block col-xs-12 col-sm-4">
            <img src="<?php bloginfo( 'template_url' ); ?>/img/design-icon.png">
			<h3>DESIGN</h3>
            <div class="dotted-line"></div>
            <div class="service-list">
                <p>Logo Design</p>
                <p>Responsive Page Designs</p>
                <p>Business Cards</p>
                <p>Posters</p>
                <p>Page Wireframes</p>
            </div>
			<a data-dismiss="modal" data-toggle="modal" data-target="#contacts" class="white-border-btn">CONTACT NOW</a>
		</div>
		<div class="service-block col-xs-12 col-sm-4">
            <img src="<?php bloginfo( 'template_url' ); ?>/img/development-icon.png">
			<h3>DEVELOPMENT</h3>
            <div class="dotted-line"></div>
            <div class="service-list">
                <p>Technical Specification</p>
                <p>Front End Programming</p>
                <p>Back End Programming</p>
                <p>Web Tests</p>
                <p>Project Launch</p>
            </div>
			<a data-dismiss="modal" data-toggle="modal" data-target="#contacts" class="white-border-btn">CONTACT NOW</a>
		</div>
		<div class="service-block col-xs-12 col-sm-4">
            <img src="<?php bloginfo( 'template_url' ); ?>/img/dedication-icon.png">
			<h3>DEDICATION</h3>
            <div class="dotted-line"></div>
            <div class="service-list">
                <p>Hosting</p>
                <p>Maintenance</p>
                <p>Support</p>
            </div>
			<a data-dismiss="modal" data-toggle="modal" data-target="#contacts" class="white-border-btn">CONTACT NOW</a>
		</div>
	</div>
</div>
<div id="portfolio" class="container-fluid">
    <div class="row text-center">
        <h4 class="subtitle white-txt">recent work</h4>
        <h3 class="title white-txt">portfolio</h3>
        <img class="separator" src="<?php bloginfo( 'template_url' ); ?>/img/sep-white.png" alt="">
        <div class="portfolio-list">
            <?php

            $args = array (
                'post_type' => 'portfolio',
                'showposts' => 200 );
            query_posts( $args );

            if ( have_posts() ):
                while ( have_posts() ) :
                    the_post(); ?>
                    <div class="portfolio-item">
                        <a data-dismiss="modal" data-toggle="modal" data-target="#<?php the_title(); ?>">
                            <?php the_post_thumbnail('full', array('class'=>'img img-responsive')); ?>
                            <p class="item-name">
                                <?php the_title(); ?>
                            </p>
                            <p class="item-category">
                                <?php echo get_post_meta($post->ID, 'subtitle', true); ?>
                            </p>
                        </a>
                    </div>
                <?php endwhile;
            else:
            endif;

            wp_reset_query();

            ?>
        </div>
    </div>
</div>
<div id="get_touch" class="container-fluid text-center">
    <h3 class="title-italic white-txt">Get in touch</h3>
    <img class="separator" src="<?php bloginfo( 'template_url' ); ?>/img/sep-white-blue.png" alt="">
	<a data-dismiss="modal" data-toggle="modal" data-target="#contacts" class="white-border-btn">CONTACT US</a>
</div>
<div id="our_details" class="container text-center">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <p class="details-text">
                <i class="fa fa-map-marker"></i>
                Rīga, Kaļķu iela 12. Latvija
            </p>
        </div>
        <div class="col-xs-12 col-md-4">
            <p class="details-text">
                <i class="fa fa-phone"></i>
                +371 2233 4455
            </p>
        </div>
        <div class="col-xs-12 col-md-4">
            <p class="details-text">
                <i class="fa fa-at"></i>
                info@wethree.eu
            </p>
        </div>
    </div>
</div>
<div id="arrows" class="container text-center">
    <div class="row">
        <div class="arrow-down">
            <div class="arrow-blue">
                <div class="arrow-white"></div>
            </div>
        </div>
    </div>
</div>
<div id="contact_data" class="container-fluid">
    <div class="row">
        <div id="map"></div>
    </div>
</div>
<?php get_footer(); ?>


