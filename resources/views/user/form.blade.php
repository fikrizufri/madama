<div class="tab-pane active" id="data">

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
{{ Form::label('nama', null,['class' =>'col-sm-2 control-label'])}}
  <div class=" col-md-6">
  {{ Form::text('name', null,['class' =>'form-control', 'placeholder'=> 'Nama'])}}
  @if ($errors->has('name'))
  <span class="help-block">
  <strong>{{ $errors->first('name')}}</strong>
  </span>
  @endif
  </div>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
{{ Form::label('email', null,['class' =>'col-sm-2 control-label'])}}
  <div class=" col-md-6">
  {{ Form::text('email', null,['class' =>'form-control', 'placeholder'=> 'Email'])}}
  @if ($errors->has('email'))
  <span class="help-block">
  <strong>{{ $errors->first('email')}}</strong>
  </span>
  @endif
  </div>
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
{{ Form::label('password', null,['class' =>'col-sm-2 control-label'])}}
  <div class=" col-md-6">
  <input name="password" type="password" value="" id="password" class="form-control">
  @if ($errors->has('password'))
  <span class="help-block">
  <strong>{{ $errors->first('password')}}</strong>
  </span>
  @endif
  </div>
</div>
<div class="form-group{{ $errors->has('ulang_password') ? ' has-error' : '' }}">
{{ Form::label('ulang_password', null,['class' =>'col-sm-2 control-label'])}}
  <div class=" col-md-6">
  <input name="ulang_password" type="password" value="" id="ulang_password" class="form-control">
  @if ($errors->has('ulang_password'))
  <span class="help-block">
  <strong>{{ $errors->first('ulang_password')}}</strong>
  </span>
  @endif
  </div>
</div>
<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
{{ Form::label('hak_akses', null,['class' =>'col-sm-2 control-label'])}}
  <div class=" col-md-6">
  {{ Form::select('role', ['Admin' => 'Admin','Operator'=>'Operator'], null, [ 'class' => 'form-control', 'placeholder' => 'Pilih Hak Akses']) }}
  @if ($errors->has('role'))
  <span class="help-block">
  <strong>{{ $errors->first('role')}}</strong>
  </span>
  @endif
  </div>
</div>

<div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
 {{Form::label('Icon','Icon', ['class'=>'col-sm-2 control-label']) }}
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


<div class="form-group">
<div class="col-sm-8 col-sm-offset-4">
<button type="submit" class="btn btn-primary">{{$button}}</button>
@if ($button == "Ubah")
  <a class="btn btn-primary" href="{{url('/')}}">Kembali</a>

@else
<a class="btn btn-primary" href="{{route($route.'.index')}}">Kembali</a>
@endif
</div>
</div>
