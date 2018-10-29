<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PorkMoney - Emails</title>
    <link rel="shortcut icon" href="favicon.png">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/fonts.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/richtext.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .richText .richText-toolbar ul li a{
            color: var(--pry-color);
        }
        .btn-div{
            margin-top: 20px;
        }
        .richText .richText-editor{
            height: 80vh;
        }

        .richText-editor img{
            width: auto;
            max-width: 100%;
        }
    </style>
</head>

<body>
 
    <!-- Menu -->
    <nav class="grey darken-4" role="navigation">
        <div class="nav-wrapper container">
            <a class="brand-logo" href="https://www.porkmoney.com" id="logo-container">
                <img alt="#" src="img/logo-black.png">
            </a>
            <ul class="right hide-on-med-and-down" style="float:right">
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

            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>
    <!-- end of Menu -->

    <div class="section jb">

        <div class="">
            <div class="container">
                <div class="row">
                    <div class="center">
                        <h4>Send Emails To Partners</h4>
                    </div>

                    <div class="col s12">
                        <div class="">
                            <form action="{{route('sendemail')}}" method="post">
                                @csrf
                                <div class="input-field col s12">
                                    <input name="title" type="text" class="validate text-upppercase">
                                    <label for="subject">Title</label>
                                </div>

                                <div class="col s12">
                                    <label for="msg"></label>
                                    <textarea name="msg" class='content' id="" cols="30" rows="10"></textarea>                                  
                                </div>

                                <div class="center col s12 btn-div">
                                    <button type="submit" class="waves-effect waves-light btn">Send</button>
                                </div>

                            </form>
                        </div>
                    </div>
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
        <script src="js/jquery.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script src="js/jquery.richtext.js"></script>

    <script>
        $(document).ready(function () {
            $('.materialboxed').materialbox();
            $('.parallax').parallax();
            $('.modal').modal();
            $('.tabs').tabs({
                swipeable: true
            });
            	$('.content').richText();
        });

    </script>
    <!-- end of Scripts-->

</body>

</html>

</html>