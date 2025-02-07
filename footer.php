<?php get_template_part('template-parts/contacts'); ?>

<footer class="bg-amber-500 py-14 text-white bg-neutral-800">
  <div class="comtainer mx-auto">
    <h2 class="text-3xl font-bold text-amber-500">UGG</h2>
    <div class="flex gap-10 flex-wrap md:flex-nowrap">
      <article class="max-w-[300px]">
        <p class="font-medium mt-4 opacity-90">
          Профессиональное оборудование, групповые тренировки, индивидуальный подход, стильная атмосфера и зона отдыха.
        </p>
      </article>
      <nav class="grow">
        <ul class="flex flex-col gap-2 underline">
          <li>
            <a href="" class="hover:opacity-80">Блог</a>
          </li>
          <li>
            <a href="" class="hover:opacity-80">Тарифы</a>
          </li>
          <li>
            <a href="" class="hover:opacity-80">Клубы</a>
          </li>
          <li>
            <a href="" class="hover:opacity-80">Акции</a>
          </li>
          <li>
            <a href="" class="hover:opacity-80">FAQ</a>
          </li>
        </ul>
      </nav>
      <div class="font-medium text-right">
        <p><?php echo get_field('address', get_main_page_id()); ?></p>
        <p class="text-base mb-2"><?php echo get_field(
            'phone',
            get_main_page_id(),
        ); ?></p>
        <div>
          <a href="" class="text-white text-2xl">
            <i class="fa-brands fa-whatsapp"></i>
          </a>
          <a href="" class="text-white text-2xl">
            <i class="fa-brands fa-telegram"></i>
          </a>
        </div>
      </div>
    </div>
    <p class="mt-6">&copy; UndergroundGym 2025 </p>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>