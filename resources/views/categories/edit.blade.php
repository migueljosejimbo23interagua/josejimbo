@extends('layouts.app')
@section('content')
<div class ="container">


<div class="card">
  <div class="card-header bg-primary">
    Edicion de categorias
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="{{route('categories.index')}}" class="btn btn-primary">REGRESAR</a>

   <!-- {!! Form::open() !!}
    {!! Field::text('name',null,['label'=>'Nombre']) !!}
    {!! Form::close() !!}-->
    
    {!! Form::open(['route'=>['categories.update',$category],'method'=>'PUT']) !!}
   {!! Field::text('name',$category->name,['label'=>'Nombre','placeholder'=>'Ingrese el nombre']) !!}
   {!! Field::text('description',$category->description,['label'=>'Descripcion','placeholder'=>'Ingrese la descripción']) !!}
   {!! Form::submit('PROCESAR',['class'=>'btn btn-primary']) !!}
   {!! Form::close() !!}
    
  </div>
</div>

</div>
@endsection
