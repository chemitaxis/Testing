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

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <h1>Test example</h1>
        </div>
        <div class="col-md-12">
            <p>Test your knowledge! Good luck with your exame!</p>
        </div>
        <div class="col-md-12">
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%"  aria-valuenow="25" aria-valuemin="0"
                     aria-valuemax="100">25%</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3"><h3>Yes/No Quiz</h3></div>
        <div class="col-md-12">
            <p>Answer all questions and check your result! </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <small class="card-text mb-3"><strong>1.</strong> Integer tincidunt nisi at ante egestas luctus.
                        Vestibulum consectetur sollicitudin lacinia. Nam id neque et erat aliquam sollicitudin vel sit
                        amet risus.
                    </small>
                </div>
                <div class="card-body">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" />
                        <small class="form-check-label" for="defaultCheck1">
                            Option one is this and that—be sure to include why it's great
                        </small>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" />
                        <small class="form-check-label" for="defaultCheck2">
                            Option two can be something else and selecting it will deselect option one
                        </small>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" />
                        <small class="form-check-label" for="defaultCheck2">
                            Option three can be something else
                        </small>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <button type="button" class="btn btn-primary btn-sm">Answer</button>

                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <small class="card-text mb-3"><strong>1.</strong> Integer tincidunt nisi at ante egestas luctus.
                        Vestibulum consectetur sollicitudin lacinia. Nam id neque et erat aliquam sollicitudin vel sit
                        amet risus.
                    </small>
                </div>
                <div class="card-body">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" />
                        <small class="form-check-label" for="defaultCheck1">
                            Option one is this and that—be sure to include why it's great
                        </small>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" />
                        <small class="form-check-label" for="defaultCheck2">
                            Option two can be something else and selecting it will deselect option one
                        </small>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" />
                        <small class="form-check-label" for="defaultCheck2">
                            Option three can be something else
                        </small>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <button type="button" class="btn btn-primary btn-sm">Answer</button>

                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <small class="card-text mb-3"><strong>1.</strong> Integer tincidunt nisi at ante egestas luctus.
                        Vestibulum consectetur sollicitudin lacinia. Nam id neque et erat aliquam sollicitudin vel sit
                        amet risus.
                    </small>
                </div>
                <div class="card-body">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" />
                        <small class="form-check-label" for="defaultCheck1">
                            Option one is this and that—be sure to include why it's great
                        </small>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" />
                        <small class="form-check-label" for="defaultCheck2">
                            Option two can be something else and selecting it will deselect option one
                        </small>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" />
                        <small class="form-check-label" for="defaultCheck2">
                            Option three can be something else
                        </small>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <button type="button" class="btn btn-primary btn-sm">Answer</button>

                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <small class="card-text mb-3"><strong>1.</strong> Integer tincidunt nisi at ante egestas luctus.
                        Vestibulum consectetur sollicitudin lacinia. Nam id neque et erat aliquam sollicitudin vel sit
                        amet risus.
                    </small>
                </div>
                <div class="card-body">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" />
                        <small class="form-check-label" for="defaultCheck1">
                            Option one is this and that—be sure to include why it's great
                        </small>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" />
                        <small class="form-check-label" for="defaultCheck2">
                            Option two can be something else and selecting it will deselect option one
                        </small>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" />
                        <small class="form-check-label" for="defaultCheck2">
                            Option three can be something else
                        </small>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <button type="button" class="btn btn-primary btn-sm">Answer</button>

                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <small class="card-text mb-3"><strong>1.</strong> Integer tincidunt nisi at ante egestas luctus.
                        Vestibulum consectetur sollicitudin lacinia. Nam id neque et erat aliquam sollicitudin vel sit
                        amet risus.
                    </small>
                </div>
                <div class="card-body">
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" />
                        <small class="form-check-label" for="defaultCheck1">
                            Option one is this and that—be sure to include why it's great
                        </small>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" />
                        <small class="form-check-label" for="defaultCheck2">
                            Option two can be something else and selecting it will deselect option one
                        </small>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" />
                        <small class="form-check-label" for="defaultCheck2">
                            Option three can be something else
                        </small>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <button type="button" class="btn btn-primary btn-sm">Answer</button>

                </div>
            </div>
        </div>
    </div>
</div>


<script src="/js/app.js"></script>
</body>
</html>