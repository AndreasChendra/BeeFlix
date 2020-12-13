<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    
    <div class="container p-0 pt-2">
        <h3>BeeFlix<h3>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="text-white btn btn-danger btn-md" href="{{url()->previous()}}">
                <i class='fas fa-arrow-left'></i>
                KEMBALI
            </a>
            <a class="btn btn-primary btn-md" href="/">LIHAT SEMUA FILM</a>
        </div>
    </div>
    <br>

    @yield('content')

    <footer class="site-footer">
        <div class="container">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2020 - 2201744084
                    <a href="#">Andreas Chendra</a>.
                </p>
            </div>
        </div>
    </footer>

</body>
</html>