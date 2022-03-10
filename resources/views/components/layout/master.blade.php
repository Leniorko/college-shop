<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Global css files --}}
        {{-- <link rel="stylesheet" href="/css/bootstrap.css"> --}}
        <link rel="stylesheet" href="/css/index.css">
        <title>Laravel</title>
    </head>
    <body>
        <div id="root">
            {{$slot}}
        </div>

        {{-- Libraries scripts goes below here --}}
        {{-- <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery-3.6.0.min.js"></script> --}}
    </body>
</html>
