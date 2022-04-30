
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

<section class="objects objects-page">
    <div class="container">
    <table class="table">
    <tbody>
        <?php $__currentLoopData = $instructions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instruction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>		
			<?php $__currentLoopData = json_decode($instruction->file, false, 512, JSON_UNESCAPED_UNICODE); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-start" style="padding-top:25px;"><p><?php echo e($instruction->title); ?></p></td>
                    <td class="text-end"><a class="btn btn-dark" href="/storage/<?php echo e($item->download_link); ?>" style="padding-right:70px;padding-left:70px;" >Скачать</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/qazfasad.kz/httpdocs/resources/views/pages/instruction.blade.php ENDPATH**/ ?>