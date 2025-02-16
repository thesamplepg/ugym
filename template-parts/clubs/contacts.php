<?php
$phone = get_field('club_phone');
$work_hours = get_field('club_work_hours');
$address = get_field('club_address');
?>
<section class="py-8" id="contacts-section">
  <div class="comtainer mx-auto">
    <h2 class="text-3xl font-bold mb-6 text-slate-800">Контакты</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
      <div class="p-7 grid grid-cols-1 bg-white rounded-2xl shadow-sm w-full">
        <p class="pt-0 py-5 border-b">
          <?php echo $address; ?>
        <a class="text-orange-600 ml-1" target="_blank" href="https://www.google.com/maps/dir//%D0%A3%D0%BB.+%D0%93%D0%BE%D1%80%D1%8C%D0%BA%D0%BE%D0%B3%D0%BE+27%2F1,+5+%D0%AD%D1%82%D0%B0%D0%B6+%D0%91%D0%B8%D1%88%D0%BA%D0%B5%D0%BA,+720005/@42.8573707,74.5271725,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x389eb633dde54985:0x80705d600a238946!2m2!1d74.6095732!2d42.8574002?entry=ttu&g_ep=EgoyMDI1MDEyMS4wIKXMDSoASAFQAw%3D%3D">Проложить маршрут</a>
        </p>
        <a class="py-5 border-b text-orange-600" href="#"><?php echo $phone; ?></a>
        <p class="py-5 border-b"><?php echo $work_hours; ?></p>
        <a data-modal-ref="#modal-buy" class="modal-handler mt-10 px-6 py-3 bg-orange-600 text-center rounded-full font-semibold text-white border-b" href="">Присоедениться</a>
      </div>
      <div class="min-h-[300px] md:min-h-auto">
        <div data-map-location="<?php echo get_field(
            'club_location',
        ); ?>" id="clubs-single-map" class="overflow-hidden rounded-2xl shadow w-full h-full"></div>
      </div>
    </div>
  </div>
</section>