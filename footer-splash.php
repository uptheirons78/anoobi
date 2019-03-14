
            </div><!-- #content -->
        
        
        
        <section id="footer-widget-area" role="complementary">
            
            <?php dynamic_sidebar( 'footer-sidebar' ); ?>
            
        </section>
        
        <footer id="colophon" class="site-footer" role="contentinfo">
            
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'anoobi' ) ); ?>">
                <?php printf( esc_html__( 'Splash Footer Proudly Powered by %s', 'anoobi' ), 'Wordpress' ); ?>
            </a>
            
        </footer><!-- #colophone -->
    
    </div><!-- #page -->
    
    <?php wp_footer(); ?>

</body>

</html>