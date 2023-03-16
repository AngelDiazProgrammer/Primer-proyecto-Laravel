@extends('layouts.plantilla')

@section('title','index')
    
@section('content')
  
<header class="container m-10" >
<h1 class="text-3xl font-bold">
    Bienvenido a la pagina cursos
  </h1>
</header>

<section class="container m-5">
<a href="{{route('cursos.create')}}" class="text-1lx font-bold">Crear Curso</a>
</section>

<section class="content m-8">
    <ul class="content list-decimal">
        @foreach ($cursos as $curso)
        <a href="{{route('cursos.show', $curso->id )}}"><li>{{$curso->name}}</li></a>
        @endforeach
    </ul>    
{{ $cursos->links() }}
</section>

    @endsection