<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0" name="viewport">
    <title>PorkMoney - Dashboard</title>
    <meta name="keyword" content="porkmoney founder, porkmoney, pork money, pork investment, pig investment">
    <meta name="author" content="PorkMoney">
    <meta name="description" content="Pork: The future of livestock farming">
    <link rel="shortcut icon" href="favicon.png">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/fonts.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/dashboard-style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

    <!--== Modenizer installed ==-->
    <script src="js/modernizr.js"></script>
    <style type="text/css">
        .notif-message {
            display: none
        }
        .section.jb::before{
            background: url(' img/doodles.png');
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            opacity: 0.1;
            background-size: 50%;
        }
        .notify .collection{
            border: none;
        }
        .material-icons.caret{
            display: initial;
            line-height: 0;
            position: relative;
            top: 6px;
        }
    </style>

    <!-- Event snippet for PorkMoney Website Tracking conversion page -->
        <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-796473401/u1yPCOyBnYYBELnw5PsC',
            'value': 250000.0,
            'currency': 'NGN'
        });
        </script>

</head>

<body class="rel">

<!--== FB Pixel Code ==-->
    <script>
        fbq('track', 'AddPaymentInfo');
    </script>
<!--== FB Pixel Code ==-->

    <!-- Menu -->
    <nav class="grey darken-4" role="navigation">
        <div class="nav-wrapper container">
            <a class="brand-logo" href="https://www.porkmoney.com" id="logo-container">
                <img alt="#" src="/img/logo-black.png">
            </a>
            <ul class="right hide-on-med-and-down">
                @admin
                <li><a href="/home">Home</a></li>
                 <li><a href="{{url('sendemails')}}"> Mail Partners </a></li>
                <li><a href="{{url('emailprospects')}}"> Mail Prospects </a></li>
                <li><a href="/posts">Newsletter </a></li>
                <li><a href="/add-plan">Add Plans </a></li>
                @else
                <li>
                    <a href="/">HOME</a>
                </li>
                @endadmin
                <li>
                    <!-- Dropdown Trigger -->
                    <a class='dropdown-button' href='#' data-activates='dropdown1'>Welcome, {{$user->name}} <i class="material-icons caret">arrow_drop_down</i></a>

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
                            <a href="{{url('reset-email')}}">Change Password</a>
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
                        <input type="hidden" id="chargeCurrency" value="GHS">
                        <li class="">
                            <a href="{{url('reset-email')}}">Change Password</a>
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
                <i class="material-icons">menu</i>
            </a>
        </div>
    </nav>
    <!-- end of Menu -->

    <div class="section jb pad-d-0 rel">
        
        <div id="test1" class="container">
            <div class="col s12">
                <div class="p-container">
                    <h3 class="greet text-uppercase rel">Welcome {{$user->name}},  
                        <i class="material-icons pull-right msg-env">email</i>
                        @if( count($user->unreadNotifications) > 0)
                        <span class="badge">{{count($user->unreadNotifications)}}</span>
                        @endif
                    </h3>

                    <div class="notice-wrap row">
                        <div class="notice col s12 m6 pull-right">
                            <div class='notify'>
                                <ul class="collection with-header">
                                    <!-- <li class="collection-header">
                                        <h4>Newsletter
                                            <span class="badge">4</span>
                                        </h4>
                                    </li> -->
                                    @foreach($user->unreadNotifications as $notifs)
                                    <li class="collection-item col s12">
                                        <div class="col s12 pad0 notif-body">
                                            <a href="/dashboard/notifications/{{$notifs->id}}">
                                                <div class="txt-limit unread col s8 pad0 notif-title">{{$notifs->data['title']}}</div>
                                                <div class="post-time col s4 pad0 secondary-content">
                                                    <small class="time">{{$notifs->created_at->diffForHumans()}}</small>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    @endforeach
                                    @foreach($user->readNotifications as $notifs)
                                    <li class="collection-item col s12">
                                        <div class="col s12 pad0 notif-body">
                                            <a href="/dashboard/notifications/{{$notifs->id}}">
                                                <div class="txt-limit col s8 pad0 notif-title">{{$notifs->data['title']}}</div>
                                                <div class="post-time col s4 pad0 secondary-content">
                                                    <small class="time">{{$notifs->created_at->diffForHumans()}}</small>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class='notify-details'>
                                <div>
                                    <span class="back"> &LeftArrow; Back</span>
                                    <ul class="collection with-header">
                                        <li class="collection-header">
                                            <h4 class="details-title"></h4>
                                        </li>
                                        <li class="details-message message"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <input type="hidden" id="total-subs" value={{count($user->subscriptions)}}>
                        @foreach($user->subscriptions as $sub)
                        <div class="col s6 m4 l3 mg">
                            @if($sub->percent_complete < 50)
                            <div class="col s12 info-card starting">
                            @else
                            <div class="col s12 info-card {{$sub->percent_complete < 50? 'starting' : ($sub->percent_complete>50 & $sub->percent_complete<100)? 'half-way' :'complete'}}">
                            @endif
                                <div id="circle{{$loop->index}}" class="circle-bar"> 
                                    <span class="money"> <small class="percent_complete">{{$sub->percent_complete}}%</small> <br> {!! $currency !!} {{number_format($sub->current_value)}}</span> 
                                </div>
                                <div class="inv-details">
                                    <p><span class="bold">{{$sub->created_at->format('d/F/y')}} <br></span> <small class="pry-color"> Date Started </small></p>
                                    <p><span class="bold">{{$sub->created_at->addMonths(11)->format('d/F/y')}} <br></span> <small class="pry-color"> Expected End Date</small></p>
                                    <p><span class="bold"><b>{!! $currency !!} </b>{{number_format($sub->returns)}} <br></span> <small class="pry-color">Expected Returns</small></p>
                                </div>
                                <div class="center">
                                    <button class="btn-custom {{$sub->percent_complete<100? 'incomplete-btn' : 'complete-btn'}}">Cash Out</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

