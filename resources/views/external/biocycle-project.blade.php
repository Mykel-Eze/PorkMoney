@extends('layouts.main')
@section('styles')
    <style>
        body {
            position: relative;
            font-size: 16px;
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
    </style>
@endsection

@section('content')
     <div class="section jb">
        <div>
            <h4 class="pry-color center">Turning Pig Waste to Electrical Energy</h4>
            
            <div class="electric-img">
                <!-- <img src="img/electric.jpg" alt="electricity" style="width: 100%"> -->
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12">
            
                    <div>
                        <!-- <h4 class="pry-color center">Turning Pig Waste to Electrical Energy</h4> -->
            
                        <p>
                            Part of PorkMoney’s 9 month goal is the acquisition of bio-digesters to help in the waste management as well as reduce our
                            dependence on the National grid and other diesel generators for electricity. The Bio-digesters serve two
                            very important purpose.
                            <ol>
                                <li>Reduce the methane emission from the farm. The methane emission is what the pig waste give off and</li>
                                <li>Turn the waste into electricity for consumption on the farm and most especially for our processing plant.</li>
                            </ol>
                            We would be one of the few livestock farms in the country with a functional bio-digester, effectively changing the narrative
                            about Pig farming being a messy and odorous affair.
                        </p>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
@endsection







