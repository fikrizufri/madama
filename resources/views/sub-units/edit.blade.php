@extends('layouts.admin')

@section('content')
 
        <div class="row">
        <div class="col-md-12">
            <div class="box-widget widget-module">
                <div class="widget-head clearfix">
                    <span class="h-icon"><i class="fa fa-bars"></i></span>
                    <h4>Edit</h4>
                </div>
                <div class="widget-container">
                    <div class=" widget-block">
                    {!! Form::model($data,
                    ['method' => 'PATCH',
                        'action' => [$controller.'@update', $data->id],
                        'files' => 'true',
                        'class' => 'form-horizontal']) !!}
                        @include('sub-units.form')
                        
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection