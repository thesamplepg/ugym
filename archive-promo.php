<?php get_header(); ?>
<?php
$route_template = locate_template('template-parts/route.php');
$route = [['Акции', '/promo']];
?>

  <main class="py-[100px] pb-12 min-h-dvh">
    <div class="comtainer mx-auto">
      <header>
        <?php echo load_template($route_template, false, $route); ?>
        <h1 class="text-3xl md:text-4xl font-bold mt-2">Акции UGG</h1>
      </header>
      <ul class="my-5 md:my-10 flex gap-10 md:gap-5 justify-center lg:justify-between flex-wrap">
        <li>
          <a href="" data-modal-ref="#promo-modal-1" class="modal-handler">
            <div class="promo-item w-full md:max-w-[320px] bg-white hover:shadow shadow-sm rounded-2xl overflow-hidden">
              <header class="flex items-end bg-slate-700 min-h-[120px] p-5 rounded-2xl bg-right-bottom bg-no-repeat bg-[url('https://www.ddxfitness.ru/local/templates/iteraciya/img/group-programs-background.png')]">
                <h3 class="max-w-[60%] text-2xl text-white font-bold">
                  Груповые программы 
                </h3>
              </header>
              <article class="p-6 py-3">
                Премиальное фитнес-оборудование от брендов с мировым именем. Качество каждой детали в тренажерах высочайшего уровня.
              </article>
              <a href="" data-modal-ref="#promo-modal-1" class="modal-handler flex items-center gap-3 p-6 pt-0 block text-orange-600 font-semibold">
                Узнать больше 
                <i class="fa-solid fa-chevron-right"></i>
              </a>
            </div>
          </a>
          <div id="promo-modal-1" class="hidden flex items-center justify-center fixed top-0 left-0 w-dvw h-dvh bg-black/70">
            <section class="modal_window relative  md:flex-row  max-w-[90%] lg:max-w-[800px] overflow-hidden bg-white shadow p-10 rounded-2xl animate__animated animate__fadeInDown animate__faster">
              <div class="flex flex-col md:flex-row max-h-[65vh] md:max-h-[370px] gap-8 md:gap-12 overflow-y-scroll custom-scroll">
                <span class="modal_close-btn absolute top-2 right-5 text-orange-600 text-xl cursor-pointer">
                  <i class="fa-solid fa-xmark"></i>
                </span>
                <div class="md:w-1/2 left flex flex-col gap-10 items-center">
                  <img class="w-full rounded-3xl" src="https://media.istockphoto.com/id/1833291471/photo/row-of-sports-equipment-in-fitness-gym-concept.jpg?s=612x612&w=0&k=20&c=96xpa8ztjeU-TIHoJJ4QAdp9j1JqolovE8zP8rNXePM=" alt="fitness hall">
                </div>
                <div class="md:w-1/2">
                  <h3 class="text-2xl font-semibold mb-4">Тренажерный зал</h3>
                  <p>
                                  DDX Fitness предоставляет прекрасно сбалансированный микс из всемирно известных групповых занятий и авторских программ, разработанных нашим фитнес-департаментом. От высокоинтенсивных интервальных тренировок до умиротворяющих йоги и пилатеса — у нас проводятся занятия под любые задачи и настроение. 
                    <br/><br/>
                    Тренеры, ведущие занятия — высококвалифицированные специалисты. Профессионализм, динамичное ведение тренировок, высокий стандарт качества преподаваемых уроков — обязательные критерии для DDX Fitness при выборе тренеров групповых программ.  
                    <br/><br/>
                    Наша команда делает все возможное, чтобы каждое занятие было запоминающимся и ярким, чтобы Вы получали максимум эмоций от каждой тренировки! 
                    <br/><br/>
                    Ждем вас на групповых занятиях в DDX Fitness!
                  </p>
                </div>
              </div>
            </section>
          </div> 
        </li> 
        <li>
          <a href="">
            <div class="promo-item w-full md:max-w-[320px] bg-white hover:shadow shadow-sm rounded-2xl overflow-hidden">
              <header class="flex items-end bg-slate-700 min-h-[120px] p-5 rounded-2xl bg-right-bottom bg-no-repeat bg-[url('https://www.ddxfitness.ru/local/templates/iteraciya/img/group-programs-background.png')]">
                <h3 class="max-w-[60%] text-2xl text-white font-bold">
                  Груповые программы 
                </h3>
              </header>
              <article class="p-6 py-3">
                Премиальное фитнес-оборудование от брендов с мировым именем. Качество каждой детали в тренажерах высочайшего уровня.
              </article>
              <a href="#" class="flex items-center gap-3 p-6 pt-0 block text-orange-600 font-semibold">
                Узнать больше 
                <i class="fa-solid fa-chevron-right"></i>
              </a>
            </div>
          </a>
        </li> 
        <li>
          <a href="">
            <div class="promo-item w-full md:max-w-[320px] bg-white hover:shadow shadow-sm rounded-2xl overflow-hidden">
              <header class="flex items-end bg-slate-700 min-h-[120px] p-5 rounded-2xl bg-right-bottom bg-no-repeat bg-[url('https://www.ddxfitness.ru/local/templates/iteraciya/img/group-programs-background.png')]">
                <h3 class="max-w-[60%] text-2xl text-white font-bold">
                  Груповые программы 
                </h3>
              </header>
              <article class="p-6 py-3">
                Премиальное фитнес-оборудование от брендов с мировым именем. Качество каждой детали в тренажерах высочайшего уровня.
              </article>
              <a href="#" class="flex items-center gap-3 p-6 pt-0 block text-orange-600 font-semibold">
                Узнать больше 
                <i class="fa-solid fa-chevron-right"></i>
              </a>
            </div>
          </a>
        </li> 
      </ul>
    </div>
    <?php get_template_part('template-parts/promo/contacts'); ?>
  </main>

<?php get_footer(); ?>
