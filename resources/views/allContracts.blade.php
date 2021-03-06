@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h4>Contratos vigentes:</h4>
                <hr>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nit</th>
                            <th>Nombre</th>
                            <th>Contrato</th>
                            <th>Saldo</th>
                            <th>Fecha final</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contracts as $contract)
                            <tr>
                                <td>{{ $contract->customer->nit}}</td>
                                <td>{{ $contract->customer->name }}</td>
                                <td>{{ $contract->contract }}</td>
                                <td>{{ number_format($contract->balance, 2) }}</td>
                                <td>{{ $contract->endDate }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $contracts->links() }}
            </div>
            <div class="col-md-2">
                <h4>Nuevo Contrato</h4>

                <form method="POST" action="/home">
                    
                    {{ csrf_field() }}

                    <div class="form-group">
                        <select class="form-control" placeholder="Cliente" name="customer_id">
                            @foreach($customers as $customer)
                              <option value="{{$customer->id}}">{{$customer->nit}} - {{$customer->name}}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Contrato" name="contract" required="">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" placeholder="Fecha de inicio" name="iniDate" required="">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" placeholder="Fecha final" name="endDate" required="">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Monto de contrato" name="amountTotal" required="">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Saldo" name="balance" required="">
                    </div>

                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
                @if(count($errors))
                    @include('errors')
                @endif
            </div>
        </div>
    </div>
    
@endsection
