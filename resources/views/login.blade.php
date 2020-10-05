<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<head>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="/">It-Support</a>
        </nav>

</head>
<body>
<div class="container-fluid">
<div class="d-flex align-items-center justify-content-center h-50">
<div class="d-flex flex-column">
            <h1 class="text-center font-weight-bold text-danger">เข้าสู่ระบบ</h1>
                <form action="{{url('/test')}}" method="get">
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>