@if($user->country == "Nigeria")
        @include('partials.dashboard.nigeria')
@else
        @include('partials.dashboard.ghana')
@endif

@if(isset($firstNotification))
<!--=== Newsletter Modal ===-->
<div id="news" class="modal modal-fixed-footer">
       <div class="modal-content">
            <div class="close modal-close">X</div>
            <h4>{{$firstNotification->data['title']}}</h4>
            <!-- <p class="center-align">
                <img src="img/medium-google.jpeg" alt="notify-image" class="news-img">
            </p> -->
            <p>
                {!!$firstNotification->data['message']!!}
            </p>
        </div>

        <div class="modal-footer center">
            <a href="/dashboard/notifications" class="modal-close btn-custom">Read More</a>
        </div>
    </div>
<!--=== Newsletter Modal ===-->
@php
    $firstNotification->markAsRead()
@endphp
@endif
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
    <script src="js/circle-progress.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>

    <script>
        var totalAmount = 0;
        $(document).ready(function () {
            $('.materialboxed').materialbox();
            $('.parallax').parallax();
            $('.modal').modal();
            $('.tabs').tabs({swipeable: true});
            $('select').material_select();
            $('.datepicker').pickadate();
            $('.collapsible').collapsible();
            $('.dropdown-button').dropdown();
            $('#news').modal('open');
            
            //progress circles
            for (var i = 0; i < document.getElementById('total-subs').value; i++) {
                var value = parseFloat(document.getElementById('circle'+i).querySelector('.percent_complete').innerText)/100
                $('#circle'+i).circleProgress({
                    value: value,
                    size: 150,
                    fill: {
                    gradient: ["red", "orange"]
                    }
                });
                
            }

            //calculations
             $.fn.digits = function () {
                return this.each(function () {
                    $(this).text($(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                })
            }

            $('input.qty').keyup(function () {
                calculateTotal()
            });

            $('.pckgs, #p1, #p2, #p3, #p4, .pm-list').hide();
        });
            

        /* $('.pckgs .info-card').on('click', function(e) {
            $(this).find("label").click();
            e.preventDefault();
        }); */


        function calculateTotal(){
            var pmn1 = $('input#pmn1').val();
                var pmn2 = $('input#pmn2').val();
                var pmn3 = $('input#pmn3').val();
                var pmn4 = $('input#pmn4').val();
                var p1 = ($('#p1 input.qty').val()) * pmn1;
                var p2 = ($('#p2 input.qty').val()) * pmn2;
                var p3 = ($('#p3 input.qty').val()) * pmn3;
                var p4 = ($('#p4 input.qty').val()) * pmn4;
                totalAmount = p1 + p2 + p3 + p4;

                $('#total').text(totalAmount).digits();
        }

        $(document).ready(function () {
            $('.notify-details').hide();
            $('.notice').hide();
        });

        $('.msg-env, .greet .badge').click(function () {
            $('.notice').slideToggle(500, 'linear');
        });

        $('.add-link').click(function () {
            $('.pckgs').toggle(1000);
            $('.btn-pckg .material-icons').toggleClass('dash');
            $('.btn-pckg .material-icons').text('add');
            $('.dash').text('remove');
        });

     //    $('.collection-item').click(function () {
     //        this.classList.remove('unread')
     //        var notifTitle   = $(this).find('.notif-title').text()
     //        var notifMessage = $(this).find('.notif-message').text()

     //        $('.notify-details').find('.details-title').text(notifTitle)
     //        $('.notify-details').find('.details-message').text(notifMessage)
     //        $('.notify-details').show(500, 'linear')
     //        $('.notify').hide(500, 'linear')
	    // });
    
     //    $('.back').click(function () {
     //        $('.notify').show(500, 'linear');
     //        $('.notify-details').hide(500, 'linear');
	    // });
    
        $('input.pmn:checkbox').change(function () {
            if ($('#pmn1').is(':checked')){
                $('#p1').show();
                $('#pm-list1').show();
                $('#p1 input.qty').val(1);
            } else{
                $('#p1').hide();
                $('#pm-list1').hide();
                $('#p1 input.qty').val(0);
            }
            if ($('#pmn2').is(':checked')) {
                $('#p2').show();
                $('#pm-list2').show();
                $('#p2 input.qty').val(1);
            } else {
                $('#p2').hide();
                $('#pm-list2').hide();
                $('#p2 input.qty').val(0);
            }
            if ($('#pmn3').is(':checked')) {
                $('#p3').show();
                $('#pm-list3').show();
                $('#p3 input.qty').val(1);
            } else {
                $('#p3').hide();
                $('#pm-list3').hide();
                $('#p3 input.qty').val(0);
            }
            if ($('#pmn4').is(':checked')) {
                $('#p4').show();
                $('#pm-list4').show();
                $('#p4 input.qty').val(1);
            } else {
                $('#p4').hide();
                $('#pm-list4').hide();
                $('#p4 input.qty').val(0);
            }
            calculateTotal()
        });

        $('#checkout-btn').click(function () {
            $('#pm-list1 .pk-qty').text($('#p1 input.qty').val());
            $('#pm-list2 .pk-qty').text($('#p2 input.qty').val());
            $('#pm-list3 .pk-qty').text($('#p3 input.qty').val());
            $('#pm-list4 .pk-qty').text($('#p4 input.qty').val());
        })
        var data = []

        function prepData(data){
            for(var i=4; i>0; i--){
                if($('#p'+i+' input.qty').val()>0){
                    data.push({ 
                        plan_id :$('#p'+i+' input.qty').attr('data-plan'), 
                        units : $('#p'+i+' input.qty').val()
                    })
                }
            }
        }

        document.getElementById('proceed').addEventListener('click', function(){
            prepData(data)
            var email = $('#customer-email').val()
            
            // Paystack handle
            var handler = PaystackPop.setup({
              //key: 'pk_test_fb719ed621a595734c4efa5441eb8672636f06b9',
              key: '#',
              email: email,
              amount: totalAmount * 100,
              currency: document.getElementById('chargeCurrency').value,
              metadata: {
                 custom_fields: [
                    {
                        display_name: "Email Address",
                        variable_name: "email",
                        value: email
                    }
                 ]
              },
              callback: function(response){
                console.table(response)
                $.ajax({
                    url: '/subscribe',
                    type: 'post',
                    data: {
                        purchases: data,
                        reference: response.reference
                    },
                    headers: {
                        'X-CSRF-TOKEN' : document.head.querySelector('meta[name="csrf-token"]').content
                    },
                    dataType: 'json',
                    success: function (data) {
                        // console.table(data);
                        window.location.reload()
                    }
                });
              },
              onClose: function(){
                console.table(response)
                  // alert('window closed');
              }
            });
            handler.openIframe();
        })
    </script>
    
    <!-- end of Scripts-->
</body>

</html>
