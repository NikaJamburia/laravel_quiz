
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

    <a href="/flights/new" class="btn btn-primary">Create new</a>
    <a href="/" class="btn btn-secondary mb-20"> Main page</a>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Identification Code</th>
            <th>take off</th>
            <th>arrival</th>
            <th>take off time</th>
            <th>arrival time</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach($flights as $flight)
            <tr>
                <td>{{$flight->id}}</td>
                <td>{{$flight->identification_code}}</td>
                <td>{{$flight->take_off_airport_name}}</td>
                <td>{{$flight->arrival_airport_name}}</td>
                <td>{{$flight->take_off_time}}</td>
                <td>{{$flight->arrival_time}}</td>
                <td> <a href="flights/delete/{{$flight->id}}" class="btn btn-danger">Delete</a> </td>

            @endforeach
        </tbody>
    </table>
        

<script src="{{asset('js/app.js')}}"></script>    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


    
