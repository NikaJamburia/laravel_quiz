
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <a href="/airports/new" class="btn btn-primary mb-20">Create new</a>
    <a href="/" class="btn btn-secondary mb-20"> Main page</a>
    <table class="table mt-20">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>Identification Code</th>
            <th>Country</th>
            <th>City</th>
            <th>Time Zone</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach($airports as $airport)
            <tr>
                <td>{{$airport->id}}</td>
                <td>{{$airport->name}}</td>
                <td>{{$airport->identification_code}}</td>
                <td>{{$airport->country}}</td>
                <td>{{$airport->city}}</td>
                <td>{{$airport->time_zone}}</td>
                <td> <a href="/airports/delete/{{$airport->id}}" class="btn btn-danger">Delete</a> </td>

            @endforeach
        </tbody>
    </table>
        

<script src="{{asset('js/app.js')}}"></script>    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


    
