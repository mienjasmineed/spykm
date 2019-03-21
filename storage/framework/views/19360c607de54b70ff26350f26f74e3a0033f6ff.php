 
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit this Role</div>

                <div class="panel-body">
                    <form action="<?php echo e(route('admin.role.update', $role->id)); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('patch')); ?>

                        <div class="form-group">
                            <label for="role">Role Name</label>
                            <input type="text" autofocus value="<?php echo e($role->name); ?>" name="name" class="form-control" id="role">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Change</button>
                        <a href="<?php echo e(route('admin.roles')); ?>" class="btn btn-danger btn-sm pull-right">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('multiauth::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>