@extends('layouts.plantilla')

@section('title','create')
    
@section('content')
<section >
    <h1 class="text-3xl font-bold">Aqui puedes crear cursos</h1>
</section>   


    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

<label >
    Nombre:
    <br>
    <input class="container border -2" type="text" name="name">
</label>
<br>
<label>
    Descripcion:
    <br>
    <textarea class="container border -2" name="descripcion" rows="5"></textarea>
</label>
<br>
<label>
    Categoria:
    <br>
    <input type="text" name="categoria" class="container border -2">
</label>
<br>
<button type="submit" >Enviar</button>
    </form>
@endsection