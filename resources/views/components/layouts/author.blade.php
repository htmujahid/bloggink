<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bloggink</title>
        @stack('styles')
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <form method="POST" action="/posts">
        @csrf
        <x-layouts.partials.nav role="author" />
        {{$slot}}
        </form>
        @stack('scripts')
    </body>
</html>
