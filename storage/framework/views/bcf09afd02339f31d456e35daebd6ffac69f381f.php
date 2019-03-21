 
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading bg-info text-white">
                    Roles
                    <span class="pull-right">
                        <a href="<?php echo e(route('admin.role.create')); ?>" class="btn btn-sm btn-success">New Role</a>
                    </span>
                </div>

                <div class="panel-body">
                    <?php echo $__env->make('multiauth::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <ol class="list-group">
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo e($role->name); ?>


                            <span class="badge badge-primary badge-pill"><?php echo e($role->admins->count()); ?> <?php echo e(ucfirst(config('multiauth.prefix'))); ?></span>
                            <div class="pull-right">
                                
                                <a href="" class="btn btn-sm btn-default" onclick="event.preventDefault(); document.getElementById('delete-form-<?php echo e($role->id); ?>').submit();">Delete</a>

                                <form id="delete-form-<?php echo e($role->id); ?>" action="<?php echo e(route('admin.role.delete',$role->id)); ?>" method="POST" style="display: none;">
                                    @csrf  @method('delete')
                                </form>

                                <a href="<?php echo e(route('admin.role.edit',$role->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('multiauth::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>