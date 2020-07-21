@extends('products.layout')
 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb text-primary">
        <h3>Cadastro de cursos</h3>
    </div>
</div>


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Numero</th>
            <th>Nome</th>
            <th>Detalhes</th>
            <th width="300px">Ação</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Mostrar</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger ">Deletar</button>
                </form>
                
            </td>
        </tr>
        @endforeach
    </table>
    <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Criar novo curso</a>
                <a class="btn btn-danger" href="{{ route('portal.home') }}"> voltar</a>
            </div>
  
    {!! $products->links() !!}
      
@endsection