<?php
$query = new WP_Query(['post_type' => 'partners']); ?>

<div class=".comtainer mx-auto">
  <div class="my-10 p-10 bg-white rounded-2xl">
    <ul class="flex flex-wrap justify-center gap-4">
      <?php if ($query->have_posts()):
          while ($query->have_posts()):
              $query->the_post(); ?>
              <li data-modal-ref="#partners-modal-<?php echo get_the_ID(); ?>" class="modal-handler wow animate__animated aniamte__fadeInUp">
                <a href="" class="py-4 px-6 border transition-all rounded-full block">
                  <img class="h-8" src="<?php the_post_thumbnail_url(
                      'medium',
                  ); ?>" alt="partner_logo">
                </a>

                <!--Modal-->

                <div id="partners-modal-<?php echo get_the_ID(); ?>" class="hidden flex items-center justify-center fixed z-40 top-0 left-0 w-dvw h-dvh bg-black/70">
                  <section class="modal_window relative  md:flex-row  max-w-[90%] lg:max-w-[800px] overflow-hidden bg-white shadow p-10 rounded-2xl animate__animated animate__fadeInDown animate__faster">
                    <div class="flex flex-col md:flex-row max-h-[65vh] md:max-h-[370px] gap-8 md:gap-12 overflow-y-scroll custom-scroll">
                      <span class="modal_close-btn absolute top-2 right-5 text-orange-600 text-xl cursor-pointer">
                        <i class="fa-solid fa-xmark"></i>
                      </span>
                      <div class="md:w-1/2 left flex flex-col gap-10 items-center">
                        <img class="w-full rounded-3xl" src="<?php the_post_thumbnail_url(
                            'large',
                        ); ?>" alt="fitness hall">
                      </div>
                      <div class="md:w-1/2">
                        <h3 class="text-2xl font-semibold mb-4"><?php the_title(); ?></h3>
                        <div class="wordpress-content">
                          <?php the_content(); ?>
                        </div>
                      </div>
                    </div>
                  </section>
                </div> 
              </li>
      <?php
          endwhile;
      endif; ?>
    </ul>
  </div>
</div>