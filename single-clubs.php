<?php
get_header(null, ['is_active' => true]); ?>
<?php
if (have_posts()) {
    the_post();
}
$faq_template = locate_template('template-parts/faq.php');
$faq = get_field('club_faq');
?>


<?php get_template_part('template-parts/clubs/header'); ?>

<main class="single-clubs pt-[280px] md:pt-[228px] bg-slate-100">
  
  <?php get_template_part('template-parts/clubs/club-info'); ?>
  <?php get_template_part('template-parts/clubs/tarrifs'); ?>
  <?php get_template_part('template-parts/clubs/promo-slider'); ?>
  <?php get_template_part('template-parts/clubs/contacts'); ?>
  <?php get_template_part('template-parts/clubs/coaches'); ?>
  <?php echo load_template($faq_template, false, $faq); ?>
  <?php get_template_part('template-parts/contacts'); ?>

</main>


<?php get_footer(); ?>
