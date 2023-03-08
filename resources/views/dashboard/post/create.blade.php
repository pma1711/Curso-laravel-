<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear post</title>
</head>
<body>
    <h1>Crear Post</h1>

    @if ($errors->any())
    @foreach ($errors->all() as $e )
        <div class="error">
            {{$e}}
        </div>
    @endforeach
        
    @endif
<form action="{{route ('post.store') }}" method="post">
    @csrf

    <label for="">Titulo</label>
    <input type="text" name="title">

    <label for="">Slug</label>
    <input type="text" name="slug">

    <label for="">Categoria</label>
    <select name="category_id">
        <option value=""></option>
           @foreach ($categories as $title=> $id)
           <option value="{{$id}}">{{$title}}</option>
               
           @endforeach
    </select>
<label for="">Posteado</label>
    <select name="posted">
        <option value="no">No</option>
        <option value="yes">si</option>
    </select>
    <label for="">Contenido</label>
    <textarea name="content"></textarea>

    <label for="">Descripcion</label>
    <textarea name="description"></textarea>

    <button type="submit">Enviar</button>
</body>
</html>