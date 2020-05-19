<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />

<link 
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous"
/>
  </head>

  <body>
    <div class="container">
        <nav>
        @include('partials/nav')
        </nav>
    </div>
      
    <main>

    {{-- <div>
        @yield("welcome")
    </div> --}}

    <div>
        @yield("owner-list")
    </div>
        
        @yield("main")
    </main>
    
    <footer>
        @yield("footer")
    </footer>
  
  </body>
</html>
