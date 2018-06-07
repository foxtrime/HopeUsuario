@extends('layouts.app')
@section('content')

<form action="{{ url('/dadospessoaispf') }}" method="POST" id="form_relatorio"> 
	{!! method_field('POST') !!}
	{{ csrf_field() }}
	<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" class="form-control" id="nome" name="nome">
		</div>				
	</div>
	<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
		<div class="form-group">
			<label for="cpf">CPF:</label>
			<input type="number" class="form-control" id="cpf" name="cpf">
		</div>				
	</div>
	<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
		<div class="form-group">
			<label for="rg">RG:</label>
			<input type="number" class="form-control" id="rg" name="rg">
		</div>				
	</div>
	<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
		<div class="form-group">
			<label for="telefone">Telefone:</label>
			<input type="number" class="form-control" id="telefone" name="telefone">
		</div>				
	</div>
	<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
		<div class="form-group">
			<label for="endereco">Endereco:</label>
			<input type="text" class="form-control" id="endereco" name="endereco">
		</div>				
	</div>
	<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">
	    <label class="control-label">Sexo</label>
	    <select class="dourado selectpicker error" data-style="select-with-transition has-dourado" data-size="7">
	       <option >Sexo</option>
	       <option value="Masculino">Masculino</option>
	       <option value="Feminino">Feminino</option>
	    </select>
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
