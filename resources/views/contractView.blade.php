@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<h1>Contratos</h1>
		</div>
		<hr>
		<div class="row">
			<table class="table table-striped table-hover">
				<thead>
                    <tr>
                        <th>Id</th>
                        <th>Contrato</th>
                        <th>Nit</th>
                        <th>Nombre</th>
                        <th>Fecha inicial</th>
                        <th>Fecha final</th>
                        <th>Valor</th>
                        <th>Saldo</th>
                    </tr>
                </thead>
                <tbody>
            		<tr>
						<td>{{ $contract->id }}</td>
						<td>{{ $contract->contract }}</td>
						<td>{{ $contract->customer->nit }}</td>
						<td>{{ $contract->customer->name }}</td>
						<td>{{ $contract->iniDate }}</td>
						<td>{{ $contract->endDate }}</td>
						<td>{{ number_format($contract->amountTotal, 2) }}</td>
						<td>{{ number_format($contract->balance, 2) }}</td>
					</tr>	
                </tbody>
			</table>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h4>Editar contrato</h4>
				<form method="POST" action="/home/{contract}/edit">
					{{ csrf_field() }}
					<div class="form-group">
						<input type="date" class="form-control" placeholder="Fecha final" name="endDate">
					</div>
					<div class="form-group">
						<div class="input-group">
						  <span class="input-group-addon">$</span>
						  <input type="text" class="form-control" placeholder="Monto total" name="amountTotal">
						  <span class="input-group-addon">.00</span>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
						  <span class="input-group-addon">$</span>
						  <input type="text" class="form-control" placeholder="Saldo" name="balance">
						  <span class="input-group-addon">.00</span>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Modificar</button>
				</form>	
			</div>			
		</div>
		
	</div>
@endsection