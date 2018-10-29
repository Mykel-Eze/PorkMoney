<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PorkMoney - AddPlan</title>
    <meta name="keyword" content="porkmoney founder, porkmoney, pork money, pork investment, pig investment">
    <meta name="author" content="PorkMoney">
    <meta name="description" content="Pork: The future of livestock farming">
    <link rel="shortcut icon" href="favicon.png">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/materialize.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/css/fonts.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
    <link href="/css/dashboard-style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

    <style>
        body{
            height: auto;
            min-height: 90vh;
        }

        .dataTables_filter{
            text-align: left !important;
            width: 210px;
        }
        .dataTables_filter label{
            padding: 5px;
        }
        .dataTables_filter input[type='search']{
            background-color: white;
            font-size: 16px;
            border: 1px solid #9e9e9e;
            height: 1.5rem;
            padding: 2px 5px;
            border-radius: 4px;
        }
        footer{
            position: absolute;
            width: 100%;
            bottom: 0;
        }
        .input-field{
            margin: 0;
        }
        .input-field input {
            border: 1px solid #9e9e9e;
            border-radius: 8px;
            text-align: center;
            margin: 0 !important;
            height: 2rem !important;
        }
        .num-con {
            width: 10%;
        }
        table a.dropdown-button{
            margin-left: 20%;
            font-size: 18px;
            color: var(--pry-color);
        }
        .input-field.hey{
            width: 70%;
        }
        .btn-custom.btn-actv8{
            color: white;
            background: var(--pry-color);
            border: none;
            padding: 2px 10px;
            border-radius: 2px;
        }
        .btn-custom.btn-payout{
            color: var(--pry-color);
            background: white;
            border: 1px solid var(--pry-color);
            padding: 2px 10px;
            border-radius: 2px;
        }
        .dataTables_length{
            display: none;
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
                <h4 class="center-align"></h4>
                <table id="partners-table" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Current</th>
                            <th>New Plans</th>
                            <th>Qty</th>
                            <!-- <th>Date</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="main-tr">
                            <td>
                                <span>{{$user->name}} </span> - <span> ({{$user->phone}}) {{$user->country}}</span>
                            </td>

                            <td>
                                 <!-- Dropdown Trigger -->
                                <a class='dropdown-button' href='#' data-activates='old-plans{{$loop->index}}'>{{$user->subscriptions()->count()}}</a>

                                <!-- Dropdown Structure -->
                                <ul id='old-plans{{$loop->index}}' class='dropdown-content tabs'>
                                    @foreach($user->subscriptions as $sub)
                                    <li class="">
                                        <a>{{$sub->plan->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </td>
                            
                            <td>
                                <div class="input-field hey">
                                    @if($user->country == "Nigeria")
                                    <select class="plan">
                                        <option value="PMN1">PMN1</option>
                                        <option value="PMN2">PMN2</option>
                                        <option value="PMN3">PMN3</option>
                                        <option value="PMN4">PMN4</option>
                                    </select>
                                    @else
                                    <select class="plan" name="plan">
                                        <option value="PMG1">PMG1</option>
                                        <option value="PMG2">PMG2</option>
                                        <option value="PMG3">PMG3</option>
                                        <option value="PMG4">PMG4</option>
                                    </select>
                                    @endif
                                </div>
                            </td>

                            <td class="num-con">
                                <div class="input-field">
                                    <input type="number" name="units" value="1" min="1" class="units">
                                    <input type="hidden" name="user-id" value="{{$user->id}}" class="user-id">
                                </div>
                            </td>

                            <td>
                                <button class="btn-custom btn-actv8 add">Activate</button>
                                <button class="btn-custom btn-payout">Payout</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

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
    <script src="/js/materialize.js"></script>
    <script src="/js/init.js"></script>
    <script src="js/init.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.materialboxed').materialbox();
            $('.parallax').parallax();
            $('.modal').modal();
            $('.dropdown-button').dropdown();
            $('#partners-table').DataTable();
            $('select').material_select();
            });
    </script>
    <script>
        document.querySelectorAll('.add').forEach( function(el) {
            el.addEventListener('click', function(){
                // this.disabled = true
                var parent  = this.parentElement.parentElement
                var user    = parent.querySelector('.user-id').value
                var units   = parent.querySelector('.units').value
                var plan    = $(parent).find('.plan').find(":selected").text()

                $.ajax({
                    url: '/add-plan',
                    type: 'post',
                    data: {
                        plan       : plan,
                        units      : units,
                        user_id    : user
                    },
                    headers: {
                        'X-CSRF-TOKEN' : document.head.querySelector('meta[name="csrf-token"]').content
                    },
                    dataType: 'json',
                    success: function (data) {
                        location.reload()
                    }
                });
            })
        })
    </script>


    <!-- end of Scripts-->
</body>

</html>
