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


    <hr/>
    <table class="table">
        <tr>
            <th>id</td>
            <th>nombre</td>
            <th>slug</td>
            <th>acciones</td>
        </tr>
        

        @forelse($categories as $dato)
           <tr>
               <td>{{$dato->id}}</td>
               <td>{{$dato->name}}</td>
               <td>{{$dato->slug}}</td>
               <td></td>
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