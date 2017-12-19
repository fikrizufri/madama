<style>
.square {

}
</style>
@extends('layouts.admin')

@section('content')

<div class="row">
	<div class="col-md-12">
		@include('layouts.notification')
		<div class="box-widget widget-module">
			<div class="widget-head clearfix">
				<span class="h-icon"><i class="fa fa-th"></i></span>
				<h4>{{$title}}</h4>

			</div>
			<div class="widget-container">
				<div class="widget-block">
					<div class="col-md-2">
						<div style="height: 50px;  width: 50px; background-color: #555;"></div>
					</div>
					@foreach ($meja as $data)

					@endforeach
					
				</div>
			</div>
		</div>
	</div>

</div>


@endsection
