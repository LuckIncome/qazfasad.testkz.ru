
<?php $__env->startSection('page_title',(strlen($page->title) > 1 ? $page->title : '')); ?>
<?php $__env->startSection('seo_title', (strlen($page->seo_title) > 1 ? $page->seo_title : '')); ?>
<?php $__env->startSection('meta_keywords',(strlen($page->meta_keywords) > 1 ? $page->meta_keywords : '')); ?>
<?php $__env->startSection('meta_description', (strlen($page->meta_description) > 1 ? $page->meta_description : '')); ?>
<?php $__env->startSection('image',$page->thumbic); ?>
<?php $__env->startSection('url',url()->current()); ?>
<?php $__env->startSection('page_class','page'); ?>
<?php $__env->startSection('content'); ?>

<section class="banner">
<img class="banner__logo" src="<?php echo e(asset('assets/img/text.svg')); ?>" alt="лого">
<div class="container">
  <div class="content">
    <h1 class="banner__title">
      <?php echo e(setting('site.description')); ?>

    </h1>
    <button class="my-btn btn-white" data-bs-toggle="modal" data-bs-target="#appModal">Оставить заявку</button><br>
    <!-- <a href="objects.html">
      <span>267</span>
      <span>объектов</span>
    </a> -->
  </div>
</div>
</section>

<section class="banner-box">
<div class="banner-slider__dots"></div>
<div class="banner-slider">
  <?php $__currentLoopData = $first_sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $first_slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="banner-slider__item">
      <img src="<?php echo e(Voyager::image($first_slider->image)); ?>" alt="<?php echo e($first_slider->title); ?>">
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</section>

<section class="products">
<div class="container">
  <div class="products__slider">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="product">
      <a href="/products/<?php echo e($product->slug); ?>" class="product__img"><img src="<?php echo e(Voyager::image($product->image)); ?>" alt="<?php echo e($product->title); ?>"></a>
      <div class="product__name"><?php echo e($product->title); ?></div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
  </div>
  <div class="products__slider-arrows products__slider-main">
    <button><i class="bi products-left bi-chevron-left"></i></button>
    <div class="products__slider-dots"></div>
    <button><i class="bi products-right bi-chevron-right"></i></button>
    <a href="/products">Смотреть все</a>
  </div>
</div>
</section>

<section class="about">
<div class="container">
  <div class="d-flex">
    <div class="about__info">
      <div class="title">О компании</div>
      <div class="small-text">
        <?php echo e($text->description); ?>

      </div>
      <a href="/about">Узнать подробнее <i class="bi bi-arrow-right"></i></a>
    </div>
    <div class="about__box">
      <div class="about__slider">
        <?php $__currentLoopData = $second_sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $second_slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="about__img">
          <img src="<?php echo e(Voyager::image($second_slider->image)); ?>" alt="<?php echo e($second_slider->title); ?>">
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="about__slider-arrows">
        <button><i class="bi about-left bi-chevron-left"></i></button>
        <div class="about__slider-dots"></div>
        <button><i class="bi about-right bi-chevron-right"></i></button>
      </div>
    </div>
  </div>
</div>
</section>

<section class="advantage">
<div class="container">
  <div class="advantage__items">
    <?php $__currentLoopData = $icontexts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icontext): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="advantage__item">
      <div class="num"><img src="<?php echo e(Voyager::image($icontext->icon)); ?>" alt="<?php echo e($icontext->title); ?>"></div>
      <div class="text"><?php echo $icontext->title; ?></div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
</section>

<section class="objects">
<div class="container">
  <div class="title">наши объекты</div>
  <div class="objects__items">
    <?php $__currentLoopData = $objects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="object">
        <a href="/objects/<?php echo e($obj->slug); ?>" class="object__img">
          <img src="<?php echo e(Voyager::image($obj->image)); ?>" alt="<?php echo e($obj->title); ?>">
        </a>
        <div class="object__info">
          <!--<div class="object__info-description"><?php echo e($obj->size); ?>м<sup>2</div>-->
          <div class="object__info-name"><?php echo e($obj->type); ?></div>
          <div class="object__info-address"><?php echo e($obj->address); ?></div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
  </div>
  <a href="/objects" class="my-btn btn-gold">все объекты</a>
</div>
</section>

<section class="contact">
<div class="container">
    <div class="contact__info">
        
        <div class="title">Контакты</div> 
        <div class="address">
            <?php $__currentLoopData = $adresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($adress->sort_id == 2): ?>
                    <?php echo e($adress->value); ?>

                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div> 
        
        <div class="contact_link">
            <?php $__currentLoopData = $allPhones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allPhone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($allPhone->sort_id == 2): ?>
                <a href="tel:<?php echo e($allPhone->link); ?>"><?php echo e($allPhone->value); ?></a>
                <?php endif; ?>
                <?php if($allPhone->sort_id == 3): ?>
                <a href="tel:<?php echo e($allPhone->link); ?>"><?php echo e($allPhone->value); ?></a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
        
        <div class="address">
            <?php $__currentLoopData = $adresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($adress->sort_id == 1): ?>
                    <?php echo e($adress->value); ?>

                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div> 
        
        <div class="contact_link">
            
            <a href="tel:<?php echo e($phone->link); ?>"><?php echo e($phone->value); ?></a> 
        </div>
        <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="mailto:<?php echo e($email->link); ?>"><?php echo e($email->value); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  <!--<div class="contact__info">-->
  <!--  <div class="title">Контакты</div>-->
  <!--  <?php $__currentLoopData = $allPhones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allPhone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
  <!--    <a href="tel:<?php echo e($allPhone->link); ?>"><?php echo e($allPhone->value); ?></a>-->
  <!--  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
  <!--  <?php $__currentLoopData = $adresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
  <!--    <div class="address"><?php echo e($adress->value); ?></div>-->
  <!--  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
  <!--  <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
  <!--    <a href="mailto:<?php echo e($email->link); ?>"><?php echo e($email->value); ?></a>-->
  <!--  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
  <!--</div>-->
</div>
<div class="contact__maps">
  <?php $__currentLoopData = $maps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $map): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $map->value; ?>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/qaz-fasad.testkz.ru/resources/views/pages/home.blade.php ENDPATH**/ ?>