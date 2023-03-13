@extends('dashboard.layout')

@section('content')

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
           Acciones
        </td>
    </tr>
    </thead>
    @endforeach
</tbody>
</table>

@endsection