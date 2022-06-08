<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <h1>{{$message}}</h1>
    <img src="https://gabrieleromanato.com/content/uploads/2020/02/laravel-logo.jpg" alt="">
    <ul>
        <li>
            <a href="{{route('links')}}"> links </a>
        </li>
    </ul>
   
    
</body>
</html>

<style>
    h1{
        text-align:center;
    }

    a{
        text-align:center;
        text-transform:uppercase;
        color:black;
        text-decoration:none;
    }

    img{
        width:40%;
    }

</style>

