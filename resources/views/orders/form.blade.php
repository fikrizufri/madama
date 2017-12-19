{{-- <ul class="nav nav-tabs">
  <li class="active"><a href="#data" data-toggle="tab">{{$title}}</a></li>
</ul>
<!-- DIV Tab --> --}}

<div class="tab-content">

<div class="tab-pane active" id="data">
<br>
<div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
 {{Form::label('foto','Foto', ['class'=>'col-sm-2 control-label']) }}
 <div class=" col-md-6">
    {{ Form::file('foto') }}
    <span>Type icon JPEG, JPG, BMP, PNG</span>
     @if (isset($data) && $data->foto)
    <p>{!! Html::image(asset('foto/'.$data->foto), null, ['class'=> 'img-rounded img-responsive' , 'width' => '40%']) !!}</p>
    @endif
    @if($errors->has('foto'))
    <span class="help-block">
    <strong>{{ $errors->first('foto') }}</strong>
    </span>
@endif
</div>
</div>

<br>
<div class="form-group{{ $errors->has('no') ? ' has-error' : '' }}">
{{ Form::label('no_barang', null,['class' =>'col-sm-2 control-label'])}}
  <div class=" col-md-6">
  {{ Form::text('no', null,['class' =>'form-control', 'placeholder'=> 'No Barang'])}}
   @if ($errors->has('no'))
  <span class="help-block">
  <strong>{{ $errors->first('no')}}</strong>
  </span>
  @endif
  </div>
</div>
<div class="form-group{{ $errors->has('nama_barang') ? ' has-error' : '' }}">
{{ Form::label('nama_barang', null,['class' =>'col-sm-2 control-label'])}}
  <div class=" col-md-6">
  {{ Form::text('nama_barang', null,['class' =>'form-control', 'placeholder'=> 'nama_barang'])}}
   @if ($errors->has('nama_barang'))
  <span class="help-block">
  <strong>{{ $errors->first('nama_barang')}}</strong>
  </span>
  @endif
  </div>
</div>

<div class="form-group{{ $errors->has('jenis_id') ? ' has-error' : '' }}">
{{ Form::label('jenis_barang', null,['class' =>'col-sm-2 control-label'])}}
  <div class=" col-md-6">
  {{ Form::select('jenis_id',$jenis_id, null,['class' =>'form-control', 'placeholder'=> 'Jenis Barang'])}}
   @if ($errors->has('jenis_id'))
  <span class="help-block">
  <strong>{{ $errors->first('jenis_id')}}</strong>
  </span>
  @endif
  </div>
</div>
<div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
{{ Form::label('harga', null,['class' =>'col-sm-2 control-label'])}}
  <div class=" col-md-6">
  {{ Form::text('harga', null,['class' =>'form-control', 'placeholder'=> 'Harga'])}}
   @if ($errors->has('harga'))
  <span class="help-block">
  <strong>{{ $errors->first('harga')}}</strong>
  </span>
  @endif
  </div>
</div>

<div class="form-group{{ $errors->has('tahun') ? ' has-error' : '' }}">
{{ Form::label('tahun_pengadaan', null,['class' =>'col-sm-2 control-label'])}}
  <div class=" col-md-6">
  {{ Form::text('tahun', null,['class' =>'form-control', 'placeholder'=> 'Tahun Pengadaan'])}}
   @if ($errors->has('tahun'))
  <span class="help-block">
  <strong>{{ $errors->first('tahun')}}</strong>
  </span>
  @endif
  </div>
</div>

<div class="form-group">
<div class="col-sm-8 col-sm-offset-4">
<button type="submit" class="btn btn-primary">{{$button}}</button>
    <a class="btn btn-primary" href="{{route('barang.index')}}">Kembali</a>
</div>
</div>
