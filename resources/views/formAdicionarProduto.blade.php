@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Adicionar Produto
  </div>
  <div class="card-body">

  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    @if (\Session::has('success'))
        <div class="alert alert-success">
             <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif

      <form method="post" action="{{ route('FormAdicionarProduto.store') }}">
          <div class="form-group">
              @csrf
              <label for="nome_do_produto">Nome do Produto:</label>
              <input type="text" class="form-control" name="nome_do_produto"/>
          </div>
          <div class="form-group">
              <label for="codigo_do_produto">Codigo do produto:</label>
              <input type="text" class="form-control" name="codigo_do_produto"/>
          </div>
          <div class="form-group">
              <label for="quantidade">Quantidade:</label>
              <input type="text" class="form-control" name="quantidade"/>
          </div>

          <button type="submit" class="btn btn-success">ok</button>
      </form>
  </div>
</div>
@endsection