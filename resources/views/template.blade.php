<!doctype html>
<html lang='fr'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>
        E Table
    </title>
    <link media="all" type="text/css" rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstraptheme.
min.css">
    <style>
        textarea {
            resize: none
        }
    </style>
</head>

<body>
    <header class="jumbotron">
        <div class="container">
            <h1 class="page-header"><a href="
{{url('/home')}}">Homer</a></h1>
            @yield('header')
        </div>
    </header>
    <div class="container">
        @yield('contenu')
    </div>
</body>

</html>

<script>
    let title = document.querySelector('h1.page-header');
    console.log(title)
</script>