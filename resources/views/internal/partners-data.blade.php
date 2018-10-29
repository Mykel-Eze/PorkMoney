<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PorkMoney - PartnersData</title>
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
            padding-top: 6%;
            width: 100%;
            padding-bottom: 28%;
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
        .addrs{
            padding: 10px 70px !important;
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
        .money h3{
            font-size: 2.62rem;
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
          
        
            <a class="button-collapse" data-activates="nav-mobile" href="#">
				<i class="material-icons">menu</i> 
			</a>
        </div>
    </nav>
    <!-- end of Menu -->

    <div class="section jb">
        <div class="row">
            <div class="col s12 m10 offset-m1 padded">
                <div class="col s12">

                    <div class="col s12 m10 offset-m1 padded">
                        <h3 class="pry-color inv-header">Subscribed Users Data</h3>
                        <div class="table-responsive">
                            <table class="highlight" id="datatable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date Registered</th>
                                    <th>First Plans</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                @if(isset($partners))
                                @foreach($partners as $partner)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$partner->name}}</td>
                                    <td>{{$partner->email}}</td>
                                    <td>{{$partner->phone}}</td>
                                    <td>{{$partner->created_at}}</td>
                                    <td>{{$partner->plan }}</td>
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
        });

    </script>

    <!-- end of Scripts-->

</body>

</html>

</html>