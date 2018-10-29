@extends('layouts.main')
@section('styles')
    <style>
        body{
            position: relative;
        }
        body::before{
            height: 100%;
            width: 100%;
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            background: url('img/goals.png');
            opacity: 0.15;
            z-index: -1;
        }
    </style>
@endsection

@section('content')
    <div class="section jb">
        <div class="row">
            <div class="col s12 m10 offset-m1 padded">
                <div class="col s12">
                    <div class="col s12 m5 padded">
                        <div class="padded imgf">
                            <!-- <img src="img/boss.jpg" alt=""> -->
                        </div>
                    </div>
                    <div class="col s12 m7 dft padded">
                        <p class="text-justify">
                            PorkMoney founder and CEO,
                            <b> Folorunso Muyiwa </b> is a branding and marketing expert with over 10 years of experience in creating products
                            and services in African countries such as Kenya, Cote d’Ivoire, Nigeria, Ghana, Senegal and Togo.
                        </p>
                        <p class="text-justify">
                             He has been involved in the e-commerce, transportation, real estate and travel sectors of several African economies in an
                            advisory or entrepreneurial capacity.
                        </p>
                        <p class="text-justify">
                             PorkMoney is his biggest project till date with a goal of dominating the Pork Industry in West Africa through collective
                            entrepreneurship, accountability, proper management and marketing. Bringing a decade of work and life experiences to his
                            most inspired pursuit which is the complete production localization of the multibillion dollar pork industry in West Africa,
                            most especially Ghana and Nigeria.
                        </p>
                        
                    </div>
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
@endscripts