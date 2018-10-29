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
            background: url(' img/goals.png');
            opacity: 0.15;
            z-index: -1;

        }
       .imgs{
            font-family: var(--font);
            font-weight: 300;
        }
        .imgs img{
            width: 100%;
            height: auto;
            border-radius: 50%;
            max-height: 199px;
            max-width: 125px;
        }
        .imgs h4{
            font-size: 1.15rem;
            margin: 0;
            font-weight: 400;
        }
        .imgs .img{
            margin: 20px auto;
        }
/* */
        .close{
        position: absolute;
        right: 20px;
        top: 10px;
        width: 30px;
        height: 30px;
        background: var(--pry-color);
        color: white;
        text-align: center;
        border-radius: 50%;
        /* font-weight: bold; */
        line-height: 1.4;
        font-size: 1.5rem;
        font-family: var(--font-xlight);
    }
    .name-detail{
        text-align: center;
    }
    .name-detail img{
        margin-top: 20px;
        border-radius: 50%;
    }
    .modal-trigger.img{
        cursor: default;
    }
    /* .modal-trigger.img:hover img{
        cursor: pointer;
        filter: grayscale(80)
    } */
    .name-detail h4{
        font-size: 22px;
        margin: 0;
        margin-top: 10px;
    }
    .modal{
        font-family: var(--font);
    }
    .modals-container .modal p{
        text-align: justify;
    }
    .btn-join{
        color: var(--pry-color);
        font-size: 1.2rem;
        padding: 4px 10px;
        border-radius: 4px;
        background: white;
        margin: auto;
        top: 0;
        bottom: 0;
        height: 35px;
        right: 3px;
        width: 19%;
        font-weight: bold;
    }
    .join-text{
        color: white;
        font-size: 1.7rem;
        text-align: center;
    }
    .job-cont{
        background: var(--pry-color);
        padding: 0.75rem !important;
        margin-bottom: -70px;
        position: relative;
    }
    .mdt{
        margin-top: 3rem;
    }
    .visible-tabb{
        display: none;
    }
    .hidden-tabb{
        display: block;
    }
    .bio{
        /* white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis; */
        opacity: .6;
        /* display: none; */
    }
    
    #pteam .col.m4.l3.center-align.img {
        height: 25vh;
        /* overflow: hidden; */
    }

    .imgs .col.m4.l3.center-align.img {
        height: 27vh;
        /* overflow: hidden; */
    }
    @media(min-width: 601px){
        .btn-join{
            position: absolute;
        }
    }

    @media(min-width: 601px) and (max-width: 991px){
        .visible-tabb{
            display: block;
        }
        .hidden-tabb{
            display: none;
        }
        #pteam .col.m4.l3.center-align.img {
            height: 17vh;
            /* overflow: hidden; */
        }
    }
        @media(max-width: 600px){
            .imgs .img{
                height: auto;
            }
            .modal-content .col.s12{
                padding: 0
            }
        }

        @media(min-width: 300px) and (max-width: 340px){
            
            #pteam .col.m4.l3.center-align.img {
                height: 27vh;
                /* overflow: hidden; */
            }
        }
    </style>
@endsection

