@extends('dashboard.layout')
@section('content')
<h1>Crear Post</h1>

@include('dashboard.fragment._errors-form')


<form action="{{route ('post.store') }}" method="post">
@csrf

<label for="">Titulo</label>
<input type="text" name="title" value="{{old ("title", "")}}">

<label for="">Slug</label>
<input type="text" name="slug" value="{{old ("slug", "")}}">

<label for="">Categoria</label>
<select name="category_id" >
    <option value=""></option>
       @foreach ($categories as $title=> $id)
       <option {{old ("category_id","") == $id ? "selected" : ""}}value="{{$id}}">{{$title}}</option>
           
       @endforeach
</select>
<label for="">Posteado</label>
<select name="posted">
    <option {{old ("posted", "") == "not" ? "selected" : ""}} value="no">No</option>
    <option {{old ("posted", "") == "yes" ? "selected" : ""}} value="yes">si</option>
</select>
<label for="">Contenido</label>
<textarea name="content">{{old ("content","")}}</textarea>

<label for="">Descripcion</label>
<textarea name="description">{{old("description","")}}</textarea>

<button type="submit">Enviar</button>
@endsection