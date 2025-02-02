<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.js')
    @inertiaHead
    <title>Inertia Prelim Project</title>
    <link rel="icon" type="image/png" href="{{ asset('images/category.png') }}">
  </head>
  <body>
    @inertia
  </body>
</html>
