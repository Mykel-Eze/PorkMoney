<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PorkMoney - Data</title>
    <link rel="shortcut icon" href="favicon.png">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/fonts.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

    <style>
        body {
            position: relative;
        }

        body::before {
            height: 100%;
            width: 100%;
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            background: url(' img/goals.png');
            opacity: 0.15;
            z-index: -1;
        }
        
        .modal-body{
            color: black;
        }
        .modal-body table{
            margin: 0 auto;
        }
        .modal-body td{
            padding: 5px;
        }
        .dataTables_length{
            display: none;
        }
        .dataTables_filter.input-field label{
            position: relative;
            top: 0;
            width: 100%;
            padding: 0;
        }
        .input-field input[type="search"]{
            padding: 0;
        }
        .input-field input[type="search"]:focus {
            background: transparent;
            color: #000;
        }
        .row{
            margin-left: 0;
        }
        .dataTables_wrapper .dataTables_filter {
            float: none;
            text-align: left;
        }
        .dataTables_wrapper .dataTables_filter input {
            margin-left: 0;
        }
        .btn-floating{
            width: 35px;
            height: 35px;
            line-height: 35px;
            font-size: 20px;
        }
        .input-field, .select-wrapper input.select-dropdown{
            margin: 0;
        }
        .table-responsive{
            width: 100%;
            overflow-x: auto;
            position: relative;
        }
        .total-active div{
            text-align: center;
            border-radius: 50%;
            background: var(--pry-color);
            padding-top: 10%;
            width: 100%;
            padding-bottom: 32%;
            color: white;
        }
        .pmn-data div, .pmg-data div {
            padding: 5px;
            font-size: 1.2rem;
        }
        .pmn-data div:first-child, .pmg-data div:first-child{
            padding-top: 0;
        }
        .pm-txt {
            color: var(--pry-color);
            font-weight: bold;
        }
        .padded.inv-overview{
            background: var(--pry-dark-color);
            padding-bottom: 20px;
            border-radius: 8px;
        }
        .padded.inv-overview img{
            width: 15%;
            margin: 0;
            margin-right: 5px;
            top: 5px;
            position: relative;
        }
        .dataTables_filter input[type="search"]{
            height: 2rem;
        }
        .inv-header{
            font-size: 1.92rem;
            text-align: center;
        }
        .stats-txt{
            padding-left: 10%;
        }

        @media(max-width: 600px){
            .padded{
                padding: 0 !important;
            }
            h3{
                font-size: 2.3rem;
            }
            input[type="search"]{
                height: 2rem;
            }
            footer{
                position: absolute;
                width: 100%;
                bottom: 0;
            }
        }
    </style>
</head>

