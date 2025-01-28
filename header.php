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
  
  <?php $phone = get_field('phone', get_main_page_id()); ?>

  <!-- Header -->

  <?php get_template_part('template-parts/header/buy-modal'); ?> 
  <?php get_template_part('template-parts/header/form-success-popup'); ?>

  <header class="main-header w-full">

    <!-- Main menu -->

    <?php get_template_part('template-parts/header/main-menu'); ?> 
    
    <!-- Mobile menu -->

    <?php get_template_part('template-parts/header/mobile-menu'); ?> 

  </header>