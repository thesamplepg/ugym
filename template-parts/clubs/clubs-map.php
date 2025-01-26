<div class="mt-8 md:h-[500px] rounded-2xl shadow bg-white overflow-hidden flex flex-wrap md:flex-nowrap">
  <section class="w-full md:w-1/2 lg:w-2/3 h-[300px] md:h-full">
    <div id="clubs-map" class="w-full h-full"></div> 
  </section>
  <section class="w-full md:w-1/2 lg:w-1/3 p-5 h-[300px] md:h-full">
    <ul class="clubs-map_locations h-full flex flex-col gap-3 overflow-y-scroll custom-scroll pr-1">
      <?php
      $query = new WP_Query(['post_type' => 'clubs']);
      if ($query->have_posts()):
          while ($query->have_posts()):
              $query->the_post(); ?>
              <li data-club-location="<?php echo get_field(
                  'club_location',
              ); ?>">
                <a href="">
                  <div class="p-2 justify-between border-b">
                    <h3 class="flex items-center gap-2 font-semibold text-lg text-orange-600">
                      <i class="fa-solid fa-location-dot opacity-90 text-sm"></i>
                    <?php the_title(); ?> 
                    </h3>
                    <p class="my-2"><?php echo get_field('club_address'); ?></p>
                    <a class="text-orange-600 semibold flex items-center gap-2" href="<?php echo get_the_permalink(); ?>">Перейти</a>
                  </div>
                </a>
              </li>
      <?php
          endwhile;
      endif;
      ?>
      </li>
    </ul>
  </section>
</div>