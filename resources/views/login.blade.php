<html lang="en">
<head>
        <meta charset="utf-8">
        <title>It-Support</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

<div class="container-fluid navbar-expand-lg navbar-light bg-warning">
            <div class="row">
                <div class="col">
                
                <ul class="nav justify-content-start">
                <li class="nav-item">
                    <a class="navbar-brand" href="/"><img src="image/27337.jpg" width="200" height="100"></a>
                </li>
                </ul>
                </div>
            </div>
</div>

<div class="mt-4">
<div class="container">
            <div class="d-flex justify-content-center h-50">
            <div class="d-flex flex-column">
                <h1 class="text-center font-weight-bold text-danger">เข้าสู่ระบบ</h1>
                    <form action="{{url('/home')}}" method="get">
                    <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="id">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-info btn-block">Sign in</button>
                    </form>
            </div>
            </div>
</div>
</div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>