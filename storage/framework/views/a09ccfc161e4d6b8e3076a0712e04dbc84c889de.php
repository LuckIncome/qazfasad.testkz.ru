<div class="container">
  <a href="/">Главная</a> 
  <i class="bi bi-chevron-right"></i>
  <?php if(isset($subtitle)): ?>
    <?php if(isset($titleLink)): ?>
      <a href="<?php echo e($titleLink); ?>"><?php echo e($title); ?></a> 
    <?php else: ?>
      <span><?php echo e($title); ?></span>
    <?php endif; ?>
    <?php if(isset($childTitle)): ?>
      <a href="<?php echo e($subtitleLink); ?>"><?php echo e($subtitle); ?></a> 
      <?php if(isset($subChildTitle)): ?>
        <a href="<?php echo e($childLink); ?>"><?php echo e($childTitle); ?></a> 
        <i class="bi bi-chevron-right"></i> 
        <span><?php echo e($childTitle); ?></span>
      <?php else: ?> 
        <span><?php echo e($subChildTitle); ?></span>
      <?php endif; ?>
    <?php else: ?>
      <i class="bi bi-chevron-right"></i>
      <span><?php echo e($subtitle); ?></span>
    <?php endif; ?>
  <?php else: ?>
    <span><?php echo e($title); ?></span>
  <?php endif; ?>
</div>
 <?php /**PATH /var/www/vhosts/qazfasad.kz/httpdocs/resources/views/partials/breadcrumbs.blade.php ENDPATH**/ ?>