<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SBA</title>
    <link rel="stylesheet" href="/CSS/styles.css">
</head>
<body>
    @include('nav')
    <h1>Simple Blog Application</h1>
    @auth
        <p style="text-align: center; font-size:12px;">Welcome buddy you have loggin!</p>

        <form action="/add" method="post">
            @csrf
            <div class="add-things">
                <input type="submit" name="add" value="Add User" style="background-color: darkorange">
                <input type="submit" name="add" value="Add Post" style="background-color: darkgreen">
                <input type="submit" name="add" value="Add Category" style="background-color: rgb(3, 41, 97)">
            </div>
        </form>        
    @else
    <p style="text-align: center; font-size:12px;">You are not loggined.</p>

    @endauth

</body>
</html>