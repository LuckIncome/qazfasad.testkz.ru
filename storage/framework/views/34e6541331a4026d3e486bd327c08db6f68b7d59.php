
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
</section>

<section class="contact-page">
<div class="container">
  <div class="content">
    <div class="title"><h1><?php echo e($page->title); ?></h1></div>
    
    <!--<div class="item">-->
    <!--  <div class="icon"><img src="<?php echo e(asset('assets/icons/call.svg')); ?>" alt="call"></div>-->
    <!--  <div class="info">-->
    <!--  	<?php $__currentLoopData = $allPhones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allPhone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
    <!--      <a href="tel:<?php echo e($allPhone->link); ?>"><?php echo e($allPhone->value); ?></a>-->
    <!--    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
    <!--  </div>-->
    <!--</div>-->
    <!--<div class="item">-->
    <!--  <div class="icon"><img src="<?php echo e(asset('assets/icons/location.svg')); ?>" alt="location"></div>-->
    <!--  <div class="info">-->
    <!--  	<?php $__currentLoopData = $adresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
    <!--    	<div class="address"><?php echo e($adress->value); ?></div>-->
    <!--    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
    <!--  </div>-->
    <!--</div>-->
    <div class="item-grop">
        
        <div class="item">
            <div class="item-info">
              <div class="icon"><img src="<?php echo e(asset('assets/icons/location.svg')); ?>" alt="location"></div>
              <div class="info">
                	<div class="address">
                	    <?php $__currentLoopData = $adresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($adress->sort_id == 2): ?>
                                <?php echo e($adress->value); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                	</div>
              </div>
            </div>
            <div class="item-info">
              <div class="icon"><img src="<?php echo e(asset('assets/icons/call.svg')); ?>" alt="location"></div>
              <div class="info">
                    <?php $__currentLoopData = $allPhones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allPhone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($allPhone->sort_id == 2): ?>
                        <a href="tel:<?php echo e($allPhone->link); ?>"><?php echo e($allPhone->value); ?></a>
                        <?php endif; ?>
                        <?php if($allPhone->sort_id == 3): ?>
                        <a href="tel:<?php echo e($allPhone->link); ?>"><?php echo e($allPhone->value); ?></a>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                	
              </div>
            </div>
                
        </div>
        
        <div class="item">
            
            <div class="item-info">
              <div class="icon"><img src="<?php echo e(asset('assets/icons/location.svg')); ?>" alt="location"></div>
              <div class="info">
                	<div class="address">
                	    <?php $__currentLoopData = $adresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($adress->sort_id == 1): ?>
                                <?php echo e($adress->value); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                	</div>
              </div>
            </div>
            <div class="item-info">
              <div class="icon"><img src="<?php echo e(asset('assets/icons/call.svg')); ?>" alt="location"></div>
              <div class="info">
                	
                	<a href="tel:<?php echo e($phone->link); ?>"><?php echo e($phone->value); ?></a>
              </div>
            </div>
            
        </div>
        
    </div>
    
    <div class="item-grop">
        <div class="item">
        <div class="item-info">
          <div class="icon"><img src="<?php echo e(asset('assets/icons/email.svg')); ?>" alt="email"></div>
          <div class="info">
          	<?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	<a href="mailto:<?php echo e($email->link); ?>"><?php echo e($email->value); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
         </div>
    </div>
    </div>
    
  </div> 
  
  <form id="requestFor1" action="<?php echo e(route('feedback')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="contact-page-title">Получить консультацию</div>
    <div class="d-flex flex-column">
        <input class="input" type="text" name="name" id="name" placeholder="Ваше имя*" required>
        <input class="input" type="tel" name="phone" id="number" placeholder="Номер телефона*" required>
        <input class="input" type="text" name="email" id="email" placeholder="Введите свой E-mail" required>
    </div>
    <input type="hidden" name="page" value="">
    <input type="hidden" name="url" value="<?php echo e(url()->current()); ?>">
    <button type="submit" class="my-btn btn-gold-full">Получить консультацию</button>
  </form>

</div>
</section>

<section class="contact-page-maps">
	<?php $__currentLoopData = $maps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $map): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo $map->value; ?>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/qazfasad.kz/httpdocs/resources/views/pages/contacts.blade.php ENDPATH**/ ?>