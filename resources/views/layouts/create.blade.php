@extends('layouts.admin')
@section('content')



<div class="row">
	<div class="col-md-12">
		<div class="box-widget widget-module">
			<div class="widget-head clearfix">
				<span class="h-icon"><i class="fa fa-bars"></i></span>
				<h4>{{$title}}</h4>
			</div>
			<div class="widget-container">
				<div class=" widget-block">

          {!! Form::open
          ([
           'url' => route($route.'.store'),
           'method' => 'post',
           'class' => 'form-horizontal',
           'files' => 'true'
           ]) !!}

            @include($route.'.form')

					{!! Form::close() !!}
				</div>
			</div>
		</div>

	</div>
</div>

@endsection
