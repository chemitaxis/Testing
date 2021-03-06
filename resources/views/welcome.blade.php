<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>

    </div>

</nav>

<div class="container">
    <div class="row mt-3">
        <form class="form-inline" method="get" action="/pagination?name">
            <label class="sr-only" for="name">Name</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="name" name="name"
                   value="{{ $page_appends['name']}}" placeholder="Search by name">
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>
    <div class="row">
        <table class="table table-bordered mt-2">
            <thead>
            <tr>
                <th scope="col"><a href="/pagination?sort=id&name={{$page_appends['name']}}">Id</a></th>
                <th scope="col"><a href="/pagination?sort=name&name={{$page_appends['name']}}">Name</a></th>
                <th scope="col">Description</th>
                <th scope="col"><a href="/pagination?sort=price&name={{$page_appends['name']}}">Price</a></th>
            </tr>
            </thead>
            <tbody>

            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{$article->id}}</th>
                    <td>{{$article->name}}</td>
                    <td>{{$article->description}}</td>
                    <td>{{$article->price}} €</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        {!! $articles->appends($page_appends)->links() !!}
    </div>


</div>

<script src="/js/app.js"></script>
</body>
</html>