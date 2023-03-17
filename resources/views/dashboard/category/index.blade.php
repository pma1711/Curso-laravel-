@extends('dashboard.layout')

@section('content')


<a href="{{ route ("category.create") }}">crear</a>

<table>
    <thead>
<tr>
    <th>
        Titulo
    </th>
    <th>
       Acciones
    </th>
</tr>
</thead>

<tbody>
    @foreach ( $categories as $c )
    <tr>
        <td>
            {{$c->title}}
        </td>
        <td>
            <a href="{{ route ("category.edit",$c) }}">editar</a>
            <a href="{{ route ("category.show",$c) }}">mostrar</a>
           <form action="{{ route ("category.destroy",$c) }}" method="post">
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
{{ $categories->links()}}

@endsection