<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">MAKLUMAT MURID</h3>
              <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control pull-right" placeholder="Cari">
    
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                  
            </div><br>
            <div class="box-tools">
            <span class="pull-right" style="width: 95px;">
                    <a href="<?php echo e(route('admin.student.create')); ?>" class="btn btn-sm btn-success">Murid Baru</a>
            </span>
            
            </div>

<br>
<?php echo $__env->make('multiauth::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<table class="table table-bordered table-striped ">
    <thead>
        <tr>
           
            <th>Nama Penuh</th>
            <th>Umur</th>
            <th>MyKID</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th colspan="3">Butiran & Tindakan</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            
            <td><?php echo e($student->stud_name); ?></td>
            <td><?php echo e($student->stud_age); ?></td>
            <td><?php echo e($student->stud_mykid); ?></td>
            <td><?php echo e($student->stud_class); ?></td>
            <td><?php echo e($student->stud_address); ?></td>
            
            
            <td><a href="../admin/student/<?php echo e($student->stud_id); ?>" class="btn btn-success">Show</a></td>
            <td><a href="../admin/student/<?php echo e($student->stud_id); ?>/edit" class="btn btn-primary">Edit</a></td>
            <td><?php echo Form::open(['action'=>['StudentsController@destroy',$student->stud_id],'method'=>'POST','enctype'=>'multipart/form-data']); ?>

            <?php echo e(Form::hidden('_method','DELETE')); ?>

            <?php echo e(Form::submit('Delete',['class'=>'btn btn-danger'])); ?>

            <?php echo Form::close(); ?></td>
                        
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('multiauth::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>