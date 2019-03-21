@extends('multiauth::layouts.master')
@section('content')
        <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">{{ ucfirst(config('multiauth.prefix')) }} Dashboard</h3></div>

                <div class="box-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif You are logged in to {{ config('multiauth.prefix') }} side!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection