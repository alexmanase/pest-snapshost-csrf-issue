<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
    </head>
    <body >
        <form>
            @csrf
            <input type="text" name="name">
            <button type="button">Submit</button>
        </form>
    </body>
</html>
