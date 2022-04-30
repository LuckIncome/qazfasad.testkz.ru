<header class="header header-home">
  <div class="container">
    <a href="/" class="header__logo">
      <img src="<?php echo e(Voyager::image(setting('site.logo'))); ?>"alt="<?php echo e(setting('site.title')); ?>">
    </a>
    <div class="header__menu">
      <a href="<?php echo e(route('pages.get',$pages['about']->first()->slug)); ?>"><?php echo e($pages['about']->first()->title); ?></a>
      <a href="<?php echo e(route('pages.get',$pages['products']->first()->slug)); ?>"><?php echo e($pages['products']->first()->title); ?></a>
      <a href="<?php echo e(route('pages.get',$pages['documents']->first()->slug)); ?>"><?php echo e($pages['documents']->first()->title); ?></a>
      <a href="<?php echo e(route('pages.get',$pages['instruction']->first()->slug)); ?>"><?php echo e($pages['instruction']->first()->title); ?></a>
      <a href="<?php echo e(route('pages.get',$pages['objects']->first()->slug)); ?>"><?php echo e($pages['objects']->first()->title); ?></a>
      <a href="<?php echo e(route('pages.get',$pages['contacts']->first()->slug)); ?>"><?php echo e($pages['contacts']->first()->title); ?></a>
    </div>
    <div class="header__phone-group">
      <?php $__currentLoopData = $phone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ph): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a href="tel:<?php echo e($ph->link); ?>" class="header__phone">
        <img src="<?php echo e(asset('assets/icons/call.svg')); ?>"alt="call">
        <span><?php echo e($ph->value); ?></span>
      </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <div class="btn-group">
        <div class="header__phone" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside">
          <i class="bi bi-caret-down-fill"></i>
        </div>        
        <div class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
          <?php $__currentLoopData = $phones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pho): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="dropdown-item" href="tel:<?php echo e($pho->link); ?>"><?php echo e($pho->value); ?></a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>        
      </div>
    </div>
  </div>
</header>

<header class="header header-mobile" :class="{'header-fixed' : isMobile}">
  <div class="container">
    <div class="header__toggle" @click="toggleMobile">
      <transition name="fade" mode="out-in">
        <button key="open" v-if="!isMobile"><i class="bi bi-list"></i></button>
        <button key="close" v-else><i class="bi bi-x"></i></button>
      </transition>
    </div>
    <a href="/" class="header__logo">
      <img src="<?php echo e(Voyager::image(setting('site.logo'))); ?>"alt="<?php echo e(setting('site.title')); ?>">
    </a>
    <?php $__currentLoopData = $phone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ph): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="tel:<?php echo e($ph->link); ?>" class="header__phone">
      <img src="<?php echo e(asset('assets/icons/call.svg')); ?>"alt="call">
    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <transition name="fade" mode="out-in">
          <div class="header__trigger" v-if="isMobile">
            <?php $__currentLoopData = $phones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pho): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="tel:<?php echo e($pho->link); ?>" class="header__phone">
              <img src="<?php echo e(asset('assets/icons/call.svg')); ?>"alt="call">
              <span><?php echo e($pho->value); ?></span>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="header__menu">
              <a href="<?php echo e(route('pages.get',$pages['about']->first()->slug)); ?>"><?php echo e($pages['about']->first()->title); ?></a>
              <a href="<?php echo e(route('pages.get',$pages['products']->first()->slug)); ?>"><?php echo e($pages['products']->first()->title); ?></a>
              <a href="<?php echo e(route('pages.get',$pages['documents']->first()->slug)); ?>"><?php echo e($pages['documents']->first()->title); ?></a>
              <a href="<?php echo e(route('pages.get',$pages['instruction']->first()->slug)); ?>"><?php echo e($pages['instruction']->first()->title); ?></a>
              <a href="<?php echo e(route('pages.get',$pages['objects']->first()->slug)); ?>"><?php echo e($pages['objects']->first()->title); ?></a>
              <a href="<?php echo e(route('pages.get',$pages['about']->first()->slug)); ?>"><?php echo e($pages['contacts']->first()->title); ?></a>
            </div>
            <div class="network">
              <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($social->link); ?>">
                  <img src="<?php echo e(Voyager::image($social->icon)); ?>"alt="<?php echo e($social->value); ?>">
                </a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
      </transition>
  </div>
</header><?php /**PATH D:\OpenServer\domains\qaz-fasad.testkz.ru\resources\views/partials/header.blade.php ENDPATH**/ ?>