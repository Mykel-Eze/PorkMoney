            <!--=== ADD PACKAGES ===-->
            <div class="col s12">
                <div class="row">
                    <div>
                        <div class="col s12">
                            <h5 class="pckg-font add-link">
                                <span class="btn-pckg btn-floating"><i class="material-icons">add</i></span> Add Package
                            </h5>
                            <div class='pckgs col s12 pad0'>

                                <div class="col s12 m6 pad-left-0">
                                    <div class="col s12 pad-left-0 mag-d-10">
                                        <div class="info-card">

                                            <h4 class="center">
                                                <input type="checkbox" value="250000" class="filled-in pmn" id="pmn1" />
                                                <label for="pmn1">PMN1 - &#8358;250,000</label>
                                            </h4>

                                            <ul class="list-inline mag0">
                                                <li> 
                                                    <span class="interest">20%</span>
                                                </li>
                                                <li>5 Weaners <br> <small>[ 4 Gilts, 1 Boar ]</small></li>
                                                <li class="mid">Feed till <br> Maturation</li>
                                                <li>Vaccination</li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col s12 pad-left-0 mag-d-10">
                                        <div class="info-card">

                                            <h4 class="center">
                                                <input type="checkbox" value="500000" class="filled-in pmn" id="pmn2" />
                                                <label for="pmn2">PMN2 - &#8358;500,000</label>
                                            </h4>

                                            <ul class="list-inline mag0">
                                                <li> 
                                                    <span class="interest">25%</span>
                                                </li>
                                                <li>10 Weaners <br> <small>[ 8 Gilts, 2 Boar ]</small></li>
                                                <li class="mid">Feed till <br> Maturation</li>
                                                <li>Vaccination</li>
                                            </ul>
                                            
                                        </div>
                                    </div>

                                    <div class="col s12 pad-left-0 mag-d-10">
                                        <div class="info-card">

                                            <h4 class="center">
                                                <input type="checkbox" value="1000000" class="filled-in pmn" id="pmn3" />
                                                <label for="pmn3">PMN3 - &#8358;1,000,000</label>
                                            </h4>

                                            <ul class="list-inline mag0">
                                                <li> 
                                                    <span class="interest">30%</span>
                                                </li>
                                                <li>20 Weaners <br> <small>[ 16 Gilts, 4 Boar ]</small></li>
                                                <li class="mid">Feed till <br> Maturation</li>
                                                <li>Vaccination</li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col s12 pad-left-0 mag-d-10">
                                        <div class="info-card">

                                            <h4 class="center">
                                                <input type="checkbox" value="5000000" class="filled-in pmn" id="pmn4" />
                                                <label for="pmn4">PMN4 - &#8358;5,000,000</label>
                                            </h4>

                                            <ul class="list-inline mag0">
                                                <li> 
                                                    <span class="interest">35%</span>
                                                </li>
                                                <li>100 Weaners <br> <small>[ 80 Gilts, 20 Boar ]</small></li>
                                                <li class="mid">Feed till <br> Maturation</li>
                                                <li>Vaccination</li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="selected-pckgs col s12 m6">
                                    <h5 class="sp-txt">
                                        <span><i class="material-icons">check_circle</i></span>Selected Packages
                                    </h5>
                                    <div class="col s12 pad0 sel-p">
                                        <div class="col s12 bg-gray">

                                            <div id='p1'>
                                                <h5 class="black-text sp-list">
                                                    <span class="tiny material-icons pry-color lens-icon">lens</span> PMN1 - (NGN)250,000
                                                    <input type="tel" class="qty" data-plan="1" value="0" min='1'>
                                                </h5>
                                            </div>
                                            <div id='p2'>
                                                <h5 class="black-text sp-list">
                                                    <span class="tiny material-icons pry-color lens-icon">lens</span> PMN2 - (NGN)500,000
                                                    <input type="tel" class="qty" data-plan="2" value="0" min='1'>
                                                </h5>
                                            </div>
                                            <div id='p3'>
                                                <h5 class="black-text sp-list">
                                                    <span class="tiny material-icons pry-color lens-icon">lens</span> PMN3 - (NGN)1,000,000
                                                    <input type="tel" class="qty" data-plan="3" value="0" min='1'>
                                                </h5>
                                            </div>
                                            <div id='p4'>
                                                <h5 class="black-text sp-list">
                                                    <span class="tiny material-icons pry-color lens-icon">lens</span> PMN4 - (NGN)5,000,000
                                                    <input type="tel" class="qty" data-plan="4" value="0" min='1'>
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col s12 pad0">
                                            <div class="col s12 m9 bg-gray">
                                                <h4 class="total">
                                                    <span>&#8358;</span> <span id='total'>0</span>
                                                </h4>
                                            </div>
                                            <div class="col s12 m3 m-trigger-btn pad0">
                                                <span class="">
                                                    <button class="modal-trigger" type='button' data-target="checkout" id="checkout-btn">Checkout</a>
                                                </span>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
            <!--=== end of ADD PACKAGES ===-->

        </div>
        
    </div>
    

    <!--=== Modals ===-->

    <div id="checkout" class="modal">
        <div class="modal-content">
            <div class="close modal-close">X</div>
            <h4>Package Summary</h4>
            <p>
                <ul class='package-list'>
                    <li class='pm-list' id='pm-list1'>
                        PMN1 - <span>&#8358;</span>250,000 
                        <span class="pull-right pk-qties"><span class='pk-qty'>0</span></span>
                    </li>
                    <li class='pm-list' id='pm-list2'>
                        PMN2 - <span>&#8358;</span>500,000 
                        <span class="pull-right pk-qties"><span class='pk-qty'>0</span></span>
                    </li>
                    <li class='pm-list' id='pm-list3'>
                        PMN3 - <span>&#8358;</span>1,000,000 
                        <span class="pull-right pk-qties"><span class='pk-qty'>0</span></span>
                    </li>
                    <li class='pm-list' id='pm-list4'>
                        PMN4 - <span>&#8358;</span>5,000,000 
                        <span class="pull-right pk-qties"><span class='pk-qty'>0</span></span>
                    </li>
                </ul>
            </p>
            <p class="pry-color inv-period">
                Investment Period : <span class="black-text">11 months</span>
            </p>
            <input type="hidden" id="customer-email" value="{{$user->email}}">

            <div class="center proceed-btn"><button class="modal-close btn-custom btn" id="proceed">Proceed</button></div>
        </div>

    </div>

    <!--=== end of Modals ===-->