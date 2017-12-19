@extends('layouts.admin')

@section('content')
 
     <div class="row">
        <div class="col-md-12">
            <div class="box-widget widget-module">
            <div class="widget-head clearfix">
                                <span class="h-icon"><i class="fa fa-bars"></i></span>
                                <h4>Detail Data</h4>
                            </div>
                <div class="widget-container">
                    <div class=" widget-block">
                <label class="col-md-3 control-label">Nama Instansi</label>
                <dl>
                    <dt> {{$data->nama_unit}}</dt>
                </dl>

                <label class="col-md-3 control-label">Status</label>
                <dl>
                    <dt>{{$data->status}}</dt>
                </dl>


                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
<div class="form-group">
    <div class="col-sm-8 col-sm-offset-4">
        
        <a class="btn btn-primary" href="{{route('sub-units.index')}}">Kembali</a>
    </div>
</div>
@endsection