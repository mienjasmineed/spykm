 
<style>
    .form{
        width: 100%;
        padding: 6px ;
        border: 1px solid #ccc;
        margin: 8px 0;
        border-radius: 4px;
        resize: none;
    }
    .formshort{
        width: 40%;
        padding: 6px ;
        border: 1px solid #ccc;
        margin: 8px 0;
        border-radius: 4px;
        resize: none;
    }
    
    textarea{
        width: 100%;
        height: 100px;
        padding: 12px 20px ;
        border: 1px solid #ccc;
        margin: 8px 0;
        border-radius: 4px;
        resize: none;
    }
</style>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
                <div class="box-header with-border">
<h3 class="box-title"> Borang Daftar Murid</h3>
<br></div>
<?php echo Form::open(['action' => 'StudentsController@store', 'method' => 'POST']); ?>

<div class="form-horizontal">
<div class="box-body" border="1" >
    <div class ="studform">
        <?php echo e(Form::label('stud_name', 'Nama Penuh :', ['class'=> 'col-sm-2 control-label'])); ?>

        <div class="col-sm-10">
        <?php echo e(Form::text('stud_name', '', ['class' => 'form', 'placeholder' => 'Nama Penuh Murid'])); ?></div>
    </div>
    <div class ="studform">
                <?php echo e(Form::label('stud_age', 'Umur :', ['class'=> 'col-sm-2 control-label'])); ?>

                <div class="col-sm-10">
                <?php echo e(Form::number('stud_age', '', ['class' => 'formshort', 'placeholder' => 'Umur Murid'])); ?>  Tahun</div>
        </div>
    <div class ="studform">
            <?php echo e(Form::label('stud_mykid', 'No. MyKID/Surat Beranak :', ['class'=> 'col-sm-2 control-label'])); ?>

            <div class="col-sm-10">
            <?php echo e(Form::text('stud_mykid', '', ['class' => 'formshort', 'placeholder' => ''])); ?></div>
        
    </div>
    <div class ="studform">
        <?php echo e(Form::label('stud_class', 'Kelas :', ['class'=> 'col-sm-2 control-label'])); ?>

        <div class="col-sm-10">
        <?php echo e(Form::text('stud_class', '', ['class' => 'formshort', 'placeholder' => ''])); ?></div>
  </div>          

    <div class ="studform">
            <?php echo e(Form::label('stud_address', 'Alamat :', ['class'=> 'col-sm-2 control-label'])); ?>

            <div class="col-sm-10">
            <?php echo e(Form::textarea('stud_address', '', ['class' => '', 'placeholder' => '' ])); ?></div>
    </div>
    <br><br>
    <p><strong>MAKLUMAT IBUBAPA</strong></p>
    <div class ="studform">
        <?php echo e(Form::label('father_name', 'Nama Bapa :', ['class'=> 'col-sm-2 control-label'])); ?>

        <div class="col-sm-10">
        <?php echo e(Form::text('father_name', '', ['class' => 'form', 'placeholder' => ''])); ?></div>
</div>
<div class ="studform">
        <?php echo e(Form::label('father_ic', 'No K/P :', ['class'=> 'col-sm-2 control-label'])); ?>

        <div class="col-sm-10">
        <?php echo e(Form::text('father_ic', '', ['class' => 'formshort', 'placeholder' => ''])); ?></div>
</div>
<div class ="studform">
        <?php echo e(Form::label('father_email', 'Emel Bapa :', ['class'=> 'col-sm-2 control-label'])); ?>

        <div class="col-sm-10">
        <?php echo e(Form::email('father_email', '', ['class' => 'formshort', 'placeholder' => ''])); ?></div>
</div>
<div class ="studform">
        <?php echo e(Form::label('father_phone', 'No. Tel Bapa :', ['class'=> 'col-sm-2 control-label'])); ?>

        <div class="col-sm-10">
        <?php echo e(Form::tel('father_phone', '', ['class' => 'formshort', 'placeholder' => ''])); ?></div>
</div>
<div class ="studform">
        <?php echo e(Form::label('father_job', 'Pekerjaan Bapa :', ['class'=> 'col-sm-2 control-label'])); ?>

        <div class="col-sm-10">
        <?php echo e(Form::text('father_job', '', ['class' => 'form', 'placeholder' => ''])); ?></div>
</div>
<div class ="studform">
        <?php echo e(Form::label('mother_name', 'Nama Ibu :', ['class'=> 'col-sm-2 control-label'])); ?>

        <div class="col-sm-10">
        <?php echo e(Form::text('mother_name', '', ['class' => 'form', 'placeholder' => ''])); ?></div>
</div>
<div class ="studform">
        <?php echo e(Form::label('mother_ic', 'No K/P :', ['class'=> 'col-sm-2 control-label'])); ?>

        <div class="col-sm-10">
        <?php echo e(Form::text('mother_ic', '', ['class' => 'formshort', 'placeholder' => ''])); ?></div>
</div>
<div class ="studform">
        <?php echo e(Form::label('mother_email', 'Emel Ibu :', ['class'=> 'col-sm-2 control-label'])); ?>

        <div class="col-sm-10">
        <?php echo e(Form::email('mother_email', '', ['class' => 'formshort', 'placeholder' => ''])); ?></div>
</div>
<div class ="studform">
        <?php echo e(Form::label('mother_phone', 'No. Tel Ibu :', ['class'=> 'col-sm-2 control-label'])); ?>

        <div class="col-sm-10">
        <?php echo e(Form::tel('mother_phone', '', ['class' => 'formshort', 'placeholder' => ''])); ?></div>
</div>
<div class ="studform">
        <?php echo e(Form::label('mother_job', 'Pekerjaan Ibu :', ['class'=> 'col-sm-2 control-label'])); ?>

        <div class="col-sm-10">
        <?php echo e(Form::text('mother_job', '', ['class' => 'form', 'placeholder' => ''])); ?></div>
</div>
<div class="form-group">
        <?php echo e(Form::label('stud_img', 'Muat Naik Gambar :', ['class'=> 'col-sm-2 control-label'])); ?>

        <div class="col-sm-10"> &nbsp;
        <?php echo e(Form::file('stud_img')); ?></div>
</div>

<div class="box-footer" align="right">
    <?php echo e(Form::submit('Submit', ['class'=> 'btn btn-primary'])); ?>

</div>
   


<?php echo Form::close(); ?>

</div>

                </div>
            </div>
        </div>
</div>
</div></div></div></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('multiauth::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>