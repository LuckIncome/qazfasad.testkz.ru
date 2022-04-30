
<?php $__env->startSection('page_title',(strlen($one_product->title) > 1 ? $one_product->title : '')); ?>
<?php $__env->startSection('seo_title', (strlen($one_product->seo_title) > 1 ? $one_product->seo_title : '')); ?>
<?php $__env->startSection('meta_keywords',(strlen($one_product->meta_keywords) > 1 ? $one_product->meta_keywords : '')); ?>
<?php $__env->startSection('meta_description', (strlen($one_product->meta_description) > 1 ? $one_product->meta_description : '')); ?>
<?php $__env->startSection('image',$one_product->image); ?>
<?php $__env->startSection('url',url()->current()); ?>
<?php $__env->startSection('page_class','page'); ?>
<?php $__env->startSection('content'); ?>

<section class="navigation">
  <?php echo $__env->make('partials.breadcrumbs',['title'=>(strlen($page->seo_title) > 1 ? $page->seo_title : ''), 'titleLink' => '/products', 'subtitle' => $one_product->title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="container">
    <div class="title"><?php echo e($one_product->title); ?></div>
  </div>
</section>

<section class="product-item">
    <div class="container">
      <div class="product-item__main">
        <div class="product-item__img">
          <img src="<?php echo e(Voyager::image($one_product->image)); ?>" alt="<?php echo e($one_product->title); ?>">
        </div>
        <div class="content">
          <div class="product-item__name"><?php echo e($one_product->title); ?></div>
          <div class="product-item__short-description">
            <span><?php echo e($one_product->type); ?></span>
            <span><?php echo e($one_product->model); ?></span>
          </div>
          <div class="product-item__title">Размеры:</div>
          <div class="d-flex">
            <div class="product-item__description-name">Длина, мм:</div>
            <div class="product-item__description"><?php echo e($one_product->length); ?></div>
          </div>
          <div class="d-flex">
            <div class="product-item__description-name">Ширина, мм:</div>
            <div class="product-item__description"><?php echo e($one_product->width); ?></div>
          </div>
          <div class="d-flex">
            <div class="product-item__description-name">Толщина, мм:</div>
            <div class="product-item__description"><?php echo e($one_product->thickness); ?></div>
          </div>
          <button class="my-btn btn-gold-full" data-bs-toggle="modal" data-bs-target="#appModal">Узнать цену</button>
        </div>
      </div>
      <div class="product-item__content">
        <div class="product-item__title">Характеристики:</div>
        <div class="d-flex">
          <div class="product-item__description-name">Характеристика 1:</div>
          <div class="product-item__description"><?php echo e($one_product->characteristic_one); ?></div>
        </div>
        <div class="d-flex">
          <div class="product-item__description-name">Характеристика 2:</div>
          <div class="product-item__description"><?php echo e($one_product->characteristic_second); ?></div>
        </div>
        <div class="d-flex">
          <div class="product-item__description-name">Характеристика 3:</div>
          <div class="product-item__description"><?php echo e($one_product->characteristic_third); ?></div>
        </div>
      </div>
      <div class="product-item__content">
        <div class="product-item__title">Описание:</div>
        <div class="product-item__description description-mini">
          <?php echo $one_product->description; ?>

        </div>
      </div>
    </div>
</section>

<section class="products products-recommendations">
	<div class="container">
	  <div class="title">вам также может понравиться</div>
	  <div class="products__slider">
	  	<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <div class="product">
	      <a href="/products/<?php echo e($product->slug); ?>" class="product__img"><img src="<?php echo e(Voyager::image($product->image)); ?>" alt="<?php echo e($product->title); ?>"></a>
	      <div class="product__name"><?php echo e($product->title); ?></div>
	      <div class="product__description">
	        <span><?php echo e($product->type); ?></span>
	        <span><?php echo e($product->model); ?></span>
	      </div>
	    </div>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 		    
	  </div>
	  <div class="products__slider-arrows">
	    <button><i class="bi products-left bi-chevron-left"></i></button>
	    <div class="products__slider-dots"></div>
	    <button><i class="bi products-right bi-chevron-right"></i></button>
	  </div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\qaz-fasad.testkz.ru\resources\views/pages/products/show.blade.php ENDPATH**/ ?>