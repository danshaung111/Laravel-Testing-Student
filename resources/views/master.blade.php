<!DOCTYPE html>
<html>
<head>
	<title>Wedding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{ asset('mytemplateassets/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('mytemplateassets/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mytemplateassets/fontawesome/css/all.min.css')}}">
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-float fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light py-4 menu">
            <div class="container">
                <a href="index.html" class="navbar-brand">
                    DANSHAUNG
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div id="myNav" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="{{route('servicepage')}}" class="nav-link">Service</a></li>
                            <li class="nav-item"><a href="{{route('gallarypage')}}" class="nav-link">Gallery</a></li>
                            <li class="nav-item"><a href="{{route('blogpage')}}" class="nav-link">Blog</a></li>
                            <li class="nav-item"><a href="{{route('aboutpage')}}" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="{{route('contactpage')}}" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
            </div>
        </nav>
    </div>

    @yield('content')

    <!-- Footer -->
    <footer class="page-footer font-small bg-dark pt-4">
      <!-- Footer Elements -->
        <div class="container">
        <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-google-plus-g fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-dribbble fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
            </ul>
        <!-- Social buttons -->
        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center text-light py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/" class="text-light"> MDBootstrap.com</a>
        </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>
</html>