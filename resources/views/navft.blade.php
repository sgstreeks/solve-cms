<!DOCTYPE html>
<html lang="en">


  <body>



    <div class="container">
      @include('partials._messages')

      @yield('content')



    </div> <!-- end of .container -->

        @include('partials._javascript')

        @yield('scripts')

  </body>
</html>
