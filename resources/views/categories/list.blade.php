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
        <h2>Categories <a class="btn btn-info" href="/category-create">New Category</a></h2>
        <table class="table">
            <thead>
                <tr>
                    <th>SR.NO</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $cat as $cats )
                    
                
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $cats->title}}</td>
                     <td>
                        <a href="/category-edit/{{ $cats->id }}" class="btn btn-sm btn-info">Edit</a>
                        {{-- <a href="/category-delete/{{ $cats->id }}" class="btn btn-sm btn-danger">Delete</a> --}}
                        
                        <form action="/category-delete/{{ $cats->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
