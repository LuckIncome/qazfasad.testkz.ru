
<?php $__env->startSection('page_title', __('general.pageNotFound')); ?>
<?php $__env->startSection('seo_title',  __('general.pageNotFound')); ?>
<?php $__env->startSection('meta_keywords', __('general.pageNotFound')); ?>
<?php $__env->startSection('meta_description',  __('general.pageNotFound')); ?>
<?php $__env->startSection('image',env('APP_URL').'/images/og.jpg'); ?>
<?php $__env->startSection('url',url()->current()); ?>
<?php $__env->startSection('page_class','page'); ?>
<?php $__env->startSection('content'); ?>

<div class="d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead">Уважаемый посетитель сайта!</div>
                <div class="mb-4 lead">Запрашиваемая вами страница не существует либо произошла ошибка.</div>
                <div class="mb-4 lead">Если вы уверены в правильности указанного адреса, то данная страница уже не существует на сервере или была переименована.</div>
                <a href="/" class="btn btn-link">Вернуться на главную</a>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('errors.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/qazfasad.kz/httpdocs/resources/views/errors/404.blade.php ENDPATH**/ ?>