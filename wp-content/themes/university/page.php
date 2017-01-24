<?php get_header(); ?>

<!--banner-region-starts-->
<!-- <div id="inner-banner">
    <img src="<?php bloginfo('template_directory') ?>/img/banner1.jpg" alt="Banner" class="img-responsive">
</div> -->
<!--banner-region-ends-->


<!-- home content starts -->
<div class="container back">
    
    <div class="col-md-8 col-sm-7 col-xs-12 nopadding">
        <div class="home-left">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <div class="heading">
                    <h1><?php the_title(); ?></h1>
                </div>
                <?php the_content(); ?>
                <?php endwhile; ?> 

        </div>    
    </div>

    <?php include('sidebar.php'); ?>

</div>
<!-- home content ends -->


<?php get_footer(); ?>