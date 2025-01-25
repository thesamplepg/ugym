<?php get_header(); ?>
<?php
$route_template = locate_template('template-parts/route.php');
$route = [['Тарифы', '/tarrifs']];
?>

  <main class="py-[100px] pb-12 min-h-dvh">
    <div class="comtainer mx-auto">
      <header>
        <?php echo load_template($route_template, false, $route); ?>
        <h1 class="text-3xl md:text-4xl font-bold mt-2">Тарифы</h1>
      </header>
      <section class="py-8 md:py-12">
        <?php get_template_part('template-parts/tarrifs/tarrifs'); ?>
      </section>
    </div>
    <?php get_template_part('template-parts/contacts'); ?>
  </main>

<?php get_footer(); ?>