@section('content')
        <div class="section jb asset-bg">
        <div class="row">
            <div class="container">
                <div>
                    <h3 class="center" style="color:#DD5206;" >Our philosophy is simple</h3>
                      <h5 class="pry-color">
                          <p class="center">To create wealth for our financial partners through pig farming</p>
                        </h5>
                      <p class="center text-justify-xs">
                          We are the leading pig farming enterprise in West Africa. Our objective is welcoming 
                          financial partnership from any interested persons around the world. Partners' funds 
                          sponsor the purchase and breeding of pigs till maturation. The pigs are then processed, 
                          packaged and sold after 11 months. Partners earn between 20-35% returns on their 
                          capitals based on plan of choice.
                      </p>

                      <p class="center text-justify-xs">
                          Why pigs? Pork accounts for about $3 billion of consumption value in Ghana and Nigeria 
                          alone, more than 80% of which is imported. Imagine the possibilities of this industry in 
                          Africa. Based on that reality, we concluded, as an area of livestock farming, pig farming 
                          is misconstrued and untapped. 
                      </p>

                      <p class="center text-justify-xs">
                          Not only is pig farming highly viable, profitable and sustainable. It is a treasure trove 
                          of opportunities and revenue given the diversity of its by-products i.e: from revenue generation 
                          in the sale of the pigs to processing of its produce such as Pork Chops, Ham, Bacon, Sausages etc. 
                      </p>

                      <p class="center text-justify-xs">
                          And by localising pig farming, we not only retain commerce power within Africa, we also provide 
                          exporting capabilities from the African continent. Not to mention the opportunities it avail local 
                          farmers, retailers and wholesalers in growing their businesses and remaining self-sufficient, as 
                          well as the countless job opportunities.
                      </p>

                      <p class="center text-justify-xs">
                          Also, ethical treatment of animals and the environment are things we care about. Which is why we 
                          have instituted a cruelty-free policy to ensure the pigs are cared for by globally acceptable 
                          standards, going by the construction of their pens, hygiene and general care. And by generating 
                          electricity from the pigs' wastes with the help of our bio-digester, we ensure our farms are 
                          self-sustaining with reduced pollution impact on the environment.
                      </p>

                      <p class="center text-justify-xs">
                          <a href="/#packages">Click here</a> to become a partner
                      </p>
                </div>
                
                <br>
                <hr>
                <br>

                <div class="container mdt">
                  <h4 class="center">MEET THE TEAM <br>
                    <div class="" style="line-height: .5">
                      <hr class="borline">
                    </div>
                  </h4>

                </div>

                <div class="imgs col s12">

                   <div class="col s12 m4 l4 center-align img modal-trigger" data-target="boss">
                        <img class=" " src="img/headshots/glory.jpeg" alt="img-team">
                        <h4 class="pry-color">Glory Osei</h4>
                        <span>CEO/Co-founder</span>
                        <div class="bio">
                            
                        </div>
                    </div>

                    <div class="col s12 m4 l4 center-align img modal-trigger" data-target="boss">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/Folorunsho.jpg" alt="img-team">
                        <h4 class="pry-color">Muyiwa Folorunso</h4>
                        <span>CCO/Co-founder</span>
                        <div class="bio">
                            Muyiwa's robust portfolio of strategic investments has culminated in over 10 years entrepreneurial experience across Africa.
                        </div>
                    </div>

                    <div class="col s12 m4 l4 center-align img modal-trigger" data-target="linda">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/Lillian.jpg" alt="img-team">
                        <h4 class="pry-color">Linda Obi</h4>
                        <span>COO</span>
                        <div class="bio">
                             Linda's background spans banking, HR, sales and branding. She also has a masters degree from Lagos Business School.
                        </div>
                    </div>

                    
                </div>


                <div class="imgs col s12" id="pteam">

                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-004">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 004.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Michael Eze</h4>
                        <span>Web Developer</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img" data-target="PorkMoney-029*">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 015.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Tope Odebunmi</h4>
                        <span>Facility Manager</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-003">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 003.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Sarah Nwandu</h4>
                        <span>Web Developer</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img" data-target="PorkMoney-035*">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 035.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Ifeanyi Ajimah</h4>
                        <span>Web Developer</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img hidden-tabb" data-target="PorkMoney-030*">
                        <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 030.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Okunowo Afolakemi</h4>
                        <span>Partner Relations</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img" data-target="PorkMoney-024*">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 024.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Sinmi Folorunso</h4>
                        <span>Operations Executive</span>
                    </div>


                    <div class="col s6 m4 l3 center-align img modal-trigger hidden-tabb" data-target="PorkMoney-007">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 007.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Michael Akpan</h4>
                        <span>Partner Relations</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img" data-target="PorkMoney-031*">
                        <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 031.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Azuka Anonyai</h4>
                        <span>DSPRM Support</span>
                    </div>
                    
                    <div class="col s6 m4 l3 center-align img" data-target="PorkMoney-032*">
                        <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 032.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Ogonna Nwanegbo</h4>
                        <span>DSPRM Support</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-016">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 016.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Patience Ndakson</h4>
                        <span>Partner Relations</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-017">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 017.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Ayomide Adedoyin</h4>
                        <span>Partner Relations</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-019">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 019.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Tosin Amosu</h4>
                        <span>Partner Relations</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-020">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 020.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Bernard Ehimai</h4>
                        <span>Partner Relations</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-021">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 021.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Wilson Chibututu</h4>
                        <span>Partner Relations</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-022">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 022.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Samuel Aluko</h4>
                        <span>Partner Relations</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-023">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 023.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Ayorinde Ojo</h4>
                        <span>Partner Relations</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-027">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 027.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Judith Ogberega</h4>
                        <span>Partner Relations</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img" data-target="PorkMoney-002*">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 002.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Ajibade Adeloye</h4>
                        <span>Head, Visual Designer</span>
                    </div>

                    {{-- <div class="col s6 m3 center-align img modal-trigger" data-target="PorkMoney-008">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 008.jpg" alt="img-team">
                        <h4 class="pry-color">Akindeji Seun</h4>
                        <span>Social Media</span>
                    </div> --}}

                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-028">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 028.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Olubukola Gbolahan</h4>
                        <span>Legal Executive</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-009">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 009.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Muyiwa Adeosun</h4>
                        <span>Creative</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-010">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 010.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Niyi Duyile</h4>
                        <span>Creative</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-011">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 011.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">A.A Presley</h4>
                        <span>Creative Director</span>
                    </div>

                    <!--<div class="col s6 m3 center-align img modal-trigger" data-target="kene">
                        <img src=" img/headshots/kene.png" alt="img-team">
                        <h4 class="pry-color">Mbonu Kenechukwu</h4>
                        <span>Tech</span></div>-->


                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-012">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 012.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Jackson John</h4>
                        <span>Creative</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img modal-trigger" data-target="PorkMoney-025">
                        <img class=" " src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 025.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Abiola Ajiboye</h4>
                        <span>Admin Manager</span>
                    </div>

                    <div class="col s6 m4 l3 center-align img" data-target="PorkMoney-033*">
                        <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 033.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Francis Ochuko</h4>
                        <span>Procurement</span>  
                    </div>

                    <div class="col s6 m4 l3 center-align img" data-target="PorkMoney-001*">
                        <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 001.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Damilola Hassan</h4>
                        <span>Visual Designer</span>
                    </div>

                    {{-- <div class="col s6 m4 l3 center-align img" data-target="PorkMoney-036*">
                        <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 036.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Gbenga Oguntoye</h4>
                        <span>Visual Designer</span>
                    </div> --}}

                    <div class="col s6 m4 l3 center-align img" data-target="PorkMoney-034*">
                        <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 034.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Oriyomi Solanke</h4>
                        <span>Operations</span>
                    </div>

                    {{-- <div class="col s6 m4 l3 center-align img" data-target="PorkMoney-037*">
                        <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 037.jpg?v=1.2" alt="img-team">
                        <h4 class="pry-color">Adedurin Samuel</h4>
                        <span>Photographer</span>
                    </div> --}}

                </div>

                <div class="center showm col s12">
                <button id="pteam-btn" style="color:#000000;background-color:#DD5206; color:#fff;">See More</button>
                </div>

                <!--<button class="center"onclick="unhide(pteam)"style="color:#000000;background-color:#DD5206";>See More!</button><-->
                <br>
                <br>



                <!--<div class="col s12 job-cont">
                    <div>
                        <h5 class="join-text">
                            Want to be a part of this awesome team?
                            <a href="/careers" class="btn-join">Join Us</a>
                        </h5>
                    </div>
                </div>-->
            </div>

            {{-- <div class="modals-container">
                <div id="boss" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/Folorunsho.jpg" alt="img-team">
                                    <h4 class="pry-color">Folorunso Muyiwa</h4>
                                    <span>CEO/Co-founder</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        PorkMoney Co-founder and CEO,
                                        <b> Folorunso Muyiwa </b> is a branding and marketing expert with over 10 years of experience in creating products
                                        and services in African countries such as Kenya, Cote d’Ivoire, Nigeria, Ghana, Senegal and Togo.
                                    </p>
                                    <p>
                                        He has been involved in the e-commerce, transportation, real estate and travel sectors of several African economies in an
                                        advisory or entrepreneurial capacity.
                                    </p>
                                    <p>
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

                <div id="kene" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/kene.png" alt="img-team">
                                    <h4 class="pry-color">Mbonu Kenechukwu</h4>
                                    <span>Tech</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Pixel perfection and precision accross imaginary gridlines; that's how Kenechukwu
                                        views every project through his lens. His aim is to give users a better experience each
                                        time they use web applications developed by team effort, innovation and skill.
                                    </p>

                                    <p>
                                        Before joining Divergent enterprise, Kenechukwu handled major design development projects for
                                        Service Desk,Byte works and The US Embassy. In his 3 years at Divergent Enterprise, he has thrived
                                        in self development and has contributed immensely to the growth of the organisation.
                                    </p>

                                    <p>
                                        As a UI/UX researcher and designer he brings his knack for perfection to life via front end application
                                        development and professional criticism for startups, which he dabbles in on the side. He is also known
                                        for his creativity, attention to detail and commitment to excellence.
                                    </p>

                                    <p>
                                        Kenechukwu has an Electronics and Computer engineering degree from Nnamdi Azikiwe University and hopes someday,
                                        to start a Silicon Mountain  in Technical skill development for Africa
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="linda" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/Lillian.jpg" alt="img-team">
                                    <h4 class="pry-color">Linda Obi</h4>
                                    <span>Cheif Operations Officer</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                    Linda has over 15 years of professional working experience. She began her career as a brand manager at
                                    Talorum Africa and transitioned into heading the franchise acquisition team and further moved into
                                    human resource business partner were she has spent extensive years developing successful business model.
                                    </p>

                                    <p>
                                        She currently works for Pork Money, a branch of Divergent Enterprise as the Chief Operations Officer were she
                                        manages the affairs of both Nigeria and Ghana operations.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-002" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 002.jpg" alt="img-team">
                                    <h4 class="pry-color">Adeloye Ajibade</h4>
                                    <span>Head, Visual Design</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-003" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 003.jpg" alt="img-team">
                                    <h4 class="pry-color">Nwandu Sarah</h4>
                                    <span>Web Developer</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Sarah is a multi-talented individual with proven experience in web development, administration
                                        and communication skill, she trained with Poise Nigeria which gave her a chance to inspire and
                                        motivate others while at the same time invest in her integrity and accountability skills.
                                    </p>

                                    <p>
                                        Her career in web development began years ago which was stirred from a desired interest to be
                                        part of an emerging generation of Technology.
                                    </p>

                                    <p>
                                        Sarah is a web developer at Pork Money. She holds a Bachelor of Science degree in accounting from
                                        North American University, Republic of Benin. Her experience includes writing, creating responsive
                                        designs and social media management.
                                    </p>

                                    <p>
                                        She uses her web development skills to manage Pork Money platform as well as resolving issues related
                                        to websites and designing application for the need of the company.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-004" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 004.jpg" alt="img-team">
                                    <h4 class="pry-color">Michael Eze</h4>
                                    <span>Web Developer</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                    Michael is an experienced Frontend Web Developer with a demonstrated history of working in the
                                    internet industry. He is skilled in Research and Web Design.
                                    </p>

                                    <p>
                                        His passion for web development started while he was still in his first year in school. He has used
                                        his skill to create products that has solved problems for him and the society.
                                    </p>

                                    <p>
                                        He is a graduate of Computer Engineering from Yaba College of Technology.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-007" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 007.jpg" alt="img-team">
                                    <h4 class="pry-color">Michael Akpan</h4>
                                    <span>Partner Relations</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Michael Akpan is a result oriented person that grabs the attention of his audience at first
                                        introduction. Internet savvy, experienced cold caller, excellent negotiator and closer. Skilled
                                        orator, always ready to take on new challenges with vast experience across diverse sectors from
                                        grass root Politics, to Haulage/Logistics , to Automobile, to Entertainment.
                                    </p>

                                    <p>
                                        He is an alumnus of the Prestigious University of Lagos, where he earned a B.Sc in Political Science,
                                        with a special focus in Political Analysis and Political Economy.
                                    </p>

                                    <p>
                                        He is currently the front line Partner Relations Manager at PorkMoney where he manages the profile of a
                                        number of partners both internationally and locally.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-008" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 008.jpg" alt="img-team">
                                    <h4 class="pry-color">Akindeji Seun</h4>
                                    <span>Social Media</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                    Oluwaseun is a social media expert and has been working for Divergent Enterprise for two
                                    years as a social media manager. <br> Her key responsibilities include managing the company’s adverts,
                                    monitoring of all social media pages and also communicate with prospective clients online.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-009" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 009.jpg" alt="img-team">
                                    <h4 class="pry-color">Adeosun Muyiwa</h4>
                                    <span>Creative</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Adeosun Muyiwa has always been a lover of cartoon(2D) and 3D animation right from my childhood,
                                        He majored in mathematics at the University of Lagos, before joining PorkMoney in 2017. He has worked
                                        at various companies like Ways studios ltd, Maverick studios,Emmanuel TV and also as a freelance
                                        motion graphics designers. His hobbies are playing video games and chess, right now he is excited to
                                        be a motion graphics designer at PorkMoney.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-010" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 010.jpg" alt="img-team">
                                    <h4 class="pry-color">Duyile Niyi</h4>
                                    <span>Creative</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        With Background in Fine and Applied Arts, Niyi’s love for good and quality pictures that are well
                                        composed could be said to be one of his reasons for loving so passionately the art of Cinematography.
                                    </p>

                                    <p>
                                        His industry experience spanned over seven years. Both within Nigeria and Ghana. He has worked at various
                                        times as a CAMERA OPERATOR,CAMERA ASSISTANCE and DIRECTOR OF PHOTOGRAPHY on Film, TV and Drama productions.
                                    </p>

                                    <p>
                                        Presently, he is the inhouse Videographer/Cinematographer at the creative/video department of Porkmoney.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-011" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 011.jpg" alt="img-team">
                                    <h4 class="pry-color">A.A Presley</h4>
                                    <span>Creative</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Adewale Ademola - Presley is a graduate of the prestigious University of Ilorin from where he bagged a degree
                                        in Physics. A self-dubbed Story teller and Creative, he currently serves as Creative Content Writer and Director
                                        for Pork Money.
                                    </p>

                                    <p>
                                        Although a certified Scientist and trained Telecomms Engineer, His wealth of experience are with media
                                        establishments such as UNILORIN 89.3FM, Rhythm 95.7 FM, Silverbird Television Awka, Freedom
                                        Foundation, Inspiration FM and YIN Media, Lagos.
                                    </p>

                                    <p>
                                        Presley's mantra for life is and has always been to <i>'live life, love God and be good to people'</i>. His mantra for
                                        work is to 'tell stories that resonate even after the screen fades to black'. This mantra has inspired his many
                                        screenplays for TV, Web and independent Film makers ala Africa magic, MTV Base and Rhyme N' Reason
                                        (Eversion).
                                    </p>

                                    <p>
                                        His hobbies are Reading, Writing, Travelling and Cooking.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-012" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 012.jpg" alt="img-team">
                                    <h4 class="pry-color">John Jackson</h4>
                                    <span>Creative</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        John Jackson is a film director, photographer, cinematographer, editor, realistic animation character
                                        creator by profession, he is an alumnus of two of the best schools in Nigeria ( University of Lagos and
                                        the University of Nigeria) where he studied Theater and Film studies.
                                    </p>

                                    <p>
                                        Jackson is not just a creative person, he is a creative person with broad imagination. They say
                                        knowledge is power and Jackson is power thirsty.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-015" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 015.jpg" alt="img-team">
                                    <h4 class="pry-color">Odebunmi Tope</h4>
                                    <span>Facility Manager</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Odebunmi Temitope Samuel is a seasoned cost manager and operations expert.
                                    </p>

                                    <p>
                                        He has a wealth of experience in the FMCG industry where he has worked in operations,
                                        logistics and handled Inventory. He worked with True Rebel Fashion company and Entefrica
                                        where he was involved in the set up, audit and management of the branches of these
                                        organizations in Kenya, Ghana, Ivory Coast, Uganda and Togo. He has a vast knowledge of the
                                        business operations in the African market.
                                    </p>

                                    <p>
                                        Odebunmi Temitope is an alumnus of the great University of Benin, Nigeria, where he graduated
                                        with flying colours from the department of Economics and Statistics.
                                    </p>

                                    <p>
                                        He currently works with pork money as head of Operations where he is actively involved in the
                                        business operations in Ghana and Nigeria.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-016" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 016.jpg" alt="img-team">
                                    <h4 class="pry-color">Ndakson Patience</h4>
                                    <span>Partner Relations</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Patience Ndakson is a goal getter,multi-tasker focused on Sales & Business Development.
                                        she has exceptional planning and implementation capabilities. Results-oriented,highly
                                        skilled and customer-focused.
                                    </p>

                                    <p>
                                        Patience Ndakson has been actively employed for over three years in various capacities
                                        including communication-executive and bussiness development manager.
                                    </p>

                                    <p>
                                        Patience Ndakson is an alumna of the University of Benin, where she earned B.Sc. in Banking
                                        and Finance and is currently a partner relations manager at Porkmoney.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-017" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 017.jpg" alt="img-team">
                                    <h4 class="pry-color">Adedoyin Ayomide</h4>
                                    <span>Partner Relations</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Adedoyin O. Ayomide has acquired skills and demonstrated competence in  Advertising,
                                        Brand Activation, Project/Relationship Management as well as Planning and Strategy.
                                        A tech savvy social media enthusiast and critical thinker who is very passionate about
                                        brainstorming, conceiving and implementing innovative forward thinking ideas & strategies
                                        in solving business or social problems.
                                    </p>

                                    <p>
                                        Ayo is a strong professional with a Certificate Of Achievement in Advertising from Open
                                        Universities Australia and Sociology degree from the University of Ilorin, Nigeria. He has
                                        acquired experience with a demonstrated history of working in E-commerce industry vending luxury
                                        Healthcare products and Consulting firm providing array of services in administrative, supervisory,
                                        sub-managerial, social media strategist and business development positions and currently a Partner
                                        Relations Manager at PorkMoney while undertaking other responsibilities as well
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-018" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 018.jpg" alt="img-team">
                                    <h4 class="pry-color">Aladeojebi Israel</h4>
                                    <span>Sales</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Israel Aladeojebi is focused Sales & Business Development Manager with exceptional planning
                                        and implementation capabilities. Results-driven and customer-focused Consulting & Financial
                                        Services Professional with diverse customer support, portfolio strategy and sales experience
                                        across diverse B2B and B2C services. Proven ability to lead sales teams to achieve revenue
                                        targets, offer an in-depth understanding of the sales cycle process and remain focused on
                                        customer satisfaction throughout all stages. Modern Trade Specialist, experienced, “fearless”
                                        cold-caller and expert presenter, negotiator and closer.
                                    </p>

                                    <p>
                                        Israel Aladeojebi is an alumna of the University of Lagos, where he earned B.Sc. in Geography,
                                        with a special focus on Geographical Information System. He is also an Alumna of the University
                                        of Jos, where he earned M.Sc. in urban and Regional Planning, specialised in Planning from initiation
                                        to close. He is a certified professional in Oracle database administration, he is also a certified
                                        professional in Yellow Belt Lean Six Sigma.
                                    </p>

                                    <p>
                                        Israel Aladeojebi is currently a Sales Manager at PorkMoney where he now leads the sales team across
                                        Nigeria and Ghana.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-019" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 019.jpg" alt="img-team">
                                    <h4 class="pry-color">Amosu Tosin</h4>
                                    <span>Partner Relations</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Tosin Amosu is a good oriented and analytical minded person highly motivated and self
                                        driven with a strong desire to build a global brand, with experience iin sales,business
                                        development,Product knowledge,and administrative management.  He has excellent organizational ,
                                        and communication skills. Outstanding working ethics,both a team player and a team leader, able
                                        to multitask if the need arises.
                                    </p>

                                    <p>
                                        Tosin Amosu is a Product of Babcock university with B.sc in Politcal Science .He is a member of
                                        Chattered institute of marketing UK(CIM).He is a member of the Nigerian Institute of Management.
                                        He also has an Advanced diploma in Project Managemet (UNILAG).
                                    </p>

                                    <p>
                                        Tosin Amosu currently works with PorkMoney where he is Partner Relations Manager.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-020" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 020.jpg" alt="img-team">
                                    <h4 class="pry-color">Ehimai Bernard</h4>
                                    <span>Partner Relations</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Ehimai Bernard U. has been in the business of customer service, business development and sales for over 5 years.
                                        He has worked with various firms (fashion, network-marketing, advertising, beauty & lifestyle, interiors &
                                        renovations) and has been involved in startup, business development, sales, expansion, strategy and customer
                                        relationship.
                                    </p>

                                    <p>
                                        Bernard has a degree in Geology and a Brand management certificate from Orange Academy, he has attended training
                                        within and outside the country and has acquired much knowledge in sales, business development and customer service.
                                    </p>

                                    <p>
                                        Bernard currently works as a Partner Relations Manager with PorkMoney Nigeria.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-021" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 021.jpg" alt="img-team">
                                    <h4 class="pry-color">Chibututu Wilson</h4>
                                    <span>Partner Relations</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Chibututu Wilson is an excellent communicator, He has the ability to build rapport
                                        with partners. He is also an expert strategic thinker with an analytical mind and strong
                                        problem-solving skills.
                                    </p>

                                    <p>
                                        Wilson is an alumnus of Universal college of technology, Ile Ife, where he earned
                                        HND in Mass Communication & also attended the University of Ife OAU, where he earned B.Sc.
                                        in Business Administration.
                                    </p>

                                    <p>
                                        Wilson currently works with Pork Money as a Partner Relation Manager. He is
                                        Passionate about his role & he is focused on building trusting relationships with all our partners.
                                    </p>

                                    <p>
                                        Ultimately, His goal is to maintain strong relationships with all our business partners.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-022" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 022.jpg" alt="img-team">
                                    <h4 class="pry-color">Aluko Samuel</h4>
                                    <span>Partner Relations</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Samuel Aluko specializes in Sales and Business Development in Financial Services
                                        and FMCG. He also identifies business opportunities by identifying prospects and evaluating
                                        their position in the industry; researching and analyzing sales options.
                                    </p>

                                    <p>
                                        Sells products by establishing contact and developing relationships with prospects;
                                        Good in researching and recommending new opportunities; recommending profit and
                                        service improvements.
                                    </p>

                                    <p>
                                        He is a graduate of Houdegbe North American University, Cotonou, Benin Republic where he studied Economics.
                                        He gained more skills in the asset Management firm where he was the team leader. He was
                                        the best sales executive of his team in the year 2017. He is currently working in PorkMoney as a
                                        partner relations manager.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-023" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 023.jpg" alt="img-team">
                                    <h4 class="pry-color">Ojo Ayorinde</h4>
                                    <span>Partner Relations</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Ayorinde is a dynamic and driven Acquisition manager with reputation in client development,
                                        product promotion and creative sales strategies. He is very passionate about developing long
                                        term client relationship which promotes organisational value .
                                    </p>

                                    <p>
                                        Ayorinde is an alumnus of the Lagos State University , where he earned Bsc in insurance,with
                                        special focus in human relation. He has attended training workshops, where he acquired knowledge
                                        in customer service and customer oriented communication to archive set business result.
                                    </p>

                                    <p>
                                        Ayorinde  is currently a partner relations manager at PorkMoney. His key responsibility
                                        is Building and maintaining relationship with clients and key personnel within customer companies.
                                        Conducting business reviews to ensure clients are satisfied with their products and services.
                                        ... Updating the CRM and ensuring account managers are aware of changes within clients.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-024" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 024.jpg" alt="img-team">
                                    <h4 class="pry-color">Folorunso Sinmi</h4>
                                    <span>Partner Relations/HR Support</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>

                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-025" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 025.jpg" alt="img-team">
                                    <h4 class="pry-color">Ajiboye Abiola</h4>
                                    <span>Admin</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Abiola Ajiboye is a graduate of University of Ilorin,where she earned a B.A in French language,
                                        She went to French Village to acquire more knowledge on the basic communication skills in French
                                        language.she also holds a professional  certification in French Linguistics.
                                    </p>

                                    <p>
                                        Abiola is a confident, career motivated, service oriented, diligent, flexible team player. Resilient
                                        ability to learn very fast with excellent interpersonal communication skill coupled with pleasant
                                        personality.
                                    </p>

                                    <p>
                                        She has worked with top organisations where she holds the role of an interpreter, prior to working at PorkMoney.
                                        Her core interests are basically in administrative work, secretarial role and human resources.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-026" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 026.jpg" alt="img-team">
                                    <h4 class="pry-color">Iselobhor Vincent</h4>
                                    <span>Procurement</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>

                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-027" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 027.jpg" alt="img-team">
                                    <h4 class="pry-color">Ogberega Judith</h4>
                                    <span>Partner Relations</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Judith is very creative with the ability to conjure up initiatives at all times.
                                        Enjoys being part of as well as managing a successful and productive team. She has
                                        over three years working experience in customer relations management and marketing and
                                        has worked in the Banking and creative sector as a Direct sales executive, customer
                                        representative, Business development manager, Sales manager and Partners relations manager.
                                    </p>

                                    <p>
                                        Judith has a degree in Banking and Finance from the University of Benin and currently works
                                        in PorkMoney a branch under Divergent Enterprise ltd as a partners relations manager. Judith
                                        is passionate about building her contacts and maintaining relationships with clients.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-028" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 028.jpg" alt="img-team">
                                    <h4 class="pry-color">Gbolahan Olubukola</h4>
                                    <span>Legal</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Olubukola obtained her Law degree from Olabisi Onabanjo University, Ago Iwoye, Ogun State and
                                        was called into the Nigerian Bar in 2012.
                                    </p>

                                    <p>
                                        Olubukola is thoroughly bred, highly motivated, focused, a goal getter , proactive and a dynamic
                                        professional.
                                    </p>

                                    <p>
                                        She served pupillage in a leading Litigation firm in Lagos prior to joining PorkMoney and has appeared
                                        in various appellate courts in Nigeria.
                                    </p>

                                    <p>
                                        Her areas of interest and expertise include Corporate and Commercial Law, Company Secretarial,
                                        Negotiation and Alternative Dispute Resolution.
                                    </p>

                                    <p>
                                        Olubukola is a professional member of the Nigerian Bar Association.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="PorkMoney-029" class="modal">
                    <div class="modal-content">
                        <div class="close modal-close">X</div>

                        <div class="row">
                            <div class="col s12">
                                <div class="col s12 m4 name-detail">
                                    <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/headshots/PorkMoney- 029.jpg" alt="img-team">
                                    <h4 class="pry-color">Godson Atewe</h4>
                                    <span>Key Accounts</span>
                                </div>

                                <div class="col s12 m8">
                                    <p>
                                        Godson's personality type is that which synchronises with Sales and Business
                                        Development. Little wonder that for over a decade he has been involved in
                                        developing, maintaining and acquiring businesses for companies that fall under
                                        different sectors and has attended several product training seminars both local
                                        and international. His impressive conversational, interpersonal, negotiation
                                        and communication skills have endeared him to prospects and customers alike.
                                    </p>

                                    <p>
                                        Godson possesses a BSc in Sociology and a Masters in Industrial & Labour Relations
                                        from Edo State University now Ambrose Alli University and University of Maiduguri
                                        respectively. His oratory prowess has seen him master several ceremonies as a compere
                                        which actually is an integral part of him. He presently works as Key Account Manager,
                                        a Sales and Business Development position with PorkMoney Nigeria, a company poised to
                                        take over the livestock industry in West Africa.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
        <script type="text/javascript">
          $(document).ready(function () {
              $('.materialboxed').materialbox();
              $('.parallax').parallax();
              $('.modal').modal();
              });


              $(document).ready(function(){
                $("#pteam").hide();
              });
              $("#pteam-btn").click(function(){
                  $("#pteam-btn").text('See More');
                $("#pteam").slideToggle(1500);
                $("#pteam-btn").toggleClass('show-less-btn');
                $(".show-less-btn").text('See Less');
              });
        </script>



@endsection
