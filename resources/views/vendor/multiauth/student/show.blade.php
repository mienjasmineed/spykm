@extends('multiauth::layouts.master')
<style>

</style>
@section('content')
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
   <td><h4>{{$students->stud_name}}</h4></td>
    </tr>
    <tr>
   <td><h4 class="col-sm-10 control-label"><b>Umur :</b></h4></td>
   <td><h4>{{$students->stud_age}}</h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>MyKID/ Surat Beranak :</b></h4></td>
    <td><h4>{{$students->stud_mykid}}</h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Kelas :</b></h4></td>
    <td><h4>{{$students->stud_class}}</td>
    </tr>
    <tr>
    <td><b><h4 class="col-sm-10 control-label">Alamat : </b></h4></td>
    <td><h4>{{$students->stud_address}}</h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Nama Bapa : </b></h4></td>
    <td><h4>{{$students->father_name}}</h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>IC Bapa :</b></h4></td>
    <td><h4>{{$students->father_ic}}</h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>No. Tel Bapa : </b></h4></td>
    <td><h4>{{$students->father_phone}}</h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Email Bapa : </b></h4></td>
    <td><h4>{{ $students->father_email}}</h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Pekerjaan Bapa : </b></h4></td>
    <td><h4>{{$students->father_job}}</h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Nama Ibu : </b></h4></td>
    <td><h4>{{$students->mother_name}}</h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>IC Ibu :</b></h4></td>
    <td><h4>{{$students->mother_ic}}</h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>No. Tel Ibu : </b></h4></td>
    <td><h4>{{$students->mother_phone}}</h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Email Ibu : </b></h4></td>
    <td><h4>{{$students->mother_email}}</h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Pekerjaan Ibu: </b></h4></td>
    <td><h4>{{$students->mother_job}}</h4></td>
    </tr>
    <tr>
    <td><h4 class="col-sm-10 control-label"><b>Gambar Murid: </b></h4></td>
    <td><h4>{{$students->stud_img}}</h4></td>
    </tr>
    </table>

    <section class="img">
            <h4 class="col-sm-10 control-label"><b>Gambar Murid: </b></h4>
            <img class="img-responsive"  style="width:40%; height:20%" src="storage/stud_img/{{$students->stud_img}}"><br>
        </section>
    
   <div align="right">
   
    {!!Form::open(['action'=>['StudentsController@destroy',$students->stud_id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    <a href="{{ route('admin.student.index') }}" class="btn btn-primary">Go Back</a><br><br>
    {!!Form::close()!!}
    </div>



</div></div></div></div>
@endsection