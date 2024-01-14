<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/style.css">

       
    </head>
    <body class="antialiased">
        <div class="homeContainer">
            <h1>PERSONAL TRAINER APP</h1>
            <div class="dataInput">
                <h3>You may record your workout below</h3>
                <form action="{{route('save')}}" method="post">
                    {{csrf_field()}}
                    <div>
                        <label for="pushUp">Push Up</label>
                        <input type="text" name="pushUp">
                    </div>
                    <button>Save All</button>
                </form>
            </div>
            <button><a href="/totalData">View done exercises</a></button>
        </div>
    </body>
</html>
