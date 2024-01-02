<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<style>
    *{
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-between mx-4" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">tickets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>

        <style>
            a
            {
                text-decoration: none;
                color: white;
            }
        </style>
        <div class="d-flex justify-content-between">
            <button class="btn btn-success me-2 my-sm-0" type="submit" name="register" value="register"><a href="/register">Register</a></button>
            <button class="btn btn-primary my-2 my-sm-0" type="submit" name="login" value="login"><a href="/login">login</a></button>
        </div>
    </div>
</nav>


<div class="w-100">
    {{content}}

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>