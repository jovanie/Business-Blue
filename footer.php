<footer>
    <div class="grid">
        <div class="row text">
            <div class="four-twelve columns">
                <?wp_nav_menu( array( 'theme_location' => 'footer-col-1', 'container_class' => 'footer-menu' ) ); ?>
            </div>
            <div class="four-twelve columns">
                <?wp_nav_menu( array( 'theme_location' => 'footer-col-2', 'container_class' => 'footer-menu' ) ); ?>
            </div>
            <div class="four-twelve columns">
                <?wp_nav_menu( array( 'theme_location' => 'footer-col-3', 'container_class' => 'footer-menu' ) ); ?>
            </div>
        </div>
    </div>
    <div class="foot-bot">
        <div class="grid">
            <p class="text">Website designed by <a href="http://jovanie.me" target="_blank">Jovanie De La Cruz</a></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</div>
<!-- /.container -->
</body>

</html>