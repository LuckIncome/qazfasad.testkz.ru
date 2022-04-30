
<?php $__env->startSection('page_title',(strlen($page->title) > 1 ? $page->title : '')); ?>
<?php $__env->startSection('seo_title', (strlen($page->seo_title) > 1 ? $page->seo_title : '')); ?>
<?php $__env->startSection('meta_keywords',(strlen($page->meta_keywords) > 1 ? $page->meta_keywords : '')); ?>
<?php $__env->startSection('meta_description', (strlen($page->meta_description) > 1 ? $page->meta_description : '')); ?>
<?php $__env->startSection('image',$page->thumbic); ?>
<?php $__env->startSection('url',url()->current()); ?>
<?php $__env->startSection('page_class','page'); ?>
<?php $__env->startSection('content'); ?>

<section class="navigation">
	<?php echo $__env->make('partials.breadcrumbs',['title'=>(strlen($page->seo_title) > 1 ? $page->seo_title : '')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<div class="container">
		<div class="title" ><h1><?php echo e($page->title); ?></h1></div>
	</div>
</section>

<section class="company-info">
	<div class="container">
	  <div class="big-text">
      <?php echo e($text->description); ?>	    
	  </div>
	  <div class="content">
	    <div class="small-text">
	      <?php echo e($text->excerpt); ?>

	    </div>
	    <button class="my-btn btn-gold-full" data-bs-toggle="modal" data-bs-target="#appModal">Оставить заявку</button>
	  </div>
	</div>
</section>

<section class="company-advantage">
<div class="container">
  <div class="company-advantage__items">
      <?php $__currentLoopData = $icontexts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icontext): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  	    <div class="company-advantage__item">
  	      <div class="num"><img src="<?php echo e(Voyager::image($icontext->icon)); ?>" alt="<?php echo e($icontext->title); ?>"></div>
  	      <div class="text"><?php echo $icontext->title; ?></div>
  	    </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</div>
</section>

<section class="company-content">
<div class="container">
  <div class="big-text">
    <?php echo $text->content; ?>

  </div>
</div>
</section>

<section class="company-certificates">
<div class="container">
  <div class="company-certificates__slider">
    <?php $__currentLoopData = $certificates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $certificate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="certificate">
      <img src="<?php echo e(Voyager::image($certificate->icon)); ?>" alt="<?php echo e($certificate->title); ?>">
      <div class="text">
        <?php echo e(substr("$certificate->text", 0, 55)); ?>

      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
  </div>
  <div class="company-certificates__slider-arrows">
    <button><i class="bi company-certificates-left bi-chevron-left"></i></button>
    <div class="company-certificates__slider-dots"></div>
    <button><i class="bi company-certificates-right bi-chevron-right"></i></button>
  </div>
</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/qaz-fasad.testkz.ru/resources/views/pages/about.blade.php ENDPATH**/ ?>