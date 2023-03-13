@extends('dashboard.layout')

@section('content')


<a href="{{ route ("post.create") }}">crear</a>

<table>
    <thead>
<tr>
    <td>
        Titulo
    </td>
    <td>
        Categoria
    </td>
    <td>
        Posted
    </td>
    <td>
       Acciones
    </td>
</tr>
</thead>

<tbody>
    @foreach ( $posts as $p )
    <tr>
        <td>
            {{$p->title}}
        </td>
        <td>
            Categoria
        </td>
        <td>
            {{$p->Posted}}
        </td>
        <td>
            <a href="{{ route ("post.edit",$p) }}">editar</a>
            <a href="{{ route ("post.show",$p) }}">mostrar</a>
           <form action="{{ route ("post.destroy",$p) }}" method="post">
            @method('DELETE')
            @csrf
        <button type="submit">Eliminar</button>   
        </form>
        
        </td>
    </tr>
    </thead>
    @endforeach
</tbody>

</table>
{{ $posts->links()}}

@endsection