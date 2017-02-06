<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package airport
 */

?>
  <footer class="footer">
    <div class="inner">
        <div class="footer__social">
            <div class="footer__social__item">
                 <a href="#" class="footer__social__link "><i class="icon-facebook"></i></a>
                 <p class="footer__social__info">Follow us Facebook</p>
            </div>
            <div class="footer__social__item">
                <a href="#" class="footer__social__link"><i class="icon-twitter"></i></a>
                <p class="footer__social__info">Follow us Twitter</p>
            </div>
            <div class="footer__social__item">
                <a href="#" class="footer__social__link"><i class="icon-google-plus"></i></a>
                <p class="footer__social__info">Follow us Google Plus</p>
            </div>
            <div class="footer__social__item">
                <a href="mailto:info@airporttransportationcostarica.com" class="footer__social__link"><i class="icon-envelope"></i></a>
                <p class="footer__social__info">Send us Mail</p>
            </div>
        </div>
       
    </div>
    <div class="footer__copyright">
        <div class="inner">
             <?php wp_nav_menu( array(
                     'theme_location' => 'secondary',
                     'menu_id' => 'secondary-menu',
                     'container'       => 'nav',
	                'container_class' => 'footer__menu',
	                'container_id'    => '',
	                'menu_class'      => 'footer__menu__ul',
                      ) 
                  ); 
                  ?>
        </div>
        <span class="footer__copyright__avotz"><a href="http//avotz.com" target="_blank"><i class="icon-avotz"></i>&copy; 2015</a></span>
    </div>
    
    
</footer>

<div id="transfer-popup" class="transfer-popup white-popup mfp-hide mfp-with-anim">
    <h3>Transfer Reservation</h3>               
    <?php echo do_shortcode('[contact-form-7 id="43" title="Reservation Transfers"]') ?>
</div>
<?php wp_footer(); ?>

</body>
</html>
