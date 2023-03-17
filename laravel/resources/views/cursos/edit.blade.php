@extends('layouts.plantilla')

@section('title','edit')
    
@section('content')
<section >
    <h1 class="text-3xl font-bold">EDITAR UN CURSO</h1>
</section>   


    <form action="{{route('cursos.update', $curso)}}" method="post">

        @csrf
        @method('put')

<label >
    Nombre:
    <br>
    <input class="container border -2" type="text" name="name" value="{{$curso->name}}">
</label>
<br>
<label>
    Descripcion:
    <br>
    <textarea class="container border -2" name="descripcion" rows="5" >{{$curso->descripcion}}</textarea>
</label>
<br>
<label>
    Categoria:
    <br>
    <input type="text" name="categoria" class="container border -2" value="{{$curso->categoria}}">
</label>
<br>
<button type="submit" >Actualizar</button>
    </form>
@endsection