@extends('layouts.main')

@section('styles')
     <style>
        footer {
            width: 100%;
            bottom: 0;
        }
        .container-border h4{
            font-size: 1.8rem;
            color: var(--pry-color);
        }
        .intro-text{
            font-family: var(--font);
            font-size: 1.1rem;
        }
        .font{
            font-family: var(--font);
        }
        .container-border ul:not(.browser-default) li {
            list-style-type: disc;
            font-family: var(--font);
        }
        .note{
            color: var(--pry-color);
            font-family: var(--font);
            padding-bottom: 20px;
        }
        @media(min-width: 601px){
            .container-border{
            border: 1px solid;
            border-radius: 2px;
            padding: 0 35px !important;
            }
        }
        
        @media(max-width: 600px){
            .container-border ul:not(.browser-default){
                padding-left: 5px;
            }
        }
    </style>
@endsection

@section('content')
     <div class="section jb">
        <div class="container">
            <div class="row">
                <div class="col s12 m10 offset-m1 container-border">
                    <h4>Food Technologists</h4>
                    <div class="text-justify intro-text">
                        PorkMoney Africa’s First & Fastest Growing Pig Farming Platform. Pork is the most commonly 
                        consumed meat in the world, with Ghana and Nigeria alone consuming over $3Billion dollars 
                        worth. More than 80% of Pork consumed in this part of the world is imported, that is monies 
                        that when localized would create many financial opportunities for farmers, wholesalers, 
                        retailers and the population at large.
                    </div>

                    <div>
                        <h4 class="cu-openings">Job Description</h4>

                        <ul>
                            <li>Must have knowledge in meat processing ( Specifically Pork processing)</li>
                            <li>Modifying existing products and processes and developing new ones;</li>
                            <li>Checking and improving safety and quality control procedures in your own 
                                and suppliers' factories, from the raw material stage through to the finished 
                                product;
                            </li>
                            <li>Researching current consumer markets and latest technologies to develop new product concepts;</li>
                            <li>Selecting raw materials and other ingredients from suppliers;</li>
                            <li>Preparing product costings based on raw materials and manufacturing costs to ensure profitable products;</li>
                            <li>Auditing suppliers or managing internal audits;</li>
                            <li>Coordinating launches of new products or running trials alongside or together with product development;</li>
                            <li>Dealing with any customer complaint investigations or product issues;</li>
                            <li>Compiling, checking and approving product specifications and labeling;</li>
                            <li>Undertaking long-term projects with other departments, eg. reducing waste by improving efficiency;</li>
                            <li>Working on packaging innovation and technology.</li>
                            <li>Designing processes and machinery for the production of recipes on a large scale.</li>
                            <li>Liaising with marketing staff.</li>
                            <li>Ensuring that strict hygiene food safety standards are met.</li>
                            <li>Identifying and choosing products from suppliers.</li>
                            <li>Monitoring the use of additives.</li>
                            <li>Testing and examining samples.</li>
                            <li>Writing reports.</li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="cu-openings">Job Requirement</h4>

                        <ul>
                            <li>You will benefit from having a food-related degree for entry into this area of work. The following subjects, in particular, are relevant:</li>
                            <li>Food, Nutrition and Health;</li>
                            <li>Food Safety and Quality Management;</li>
                            <li>Food Science/Technology.</li>
                        </ul>
                    </div>

                    <div class="font note">
                        Interested applicants are to send a cover letter and CV to jobs@porkmoney.com. The subject title of 
                        the application should include the role being applied for with their area of expertise. 
                        <p>
                            You may also include a link to your Linked.In profile in the application
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
@endsection