<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PorkMoney - Newsletters</title>
    <meta name="keyword" content="porkmoney founder, porkmoney, pork money, pork investment, pig investment">
    <meta name="author" content="PorkMoney">
    <meta name="description" content="Pork: The future of livestock farming">
    <link rel="shortcut icon" href="favicon.png">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/materialize.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/css/fonts.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
    <link href="/css/dashboard-style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

    <style>
        body{
            height: 90vh;
            overflow: hidden;
        }
        .news-overview{
            position: relative;
            height: 80vh;
        }
        .side-news{
            background: lightgray;
            padding: 10px 0;
            border: 1px solid lightgray;
            height: 80vh;
            margin: 0;
            position: absolute;
            width: 100%;
            border-radius: 2px;
            color: var(--pry-color);
            overflow: auto;
        }
        .side-news li{
            padding: 10px;
            border-bottom: 1px solid rgba(0,0,0,.1);
            padding-bottom: 5px;
        }
        .side-news li:hover{
            background: gray;
            color: white;
            border-radius: 2px;
            cursor: pointer;
        }
        .side-news li:nth-child(1){
            border-top: 1px solid rgba(0,0,0,.1);
        }
        .side-news li.active{
            background: rgba(0,0,0,.1);
        }
        .side-news li.active:hover{
            color: var(--pry-color);
        }
        .side-news h4{
            margin: 0 auto;
            padding: 10px;
            font-size: 1.7rem;
            color: black;
            text-align: center;
        }
        
        .unread{
            font-weight: bold;
        }
        .section {
            padding-top: 0;
            padding-bottom: 0;
            margin-top: 80px;
        }
        .content{
            height: 80vh;
            overflow: auto;
            position: relative;
        }
        footer{
            padding-bottom: 0;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
        .content-p{
            padding: 0 15px;
        }
        #selected-news{
            display: none;
        }
        #no-selection h2.material-icons{
            width: 100%;
            font-size: 9rem;
            color: lightgray;
            margin-bottom: 0;
        }
        #no-selection h4{
            color: gray;
            font-size: 2rem;
            margin-top: 0;
        }
        #no-selection .cen{
            position: absolute;
            margin: auto;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 65%;
        }

        .content-wrapper img{
            width: 100%;
        }

        .close {
            font-size: 16px;
            font-weight: bold;
            color: white;
            background: var(--pry-color);
            position: absolute;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            text-align: center;
            line-height: 1.8;
            right: 20px;
            cursor: pointer;
            display: none;
        }

        @media(max-width: 600px){
            #selected-news{
                /* position: fixed; */
                display: none;
            }
            .close{
                display: block;
            }
        }

        .notif-message, .notif-image {
            display: none
        }

    </style>
</head>

