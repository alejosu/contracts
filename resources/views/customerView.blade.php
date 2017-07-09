@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<h1>Clientes</h1>
		</div>
		<hr>
		<div class="row">
			<table class="table table-striped table-hover">
				<thead>
                    <tr>
                        <th>Nit</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Dirección</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
            		<tr>
						<td>{{ $custs->nit }}</td>
						<td>{{ $custs->name }}</td>
						<td>{{ $custs->phone }}</td>
						<td>{{ $custs->address }}</td>
						<td>{{ $custs->adminName }}</td>
					</tr>	
                </tbody>
			</table>
		</div>
		<hr>
		<div class="row">
			<form action="">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Teléfono">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Dirección">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Administrador">
				</div>
				<button type="submit" class="btn btn-primary">Modificar</button>
			</form>
		</div>
		
	</div>
@endsection