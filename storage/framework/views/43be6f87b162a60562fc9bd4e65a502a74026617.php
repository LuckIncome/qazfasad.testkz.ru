
<?php $__env->startSection('page_title',(strlen($one_object->title) > 1 ? $one_object->title : '')); ?>
<?php $__env->startSection('seo_title', (strlen($one_object->seo_title) > 1 ? $one_object->seo_title : '')); ?>
<?php $__env->startSection('meta_keywords',(strlen($one_object->meta_keywords) > 1 ? $one_object->meta_keywords : '')); ?>
<?php $__env->startSection('meta_description', (strlen($one_object->meta_description) > 1 ? $one_object->meta_description : '')); ?>
<?php $__env->startSection('image',$one_object->image); ?>
<?php $__env->startSection('url',url()->current()); ?>
<?php $__env->startSection('page_class','page'); ?>
<?php $__env->startSection('content'); ?>

<section class="navigation">
  <?php echo $__env->make('partials.breadcrumbs',['title'=>(strlen($page->seo_title) > 1 ? $page->seo_title : ''), 'titleLink' => '/objects', 'subtitle' => $one_object->title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="container">
    <div class="title"><h1><?php echo e($one_object->title); ?></h1></div>
  </div>
</section>

<section class="object-item">
    <div class="container">
      <div class="object-item__slider">
        <div class="object-item__slider-for">
          <?php $__currentLoopData = json_decode($one_object->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img_big): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img src="<?php echo e(Voyager::image($img_big)); ?>" alt="<?php echo e($one_object->title); ?>">
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="object-item__slider-arrows">
          <div class="arrows object-left"><i class="bi bi-chevron-left"></i></div>
          <div class="arrows object-right"><i class="bi bi-chevron-right"></i></div>
        </div>
      </div>
      <div class="object-item__slider-nav">
        <?php $__currentLoopData = json_decode($one_object->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <img src="<?php echo e(Voyager::image($img)); ?>" alt="<?php echo e($one_object->title); ?>">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="object-item__info">
        <div class="next-link">
          <!--<a href="object.html?id-1">Следующий объект <i class="bi products-right bi-chevron-right"></i></a>-->
        </div>
        <div class="content">
          <div class="object-item__description">
            <div class="object-item__title">Материал:</div>
            <div class="object-item__text">
              <?php echo $one_object->description; ?>

            </div>
          </div>
          <div class="object-item__specifications">
            <div class="object-item__title">Город:</div>
            <div class="object-item__text-bold"><?php echo e($one_object->city); ?></div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="objects object-page">
    <div class="container">
      <div class="title">ПОхожие объекты</div>
      <div class="objects__slider">
        <?php $__currentLoopData = $objects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="object">
            <a href="/objects/<?php echo e($obj->slug); ?>" class="object__img">
              <img src="<?php echo e(Voyager::image($obj->image)); ?>" alt="<?php echo e($obj->title); ?>">
            </a>
            <div class="object__info">
              <!--<div class="object__info-description"><?php echo e($obj->size); ?>м<sup>2</sup></div>-->
              <div class="object__info-name"><?php echo e($obj->type); ?></div>
              <div class="object__info-address"><?php echo e($obj->address); ?></div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/qaz-fasad.testkz.ru/resources/views/pages/objects/show.blade.php ENDPATH**/ ?>