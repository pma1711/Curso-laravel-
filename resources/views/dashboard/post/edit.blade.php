@extends('dashboard.layout')
@section('content')
<h1>actualizar post: {{$post->title}}</h1>

@include('dashboard.fragment._errors-form')


<form action="{{ route ('post.update', $post->id) }}" method="post">
@csrf
@method("PATCH")

<label for="">Titulo</label>
<input type="text" name="title" value="{{$post->title }}">

<label for="">Slug</label>
<input readonly type="text" name="slug" value="{{$post->slug }}">

<label for="">Categoria</label>
<select name="category_id">
    <option value=""></option>
       @foreach ($categories as $title=> $id)
       <option {{$post->category_id == $id ? 'selected' : ''}} value="{{$id}}">{{$title}}</option>
           
       @endforeach
</select>
<label for="">Posteado</label>
<select name="posted">
    <option {{$post->posted =="not" ? 'selected' : ''}} value="no">No</option>
    <option {{$post->posted =="yes" ? 'selected' : ''}} value="yes">si</option>
</select>
<label for="">Contenido</label>
<textarea name="content">{{$post->content}}</textarea>

<label for="">Descripcion</label>
<textarea name="description">{{$post->description}}</textarea>

<button type="submit">Enviar</button>
@endsection