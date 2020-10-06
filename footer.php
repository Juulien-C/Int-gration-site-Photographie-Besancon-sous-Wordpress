<footer class="footer">
    <div class="f-left">
        <a href="<?php echo home_url( '/' ); ?>"><h4>Photographie Besançon Les Amis</h4></a>
        <p>22 rue de la Viotte <br> 25000 Besançon</p>
        <div class="f-line"></div>
    </div>
    <div class="f-middle">
	<?php wp_nav_menu( 
        array( 
        'theme_location' => 'footer',
        'container' => 'ul',
        ) 
    ); ?>
        <div class="f-line"></div>
    </div>
    <div class="f-right">
        <p><a href="mailto:courrier@photographie-besancon.fr">courrier@photographie-besancon.fr</a></p><br>
        <div class="RS">
            <a href="http://#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/rs-facebook.svg" alt="logo facebook"></a>
            <a href="http://#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/rs-instagram.svg" alt="logo instagram"></a>
            <a href="http://#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/rs-youtube.svg" alt="logo youtube"></a>
            <a href="http://#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/rs-twitter.svg" alt="logo twitter"></a>
        </div>
    </div>       

</footer>

<?php wp_footer(); ?>
</body>
</html>