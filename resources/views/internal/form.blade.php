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
    <link href="/css/c-form.css.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

    <style>
        .red{
            background-color: transparent !important;
            color: red;
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
                <div id="test3" class="col s12">
            <div class="container">
                <div class="row">
                    <div>
                        <h4 class="center">Partnership Subscription form</h4>
                        <form id="msform" action="{{Route('storecontract')}}" method="post">
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar" class="pry-color">
                                <li class="active pry-color hidden-xs">Personal Details</li>
                                <li class="pry-color hidden-xs">Next of kin</li>
                                <li class="pry-color hidden-xs">Bank Details</li>
                                <li class="pry-color hidden-xs">Declaration</li>
                            </ul>
                            <!-- fieldsets -->
                            {{-- <fieldset>
                                <h4>KYC Documentation</h4>

                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" accept=".png, .jpg, .jpeg, .pdf, .doc, .docx" type="text" placeholder="1 PASSPORT PHOTOGRAPH OF PARTNER">
                                    </div>
                                </div>

                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" accept=".png, .jpg, .jpeg, .pdf, .doc, .docx" type="text" placeholder="COPY OF GOVERNMENT ISSUE IDENTITY (DRIVER'S LICENSE, INTERNATIONAL PASSPORT, NATIONAL ID CAR, PERMANENT VOTERS CARD,....)">
                                    </div>
                                </div>

                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" accept=".png, .jpg, .jpeg, .pdf, .doc, .docx" placeholder="PROOF OF ADDRESS OF APPLICANT E.G UTILITY BILL(TELEPHONE BILLS, ELECTRICITY BILLS, ...)">
                                    </div>
                                </div>

                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file">
                                    </div>
                                        <input class="file-path validate" type="text" accept=".png, .jpg, .jpeg, .pdf, .doc, .docx" placeholder="UPLOAD FILLED CONTRACT FORM">
                                    </div>
                                </div>

                                <div class="input-field col s12">
                                        <input id="first_name" type="text">
                                        <label for="first_name">Name Of Partner</label>
                                    </div>

                                <input type="button" name="next" class="nxt action-button" value="Next" />
                            </fieldset> --}}

                            <fieldset class="data">
                                <h4>Personal Details</h4>

                                    @if(count($errors)>0)
                                    @foreach($errors->all() as $error)
                                    
                                    <p style="color:red">{{$error}}</p>
                                    
                                    @endforeach
                                    @endif


                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="firstname" type="text" value="{{old('firstname')}}" name="firstname"  class="" required>
                                        <label for="firstname">First Name <i class="red">*</i></label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="lastname" type="text" value="{{old('lastname')}}" name="lastname" class="" required>
                                        <label for="lastname">Last name <i class="red">*</i></label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="email" type="email" value="{{old('email')}}" name="email" class="" required>
                                        <label for="email">Email <i class="red">*</i></label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="phone" type="tel" value="{{old('phone')}}" name="phone" class="" required>
                                        <label for="phone">Mobile Phone <i class="red">*</i></label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <select id="marital_status" name="marital_status">
                                            <option value="" disabled selected>Marital Status</option>
                                            <option value="1">Single</option>
                                            <option value="2">Married</option>
                                        </select>
                                        <label for="marital_status">Marital Status</label>
                                    </div>

                                    <div class="input-field col s12 m6">
                                        <select id="gender" name="gender" required>
                                            <option value="" disabled selected>Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                        <label for="gender">Gender <i class="red">*</i></label>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="r_address" type="text" name="r_address" value="{{old('r_address')}}" class="" required>
                                        <label for="r_address">Residential Address <i class="red">*</i></label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="dob" type="text" name="dob" value="{{old('dob')}}" class="datepicker" required>
                                        <label for="dob">Date Of Birth <i class="red">*</i></label>
                                    </div>
                                </div>
                              

                                {{-- <input type="button" name="previous" class="previous action-button" value="Previous" /> --}}
                                <input type="button" name="next" class="nxt action-button" value="Next" />
                            </fieldset>

                            {{-- COMMENTED

                            <fieldset class='data'>
                                <h4>Personal Details</h4>
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="p_address" type="text" name="p_address" class="">
                                        <label for="p_address">Postal Address</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="mother_name" type="text" name="mother_name" class="">
                                        <label for="mother_name">Mother's Maiden Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="state" type="text" name="state" class="">
                                        <label for="state">State Of Origin</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="cob" type="text" name="cob" class="">
                                        <label for="cob">Country Of Birth</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="nationality" type="text" name="nationality" class="">
                                        <label for="nationality">Nationality</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="other-nationality" type="text" name="other_nationality" class="">
                                        <label for="other-nationality">Other Nationality (Dual Citizens)</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="tax" type="text" name="tax" class="">
                                        <label for="tax">Country Of Tax Residence</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="tin" type="text" name="tin" class="">
                                        <label for="tin">TIN/Social Security Number</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="religion" type="text" name="religion" class="">
                                        <label for="religion">Religion</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="id_type" type="text" name="id_type" class="">
                                        <label for="id_type">ID Type</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="pass_num" type="text" name="pass_num" class="">
                                        <label for="pass_num">ID/Passport Number</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="issue_date" type="text" name="issue_date" class="datepicker">
                                        <label for="issue_date">Issue Date</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="poi" type="text" name="poi" class="">
                                        <label for="poi">Place Of Issue</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="expire" type="text" name="expire" class="datepicker">
                                        <label for="expire">Expiry Date</label>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="hql" type="text" name="hql" class="">
                                        <label for="hql">Highest Qualification Level</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="occupation" type="text" name="occupation" class="">
                                        <label for="occupation">Occupation</label>
                                    </div>
                                </div>


                                <input type="button" name="previous" class="previous action-button" value="Previous" />
                                <input type="button" name="next" class="nxt action-button" value="Next" />
                            </fieldset> 
                                COMMENTED
                            --}}

                            <fieldset class='data'>
                                <h4>Next Of Kin</h4>
                                
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="firstname1" type="text" value="{{old('firstname1')}}"  name="firstname1" class="" required>
                                        <label for="firstname1">First Name <i class="red">*</i></label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="lastname1" type="text" value="{{old('lastname1')}}" name="lastname1" class="" required>
                                        <label for="lastname1">Last Name <i class="red">*</i></label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <select id="gender1"  name="gender1">
                                            <option value="" disabled selected>Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                        <label for="gender1">Gender <i class="red">*</i></label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="relationship" value="{{old('relationship')}}" type="text" name="relationship"class="" required>
                                        <label for="relationship">Relationship <i class="red">*</i></label>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="r_address1" value="{{old('r_address1')}}" type="text" class="" name="r_address1" required>
                                        <label for="r_address1">Residential Address <i class="red">*</i></label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="phone1" type="text" class="" value="{{old('phone1')}}" name="phone1" required>
                                        <label for="phone1">Mobile Phone <i class="red">*</i></label>
                                    </div>
                                </div>

                                <input type="button" name="previous" class="previous action-button" value="Previous" />
                                <input type="button" name="next" class="nxt action-button" value="Next" />
                            </fieldset>

                            <fieldset class="data">
                                <h4>Bank Details</h4>
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="account_num" type="tel" value="{{old('account_num')}}" name="account_num" class="" required>
                                        <label for="account_num">Account Number <i class="red">*</i></label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="account_name" type="text" value="{{old('account_name')}}" name="account_name" class="" required>
                                        <label for="account_name">Account Name <i class="red">*</i></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m12">
                                        <input id="bank_name" type="text" value="{{old('bank_name')}}" name="bank_name" class="" required>
                                        <label for="bank_name">Bank Name <i class="red">*</i></label>
                                    </div>
                                                
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    
                                </div>
                                
                                <input type="button" name="previous" class="previous action-button" value="Previous" />
                                <input type="button" name="next" class="nxt action-button" value="Next" />
                            </fieldset>

                            <fieldset class='data'>
                                <h4>Declaration By Partner</h4>
                                <div class="row">
                                    <div class="col s12 left-align">
                                        <p>
                                            I declare that: <br>
                                            <span>&minus; </span> I am 18years old or over;
                                        </p>
                                        <div>
                                            I agree:  <br>
                                            <span>&minus; </span> To comply with the minimum tenor(s) of the package, failing which I accept any loss, controls
                                             and charges that may arise as a result of my redemption. <br>
                                             <span>&minus; </span> I understand that in the event that I am unable to furnish PORKMONEY with all the required KYC documentation, I shall not hold
                                             PORKMONEY liable for any diminution, loss of interest or transfer charges in the event that my partnership is revoke. <br>
                                             <span>&minus; </span> I have read and agree with the terms and conditions of PORKMONEY partnership contract. <br>
                                             <p>
                                                 I hereby confirm that the information provided above is true, accurate and complete. Subject to applicable local laws, I hereby consent and authorize 
                                                 PORKMONEY to share my information with tax authorities where necessary to establish my tax liability in any jurisdiction.
                                             </p>
                                             <p>
                                                 I consent and agree that PORKMONEY may withold such amounts as may be required by law for the purpose of fulfilling tax obligations.
                                             </p>
                                             <p>
                                                 I agree to notify PORKMONEY within 30 calendar days if there is a change in any information which I have provided to PORKMONEY.
                                             </p>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <p class="center">
                                            <input type="checkbox" required class="filled-in" id="filled-in-box" checked="checked" />
                                            <label for="filled-in-box">
                                                I agree to the <a href="/contract">terms and conditions</a> of the contract
                                            </label>
                                        </p>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button" value="Previous" />
                                <input type="submit" name="submit" class="submit action-button" value="Submit" />
                            </fieldset>
                        </form>

                    </div>
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
            $('.datepicker').pickadate({
                max: new Date(), //avoids selectYears from including future dates
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 80 // Creates a dropdown of 20 years to control year
            });
            });
    </script>

<script>
    $(function () {

        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".nxt").click(function () {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50) + "%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous").click(function () {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1 - now) * 50) + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'left': left
                    });
                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        /* $(".submit").click(function () {
            return false;
        }) */

    });
</script>
    <!-- end of Scripts-->
</body>

</html>
