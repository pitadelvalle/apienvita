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
    <div class="container">
        <div class="jumbotron">
        <h1>Lista de Emeregencias</h1>
        <a href="/emergencia" class="btn btn-primary">Agregar </a>
            <table class="table table-stripped table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Image</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($emergencia as $em)
                    <tr>
                    <th >{{$em->id}}</th>
                    <td>{{$em->title}}</td>
                    <td>{{$em->descripcion}}</td>
                    <td><img src="{{asset('uploads/emeregencias/'.$em->image)}}" width="100px" height="100px" alt="Image" ></td>
                    <th><a href="/edit1/{{$em->id}}" class="btn btn-success" >EDIT</a></th>
                    <th><a href="/delete1/{{$em->id}}" class="btn btn-danger" >DELETE</a></th>
                    </tr>
                @endforeach
                </tbody>
</table>
    </div>
    </div>
</body>
</html>