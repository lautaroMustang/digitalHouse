<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>actores</title>
  </head>
  <body>
      Soy alto actor

      <ul>
        @foreach($actores as $actor)
        <li> {{$actor->getNombreCompleto()}}</li>
        @endforeach
        
      </ul>

  </body>
</html>
