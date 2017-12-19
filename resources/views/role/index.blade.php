@extends('layouts.admin')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box-widget widget-module">
			<div class="widget-head clearfix">
				<span class="h-icon"><i class="fa fa-th"></i></span>
				<h4>Roles</h4>
				<h4><a href="{{ route('role.create') }}" class="btn btn-primary fa fa-plus"> Tambah Data</a></h4>

			</div>
			<div class="widget-container">
				<div class="widget-block">
					<table id="users-table" class="table table-hover">
					<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Name
						</th>
						<th>
							Display Name
						</th>
						<th>
							Description
						</th>
						<th>
							Update At
						</th>
						<th>
							Action
						</th>
					</tr>
					</thead>
					<tfoot>
					<tr>
						<th>
							#
						</th>
						<th>
							Name
						</th>
						<th>
							Display Name
						</th>
						<th>
							Description
						</th>
						<th>
							Update At
						</th>
						<th>
							Action
						</th>
					</tr>
					</tfoot>
					<tbody>
					@forelse( $roles as $role )
						<tr>
							<td>
								#
							</td>
							<td>
								{{ $role->name }}
							</td>
							<td>
								{{ $role->display_name }}
							</td>
							<td>
								{{ $role->description }}
							</td>
							<td>
								{{ $role->updated_at }}
							</td>

							<td class="tc-center">
								<div class="btn-toolbar" role="toolbar">

										{!! Form::open(array('route' => array('employees.destroy', $role->id), 'method' => 'delete', 'class' => 'form-inline', 'id' => "delete-form")) !!}
										<div class="btn-employees" role="employees">
											<a href="{{ url('employees/' . $role->id . '/edit')}}" class="btn btn-warning btn-sm fa fa">Edit</a>
											{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm', 'onclick' => "return confirmation();"])!!}
										</div>
										{!! Form::close() !!}

								</div>
							</td>
						</tr>
					@empty
						<tr>
							<td>No Roles</td>
						</tr>
					@endforelse
					</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div>

</div>


@endsection
