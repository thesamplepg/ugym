<?php
$advantages = get_field('club_advantages');
$images = get_field('club_images');
?>

<section class="py-16 pt-8 md:pt-16">
  <div class="comtainer mx-auto">
    <div class="flex flex-col md:flex-row gap-10 items-center wow animate__animated animate__fadeInUp">
      <section class="w-full md:w-2/5">
        <ul class="grid grid-cols-3 md:grid-cols-2 gap-10">
          <?php if ($advantages['open_hours']): ?>
          <li class="flex flex-col gap-3 items-center text-center md:items-start md:text-start text-xs text-slate-500">
            <i class="text-teal-600 text-4xl fa-solid fa-clock"></i>
            Ежедневно с 6 до 24
          </li>
          <?php endif; ?>
          <?php if ($advantages['equipment']): ?>
          <li class="flex flex-col gap-3 items-center text-center md:items-start md:text-start text-xs text-slate-500">
            <i class="text-teal-600 text-4xl fa-solid fa-dumbbell"></i>
            Премиум оборудование
          </li>
          <?php endif; ?>
          <?php if ($advantages['spa']): ?>
          <li class="flex flex-col gap-3 items-center text-center md:items-start md:text-start text-xs text-slate-500">
            <i class="text-teal-600 text-4xl fa-solid fa-spa"></i>
            SPA-зона
          </li>
          <?php endif; ?>
          <?php if ($advantages['shower']): ?>
          <li class="flex flex-col gap-3 items-center text-center md:items-start md:text-start text-xs text-slate-500">
            <i class="text-teal-600 text-4xl fa-solid fa-shower"></i>
            Удобные раздевалки и душевые
          </li>
          <?php endif; ?>
          <?php if ($advantages['parking']): ?>
          <li class="flex flex-col gap-3 items-center text-center md:items-start md:text-start text-xs text-slate-500">
            <i class="text-teal-600 text-4xl fa-solid fa-car"></i>
            Парковка
          </li>
          <?php endif; ?>
          <?php if ($advantages['group_programs']): ?>
          <li class="flex flex-col gap-3 items-center text-center md:items-start md:text-start text-xs text-slate-500">
            <i class="text-teal-600 text-4xl fa-solid fa-people-group"></i>
            Групповые программы
          </li>
          <?php endif; ?>
        </ul>
      </section>

      <section class="w-full md:w-3/5">
        <div class="group swiper relative rounded-2xl overflow-hidden club-info-swiper">
          <div class="swiper-wrapper w-full">
            <?php foreach ($images as $image_url): ?>
              <div class="swiper-slide">
                <img class="w-full" src="<?php echo $image_url; ?>" alt="fitness">
              </div>
            <?php endforeach; ?>
          </div>
          <div class="arrows absolute z-10 opacity-0 group-hover:opacity-100 transition-all top-0 left-0 w-full h-full text-amber-500 flex justify-between px-2 md:px-5 items-center">
            <span class="arrows-left transition-all w-10 h-10 cursor-pointer rounded-full flex items-center justify-center bg-white">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
              </svg>
            </span>
            <span class="arrows-right transition-all w-10 h-10 cursor-pointer rounded-full flex items-center justify-center bg-white">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
              </svg>
            </span> 
          </div>
          <div class="swiper-pagination text-amber-500"></div>
        </div>
      </section>
    </div>
  </div>
</section>