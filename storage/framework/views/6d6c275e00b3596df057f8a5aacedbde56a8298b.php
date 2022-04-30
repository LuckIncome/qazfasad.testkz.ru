<footer class="footer">
  <div class="footer__top">
    <div class="container">
      <div class="content">
        <label>Оставьте заявку для сотрудничества</label>
        <form id="subscription" action="<?php echo e(route('subscribe')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <input type="email" name="email" placeholder="Введите свой E-mail" required>
          <button type="submit"><img src="<?php echo e(asset('assets/icons/arrow.svg')); ?>" alt="arrow"></button>
        </form>
      </div>
      <div class="content">
        <a href="<?php echo e(route('pages.get',$pages['about']->first()->slug)); ?>"><?php echo e($pages['about']->first()->title); ?></a>
        <a href="<?php echo e(route('pages.get',$pages['products']->first()->slug)); ?>"><?php echo e($pages['products']->first()->title); ?></a>
        <a href="<?php echo e(route('pages.get',$pages['documents']->first()->slug)); ?>"><?php echo e($pages['documents']->first()->title); ?></a>
      </div>
      <div class="content">     
        <a href="<?php echo e(route('pages.get',$pages['instruction']->first()->slug)); ?>"><?php echo e($pages['instruction']->first()->title); ?></a>
        <a href="<?php echo e(route('pages.get',$pages['objects']->first()->slug)); ?>"><?php echo e($pages['objects']->first()->title); ?></a>
        <a href="<?php echo e(route('pages.get',$pages['contacts']->first()->slug)); ?>"><?php echo e($pages['contacts']->first()->title); ?></a>
      </div>
      <div class="content">
        <a class="phone" href="tel:<?php echo e(setting('site.footer_phone')); ?>"><img src="<?php echo e(asset('assets/icons/call.svg')); ?>" alt="call"><?php echo e(setting('site.footer_phone')); ?></a>
        <a class="email" href="mailto:<?php echo e(setting('site.footer_email')); ?>"><?php echo e(setting('site.footer_email')); ?></a>
        <div class="network">
          <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e($social->link); ?>">
            <img src="<?php echo e(Voyager::image($social->icon)); ?>" alt="<?php echo e($social->value); ?>">
          </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <?php echo setting('site.copyrights'); ?>

      <a href="https://i-marketing.kz/"><img src="<?php echo e(asset('assets/img/logo-im.svg')); ?>" alt="i-marketing.kz"></a>
    </div>
  </div>
</footer><?php /**PATH D:\OpenServer\domains\qaz-fasad.testkz.ru\resources\views/partials/footer.blade.php ENDPATH**/ ?>