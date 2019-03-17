<?php get_header(); ?>

    <div id="primary" class="content-area extended">
        
        <main id="main" class="site-main" role="main">
            
            <h1><?php the_archive_title(); ?></h1>
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post()  ?>
            
                <?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
            
            <?php endwhile; endif; ?>
            
            
            <?php echo paginate_links(); ?>
        
        </main>
    
    </div>
    
<?php get_footer(); ?>