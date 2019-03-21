<?php $__env->startSection('content'); ?>
        <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title"><?php echo e(ucfirst(config('multiauth.prefix'))); ?> Dashboard</h3></div>

                <div class="box-body">
                    <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?> You are logged in to <?php echo e(config('multiauth.prefix')); ?> side!
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('multiauth::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>