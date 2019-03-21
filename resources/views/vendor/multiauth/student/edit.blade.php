@extends('multiauth::layouts.master') 
@section('content')

<h2><b> Edit Volunterism Form</b></h2>
<br>
{!! Form::open(['action' => ['VolunteersController@update', $volunteers->id], 'method' => 'PUT']) !!}
<div class="volform" border="1">
    <div class ="volunteerform">
        {{Form::label('volName', 'Name :')}}
        {{Form::text('volName', $volunteers->volName, ['class' => 'kotakkotak', 'placeholder' => 'Name'])}}
    </div>

    <div class ="volunteerform">
                {{Form::label('volPhone', 'Phone Number :')}}
                {{Form::text('volPhone', $volunteers->volPhone, ['class' => 'kotaksmall', 'placeholder' => '01xxxxxxxx', 'pattern'=>"\(01)[0-9]{9}/", 'required' ])}}
    </div>

    <div class ="volunteerform">
        {{Form::label('volEmail', 'Email :')}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{Form::text('volEmail', $volunteers->volEmail, ['class' => 'kotaksmall', 'placeholder' => 'Email' ])}}
    </div>

    <div class ="volunteerform">
            {{Form::label('volAddress', 'Address :')}}<br>
            {{Form::textarea('volAddress', $volunteers->volAddress, ['class' => 'kotakbesar', 'placeholder' => 'Address' ])}}
    </div>
    
    <div class="volunteerform">
        {{Form::label('volStatus', 'Status :')}}
        <select name="volStatus" style="margin-left:12%" class="kotaksmall">
                <option value="null">Please Select</option>
                <option value="Accept">Accept</option>
                <option value="Decline">Decline</option>
        </select>
    </div>

    <div class ="volunteerform">
        {{Form::label('program_id', 'Program Name :')}}
        {{Form::select('program_id', $programid=App\Program::pluck('programName', 'id'), null, ['class'=>'kotaksmall'])}}
    <br>
    </div>
    

    <div class="volunteerform" align="right">
            <a href="/volunteers" class="btn btn-primary">Go Back</a>
    {{Form::submit('Update', ['class'=> 'btn btn-success'])}}
    </div>
   


{!! Form::close() !!}
</div>
