<!doctype html>
<html lang="en">
<head>
    @include('layouts.navbar')
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<br><br><br>
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">{{$page->title}}</h1>

            <!-- Author -->


            <hr>

            <!-- Date/Time -->
            <p>Posted on January 1, 2018 at 12:00 PM</p>

            <hr>

            <!-- Preview Image -->
            <img src="{{asset('images/'.$page->picture)}}">

            <hr>

            <!-- Post Content -->
            <p class="lead">

            <blockquote class="blockquote">
                <p class="mb-0">{{$page->body}}</p>
                <footer class="blockquote-footer">Someone famous in
                    <cite title="Source Title">Source Title</cite>
                </footer>
            </blockquote>
        </div>
    </div>

</body>
</html>

