<div class="form-group{{ $errors->has('nama_unit') ? ' has-error' : '' }}">
{{ Form::label('nama_unit', null,['class' =>'col-sm-2 control-label'])}}
  <div class=" col-md-6">
  {{ Form::text('nama_unit', null,['class' =>'form-control', 'placeholder'=> 'Nama Unit'])}} 
  @if ($errors->has('nama_unit'))
  <span class="help-block">
  <strong>{{ $errors->first('nama_unit')}}</strong>
  </span>
  @endif 
  </div>
</div>

<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
{{ Form::label('status', null,['class' =>'col-sm-2 control-label'])}}
  <div class=" col-md-6">
 <select class="form-control" name="status">
  <option value="Aktif" >Aktif</option>
  <option value="Tidak Aktif">Tidak Aktif</option>
  </select>
  @if ($errors->has('status'))
  <span class="help-block">
  <strong>{{ $errors->first('status')}}</strong>
  </span>
  @endif 
  </div>
</div>

<div class="form-group">
<div class="col-sm-8 col-sm-offset-4">
<button type="submit" class="btn btn-primary">{{$button}}</button>
<a class="btn btn-primary" href="{{route('sub-units.index')}}">Kembali</a>
</div>
</div>

