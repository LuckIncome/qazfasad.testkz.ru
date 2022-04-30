
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
		<div class="title"><h1><?php echo e($page->title); ?></h1></div>
	</div>
</section>
	
<section class="products-page">
    <div class="container">
        <div class="nav flex-column nav-pills">
          <?php $__currentLoopData = $productTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="tab-link <?php if($loop->first): ?> active <?php endif; ?>" data-bs-toggle="pill" data-bs-target="#v-pills-tab-<?php echo e($productType->sort_id); ?>" >
            <span><?php echo e($productType->title); ?></span>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
        </div>
        <div class="tab-content">
          <?php $__currentLoopData = $productTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="tab-pane fade <?php if($loop->first): ?> show active <?php endif; ?>" id="v-pills-tab-<?php echo e($productType->sort_id); ?>">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($productType->id == $product->type_id): ?>
                <div class="product">
                  <div class="product__img"><img src="<?php echo e(Voyager::image($product->image)); ?>" alt="<?php echo e($product->title); ?>"></div>
                  <div class="product__name"><?php echo e($product->title); ?></div>
                  <a href="/products/<?php echo e($product->slug); ?>" class="product__link">Подробнее</a>
                </div>  
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
        </div>       
    </div>		
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/qaz-fasad.testkz.ru/resources/views/pages/products/index.blade.php ENDPATH**/ ?>