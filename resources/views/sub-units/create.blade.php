@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box-widget widget-module">
			<div class="widget-head clearfix">
				<span class="h-icon"><i class="fa fa-bars"></i></span>
				<h4>Tambah Sub Unit</h4>
			</div>
			<div class="widget-container">
				<div class=" widget-block">
          {!! Form::open(['url' => route('sub-units.store'), 'method' => 'post', 'class' => 'form-horizontal' ]) !!}

            @include('units.form')

					{!! Form::close() !!}
				</div>
			</div>
		</div>

	</div>
</div>

@endsection
