 
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading bg-info text-white">Add New Role</div>

                <div class="panel-body">
    <?php echo $__env->make('multiauth::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <form action="<?php echo e(route('admin.role.store')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="role">Role Name</label>
                            <input type="text" placeholder="Give an awesome name for role" name="name" class="form-control" id="role" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Store</button>
                        <a href="<?php echo e(route('admin.roles')); ?>" class="btn btn-sm btn-danger pull-right">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('multiauth::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>