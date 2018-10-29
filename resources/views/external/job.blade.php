@extends('layouts.main')

@section('styles')
     <style>
        footer {
            width: 100%;
            bottom: 0;
        }
        .intro-text{
            font-family: var(--font);
            font-size: 1.1rem;
        }
        .dot-icon{
            font-size: 0.8rem;
            padding-right: 5px;
        }
        .email{
            color: var(--pry-color);
        }
        .font{
            font-family: var(--font);
        }
        h4.cu-openings{
            font-size: 1.5rem;
            font-weight: bold;
        }
        a h5{
            font-family: var(--font);
        }
    </style>
@endsection

@section('content')
     <div class="section jb">
        <div class="container">
            <div class="row">
                
                <div class="col s12 m10 offset-m1 padded">
                    
                    <div class="col s12 padded">
                        <h4>Careers at PorkMoney</h4>
                        <div class="text-justify intro-text">
                            PorkMoney Africa’s First & Fastest Growing Pig Farming Platform. Pork is the most commonly 
                            consumed meat in the world, with Ghana and Nigeria alone consuming over $3Billion dollars 
                            worth. More than 80% of Pork consumed in this part of the world is imported, that is monies 
                            that when localized would create many financial opportunities for farmers, wholesalers, 
                            retailers and the population at large.
                        </div>
                        
                        <div>
                            <h4 class="cu-openings">Current Openings</h4>
                            <div class="font">We are currently hiring for the following positions below. All C.V should be sent to <span class="email">jobs@porkmoney.com</span></div>
                            <a href="/food-tech"><h5><i class="material-icons black-text dot-icon pry-color">lens</i> Food Technologist</h5></a>

                            <a href="/hrbp"><h5><i class="material-icons black-text dot-icon pry-color">lens</i> Human Resources Business Partner</h5></a>

                            <a href="/dsprm"><h5><i class="material-icons black-text dot-icon pry-color">lens</i> Direct Sale Partner/Relations Manager</h5></a>

                        </div>
                        
                        <!--<p>
                            Become a PorkMoney Ambassador and earn good money telling people Our Team.
                            <br> For more information email <span class="pry-color">pma@porkmoney.com</span>
                        </p>-->
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
@endsection