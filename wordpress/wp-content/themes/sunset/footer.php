</div>
<div class="container-fluid footer-container pb-0 mb-0  text-light ">
     <footer>
         <div class="row my-5 py-5">
             <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12" data-aos="zoom-out-right">
                 <div class="row">
                     <div class="col-12"><h2 class="text-center mb-5 gettext" data-aos="zoom-out-down">GET IN TOUCH</h2></div>
                     <div class="col-xl-8 col-md-6 col-sm-6 col-12 my-auto mx-auto a" data-aos="zoom-out-down">
                         <p class="text-light contact-text"> Ready to hire me?</p>
                         <a  class="contact-button" href="<?php echo get_site_url() ?>/contact">GET IN TOUCH <i class="fas fa-chevron-right"></i></a>
                     </div>
                     <div class="col-xl-4 col-md-6 col-sm-6 col-12 mt-5" data-aos="zoom-out-left">
                         <!-- <h6 class="mb-3 mb-lg-4 bold-text "><b>MENU</b></h6> -->
                         <?php
            wp_nav_menu(array(
                     'theme_location' => 'footer-menu',
                     'menu_class' => 'footer-menu'
                ))

?>
</div>

                     </div>
                 </div>
             </div>
         </div>
     </footer>
     <div class="row container-social py-5 text-center" data-aos="zoom-out"><?php

wp_nav_menu(array(
    'theme_location' => 'social-menu',
    'menu_class' => 'social-menu'

))

?>
<p class="text-center"> &copy; ALL RIGHTS RESERVED</p>
</div>
 </div>
</body>

<script>
    $(document).ready(function(){
        AOS.init();
    });
</script>

<?php wp_footer();?>
</html>
