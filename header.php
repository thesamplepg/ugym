<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UGym</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </script>
  <script src="https://api-maps.yandex.ru/2.1/?apikey=2898e19c-d19b-41a7-b928-11785a847300&lang=ru_RU&load=Map,Placemark" type="text/javascript"></script>
  <?php wp_head(); ?>
</head>
<body class="text-sm text-slate-800 overflow-x-hidden bg-slate-100">

  <!-- Header -->

  <div id="modal-buy" class="hidden flex items-center justify-center fixed z-50 top-0 left-0 w-dvw h-dvh bg-black/70">
    <section class="modal_window relative flex flex-col md:flex-row gap-8 md:gap-12 max-w-[90%] lg:max-w-[800px] max-h-[65vh] md:max-h-[450px] overflow-hidden bg-white shadow p-10 rounded-2xl animate__animated animate__fadeInDown animate__faster">
      <span class="modal_close-btn absolute top-2 right-5 text-orange-600 text-xl cursor-pointer">
        <i class="fa-solid fa-xmark"></i>
      </span>
      <div class="w-full">
        <h3 class="text-2xl sm:text-3xl text-slate-800 font-bold mb-8 text-center">Получить больше информации</h3>
        <form action="" class="grid grid-cols-1 md:grid-cols-2 gap-5 font-medium">
          <input type="text" class="w-full px-5 py-4 bg-gray-200 rounded-full border border-white hover:bg-gray-100 focus:border-gray-200" name="name" placeholder="Имя">
          <input type="text" class="w-full px-5 py-4 bg-gray-200 rounded-full border border-white hover:bg-gray-100 focus:border-gray-200" name="phone" placeholder="Телефон">
          <input type="submit" class="md:col-span-2 w-full rounded-full mt-2 font-semibold text-center px-5 py-4 bg-orange-600 text-white" value="Отправить">
        </form>
      </div>
    </section>
  </div> 

  <?php $isActive = $args ? $args['is_active'] : true; ?>

  <header class="main-header w-full">
    <div data-preset-active="<?php echo $isActive; ?>" class="main-header_menu fixed top-0 z-50 w-full <?php echo $isActive
    ? 'main-header_menu--active'
    : ''; ?>">
      <div class="comtainer mx-auto py-4 flex items-center gap-5">
        <div class="main-header_logo text-3xl text-white font-bold mr-8 grow"><a href="#">UGG</a></div>
        <nav class="main-header_nav lg:flex hidden list-none grow gap-8 justify-center text-white font-medium">
          <li class="relative group">
            <a href="">Клубы <i class="fa-solid fa-caret-down ml-1"></i></a>
            <!--Nested menu-->
            <div class="absolute left-[-50%] hidden group-hover:block pt-2">
              <ul class="shadow custom-scroll w-[250px] max-h-[300px] bg-white rounded-lg text-orange-600 font-medium overflow-hidden overflow-y-scroll">
                <li><a class="block p-2 px-3 hover:bg-slate-100" href="">UGym Боконбаева</a></li>
                <li><a class="block p-2 px-3 hover:bg-slate-100" href="">UGym Чынгыза Айтматова</a></li>
                <li><a class="block p-2 px-3 hover:bg-slate-100" href="">UGym Боконбаева</a></li>
                <li><a class="block p-2 px-3 hover:bg-slate-100" href="">UGym Боконбаева</a></li>
                <li><a class="block p-2 px-3 hover:bg-slate-100" href="">UGym Боконбаева</a></li>
                <li><a class="block p-2 px-3 hover:bg-slate-100" href="">UGym Чынгыза Айтматова</a></li>
                <li><a class="block p-2 px-3 hover:bg-slate-100" href="">UGym Боконбаева</a></li>
                <li><a class="block p-2 px-3 hover:bg-slate-100" href="">UGym Боконбаева</a></li>
                <li><a class="block p-2 px-3 hover:bg-slate-100" href="">UGym Боконбаева</a></li>
                <li><a class="block p-2 px-3 hover:bg-slate-100" href="">UGym Чынгыза Айтматова</a></li>
                <li><a class="block p-2 px-3 hover:bg-slate-100" href="">UGym Боконбаева</a></li>
                <li><a class="block p-2 px-3 hover:bg-slate-100" href="">UGym Боконбаева</a></li>
              </ul>
            </div>
          </li>
          <li><a href="">Тарифы</a></li>
          <li><a href="">Промоакции</a></li>
          <li><a href="">Акции</a></li>
        </nav>
        <button data-modal-ref="#modal-buy" class="modal-handler main-header_buy-btn lg:block hidden bg-orange-600 text-white font-semibold px-5 py-3 rounded-full">Купить абонимент</button>
        <a href="" class="main-header_phone md:block hidden font-semibold text-white">+996 999-999-999</a>
        <span id="mobile-menu_btn" class="main-header_mobile-bar lg:hidden text-2xl text-white">
          <i class="fa-solid fa-bars"></i>
        </span>
      </div>
    </div>

    <!-- Mobile menu -->

    <div id="mobile-menu" class="hidden fixed top-0 z-40 w-full min-h-dvh bg-orange-600">
      <div class="comtainer mx-auto py-20 px-2 md:px-32 px-16 flex flex-col justify-between min-h-dvh">
        <nav class="list-none flex flex-col gap-6 justify-center font-medium text-lg text-white">
          <li class="parent-menu-item">
            <a class="block hover:opacity-80">Клубы <i class="fa-solid fa-caret-down ml-1"></i></a>
            <!-- Accardion -->
            <ul class="hidden pt-2 text-white font-medium text-sm max-h-[192px] overflow-y-scroll">
              <li><a class="block p-1 px-3 text-slate-100" href="">UGym Боконбаева</a></li>
              <li><a class="block p-1 px-3 text-slate-100" href="">UGym Чынгыза Айтматова</a></li>
              <li><a class="block p-1 px-3 text-slate-100" href="">UGym Боконбаева</a></li>
              <li><a class="block p-1 px-3 text-slate-100" href="">UGym Боконбаева</a></li>
              <li><a class="block p-1 px-3 text-slate-100" href="">UGym Боконбаева</a></li>
              <li><a class="block p-1 px-3 text-slate-100" href="">UGym Чынгыза Айтматова</a></li>
              <li><a class="block p-1 px-3 text-slate-100" href="">UGym Боконбаева</a></li>
              <li><a class="block p-1 px-3 text-slate-100" href="">UGym Боконбаева</a></li>
              <li><a class="block p-1 px-3 text-slate-100" href="">UGym Боконбаева</a></li>
              <li><a class="block p-1 px-3 text-slate-100" href="">UGym Чынгыза Айтматова</a></li>
              <li><a class="block p-1 px-3 text-slate-100" href="">UGym Боконбаева</a></li>
              <li><a class="block p-1 px-3 text-slate-100" href="">UGym Боконбаева</a></li>
            </ul>
            <!-- Accardion End -->
          </li>
          <li><a class="block hover:opacity-80" href="">Тарифы</a></li>
          <li><a class="block hover:opacity-80" href="">Промоакции</a></li>
          <li><a class="block hover:opacity-80" href="">Акции</a></li>
        </nav>
        <div class="flex flex-col gap-10 mt-16">
          <section class="flex flex-col gap-5">
            <a href="#" class="font-semibold text-lg text-white">+996 999-999-999</a>
            <ul class="flex gap-4">
              <li><a class="bg-white rounded-full w-10 h-10 flex items-center justify-center text-2xl text-orange-600 hover:opacity-80" href=""><i class="fa-brands fa-telegram"></i></a></li>
              <li><a class="bg-white rounded-full w-10 h-10 flex items-center justify-center text-2xl text-orange-600 hover:opacity-80" href=""><i class="fa-brands fa-whatsapp"></i></a></li>
              <li><a class="bg-white rounded-full w-10 h-10 flex items-center justify-center text-2xl text-orange-600 hover:opacity-80" href=""><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
          </section> 
          <section class="flex flex-col gap-5">
            <button  class="order-first md:order-last text-base text-orange-600 hover:text-white hover:bg-orange-600 transition duration-300 font-semibold bg-white rounded-full px-20 py-3">
              Выбрать клуб
            </button>
            <button data-modal-ref="#modal-buy" class="modal-handler order-first md:order-last text-base text-orange-600 hover:text-white hover:bg-orange-600 transition duration-300 font-semibold bg-white rounded-full px-20 py-3">
              Купить абонимент 
            </button>
          </section>
        </div>
      </div>
    </div>
  </header>