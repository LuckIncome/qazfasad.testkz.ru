
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
		<div class="title"><?php echo e($page->title); ?></div>
	</div>
</section>

<section class="objects objects-page">
    <div class="container">
      <div class="objects__items">
        <?php $__currentLoopData = $objects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $object): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="object">
            <a href="objects/<?php echo e($object->slug); ?>" class="object__img">
              <img src="<?php echo e(Voyager::image($object->image)); ?>" alt="<?php echo e($object->title); ?>">
            </a>
            <div class="object__info">
              <div class="object__info-description"><?php echo e($object->size); ?></div>
              <div class="object__info-name"><?php echo e($object->type); ?></div>
              <div class="object__info-address"><?php echo e($object->address); ?></div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>       
      </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\qaz-fasad.testkz.ru\resources\views/pages/objects/index.blade.php ENDPATH**/ ?>