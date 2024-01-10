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
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div style="color: white">
                <h1>MY PERSONAL TRAINER APP</h1>
                <div class="button">
                    <a href="/totalData" >Overall</a>
                </div>
                <form method="post" action="{{ route('/') }}" accept-charset="utf-8">
                    {{ csrf_field() }}
        
                    <label for="listItem">New ToDo Item</label><br>
                    <input type="text" name="listItem" style="color: black;"><br>
                    <button>Save Item</button>
                    </form>
            </div>
        </div>
    </body>
</html>
