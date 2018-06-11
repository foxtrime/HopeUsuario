@extends('layouts.app')
@section('content')

<form action="{{ url("dadospessoaispj/$pj->id") }}" method="POST" id="form_relatorio"> 
	{!! method_field('PUT') !!}
	{{ csrf_field() }}

	<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
		<div class="form-group">
			<label for="nome">Email: </label> {{$pj->email}}
		</div>				
	</div>
	
	@foreach($dados as $dado)
		<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
			<div class="form-group">
				<label for="razaosocial">Razao Social:</label>
				<input type="text" class="form-control" id="razaosocial" name="razaosocial" value="{{ $dado->razaosocial or old('razaosocial')}}">
			</div>				
		</div>
		<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
			<div class="form-group">
				<label for="cnpj">Cnpj:</label>
				<input type="text" class="form-control" id="cnpj" name="cnpj" value="{{ $dado->cnpj or old('cnpj')}}">
			</div>				
		</div>
		<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
			<div class="form-group">
				<label for="telefone">Telefone:</label>
				<input type="text" class="form-control" id="telefone" name="telefone" value="{{ $dado->telefone or old('telefone')}}">
			</div>				
		</div>
		<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
			<div class="form-group">
				<label for="endereco">Endereco:</label>
				<input type="text" class="form-control" id="endereco" name="endereco" value="{{ $dado->endereco or old('endereco')}}">
			</div>				
		</div>
		<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
			<div class="form-group">
				<label for="nomepessoacontato">Nome da pessoa contato:</label>
				<input type="text" class="form-control" id="nomepessoacontato" name="nomepessoacontato" value="{{ $dado->nomepessoacontato or old('nomepessoacontato')}}">
			</div>				
		</div>
	 @endforeach
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
