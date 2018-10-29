@extends('layouts.main')
@section('styles')
    <style>
       .form-pckg{
           border: 1px solid var(--pry-color);
           border-radius: 2px;
       }
       .row .list.col {
            padding: 12px;
            font-size: 1.2rem;
        }

        .subject.text-uppercase {
            font-family: var(--font);
        }

        .pad0-trans{
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .btn-div{
            padding: 1rem !important;
            background: #b3b3b3;
        }

        .list:nth-child(2n) {
            background: lightgray;
        }

        .list:nth-child(2n+1) {
            background: #b3b3b3;
        }

        #plans.dropdown-content{
            width: 200px !important;
            left: 705.583px;
        }
        .sel-pckgs-txt{
            font-size: 1.2rem;
            margin: 5px;
        }
        .pmn1 h4{
            font-size: 1.5rem;
        }
        .points{
            padding-left: 3% !important;
        }
        .points li{
            padding: 5px 0;
        }
        .pmn{
            display: none;
        }
        .invisible {
            display: none
        }

        @media(max-width: 600px) {
            .imgs .img {
                height: 135px;
            }
        }
    </style>
@endsection

@section('content')
    <div class="section jb">
        <div class="container">
            <div class="row">
                <div>
                    <h4 class="center-align">Checkout Summary</h4>
                </div>

                <div class="col s10 offset-s1 m5 offset-m2 l4 offset-l3 form-pckg pad0-trans">
                    <div class="list col s12 pad0-trans">
                        <div class="subject text-uppercase col s4">Name: </div>
                        <span class="col s8">{{$user->name}}</span>
                    </div>

                    <div class="list col s12 pad0-trans">
                        <span class="subject text-uppercase col s4">Phone: </span>
                        <span class="col s8" id="phone">{{$user->phone}}</span>
                    </div>
                    <input type="hidden" id="user-plan" value="{{$user->plan}}">
                    <input type="hidden" id="email" value="{{$user->email}}">

                    <div class="list col s12 pad0-trans">
                        <span class="subject text-uppercase col s4">Plan: </span>
                        <div class="col s8">
                            <span class="pckg text-uppercase">{{$user->plan}}</span>
                            <span class="pull-right">
                                <!-- Dropdown Trigger -->
                                <a class='dropdown-button pry-color' href='#' data-activates='plans'>Change plan</a>

                                <!-- Dropdown Structure -->
                                <ul id='plans' class='dropdown-content'>
                                    @if($user->country == 'Nigeria')
                                    <input type="hidden" id="chargeCurrency" value="NGN">
                                    <li class="">
                                        <span><span class="pm text-uppercase">pmn1</span> - <span class="prc">&#8358;250,000</span></span>
                                    </li>
                                    <li class="">
                                        <span><span class="pm text-uppercase">pmn2</span> - <span class="prc">&#8358;500,000</span></span>
                                    </li>
                                    <li class="">
                                        <span><span class="pm text-uppercase">pmn3</span> - <span class="prc">&#8358;1,000,000</span></span>
                                    </li>
                                    <li class="">
                                        <span><span class="pm text-uppercase">pmn4</span> - <span class="prc">&#8358;5,000,000</span></span>
                                    </li>
                                    @else
                                    <input type="hidden" id="chargeCurrency" value="GHS">
                                    <li class="">
                                        <span><span class="pm text-uppercase">pmg1</span> - <span class="prc">&#8373;2,000</span></span>
                                    </li>
                                    <li class="">
                                        <span><span class="pm text-uppercase">pmg2</span> - <span class="prc">&#8373;5,000</span></span>
                                    </li>
                                    <li class="">
                                        <span><span class="pm text-uppercase">pmg3</span> - <span class="prc">&#8373;10,000</span></span>
                                    </li>
                                    <li class="">
                                        <span><span class="pm text-uppercase">pmg4</span> - <span class="prc">&#8373;50,000</span></span>
                                    </li>
                                    @endif
                                </ul>
                            </span>
                        </div>
                    </div>

                    <div class="list col s12 pad0-trans">
                        <span class="subject text-uppercase col s4">Amount: </span>
                        <span class="col s8 amt">&#8358;250,000</span>
                    </div>

                    <div class="center-align col s12 btn-div">
                        <button class="btn btn-custom btn-flat white-text" id="proceed">PROCEED</button>
                    </div>

                </div>

                <div class="col s10 offset-s1 m4 l3 pry-bg-color white-text">
                    <h4 class="center sel-pckgs-txt">Selected Package</h4>
                    
                    <div id="pmn1" class="pmn">
                        <h4 class="center">PMN1</h4>

                        <ul class="points">
                            <li> 5 Weaners (4 Gilts, 1 Boar)</li>
                            <li>Feed till Maturation</li>
                            <li>Vaccination</li>
                            <li>Return on Capital - <b>20%</b> </li>
                            <li>Contract Period - 11 months</li>
                            <span class="prc invisible">&#8358;250,000</span>
                        </ul>
                    </div>

                    <div id="pmn2" class="pmn">
                        <h4 class="center">PMN2</h4>

                        <ul class="points">
                            <li> 10 Weaners (8 Gilts, 2 Boars)</li>
                            <li>Feed till Maturation</li>
                            <li>Vaccination</li>
                            <li>Return on Capital - <b>25%</b> </li>
                            <li>Contract Period - 11 months</li>
                            <span class="prc invisible">&#8358;500,000</span>
                        </ul>
                    </div>

                    <div id="pmn3" class="pmn">
                        <h4 class="center">PMN3</h4>

                        <ul class="points">
                            <li> 20 Weaners (16 Gilts, 4 Boars)</li>
                            <li>Feed till Maturation</li>
                            <li>Vaccination</li>
                            <li>Return on Capital - <b>30%</b> </li>
                            <li>Contract Period - 11 months</li>
                            <span class="prc invisible">&#8358;1,000,000</span>
                        </ul>
                    </div>

                    <div id="pmn4" class="pmn">
                        <h4 class="center">PMN4</h4>

                        <ul class="points">
                            <li> 100 Weaners (80 Gilts, 20 Boars)</li>
                            <li>Feed till Maturation</li>
                            <li>Vaccination</li>
                            <li>Return on Capital - <b>35%</b> </li>
                            <li>Contract Period - 11 months</li>
                            <span class="prc invisible">&#8358;5,000,000</span>
                        </ul>
                    </div>

                    <div id="pmg1" class="pmn">
                        <h4 class="center">PMG1</h4>

                        <ul class="points">
                            <li> 3 Weaners (2 Gilts, 1 Boar)</li>
                            <li>Feed till Maturation</li>
                            <li>Vaccination</li>
                            <li>Return on Capital - <b>20%</b> </li>
                            <li>Contract Period - 11 months</li>
                            <span class="prc invisible">&#8373;2,000</span>
                        </ul>
                    </div>

                    <div id="pmg2" class="pmn">
                        <h4 class="center">PMG2</h4>

                        <ul class="points">
                            <li> 12 Weaners (9 Gilts, 3 Boar)</li>
                            <li>Feed till Maturation</li>
                            <li>Vaccination</li>
                            <li>Return on Capital - <b>25%</b> </li>
                            <li>Contract Period - 11 months</li>
                            <span class="prc invisible">&#8373;5,000</span>
                        </ul>
                    </div>

                    <div id="pmg3" class="pmn">
                        <h4 class="center">PMG3</h4>

                        <ul class="points">
                            <li> 21 Weaners (16 Gilts, 5 Boar)</li>
                            <li>Feed till Maturation</li>
                            <li>Vaccination</li>
                            <li>Return on Capital - <b>30%</b> </li>
                            <li>Contract Period - 11 months</li>
                            <span class="prc invisible">&#8373;10,000</span>
                        </ul>
                    </div>

                    <div id="pmg4" class="pmn">
                        <h4 class="center">PMG4</h4>

                        <ul class="points">
                            <li> 90 Weaners (70 Gilts, 20 Boar)</li>
                            <li>Feed till Maturation</li>
                            <li>Vaccination</li>
                            <li>Return on Capital - <b>35%</b> </li>
                            <li>Contract Period - 11 months</li>
                            <span class="prc invisible">&#8373;50,000</span>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script type="text/javascript">
        document.getElementById('proceed').addEventListener('click', function(){
            var totalAmount = $('.amt').text().replace(/,/g, '').substr(1);
            
            // Paystack handle
            var handler = PaystackPop.setup({
             // key: 'pk_live_7c211e3f507b50c8c5bc2721c3a9cddd5fcb5d1f',
             key: '#',
              email : $('#email').val(),
              amount: totalAmount * 100,
              metadata: {
                 custom_fields: [
                    {
                        display_name: "Email Address",
                        variable_name: "email",
                        value: $('#email').val()
                    }
                 ]
              },
              callback: function(response){
                console.table(response)
                $.ajax({
                    url: '/complete-registration',
                    type: 'post',
                    data: {
                        plan: document.getElementById('user-plan').value,
                        reference: response.reference
                    },
                    headers: {
                        'X-CSRF-TOKEN' : document.head.querySelector('meta[name="csrf-token"]').content
                    },
                    dataType: 'json',
                    success: function (data) {
                        // console.table(data);
                        window.location = '/dashboard'
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
    <script>
        $(document).ready(function () {
            var plan = document.getElementById('user-plan').value.toLowerCase()
            $('.materialboxed').materialbox();
            $('.parallax').parallax();
            $('.modal').modal();
            $('.pmn').hide();
            $('#'+plan).show();
            $('.amt').text($('#'+plan).find('.prc').text());
        })

        $('#plans li').click(function () {
          $('.pmn').hide();
          $('.pckg').text($(this).find('.pm').text());
          $('.amt').text($(this).find('.prc').text());
          $('#' + $(this).find('.pm').text()).show();
        })

    </script>
    <!-- end of Scripts-->
@endsection







