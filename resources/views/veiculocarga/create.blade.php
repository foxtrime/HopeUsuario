@extends('layouts.app')

@section('content')

<form action="{{ url('/dadosveiculos') }}" method="POST" id="form_relatorio"> 
	{!! method_field('POST') !!}
	{{ csrf_field() }}
	<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
		<div class="form-group">
			<label for="placa">Placa Do Carro:</label>
			<input type="placa" class="form-control" id="placa" name="placa">
			</div>				
	</div>
	<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
		<div class="form-group">
			<label for="modelo">Modelo Do Caminhao:</label>
			<input type="modelo" class="form-control" id="modelo" name="modelo">
			</div>				
	</div>
	<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
		<div class="form-group">
			<label for="tipocaminhao">Tipo De Reboque:</label>
			<input type="tipocaminhao" class="form-control" id="tipocaminhao" name="tipocaminhao">
			</div>				
	</div>
	<div class="row col-md-12 col-sm-12">
			<div>
				<div class="footer text-center">
					<button type="submit" id="enviar-relatorio" class="botoes-acao btn btn-round btn-success enviar-relatorio">
						<span class="icone-botoes-acao mdi mdi-send"></span>
						<span class="texto-botoes-acao"> SALVAR </span>
						<div class="ripple-container"></div>
					</button>
				</div>
			</div>
		</div>
</form>

@endsection
