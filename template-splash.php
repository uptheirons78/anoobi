<?php
    //Template Name: Splash Page
    // Template Post Type: post, page
?>

<?php get_header( 'splash' ); ?>

    <div id="primary" class="content-area extended">
        
        <main id="main" class="site-main" role="main">
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post()  ?>
            
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
            
            <?php endwhile; endif; ?>
        
        </main>
    
    </div>
    
<?php get_footer( 'splash' ); ?>