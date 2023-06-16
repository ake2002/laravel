<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet"> ← 追加
        <script src="{{ mix('js/app.js') }}"></script> 
        <input type="text">
    </head>
</html>
