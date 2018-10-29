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
                    <h4>Direct Sale Partner/Relations Manager</h4>
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
                            <li>Consulting with line management and provide daily HR guidance.</li>
                            <li>Analyzing trends and metrics with the HR department.</li>
                            <li>Resolving complex employee relations issues and address grievances.</li>
                            <li>Consult with line management and provide daily HR guidance.</li>
                            <li>Analyze trends and metrics with the HR department.</li>
                            <li>Resolve complex employee relations issues and address grievances.</li>
                            <li>Work closely with management and employees to improve work relationships, 
                                build morale and increase productivity and retention.</li>
                            <li>Provide HR policy guidance.</li>
                            <li>Monitor and report on workforce and succession planning.</li>
                            <li>Identify training needs for teams and individuals.</li>
                            <li>Evaluate training programs.</li>
                            <li>Suggest new HR strategies.</li>

                        </ul>
                    </div>

                    <div>
                        <h4 class="cu-openings">Job Requirement</h4>

                        <ul>
                            <li>Proven work experience as an HR business partner.</li>
                            <li>Excellent people management skills.</li>
                            <li>Analytical and goal oriented.</li>
                            <li>Demonstrable experience with HR metrics.</li>
                            <li>Thorough knowledge of labor legislation.</li>
                            <li>Full understanding of all HR functions and best practices.</li>
                            <li>BSc degree in Human Resources or related field.</li>
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