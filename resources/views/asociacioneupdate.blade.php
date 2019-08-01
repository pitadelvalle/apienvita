<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container" >
        <div class="jumbotron">
        <h1>Editar Asociacion</h1>
        <form action="/update3/{{$asociaciones->id}}" method="POST" enctype="multipart/form-data" >
                {{ csrf_field() }}
                {{method_field('PUT')}}
<div class="form-group">
    <label>Titulo<label>
    <input type="string" name="title" class="form-control"  value="{{$asociaciones->title}}" placeholder="Enter title">
</div>
<div class="form-group">
    <label>Descripcion<label>
    <input  type="text" name="descripcion" class="form-control" value="{{$asociaciones->descripcion}}" placeholder="Enter descripcion"></input>
</div>
<br>
<button type="submit" name="submit" class="btn btn-primary" > guardar <button>
<a href="/asociacionespage" class="btn btn-second">Lista de Asociones</a>
</form>
</div>
</div>
    
</body>
</html>