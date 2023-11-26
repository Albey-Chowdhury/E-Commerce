<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Electro - HTML Ecommerce Template</title>
    @include('Frontend.includes.style')
   </head>
   <body>
      <!-- HEADER -->
        @include('Frontend.includes.header')
      <!-- /HEADER -->
      <div class="main">
        @yield('content')
      </div>
      <!-- FOOTER -->
      @include('Frontend.includes.footer')
      <!-- /FOOTER -->
      <!-- jQuery Plugins -->
      @include('Frontend.includes.script')

   </body>
</html>
