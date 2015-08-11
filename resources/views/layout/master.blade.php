<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asset Inventory</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">   
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <div class="container">
      @yield('contents')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
