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
        p a{
            color: green;
        }
        @media(max-width: 600px){
            .section h4.center{
                font-size: 1.5rem;
                font-weight: bold;
            }
        }
    </style>
@endsection

@section('content')
     <div class="section jb">
        <div>
            <h4 class="pry-color center">Introducing PorkoYum…(everything yum, delivered fast)</h4>
            
            <a class="porkoyum-banner" style="display:block;">
                <!-- <img src="img/porkoyum.jpg" alt="electricity" style="width: 100%"> -->
            </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12">
            
                    <div>
                        <!-- <h4 class="pry-color center">Turning Pig Waste to Electrical Energy</h4> -->
            
                        <p>
                            Because PorkMoney’s business model from the onset is to encompass 
                            the whole ecosystem of Pig Business, we introduce <a href="https://porkoyum.com/">PorkoYum</a>. 
                        </p>

                        <p>
                            <a href="https://porkoyum.com/">PorkoYum</a> is the e-commerce subsidiary of PorkMoney that completes 
                            the business cycle. At <a href="https://porkoyum.com/">PorkoYum</a>, end-users will be able to procure the 
                            chopped, processed and packaged pig produce and by-products. So while PorkMoney 
                            caters to the investing, farming and breeding of Pigs, <a href="https://porkoyum.com/">PorkoYum</a> is the next step 
                            on the carousel that bridges the gap of the industrial processing of the mature pigs 
                            and their end-products for the consumer.
                        </p>

                        <p>
                            Here, you can make order for a variety of pig produce, namely: Pork Cubes, Bacon and Sausages. 
                            This is just our starter products; you can trust <a href="https://porkoyum.com/">PorkoYum</a> to introduce more sumptuous products in 
                            coming quarters. 
                        </p>

                        <p>
                            We also have different payment methods. Shoppers will be able to pay cash on delivery or with POS, prepay with debit/credit 
                            card or make bank transfers.
                        </p>

                        <p>
                            <a href="https://porkoyum.com/">PorkoYum</a> will be launching in the coming week. To get you started, we are offering first hundred subscribers free N500 vouchers 
                            valid for seven days after the launch of <a href="https://porkoyum.com/">PorkoYum website</a>. Go subscribe now.
                        </p>

                    </div>
            
                </div>
            </div>
        </div>
    </div>
@endsection







