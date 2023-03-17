@extends('layouts.plantilla')

@section('title','Curso: '. $curso->name)
    
@section('content')

<header class="container m-5">
    <h1 class="text-3xl font-bold">Bienvenido al curso: {{$curso->name}}</h1>
</header>
<div class="container m-1 text-1xl font-bold flex justify-center">
<a href="{{route('cursos.index')}}">Volver a la pagina anterior</a>
</div>
<div class="container m-1 text-1xl font-bold flex justify-center"> 
<a href="{{route('cursos.edit', $curso)}}">Editar curso</a>
</div>
 <div class="container m-7 flex justify-center">
    <p class="text-2xl"><strong>Categoria: </strong>{{$curso->categoria}}</p>
</div>
<section class="container m-10">
    <p><strong>Descripcion: </strong>{{$curso->descripcion}}</p>
</section>
    @endsection