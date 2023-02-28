@extends('layout.master')

@section('content')
@include("fragment.subview")
{{$name}}


<?php if(true){ echo $name ?> 
asasasasas
<?php }  ?>

@if ($name == "Patricio magaña")
es true
@else
No es true 
@endif

@foreach ($posts as $a)
<div class= "box item">
<p>{{$a}}</p>
@include("fragment.subview")
</div>
@endforeach
<hr>

@forelse ($posts as $a)
<div class= "box item">
<p>{{$a}}</p>
</div>

@empty
NO hay Data
@endforelse
<!--{{$name}}-->

{{-- $age--}}

{!!$name!!}


<!-- comentario en html-->
{{--comentario de blade--}}

@endsection