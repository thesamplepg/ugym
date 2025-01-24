<?php
$route_template = locate_template('template-parts/route.php');
$route = [['Клубы', '/clubs'], ['Заголовок', '/заголовок']];
?>

<section class="clubs-header bg-slate-100 z-30 fixed w-full pt-[76px]">
  <div class="comtainer mx-auto py-4">
    <?php echo load_template($route_template, false, $route); ?>
    <h1 class="text-3xl md:text-4xl font-bold mt-4">Фитнес-клуб DDX Аквамолл</h1>
  </div>
  <nav class="bg-gray-200/70 py-4 transition-all">
    <div class="comtainer mx-auto">
      <ul class="flex gap-10 text-xs text-orange-500 font-bold">
        <li>
          <a href="">Тарифы</a>
        </li>
        <li>
          <a href="">Тренеры</a>
        </li>
        <li>
          <a href="">Акции</a>
        </li>
        <li>
          <a href="">Контакты</a>
        </li>
      </ul>
    </div>
  </nav>
</section>