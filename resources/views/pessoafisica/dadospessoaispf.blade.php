@extends('layouts.app')
@section('content')

<form action="{{ url("dadospessoaispf/$pf->id") }}" method="POST" id="form_relatorio"> 
	{!! method_field('PUT') !!}
	{{ csrf_field() }}

	<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
		<div class="form-group">
			<label for="nome">Email: </label> {{$pf->email}}
		</div>				
	</div>
	{{-- <div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
		<div class="form-group">
			<label for="nome">Perfil: </label> {{$pf->perfil}}
		</div>				
	</div> --}}
	@foreach($dados as $dado)
		<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" class="form-control" id="nome" name="nome" value="{{ $dado->nome or old('nome')}}">
			</div>				
		</div>
		<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
			<div class="form-group">
				<label for="cpf">CPF:</label>
				<input type="text" class="cpf form-control" id="cpf" name="cpf" value="{{ $dado->cpf or old('cpf')}}">
			</div>				
		</div>
		<div class="col-md-offset-2 col-sm-offset-2 col-md-12 col-sm-12">		
			<div class="form-group">
				<label for="rg">RG:</label>
				<input type="text" class="form-control" id="rg" name="rg" value="{{ $dado->rg or old('rg')}}">
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
		    <label class="control-label">Sexo</label>
		    <select class="dourado selectpicker error" data-style="select-with-transition has-dourado" data-size="7" name="sexo" id="sexo">
		    	 <option value="Masculino">Masculino</option>
    			<option value="Feminino">Feminino</option>
		    </select>
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

@push('scripts')

<script type="text/javascript">

</script>

@endpush
