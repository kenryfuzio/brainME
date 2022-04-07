@extends('layouts.app')

@section('conteudo')
<div id="cadastro" class="md-5 container">
            <h2 class="text-center mb-3 titulo">Boleto</h2>
            <form id="frm-cadastro" action="" method="post" enctype="multipart/form-data">
              <input type="text" class="form-control mb-3" name="titulo" placeholder="Insira um Título" required>
              <input type="text" class="form-control mb-3" name="descricao" placeholder="Digite uma Descrição" required>
              <input type="number" step="0.010" class="form-control" name="valor" placeholder="Digite um valor" required>
            
              
            
            
            <p class="mt-2">
            <br><input type="checkbox" name="alerta" value="alerta" class="form-check-input"> Alerta Diário
            </p>
            
        
            
            <label for="vencimento">Data Predestinada:</label>
               <input type="date" name="vencimento" id="vencimento">
              <br>
          
            
            
            <p class="mt-2">Foto do Boleto(Opcional)
                <input type="file" name="imagem" id="imagem" class="form-control"></p>
                <br>
                
            
            <br>
            <input type="submit" value="Enviar" class="btn btn-primary">

          </form>
            
        </div>


@endsection