<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SoftUni Laravel</title>

    {!! Html::style('css/bootstrap.min.css') !!}
</head>
<body>
<div class="container-fluid">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">Laravel</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ route('article.index') }}">Articles</a>
                        </li>
                        <li>
                            <a href="{{ route('adminOnly') }}?key=test">
                                Admin authorized
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('adminOnly') }}">
                                Admin not authorized
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blade-examples') }}">
                                Blade examples
                            </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>