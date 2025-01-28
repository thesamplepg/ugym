<?php
$main_page = get_page_by_title('Главная');
$main_page_id;
if ($main_page) {
    $main_page_id = $main_page->ID;
}

$faq_template = locate_template('template-parts/faq.php');
$faq_questions = get_field('faq', get_main_page_id());
?>

<?php get_header(); ?>


<main class="main-page">

<?php get_template_part('template-parts/promo-slider'); ?>
<?php get_template_part('template-parts/advantages'); ?>
<?php get_template_part('template-parts/main-page/tarrifs'); ?>
<?php get_template_part('template-parts/indigits'); ?>
<?php echo load_template($faq_template, true, $faq_questions); ?>
<?php get_template_part('template-parts/main-page/blog'); ?>
<?php get_template_part('template-parts/main-page/map'); ?>
<?php get_template_part('template-parts/main-page/partners'); ?>
<?php get_template_part('template-parts/contacts'); ?>

</main>


<?php get_footer(); ?>
