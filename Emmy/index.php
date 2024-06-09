<?php
/* *
 * The main template file. */

get_header();
?>


    <!-- hero section  -->
    <div class="container-fluid hero-section h-screen flex items-center">
      <div class="hero-content lg:pl-28 lg:p-10 p-4">
        <h1 class="text-white font-semibold text-3xl">Welcome to Emmy Yung's Music <br class="lg:block hidden" /> World!</h1>
        <h5 class="text-2xl font-light text-white py-8">NEW ALBUM ALL THE TIME OUT NOW</h5>
        <div class="social-icons flex content-center items-center">
            <a href="#">
                <img src="assets/images/instagram.svg" alt="">
            </a>
            <a href="#">
                <img src="assets/images/facebook.svg" alt="">
            </a>
            <a href="#">
                <img src="assets/images/spotify.svg" alt="">
            </a>
            <a href="#">
                <img src="assets/images/twitter.svg" alt="">
            </a>
        </div>
      </div>
    </div>
    <!-- hero section ending -->
<?php

get_template_part( 'assets/template-parts/misc/content', 'about' );    
get_template_part( 'assets/template-parts/misc/content', 'subscribe' );    
get_template_part( 'assets/template-parts/misc/content', 'melody' )
?>



<?php get_footer(); ?>