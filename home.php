<?php get_header(); ?>

    <div id="primary" class="content-area">
        
        <main id="main" class="site-main" role="main">
            
            <!--wp_title() display the name of the page you are in -->
            <!--wp_title() it works also outside the Loop! -->
            <h1><?php wp_title( '' ); ?></h1>
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post()  ?>
            
                <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>
            
            <?php endwhile; endif; ?>
            
            
            <?php echo paginate_links(); ?>
        
        </main>
    
    </div>
    
    <?php get_sidebar(); ?>
    
<?php get_footer(); ?>