@extends('layouts.app')

@section('content')

<div class="card-content">
	<h4 class="card-title">Veiculos</h4>
	<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12" style="padding-left: 285px">
		<a href="{{ url("/dadosveiculos/create")}}" class="btn btn-primary">Novo Veiculo</a>
	</div>
	<div class="material-datatables">
		<table id="relatorios" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
			<thead>
				<tr>
					<th>PLACA</th>
					<th>MODELO</th>
					<th>TIPO</th>
				</tr>
			</thead>
			<tbody>
				@foreach($caminhoes as $caminhao)
				<tr>
					<td>{{ $caminhao->placa }}</td>
					<td>{{ $caminhao->modelo }}</td>
					<td>{{ $caminhao->tipocaminhao }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div> {{-- Fim Material-datatbles --}}
</div> {{-- Fim card-content --}}

@endsection