<body class="rel">
        <!-- Menu -->
    <nav class="grey darken-4" role="navigation">
        <div class="nav-wrapper container">
            <a class="brand-logo" href="https://www.porkmoney.com" id="logo-container">
                <img alt="#" src="/img/logo.png">
            </a>
            <ul class="right hide-on-med-and-down">
                @admin
                <li><a href="/home">Home</a></li>
                <li><a href="/posts">Newsletter </a></li>
                <li><a href="/add-plan">Add Plans </a></li>
                @else
                <li>
                    <a href="/">HOME</a>
                </li>
                @endadmin
                <li>
                    <!-- Dropdown Trigger -->
                    <a class='dropdown-button' href='#' data-activates='dropdown1'>Welcome, {{$user->name}}</a>

                    <!-- Dropdown Structure -->
                    <ul id='dropdown1' class='dropdown-content'>
                        @if($user->country == "Nigeria")
                        <li class="">
                            <a href="/pdf/partnership-nigeria.pdf">Contract</a>
                        </li>
                        @else
                        <li class="">
                            <a href="/pdf/partnership-ghana.pdf">Contract</a>
                        </li>
                        @endif
                        <li class="">
                            <a href="/pdf/partnership-form.pdf">Form</a>
                        </li>
                        <li class="divider" tabindex="-1"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </li>
            </ul>
            <ul class="side-nav" id="nav-mobile">
                <li>
                    <a href="/">HOME</a>
                </li>
                <li>
                    <!-- Dropdown Trigger -->
                    <a class='dropdown-button' href='#' data-activates='dropdown2'>Welcome, {{$user->name}}</a>

                    <!-- Dropdown Structure -->
                    <ul id='dropdown2' class='dropdown-content tabs'>
                        @if($user->country == "Nigeria")
                        <input type="hidden" id="chargeCurrency" value="NGN">
                        <li class="">
                            <a href="/pdf/partnership-nigeria.pdf">Contract</a>
                        </li>
                        @else
                        <input type="hidden" id="chargeCurrency" value="GHC">
                        <li class="">
                            <a href="/pdf/partnership-ghana.pdf">Contract</a>
                        </li>
                        @endif
                        <li class="">
                            <a href="/pdf/partnership-form.pdf">Form</a>
                        </li>
                        <li class="divider" tabindex="-1"></li>
                        <li>
                            <a href="#!">Logout</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
            <a class="button-collapse" data-activates="nav-mobile" href="#">
                <i class="material- icons">menu</i>
            </a>
        </div>
    </nav>
    <!-- end of Menu -->

    <div class="section">
       
        <div class="">
            <div class="row">
                <div class="col s12 m3 pad0">
                    
                    <div class="news-overview">
                        <ul class="side-news">
                            <h4>Newsletters</h4>
                        @isset($open)
                            @foreach($user->unreadNotifications as $notifs)
                            <li class="unread select {{$open->id == $notifs->id? 'active' : ''}}" value="{{$notifs->id}}">
                                <div class="txt-limit">
                                    {{$notifs->data['title']}}
                                </div>
                                <div class="time"><small>{{$notifs->created_at->diffForHumans()}}</small></div>
                                <span class="notif-message">{!!$notifs->data['message']!!}</span>
                            </li>
                            @endforeach
                            @foreach($user->readNotifications as $notifs)
                            <li class="select {{$open->id == $notifs->id? 'active' : ''}}">
                                <div class="txt-limit">
                                    {{$notifs->data['title']}}
                                </div>
                                <div class="time"><small>{{$notifs->created_at->diffForHumans()}}</small></div>
                                <span class="notif-message">{!!$notifs->data['message']!!}</span>
                                <!-- <img src="{{$notifs->data['image']}}" class="notif-image" /> -->
                            </li>
                            @endforeach
                        @else
                            @foreach($user->unreadNotifications as $notifs)
                            <li class="unread select" value="{{$notifs->id}}">
                                <div class="txt-limit">
                                    {{$notifs->data['title']}}
                                </div>
                                <div class="time"><small>{{$notifs->created_at->diffForHumans()}}</small></div>
                                <span class="notif-message">{!!$notifs->data['message']!!}</span>
                            </li>
                            @endforeach
                            @foreach($user->readNotifications as $notifs)
                            <li class="select" value="{{$notifs->id}}">
                                <div class="txt-limit">
                                    {{$notifs->data['title']}}
                                </div>
                                <div class="time"><small>{{$notifs->created_at->diffForHumans()}}</small></div>
                                <span class="notif-message">{!!$notifs->data['message']!!}</span>
                                <!-- <img src="{{$notifs->data['image']}}" class="notif-image" /> -->
                            </li>
                            @endforeach
                        @endisset
                        </ul>
                    </div>

                </div>

                <div class="col s12 m9 content-wrapper pad0">
                    @isset($open)
                    <div class="content" id="selected-news">

                        <div class="close">X</div>

                        <h4 class="center title">{{$open->data['title']}}</h4>
                        <p class="center-align image">
                            <img src="{{$open->data['image']}}" class="news-img">
                        </p>
                        <div class="text-justify content-p message">{!!$open->data['message']!!}</div>
                    </div>
                    @else
                    <div class="content" id="selected-news">

                        <div class="close">X</div>

                        <h4 class="center title"></h4>
                        <p class="center-align image">
                            <img src="" class="news-img">
                        </p>
                        <p class="text-justify content-p message"></p>
                    </div>
                    @endisset

                    <div class="content" id="no-selection">

                        <div class="cen">
                            <h2 class="center-align material-icons">email</h2>

                            <h4 class="center-align">Select an item to read</h4>
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
    <!--== Modenizer installed ==-->
    <script src="/js/modernizr.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/materialize.js"></script>
    <script src="/js/init.js"></script>
    <script>
        $(document).ready(function () {
            $('.materialboxed').materialbox();
            $('.parallax').parallax();
            $('.modal').modal();
            $('.tabs').tabs({
                swipeable: true
            });
            $('.datepicker').pickadate();
            $('.collapsible').collapsible();
            $('.dropdown-button').dropdown();

            if($('#title').text() == " ") {
                $('#no-selection').hide();
                $('#selected-news').show();
            }
            else {
                $('#no-selection').show();
                $('#selected-news').hide();
            }
        });

        $('li.select').click(function () {
            // var image = this.querySelector('.notif-image').src
            var title = this.querySelector('.txt-limit').innerText
            var message = this.querySelector('.notif-message').innerText

            var selectedNews = document.getElementById('selected-news')

            // selectedNews.querySelector('.image').firstElementChild.src = image
            selectedNews.querySelector('.title').innerText = title
            selectedNews.querySelector('.message').innerText = message

            $('#selected-news').show();
            $('#no-selection').hide();
            $('li.select').removeClass('active');
            $(this).addClass('active');
            $(this).removeClass('unread');

            if ($(window).width() <= 600) {
				$('.news-overview').hide();
			}
        });

        $('.close').click(function () {
            $('#selected-news').hide();
            $('.news-overview').show();
        })

        document.querySelectorAll('.unread').forEach( function(element) {
            element.addEventListener('click', function()
            {
                if(this.getAttribute('value') != null)
                {
                    $.ajax({
                        url: '/read-notification/'+this.getAttribute('value'),
                        type: 'post',
                        headers: {
                            'X-CSRF-TOKEN' : document.head.querySelector('meta[name="csrf-token"]').content
                        },
                        dataType: 'json',
                        success: function (data) {
                            console.table(data);
                            element.setAttribute('value', null)
                        }
                    });
                }
            })
        })
    </script>


    <!-- end of Scripts-->
</body>

</html>
