@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<h2>Clientes</h2>
		</div>
		<div class="row">
			<table class="table table-striped table-hover table-condensed">
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
                	@foreach($custs as $cust)
                		<tr>
							<td>{{ $cust->nit }}</td>
							<td>{{ $cust->name }}</td>
							<td>{{ $cust->phone }}</td>
							<td>{{ $cust->address }}</td>
							<td>{{ $cust->adminName }}</td>
						</tr>	
					@endforeach
                </tbody>
			</table>
			{{ $custs->links() }}
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">

				<h4>Nuevo Cliente</h4>

				<form method="POST" action="/customers">
					
					{{ csrf_field() }}

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Nit" name="nit" required="">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Nombre" name="name" required="">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Teléfono" name="phone" required="">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Dirección" name="address" required="">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Administrador" name="adminName" required="">
					</div>
					<button type="submit" class="btn btn-primary">Crear</button>
				</form>
			</div>
  			<div class="col-md-3 col-md-offset-3">
  				@if(count($errors))
					@include('errors')
				@endif
  			</div>
		</div>
	</div>
@endsection