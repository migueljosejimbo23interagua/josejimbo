@extends('layouts.app')
@section('content')
<div class ="container">


<div class="card">
  <div class="card-header bg-primary">
    Lista de categorias
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="{{route('categories.create')}}" class="btn btn-primary">AGREGAR</a>
{!!Form::open(['method'=>'GET','route'=>'categories.index'])!!}
{!!Form::text('filter',request()->get('filter'),['class'=>'form-control','placeholder'=>'buscar nombre categoria'])!!}
{!!Form::close()!!}



    <hr/>
    <table class="table">
        <tr>
            <th>id</td>
            <th>nombre</td>
            <th>slug</td>
            <th>acciones</td>
        </tr>
        

        @forelse($categories as $category)
           <tr>
               <td>{{$category->id}}</td>
               <td>{{$category->name}}</td>
               <td>{{$category->description}}</td>
               <td>{{$category->slug}}</td>
               <td>
               {!!Form::open(['route'=>['categories.destroy',$category],'method'=>'DELETE',
               'onsubmit'=>'return confirm("Estas seguro que quieree eliminar?")'
               ]) !!}
                <a href="{{route('categories.edit',$category)}}">Editar</a>
                  {!! Form::submit('ELIMINAR', ['class'=>'btn btn-danger']) !!}
                  {!! Form::close() !!}

                </td>

           </tr>
           @empty
           <tr><td colspan="4">NO HAY REGISTRO</td></tr>
           @endforelse


    </table>
{!! $categories->render() !!}
  </div>
</div>

</div>
@endsection