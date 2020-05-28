
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

    <form action="/flights" method="POST" id="form" class="form mt-1 border p-3 rounded">
        @csrf
        <h3 class="text-center">Add flight</h3>
        <hr>
        <div class="form-group">
            <label for="idCode">ID code</label>
            <input type="text" class="form-control" name="identification_code" id="idCode">

            <label for="take_off_airport_name">Take Off Airport</label>
            <input type="text" class="form-control" name="take_off_airport_name" id="take_off_airport_name">

            <label for="arrival_airport_name">Arrival Airport</label>
            <input type="text" class="form-control" name="arrival_airport_name" id="arrival_airport_name">

            <label for="take_off_time">Take off time</label>
            <input type="date" class="form-control" name="take_off_time" id="take_off_time">

            <label for="arrival_time">Arrival time</label>
            <input type="date" class="form-control" name="arrival_time" id="arrival_time">

            <input type="submit" value="Add flight" id="submitBtn" class="btn btn-primary">
        </div>
        </form>
        

<script src="{{asset('js/app.js')}}"></script>    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


    
