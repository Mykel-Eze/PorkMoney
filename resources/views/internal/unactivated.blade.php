<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PorkMoney - Unactive</title>
    <meta name="keyword" content="porkmoney founder, porkmoney, pork money, pork investment, pig investment">
    <meta name="author" content="PorkMoney">
    <meta name="description" content="Pork: The future of livestock farming">
    <link rel="shortcut icon" href="favicon.png">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/materialize.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/css/fonts.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
    <link href="/css/dashboard-style.css" rel="stylesheet" type="text/css">
    <link href="/css/c-form.css.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

    <style>
        .err-text{
            height: 70vh;
            background: white;
        }
        .err-text h3{
            position: relative;
            text-align: center;
            top: 20vh;
            margin: auto;
        }
        .section.jb{
            background: url("img/job-bg.jpg");
            background-size: 30%;
        }
    </style>
    
</head>

<body class="rel">
    <!-- Menu -->
    <nav class="grey darken-4" role="navigation">
        <div class="nav-wrapper container">
            <a class="brand-logo" href="https://www.porkmoney.com" id="logo-container">
                <img alt="#" src="img/logo-black.png">
            </a>
            <ul class="right hide-on-med-and-down" style="float:right">
                <li><a href="/">Home </a></li>
               
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>

            <ul class="side-nav" id="nav-mobile">
                <li><a href="/dashboard">Dashboard </a></li>
                <li><a href="/posts">Newsletter </a></li>
                <li><a href="/add-plan">Add Plans </a></li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </div>
    </nav>
    <!-- end of Menu -->

    <div class="section jb">

        <div class="container">
            
            <div class="row">
                <div class="err-text">
                    <h3 class="pry-color">Please purchase a plan to proceed.</h3>
                </div>
            </div>

        </div>
           
    </div>


    <!-- Footer -->
    <footer class="page-foo bter blacked" id=''>

        <br>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col s12 center">
                        <a class="grey-text">Copyright &copy; PORKMONEY 2018</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of Footer -->
    <!-- Script -->
    <!--== Modenizer installed ==-->
    <script src="/js/modernizr.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/materialize.js"></script>
    <script src="/js/init.js"></script>
    <script>
        $(document).ready(function () {
            $('.materialboxed').materialbox();
            $('.parallax').parallax();
            $('.modal').modal();
            $('.dropdown-button').dropdown();
            $('select').material_select();
            $('.datepicker').pickadate();
            });
    </script>

    <!-- end of Scripts-->
</body>

</html>
