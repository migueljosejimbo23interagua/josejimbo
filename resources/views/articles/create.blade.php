@extends('layouts.app')

@section('content');

<div class="container">

<div class="card">
  <h5 class="card-header">Agregar Articulos</h5>
  <div class="card-body">
    <h5 class="card-title">Proceso para agregar articulos</h5>
    <p class="card-text">ingrese la informacion del sistema</p>
    <a href="{{route('home')}}" class="btn btn-primary">HOME</a>


    <hr/>


    {!! Form::open(['route'=>'articles.store','files'=>true]) !!}
    {!! Field:: text('name',null, ['label'=>'Nombre']) !!}
    {!! Field:: textarea('description',null, ['label'=>'Descripcion','rows'=>4]) !!}
    {!! Field::select('category_id', $categories, null, ['label'=>'Ctagoria','empty'=>'-']) !!}
    {!! Field::file('resources',['multiple'=>true,'label'=> 'Recursos/imagenes','accept'=>'image/*''])  !!}
    {!! Form::submit('GUARDAR', ['class'=>'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}

  </div>
</div>
</div>
@endsection
