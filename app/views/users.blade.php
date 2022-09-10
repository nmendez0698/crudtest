@extends('layout')
 
@section('content')
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalFormUsers">Crear Usuario</button>
<br><br>
	<table id="usertable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Fecha registrado</th>
				<th>Acciones</th>
            </tr>
        </thead>
        <tbody>
		@foreach($users as $user)
			<tr>
				<td>{{ $user->name }}</td>
				<td>{{ $user->username }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->phone }}</td>
				<td>{{ $user->created_at }}</td>
				<td>
					<a href="users/edit/{{ $user->id_user }}"><button type="button" class="btn btn-primary">Editar</button></a>
					<a href="users/delete/{{ $user->id_user }}"><button type="button" class="btn btn-danger">Eliminar</button></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	
	<!-- Modal -->
	<div class="modal fade" id="modalFormUsers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Ingreso de usuario</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			{{ Form::open(array('url' => 'users/create')) }}
			<div class="mb-3">
				<label for="nombre" class="form-label">Nombre:</label>
				{{ Form::text('nombre', null, array('id'=>'nombre', 'class'=>'form-control', 'placeholder'=>'Nombre completo')) }}
			</div>
			<div class="mb-3">
				<label for="usuario" class="form-label">Usuario:</label>
				{{ Form::text('usuario', null, array('id'=>'usuario', 'class'=>'form-control', 'placeholder'=>'Nombre de usuario')) }}
			</div>
			<div class="mb-3">
				<label for="correo" class="form-label">Correo:</label>
				{{ Form::email('correo', null, array('id'=>'correo', 'class'=>'form-control', 'placeholder'=>'Ej.: nombre@correo.com')) }}
			</div>
			<div class="mb-3">
				<label for="contra" class="form-label">Contraseña:</label>
				{{ Form::password('contra', array('id'=>'contra', 'class'=>'form-control')) }}
			</div>
			<div class="mb-3">
				<label for="tel" class="form-label">Teléfono:</label>
				{{ Form::text('tel', null, array('id'=>'tel', 'class'=>'form-control', 'placeholder'=>'Ej.: ****-****')) }}
			</div>
			
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
			{{ Form::submit('Aceptar', array('class'=>'btn btn-primary'))}}
			{{ Form::close() }}
		</div>
		</div>
	</div>
	</div>

@stop
	<script type="text/javascript" src="/js/jquery-3.6.1.js"></script>
	<script type="text/javascript" src="/js/users.js"></script>