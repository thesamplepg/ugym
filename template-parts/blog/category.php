<?php
$categories = $args['categories'];
array_unshift($categories, 'Все');
?>
<ul class="post_categories flex flex-wrap max-w-1/2 gap-y-6 gap-4">
  <?php foreach ($categories as $category): ?>
    <li><a href="#" class="hover:opacity-70 transition-all capitalize shadow-xs px-4 py-2 text-xs bg-white text-orange-600 font-semibold rounded-full"><?php echo $category; ?></a></li>
  <?php endforeach; ?>
</ul>