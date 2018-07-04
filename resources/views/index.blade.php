<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
        <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
        <!--  Vuetify.css Datei importieren -->
</head>
    <body>
        
        <!-- hier beginnt alles ,das ist das Element, das von vue konrolliert wird -->
        <div id="app">
            
        </div>
        <!-- hier wird die dazugehörige js datei importiert -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>