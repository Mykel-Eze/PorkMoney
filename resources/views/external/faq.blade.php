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

        .ques p{
            font-weight: 600;
        }

    </style>
@endsection

@section('content')
    <div class="section jb">
        <div class="container">
            <div class="row">
                <div class="ques">
                    <h4 class="pry-color text-uppercase center-align">Frequently Asked Questions</h4>

                    <h5 class="text-uppercase bold">What is PorkMoney about?</h5>
                    <p>
                        We are a Pig-Farming Platform that allows you to partner with us and enjoy the benefits of 
                        owning a pig farm, without you having to get your hands dirty. We serve to meet the teeming 
                        needs of Nigerians (and Africans in general) to invest in a reputable business venture that 
                        would ultimately serve as a side hustle to generate extra cash while doing your normal work.
                    </p>

                    <h5 class="text-uppercase bold">What do you do exactly?</h5>
                    <p>
                        We handle the rearing, breeding, and feeding of pigs, from piglet to hog/sow, ensuring 
                        they grow to their maximum weight, to achieve maximum returns. 
                    </p>

                    <h5 class="text-uppercase bold">How do I become a partner?</h5>
                    <p>
                        You can become a PorkMoney partner in Nigeria with a minimum amount of 250,000 naira. 
                        In Ghana, you can become a PorkMoney Partner with a minimum amount of 2000ghs. This is the 
                        least amount you can become a partner with. You can provide more if you choose to.  <br>
                        <a href="/#packages">Click here to view partnership package </a>
                    </p>

                    <h5 class="text-uppercase bold">What would be my gain?</h5>
                    <p>
                        You get between 25% - 35% returns in 11 months.
                    </p>

                    <h5 class="text-uppercase bold">What would happen to the pigs I invested?</h5>
                    <p>
                       Between the contractual period of 11 months where the pigs are being bred they are processed 
                       and sold, from the returns made, 35% returns mentioned above is gotten from these sales.
                    </p>

                    <h5 class="text-uppercase bold">Why 11 months?</h5>
                    <p>
                        This gives us ample time to facilitate reproduction among the sows, with room for the growth 
                        of the piglets into marketable adult weight, after which they are sold for profit. 
                    </p>

                    <h5 class="text-uppercase bold">Where Are You Located?</h5>
                    <p>
                       We have two major offices and farms located in Nigeria and Ghana.
                    </p>

                    <h5 class="text-uppercase bold">How about Insurance?</h5>
                    <p>
                        We are covered by Nigerian Agricultural Insurance Corporation.
                    </p>

                    <h5 class="text-uppercase bold">How do you run your farms?</h5>
                    <p>
                        We have the best hands and veterinarians managing our farms smoothly, from feed formulation to animal 
                        care. We cater to our swine according to industry standards and we frown heavily on animal cruelty. 
                    </p>
                    
                    <h5 class="text-uppercase bold">I would like to visit your farm and see for myself?</h5>
                    <p>
                        Our farms are always accessible to partners via a waitlist please do contact us to add you up and inform
                         you in due time, we will be glad to give you a tour.
                    </p>

                    <h5 class="text-uppercase bold">How do I start?</h5>
                    <p>
                        You can Sign-up, fill the contract form, and make payments on our website to become a partner. <br>
                        You can also partner with us by coming to visit us at the address below to fill up necessary documentations. 
                        If you are in Lagos, we can come to you to get you started right away. <br>
                         Follow us on social media (Instagram: @PorkMoney and Facebook: Pork Money).
                    </p>
                    
                    <h5 class="text-uppercase bold">Where is your Head office?</h5>
                    <p>
                        1686B Oladele Olashore Street, off Sanusi Fafunwa Street, Victoria Island, Lagos or <br> call us on 
                        +234(0)8173656192, +234(0)8173656194
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