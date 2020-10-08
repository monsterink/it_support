<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>It-Support</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        @section('sidebar')
        <div class="container-fluid navbar-expand-lg navbar-light bg-warning">
            <div class="row">
                <div class="col">
                
                <ul class="nav justify-content-start">
                <li class="nav-item">
                    <a class="navbar-brand" href="/">It-Support</a>
                </li>
                </ul>
                </div>

                <div class="col">
                <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a href="{{url('/')}}" class="btn btn-dark" role="button">Log out</a>
                </li>
                </ul>
                </div>
            </div>
        </div>
        
  
        @show
       
        <div class="container">
            @yield('content')
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>