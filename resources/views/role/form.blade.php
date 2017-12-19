<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <label class="col-md-2 control-label">Nama</label>
  <div class=" col-md-8">
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nama Kontak', 'value' => "{{ old('nama') }}"])!!}
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif

  </div>
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
  <label class="col-md-2 control-label">Description</label>
  <div class=" col-md-4">
    {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Nomor HP', 'value' => "{{ old('nama') }}"])!!}
    @if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif

  </div>
</div>

<div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }}">
  <label class="col-md-2 control-label">Display Name</label>
  <div class=" col-md-4">
    {!! Form::text('display_name', null, ['class' => 'form-control', 'placeholder' => 'Nomor HP', 'value' => "{{ old('nama') }}"])!!}
    @if ($errors->has('display_name'))
        <span class="help-block">
            <strong>{{ $errors->first('display_name') }}</strong>
        </span>
    @endif

  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Permission</label>
  <div class="col-md-4">
    <select class="form-control" name="permission[]" multiple="multiple">
    @foreach($permissions as $permission)
      <option value="{{ $permission->id }}">{{ $permission->name }}</option>
    @endforeach
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">&nbsp;</label>
  <div class="col-md-8">
    <div class="form-actions">
      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
      <button type="reset" class="btn btn-warning"><i class="fa fa-refresh"></i> Cancel</button>
    </div>
  </div>
</div>
