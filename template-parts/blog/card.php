<div class="w-full wow animate__animated animate__fadeInUp">
  <a href="<?php the_permalink(); ?>">
    <article class="rounded-2xl overflow-hidden bg-white shadow-sm">
      <div class="h-[210px] object-cover object-center p-3">
        <img class="w-full h-full rounded-2xl object-cover object-center" src="<?php the_post_thumbnail_url(
            'medium',
        ); ?>" alt="fitness">
      </div>
      <div class="p-6 pt-2">
        <h3 class="text-2xl font-semibold"><?php the_title(); ?></h3>
        <ul class="mt-3 mb-6 flex flex flex-wrap justify-start">
          <?php
          $categories = get_the_category();
          foreach ($categories as $category): ?>
            <li class="mr-2 mb-2"><a class="px-4 py-1 bg-amber-500 text-xs text-white font-semibold rounded-full"><?php echo $category->name; ?></a></li>
          <?php endforeach;
          ?>
        </ul>
        <div class="text-slate-600">
          <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="mt-5 text-amber-500 font-semibold flex items-center gap-2">
          Читать
          <i class="fa-solid fa-chevron-right text-xs"></i>
        </a>
      </div>
    </article>
  </a>
</div>