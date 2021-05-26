<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress_Test
 */

?>
	<footer class="site-footer">
        <div class="row">
            <div class="col-md-4">
                <div class="email">
                    info@eco-cabins.com
                </div>
            </div>

            <div class="col-md-4">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri() . '/img/logo.svg' ?>">
                </div>
            </div>

            <div class="col-md-4">
                <div class="quick-links">
                    <ul>
                        <li>Cookies</li>
                        <li>Privacybeleid</li>
                    </ul>
                </div>
            </div>
        </div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
