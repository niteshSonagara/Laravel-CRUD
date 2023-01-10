<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="container">
        <h2>New Categories</h2>
       <div class="row">
        <div class="col-sm-4">
            <form method="POST" action="/category-store">
                @csrf
                <label >Title</label>
                <input type="text" name="title" class="form-control"/>
                <button class="btn btn-sm btn-info mt-4" type="submit">Create</button>
            </form>
        </div>
       </div>
    </div>

</body>

</html>
