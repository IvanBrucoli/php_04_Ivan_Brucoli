<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Bootstrap demo</title>
  </head>
  <body class="background">
    
  <x-navbar></x-navbar>

  {{ $slot }}

  


  </body>
</html>