<body>
 
    <!-- Menu -->
    <nav class="grey darken-4" role="navigation">
        <div class="nav-wrapper container">
            <a class="brand-logo" href="/" id="logo-container">
                <img alt="#" src="img/logo-black.png">
            </a>
            <ul class="right hide-on-med-and-down" style="float:right">
                <li><a href="/dashboard">Dashboard </a></li>
                <li><a href="{{url('contracted-display')}}">C-Forms</a></li>
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
            <a class="button-collapse" data-activates="nav-mobile" href="#">
                <i class="material-icons">menu</i>
            </a>
        </div>
    </nav>
    <!-- end of Menu -->

    <div class="section jb">
        <div class="row">
            <div class="col s12 offset-m1 padded">
                <div class="col s12">

                    <div class="col s12 m10 offset-m1 padded inv-overview">
                        <div class="col s12 m8">
                            <h4 class="pry-color stats-txt">Stats</h4>

                            <div class="total-active col s4">
                                <div>
                                    <h3 class="mag-d-0 actv"></h3>
                                    <span>Active Partners</span>
                                </div>
                            </div>

                            <div class="pmn-data col s4">
                                <div><span class="pm-txt">PMN1 </span> - <span>{{$pmn1sum}}</span></div>
                                <div><span class="pm-txt">PMN2 </span> - <span>{{$pmn2sum}}</span></div>
                                <div><span class="pm-txt">PMN3 </span> - <span>{{$pmn3sum}}</span></div>
                                <div><span class="pm-txt">PMN4 </span> - <span>{{$pmn4sum}}</span></div>
                            </div>

                            <div class="pmg-data col s4">
                                <div><span class="pm-txt">PMG1 </span> - <span>{{$pmg1sum}}</span></div>
                                <div><span class="pm-txt">PMG2 </span> - <span>{{$pmg2sum}}</span></div>
                                <div><span class="pm-txt">PMG3 </span> - <span>{{$pmg3sum}}</span></div>
                                <div><span class="pm-txt">PMG4 </span> - <span>{{$pmg4sum}}</span></div>
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <h4 class="pry-color">Amount Raised</h4>
                            <div class="money money-ng"><h3> <img src="img/nigeria.svg" alt="Nigeria">  &#8358;<span class="value"></span> </h3></div>
                            <div class="money money-gh"><h3> <img src="img/ghana.svg" alt="Ghana">  &#8373;<span class="value"></span> </h3></div>
                        </div>
                    </div>

                    <div class="col s12 m10 offset-m1 padded">
                        <h3 class="pry-color inv-header">Investors Data</h3>
                        <div class="table-responsive">
                            <table class="highlight" id="datatable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>User id</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                   <th>Date Registered</th>
                                    <th>Last payment</th>
                                    <th>Plan</th>
                                    <th>Payments</th>
                                    <th>Activate User</th>
                                    <th>Activate Contract Form</th>
                                    <th>Delete User.</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                @if(isset($data))
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$d->name}}</td>
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->email}}</td>
                                    <td>{{$d->phone}}</td>
                                    <td>{{$d->created_at->todatestring()}}</td>
                                    {{------space-------}}
                                    <td> @foreach($d->subscriptions as $sub)
                                             @if($loop->last)
                                              {{$sub->created_at->todatestring()}} 
                                            
                                            @endif
                                        @endforeach
                                    </td>
                                    {{------space-------}}
                                    <td>{{$d->plan}}</td>
                                    {{------space-------}}
                                   {{-- @if($d->is_activated | !blank($d->verificationToken)) --}}
                                   @if($d->is_activated )
                                    <td></td>
                                    <td></td>
                                    @else
                                    <td>
                                        <div class="input-field to-hide">
                                            <select class="pay-method" name="pay_method">
                                                <option value="offline">Offline</option>
                                                <option value="online">Online</option>
                                            </select>
                                        </div>
                                    </td>
                                    
                                    <td class="center-align to-hide">
                                        <button class='btn btn-floating activationbutton' data-user-id="{{$d->id}}" data-plan="{{$d->plan}}"   >&rightarrow;</button>
                                    </td>


                                    @endif

                                    {{------space-------}}

                                    @if($d->is_activated==1 && !($d->iscontracted==1 ))

                                    <td class="center-align to-hide">
                                        <button class='btn btn-floating contractbutton' data-user-id="{{$d->id}}" data-plan="{{$d->plan}}" >&rightarrow;</button>
                                    </td>

                                   {{-- <td class="center-align to-hide">
                                        <form  method="POST">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{$d->id}}">
                                             <input type="hidden" name="data_plan" value="{{$d->plan}}">
                                    <button class='btn btn-floating contrac' >&rightarrow;</button>
                                   </form>
                                    </td> --}}
                                    @else
                                    <td></td>
                                    @endif


                                    @if($d->is_activated==1 || $d->iscontracted==1)
                                    <td></td>
                                    @else
                                    <td class="center-align to-hide" >
                                        <button class='btn btn-floating deletetbutton' data-user-id="{{$d->id}}"> &#128465;</button>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
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
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('select').material_select();
            $("#datatable").DataTable();
            $(".dataTables_filter").addClass("input-field");
            $(".dataTables_filter").appendTo(".md-form");

            function nFormatter(num) {
                if (num >= 1000000000) {
                    return (num / 1000000000).toFixed(2).replace(/\.0$/, '') + 'G';
                }
                if (num >= 1000000) {
                    return (num / 1000000).toFixed(2).replace(/\.0$/, '') + 'M';
                }
                if (num >= 1000) {
                    return (num / 1000).toFixed(2).replace(/\.0$/, '') + 'K';
                }
                return num;
            };

            $('h3.actv').text(nFormatter({{$subsum}}));
            $('.money-ng .value').text(nFormatter({{$totalNg}}));
            $('.money-gh .value').text(nFormatter({{$totalGh}}));
        
        });


    </script>

    <script>
    
        document.querySelectorAll('.activationbutton').forEach( function(el) {

            el.addEventListener('click', function(){
                var actv8 = confirm("Are you sure you want to activate this user?");
                if (actv8 == true) {

                this.disabled = true
                console.log($(this).parent().parent().find('select.pay-method').val())
                $.ajax({
                    //url: '/send-password-link',
                    url: '/activateuser',
                    type: 'post',
                    data: {
                        data_plan     : el.getAttribute('data-plan'),
                        //pay_method : $(this).parent().parent().find('select.pay-method').val(),
                        user_id    : el.getAttribute('data-user-id'),
                        //user_email    : el.getAttribute('data-email'),
                        

                    },
                    headers: {
                        'X-CSRF-TOKEN' : document.head.querySelector('meta[name="csrf-token"]').content
                    },
                    dataType: 'json',
                    success: function (data) {
                        el.parentElement.parentElement.querySelectorAll('.to-hide').forEach( function(element) {
                            element.classList.add('invisible')
                        });
                    }
                });
                }
            });
        });
    </script>
    <!-- end of Scripts-->

    <script>
    
        document.querySelectorAll('.contractbutton').forEach( function(el) {
            el.addEventListener('click', function(){


                var contractF = confirm("Are you sure you want to contrac this user?");
                if (contractF == true) {


                this.disabled = true
                console.log($(this).parent().parent().find('select.pay-method').val())
                $.ajax({
                    url: '/activatecontract',
                    type: 'post',
                    data: {
                       // data_plan       : el.getAttribute('data-plan'),
                        //pay_method : $(this).parent().parent().find('select.pay-method').val(),
                        user_id    : el.getAttribute('data-user-id')
                    },
                    headers: {
                        'X-CSRF-TOKEN' : document.head.querySelector('meta[name="csrf-token"]').content
                    },
                    dataType: 'json',
                    success: function (data) {
                        el.parentElement.parentElement.querySelectorAll('.to-hide').forEach( function(element) {
                            element.classList.add('invisible')
                        });
                    }
                });


            }
            });
        });
    </script>
    <!-- end of Scripts-->


    <script>
    
        document.querySelectorAll('.deletetbutton').forEach( function(el) {
            el.addEventListener('click', function(){


            var delB = confirm("Sure want to delete this user?");
            if ( delB == true) {


                this.disabled = true
                //console.log($(this).parent().parent().find('select.pay-method').val())
                $.ajax({
                    url: '/deleteuser',
                    type: 'post',
                    data: {
                       // data_plan       : el.getAttribute('data-plan'),
                        //pay_method : $(this).parent().parent().find('select.pay-method').val(),
                        user_id    : el.getAttribute('data-user-id')
                    },
                    headers: {
                        'X-CSRF-TOKEN' : document.head.querySelector('meta[name="csrf-token"]').content
                    },
                    dataType: 'json',
                    success: function (data) {
                        el.parentElement.parentElement.querySelectorAll('.to-hide').forEach( function(element) {
                            element.classList.add('invisible')
                        });
                    }
                });
  
            }
            });
        });
    </script>
    <!-- end of Scripts-->


</body>

</html>

</html>