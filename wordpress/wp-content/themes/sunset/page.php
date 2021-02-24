<?php get_header();?>

<?php
$idx = 0;
if (have_posts()) {
while (have_posts()) : the_post();
?>

    <div class="container-fluid py-5 bg-light">
      <div class="container" data-aos="zoom-out-up">
        <h2 class="text-center" data-aos="zoom-out-down"><?php echo the_title(); ?></h2>
        <p data-aos="zoom-out-right"><?php echo the_content(); ?></p>
      </div>
    </div>

<?php
$idx++;
endwhile;
}
?>

<?php get_footer();?>
