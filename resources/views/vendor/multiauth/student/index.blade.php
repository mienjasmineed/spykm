@extends('multiauth::layouts.master')
@section('content')
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
                    <a href="{{ route('admin.student.create') }}" class="btn btn-sm btn-success">Murid Baru</a>
            </span>
            
            </div>

<br>
@include('multiauth::message')
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
        @foreach ($students as $student)
        <tr>
            
            <td>{{ $student->stud_name }}</td>
            <td>{{ $student->stud_age }}</td>
            <td>{{ $student->stud_mykid }}</td>
            <td>{{ $student->stud_class }}</td>
            <td>{{ $student->stud_address }}</td>
            
            
            <td><a href="../admin/student/{{$student->stud_id}}" class="btn btn-success">Show</a></td>
            <td><a href="../admin/student/{{$student->stud_id}}/edit" class="btn btn-primary">Edit</a></td>
            <td>{!!Form::open(['action'=>['StudentsController@destroy',$student->stud_id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
            {!!Form::close()!!}</td>
                        
        </tr>
        @endforeach
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


@endsection