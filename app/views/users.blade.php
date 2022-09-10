@extends('layout')
 
@section('content')
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
				<td></td>
			</tr>
		@endforeach
		</tbody>
	</table>
@stop
	<script type="text/javascript" src="/js/jquery-3.6.1.js"></script>
	<script type="text/javascript" src="/js/users.js"></script>