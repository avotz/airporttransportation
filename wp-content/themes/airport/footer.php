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
        <div class="footer__tripadvisor">
          <div id="TA_selfserveprop717" class="TA_selfserveprop">
            <ul id="4ep1YnlHjfH" class="TA_links YKVTthumEK">
            <li id="IupgbD3H80Xe" class="Ib53qOusBhtu">
            <a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a>
            </li>
            </ul>
            </div>
            <script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=717&amp;locationId=12148552&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2"></script>

        </div>
        <div class="footer__social">
            <h3>Follow Us</h3>
            <div class="footer__social__item">
                 <a href="https://www.facebook.com/airporttransportationcostarica/" class="footer__social__link " target="_blank"><i class="icon-facebook"></i></a>
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
         <div class="footer__numbers">
              <h3>Informatión</h3>
              <span class="footer__copyright__phone">Office phone: +(506) 2667-03-39 | (8 am to 5 pm)</span>
              <span class="footer__copyright__phone">Mobile phone +(506) 8526-8465  | (24 hrs)</span>
              <span class="footer__copyright__phone">USA: +1(786) 600-1246 | (24 hrs)</span>
               <span class="footer__copyright__phone">info@airporttransportationcostarica.com</span>
               <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Airport Transportation" class="footer__logo__img" /></a>
             
         </div>
       
    </div>
    <div class="footer__copyright">
        <span class="footer__copyright__avotz2"></span>
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
<a href="#transfer-popup" class="btn-book-transfer btn-fixed-transfer">Book Now</a>
<div id="transfer-popup" class="transfer-popup white-popup mfp-hide mfp-with-anim">
    <h3>Transfer Reservation</h3>               
    <?php echo do_shortcode('[contact-form-7 id="43" title="Reservation Transfers"]') ?>
</div>
<?php wp_footer(); ?>

</body>
</html>
