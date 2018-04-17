<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

@include('layouts.navbar');

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">All Pages</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>


       @foreach($pages as $page)
        <div class="container">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">{{$page->title}}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">{!!$page->body!!}<small class="text-muted"></small></h1>
                        <a href="{{url('pages',$page->id)}}" class="btn btn-info" role="button">View</a>
                        <a href="{{url('pages/delete',$page->id)}}" class="btn btn-danger" role="button">Delete</a>
                        <a href="{{url('pages/edit',$page->id)}}" class="btn btn-danger" role="button">Edit</a>
                    </div>
            </div>
        @endforeach

        <hr>

    </div> <!-- /container -->

</main>

<footer class="container">
    <p>&copy; Company 2017-2018</p>
</footer>

</body>
</html>