<?php
$partners = [
    'bakai.png',
    'bee.jpg',
    'cdek.png',
    'coca.png',
    'images.png',
    'iom.png',
    'k-clark.jpeg',
    'pepsi.png',
    'umai.png',
    'undp.webp',
    'yandex.png',
]; ?>

<section class="py-16 bg-white">
  <div class="comtainer mx-auto">
    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 text-center">Вместе с нами</h2>
    <ul class="flex flex-wrap justify-center gap-4 mt-8">
      <?php
      $i = 0;

      while ($i < count($partners)): ?>
          <li class="py-4 px-6 border hover:scale-110 transition-all rounded-full cursor-pointer">
            <img class="h-8" src="wp-content/themes/ugym/assets/images/partners/<?php echo $partners[
                $i
            ]; ?>" alt="partner_logo">
          </li>
      <?php $i++;endwhile;
      ?>
    </ul>
  </div>
</section>