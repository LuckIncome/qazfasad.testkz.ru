<!-- Modal start -->
  <div class="modal fade" id="appModal" tabindex="-1" aria-labelledby="appModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Оставить заявку</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="requestFor" action="<?php echo e(route('feedback')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <div class="modal-body">          
              <div class="mb-3">
                <label for="name" class="col-form-label">Имя*:</label>
                <input type="text" name="name" id="name" class="form-control"  required>
                <label for="number" class="col-form-label">Номер телефона*:</label>
                <input type="tel" name="phone" id="number" class="form-control"  required>
                <label for="email" class="col-form-label">E-mail:</label>
                <input type="text" name="email" id="email" class="form-control" required>
                <input type="hidden" name="page" value="">
                <input type="hidden" name="url" value="<?php echo e(url()->current()); ?>">
              </div>         
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            <button type="submit" class="btn btn-primary">Отправить</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- Modal end -->

<!-- modal thanks start -->
<div class="modal fade" id="m-subscribed" tabindex="-1" role="dialog"
   aria-labelledby="appModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-body">
              <div class="text-center">
                Спасибо!
              </div>
              <div class="text-center">
                  Вы успешно подписались на рассылку.
              </div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
          </div>
      </div>
  </div>
</div>

<div class="modal fade" id="m-thanks" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                  Спасибо!
                </div>
                <div class="text-center">
                    Ваша заявка отправлена.
                    Мы свяжемся с вами в ближайшее время.
                </div>               
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<!-- modal thanks end --><?php /**PATH D:\OpenServer\domains\qaz-fasad.testkz.ru\resources\views/partials/modals.blade.php ENDPATH**/ ?>