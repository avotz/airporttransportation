<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package airport
 */

get_header(); ?>

	<main class="main">
            <div class="main__slider">
                <div class="cycle-slideshow" data-cycle-fx="fade"  data-cycle-timeout="6000"  data-cycle-slides=".main__slider__slide">
                
                    <div class="main__slider__slide" style="background-image: url(<?php echo get_template_directory_uri();  ?>/img/banner1.jpg);">
                        <div class="inner">
                            <div class="main__slider__slide__info main__slider__slide__info--left">
                                <h1>Airport Transportation</h1>
                                <h4 class="white">Promises you our best effort in order to satisfy your needs and exceed your expectations</h4>
                            </div>
                            
                        </div>
                    </div>
                    <div class="main__slider__slide" style="background-image:url(<?php echo get_template_directory_uri();  ?>/img/banner2.jpg);">
                         <div class="inner ">
                             <div class="main__slider__slide__info  main__slider__slide__info--right">
                                 
                                 <h1>Airport Transportation</h1>
                                    <h4 class="white">We are a proffesional company providing transportation from both international airports to everywhere  </h4>
                             </div>
                        </div>

                    </div>

                </div>
            </div>
            
            <section class="main__featured inner">
                <article class="main__featured__item">
                    <a href="<?php echo esc_url( home_url( '/san-jose-airport-transfer' ) ); ?>" class="main__featured__item__link">
                        <figure class="main__featured__item__figure">
                            <div class="main__featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured1.jpg');"></div>
                            <figcaption class="main__featured__item__caption bg-verde">
                                <h3 class="main__featured__item__title">San Jose Airport Transfer</h3>
                                <!--<p class="main__featured__item__description">Lorem ipsum dolor sit amet, consectetur.</p>-->
                            </figcaption>   
                        </figure>
                    </a>
                    
                </article>
                
                <article class="main__featured__item">
                    <a href="<?php echo esc_url( home_url( '/liberia-airport-transfer' ) ); ?>" class="main__featured__item__link">
                        <figure class="main__featured__item__figure">
                            <div class="main__featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured3.jpg');"></div>
                            <figcaption class="main__featured__item__caption bg-verde">
                                <h3 class="main__featured__item__title">Liberia Airport Transfer</h3>
                                <!--<p class="main__featured__item__description">Lorem ipsum dolor sit amet, consectetur.</p>-->
                            </figcaption>   
                        </figure>
                    </a>
                    
                </article>
                <article class="main__featured__item">
                    <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="main__featured__item__link">
                        <figure class="main__featured__item__figure">
                            <div class="main__featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured2.jpg');"></div>
                            <figcaption class="main__featured__item__caption bg-verde">
                                <h3 class="main__featured__item__title">Full insurance coverage</h3>
                                <!--<p class="main__featured__item__description">Lorem ipsum dolor sit amet, consectetur.</p>-->
                            </figcaption>   
                        </figure>
                    </a>
                    
                </article>
                <article class="main__featured__item">
                    <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="main__featured__item__link">
                        <figure class="main__featured__item__figure">
                            <div class="main__featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured4.jpg');"></div>
                            <figcaption class="main__featured__item__caption bg-verde">
                                <h3 class="main__featured__item__title">All vehicles are recent models</h3>
                                <!--<p class="main__featured__item__description">Lorem ipsum dolor sit amet, consectetur.</p>-->
                            </figcaption>   
                        </figure>
                    </a>
                    
                </article>
                
            </section>
            <section class="main__contact ">
                <div class="inner"> 
                    <h2 class="main__contact__title">Feel free to reach us via email for anything you need</h2>
                    <a class="main__contact__button btn btn-white" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>">Contact Us</a>
                </div>
            </section>
            <section class="main__more ">
                <div class="main__more__bg" style="background-image:url('<?php echo get_template_directory_uri();  ?>/img/paralax-vita.jpg');"></div>
                <div class="inner"> 
                    <div class="main__more__info">
                        <h2 class="main__more__title">We pick up all flights. Anytime</h2>
                        <a class="main__more__button btn btn-black" href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">Learn More</a>
                    </div>
                </div>
                
            </section>
            
        </main>

<?php

get_footer();
