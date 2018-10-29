@extends('layouts.main')
@section('styles')
    <style>
        footer {
            width: 100%;
            bottom: 0;
        }

        .job-img {
            width: 100%;
            height: 50vh;
            background: url(' img/jobs.png');
            background-position: center;
            background-size: 100%;
        }
    </style>
@endsection

@section('content')
    <div class="section jb">
        <div class="container">
            <div class="row">
                <div>
                    <h4 class="pry-color text-uppercase center-align">Privacy Policy</h4>
                    <p>
                        PorkMoney is committed to ensuring that your privacy is protected. This Privacy Policy explains:
                        <ul class="dotted">
                            <li>How we use the information we collect about you.</li>
                            <li>How you can instruct us if you prefer to limit the use of that information.</li>
                            <li>Procedures that we have in place to safeguard your privacy.</li>
                        </ul>
                    </p>

                    <p><h5 class="text-uppercase bold">THE INFORMATION WE COLLECT AND HOW WE USE IT</h5></p>
                    <p>
                        When you ‘Contact Us‘ we request your name and email address. If you have requested updates on 
                        PorkMoney products and offers, but no longer wish to receive emails from PorkMoney, please use the 
                        “unsubscribe” link found at the bottom of each email, or use the Contact Us form to let us know.
                    </p>

                    <p><h5 class="text-uppercase bold">HOW WE PROTECT YOUR INFORMATION</h5></p>
                    <p>
                        The internet is not a secure medium. However, we have put in place various security procedures as 
                        set out in this policy. PorkMoney takes the security and privacy of its customers‘personal 
                        information extremely seriously. We have strict internal procedures which cover the storage, access 
                        and disclosure of your information.
                    </p>

                    <p><h5 class="text-uppercase bold">UPDATING YOUR DETAILS</h5></p>
                    <p>
                        If any of the information you have provided to PorkMoney changes, please contact us or send a letter to: <br>
                        1686B Oladele Olashore Street, Off Sanusi Fafunwa Street, Victoria Island, Lagos or inquiry@porkmoney.com
                    </p>

                    <p><h5 class="text-uppercase bold">YOUR CONSENT</h5></p>
                    <p>
                        By submitting your information, you consent to the use of that information as set out in this Policy. 
                        If we change our Privacy Policy, we will post the changes on this page, and may place notices on other 
                        pages of the website, so that you may be aware of the information we collect and how we use it always. 
                        We will also email you should we make any changes so that you may consent to our use of your information 
                        in that way. Continued use of the service will signify that you agree to any such changes.
                    </p>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.materialboxed').materialbox();
            $('.parallax').parallax();
            $('.modal').modal();
        });
    </script>
@endsection