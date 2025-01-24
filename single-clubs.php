<?php
get_header(null, ['is_active' => true]); ?>
<?php get_template_part('template-parts/clubs/header'); ?>

<main class="single-clubs pt-[280px] md:pt-[228px] bg-slate-100">
  
  <?php get_template_part('template-parts/clubs/club-info'); ?>
  <?php get_template_part('template-parts/tarrifs'); ?>
  <?php get_template_part('template-parts/clubs/contacts'); ?>
  <?php get_template_part('template-parts/clubs/coaches'); ?>
  <?php get_template_part('template-parts/faq'); ?>
  <?php get_template_part('template-parts/contacts'); ?>

</main>


<?php get_footer(); ?>
