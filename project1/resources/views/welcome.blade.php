<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body>
        <h1> Tela Inicial </h1>
       <p> {{$name}} </p>

       @if($name=='Pedro')
       <p> O nome é Pedro </p>
       @elseif($name=='Rodrigo')
       <p> O nome é {{$name}}  {{$LName}} </p>
      @else
      <p> O nome não é Pedro</p>
      @endif
    </body>
</html>
