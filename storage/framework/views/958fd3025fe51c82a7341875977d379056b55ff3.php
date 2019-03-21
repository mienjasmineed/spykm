<style>

</style>
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-xs-12">
                <div class="box box-primary">
                        <div class="box-header">
                                <h3 class="box-title">BUTIRAN MURID</h3>
                        </div>

<div class="showstud" >
    <table width="90%">
    <tr>
   <td><h4 class="col-sm-10 control-label"><b>Nama Penuh :</b></h4></td>
   <td><h4><?php echo e($students->stud_name); ?></h4></td>
    </tr>
    <tr>
   <td><h4 class="col-sm-10 control-label"><b>Umur :</b></h4></td>
   <td><h4><?php echo e($students->stud_age); ?></h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>MyKID/ Surat Beranak :</b></h4></td>
    <td><h4><?php echo e($students->stud_mykid); ?></h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Kelas :</b></h4></td>
    <td><h4><?php echo e($students->stud_class); ?></td>
    </tr>
    <tr>
    <td><b><h4 class="col-sm-10 control-label">Alamat : </b></h4></td>
    <td><h4><?php echo e($students->stud_address); ?></h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Nama Bapa : </b></h4></td>
    <td><h4><?php echo e($students->father_name); ?></h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>IC Bapa :</b></h4></td>
    <td><h4><?php echo e($students->father_ic); ?></h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>No. Tel Bapa : </b></h4></td>
    <td><h4><?php echo e($students->father_phone); ?></h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Email Bapa : </b></h4></td>
    <td><h4><?php echo e($students->father_email); ?></h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Pekerjaan Bapa : </b></h4></td>
    <td><h4><?php echo e($students->father_job); ?></h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Nama Ibu : </b></h4></td>
    <td><h4><?php echo e($students->mother_name); ?></h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>IC Ibu :</b></h4></td>
    <td><h4><?php echo e($students->mother_ic); ?></h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>No. Tel Ibu : </b></h4></td>
    <td><h4><?php echo e($students->mother_phone); ?></h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Email Ibu : </b></h4></td>
    <td><h4><?php echo e($students->mother_email); ?></h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Pekerjaan Ibu: </b></h4></td>
    <td><h4><?php echo e($students->mother_job); ?></h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Gambar Murid: </b></h4></td>
    <td><h4><?php echo e($students->stud_img); ?></h4></td>
    </tr>
    </table>

    <section class="img">
            <h4 class="col-sm-10 control-label"><b>Gambar Murid: </b></h4>
            <img class="img-responsive"  style="width:40%; height:20%" src="storage/stud_img/<?php echo e($students->stud_img); ?>"><br>
        </section>
    
   <div align="right">
   
    <?php echo Form::open(['action'=>['StudentsController@destroy',$students->stud_id],'method'=>'POST','enctype'=>'multipart/form-data']); ?>

    <?php echo e(Form::hidden('_method','DELETE')); ?>

    <?php echo e(Form::submit('Delete',['class'=>'btn btn-danger'])); ?>

    <a href="<?php echo e(route('admin.student.index')); ?>" class="btn btn-primary">Go Back</a><br><br>
    <?php echo Form::close(); ?>

    </div>



</div></div></div></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('multiauth::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>