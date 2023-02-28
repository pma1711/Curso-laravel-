<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{$name}}


<?php if(true){ echo $name ?> 
asasasasas
<?php }  ?>

@if ($name == "Patricio magaña")
    es true
    @else
    No es true 
@endif

@foreach ($array as $a)
<div class= "box item">
<p>{{$a}}</p>
    </div>
@endforeach
<hr>

@forelse ($array as $a)
<div class= "box item">
<p>{{$a}}</p>
    </div>

    @empty
    NO hay Data
@endforelse
    <!--{{$age}}-->

    {{-- $age--}}

    {!!$html!!}

    <!-- comentario en html-->
    {{--comentario de blade--}}


</body>
</html>
