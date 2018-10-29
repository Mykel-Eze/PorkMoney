<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PorkMoney - Paymode</title>
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
        .pay-mode{
            height: auto;
            background: white;
            top: 4vh;
            position: relative;
            border: 1px solid var(--pry-color);
            border-radius: 4px;
            padding: 2px 3.3% !important;
            margin-bottom: 20px;
        }
        .pay-instruct{
            margin: 5vh auto;
            font-size: 1.2rem;
        }
        .pay-instruct h5{
            font-size: 1.4rem;
        }
        .offline-pay ul li{
            padding: 3px 2px;
        }
        .pry-bg-color{
            background-color: var(--pry-color);
        }
        .pay-link{
            color: var(--pry-color);
            background: white;
            padding: 2px 6px;
            border-radius: 15px;
            border: 1px solid var(--pry-color);
            font-size: 1rem;
            color: #039be5;
            border: 1px solid #039be5;
        }
        .or{
            background: var(--pry-color);
            padding: 10px;
            border-radius: 50%;
            color: white;
            font-weight: bold;
        }
        .note{
            font-size: initial;
            text-align: center;
        }

        .section.jb{
            background: url("img/job-bg.jpg");
            background-size: 30%;
            height: auto;
            min-height: 75vh;
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
                
                <div class="pay-mode col s12 m8 offset-m2 l6 offset-l3">
                    <div class="">
                        <h4 class="pry-color center">
                            Payment method
                            <div style="line-height: .3;"><hr class="borline pry-bg-color"></div>
                        </h4>
                    </div>

                    <div class="online-pay pay-instruct">
                        <h5>Online Payment</h5>
                        {{--<span>Please <a href="{{url('complete-registration')}}" class="pay-link">click here</a> to pay with card.</span>--}}
                        <span>Please <a href="#" class="pay-link">click here</a> to pay with card.</span>
                    </div>

                    <div style="line-height: .3;" class="center">
                        <hr class="borline pry-bg-color"><span class="or">OR</span><hr class="borline pry-bg-color">
                    </div>

                    <div class="offline-pay pay-instruct">
                        <h5>Offline Payment</h5>
                        <p>
                            Please make your payment to: 

                            <table>

                                <tbody>
                                    <tr>
                                        <td class="pry-color">Bank Name </td>
                                        <td>GUARANTY TRUST BANK</td>
                                    </tr>

                                    <tr>
                                        <td class="pry-color">Account Name </td>
                                        <td>DIVERGENT ENTERPRISE</td>
                                    </tr>

                                    <tr>
                                        <td class="pry-color">Account Number </td>
                                        <td>0337393292</td>
                                    </tr>
                                </tbody>

                            </table>

                            <div class="note">
                                Contact
                                <span class="pry-color">08181851063 </span> or <span class="pry-color"> partners@porkmoney.com</span>
                                to confirm payment
                            </div>

                            {{-- <ul>
                                <li>
                                    <span class="pry-color">Bank Name: </span>
                                    <span>GUARANTY TRUST BANK</span>
                                </li>

                                <li>
                                    <span class="pry-color">Account Name: </span>
                                    <span>DIVERGENT ENTERPRISE</span>
                                </li>

                                <li>
                                    <span class="pry-color">Account Number: </span>
                                    <span>0337393292</span>
                                </li>
                            </ul> --}}
                        </p>
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
