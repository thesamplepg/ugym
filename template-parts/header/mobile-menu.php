<div id="mobile-menu" class="hidden pt-5 fixed top-0 z-40 w-full min-h-dvh bg-amber-500">
  <div class="comtainer mx-auto py-20 px-2 md:px-32 px-16 flex flex-col justify-between min-h-dvh">
    <nav class="list-none flex flex-col gap-6 justify-center font-medium text-lg text-white">
      <li class="parent-menu-item">
        <a href="<?php echo home_url(
            '/clubs',
        ); ?>" class="block hover:opacity-80">Клубы <i class="fa-solid fa-caret-down ml-1"></i></a>
        <!-- Accardion -->
        <ul class="hidden pt-2 text-white font-medium text-sm max-h-[192px] overflow-y-scroll">
          <?php
          $query = new WP_Query(['post_type' => 'clubs']);
          if ($query->have_posts()):
              while ($query->have_posts()):
                  $query->the_post(); ?>
            <li>
              <a class="block p-1 px-3 text-slate-100" href="<?php echo get_the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </li>
          <?php
              endwhile;
          endif;
          ?>
        </ul>
        <!-- Accardion End -->
      </li>
      <li><a class="block hover:opacity-80" href="<?php echo home_url(); ?>/tarrifs">Тарифы</a></li>
      <li><a class="block hover:opacity-80" href="<?php echo home_url(); ?>/partners">Партнеры</a></li>
      <li><a class="block hover:opacity-80" href="<?php echo home_url(); ?>/promo">Акции</a></li>
      <li><a class="block hover:opacity-80" href="<?php echo home_url(); ?>/blog">Блог</a></li>
    </nav>
    <div class="flex flex-col gap-10 mt-16">
      <section class="flex flex-col gap-5">
        <a href="#" class="font-semibold text-lg text-white"><?php echo get_field(
            'phone',
            get_main_page_id(),
        ); ?></a>
        <ul class="flex gap-4">
          <li><a class="bg-white rounded-full w-10 h-10 flex items-center justify-center text-2xl text-amber-500 hover:opacity-80" href=""><i class="fa-brands fa-telegram"></i></a></li>
          <li><a class="bg-white rounded-full w-10 h-10 flex items-center justify-center text-2xl text-amber-500 hover:opacity-80" href=""><i class="fa-brands fa-whatsapp"></i></a></li>
          <li><a class="bg-white rounded-full w-10 h-10 flex items-center justify-center text-2xl text-amber-500 hover:opacity-80" href=""><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
      </section> 
      <section class="flex flex-col gap-5">
        <button  class="order-first md:order-last text-base text-amber-500 hover:text-white hover:bg-amber-500 transition duration-300 font-semibold bg-white rounded-full px-20 py-3">
          Выбрать клуб
        </button>
        <button data-modal-ref="#modal-buy" class="modal-handler order-first md:order-last text-base text-amber-500 hover:text-white hover:bg-amber-500 transition duration-300 font-semibold bg-white rounded-full px-20 py-3">
          Купить абонимент 
        </button>
      </section>
    </div>
  </div>
</div>