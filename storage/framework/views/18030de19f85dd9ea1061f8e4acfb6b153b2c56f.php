<!DOCTYPE html>
<html lang="ru">
  <?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
  <main id="app" ref="infoBox">
      <div class="dark-wrapper"  :class="{'dark-wrapper-active': isDarkWrapper}"></div>
      <?php echo $__env->yieldContent('content'); ?>
  </main>
  <?php echo $__env->make('partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH /var/www/vhosts/qazfasad.kz/httpdocs/resources/views/errors/layout.blade.php ENDPATH**/ ?>