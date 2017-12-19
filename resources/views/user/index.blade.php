@extends('layouts.admin')

@section('content')

<div class="row">
	<div class="col-md-12">
		@include('layouts.notification')
		<div class="box-widget widget-module">
			<div class="widget-head clearfix">
				<span class="h-icon"><i class="fa fa-th"></i></span>
				<h4>{{$title}}</h4>
				<h4><a href="{{ route('user.create') }}" class="btn btn-primary fa fa-plus"> Tambah Data</a></h4>

			</div>
			<div class="widget-container">
				<div class="widget-block">
					<table id="users-table" class="table table-hover">
					<thead>
					<tr>
						<th>
							No
						</th>
						<th>
							Username
						</th>
						<th>
							Email
						</th>
						<th width="70px">
							Foto
						</th>
						<th>
							Action
						</th>
					</tr>
					</thead>
					<tbody>
						@foreach ($user as $index =>$data)
            	<tr>
                <td>
                     {{$index +1+(($user->CurrentPage()-1)*$user->PerPage())}}
                </td>
				<td>
					 {{$data->name}}
				</td>
				<th>
					{{$data->email}}
				</th>
				<th>
					{{ Html::image('foto/' . $data->foto, 'alt', ['width' => '100%']) }}

				</th>
				

                <td class="tc-center">
					<div class="btn-toolbar" role="toolbar">

							
							<div class="btn-employees" role="employees">
								{!! Form::open(array('route' => array ($route.'.destroy', $data->id),
'method' => 'delete', 'onsubmit' => 'return ConfirmDelete()', 'class' => 'form-inline', 'id' => "delete-form"))
!!}
{!! link_to_route($route.'.edit', 'Edit', $data->id, ['class' => 'btn btn-warning btn-sm'] ) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])
!!}
{!! Form::close() !!}


							</div>

					</div>
				</td>
            </tr>
			</div>
			</td>
            </tr>
              @endforeach
          </tbody>
		  </table>
					
				</div>
			</div>
		</div>
	</div>

</div>


@endsection
