<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
    <body>
        @yield('header')
        @yield('main')
    </body>
</html>