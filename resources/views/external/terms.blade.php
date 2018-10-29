@extends('layouts.main')
@section('styles')
    <style>
        footer {
            /* position: absolute; */
            width: 100%;
            bottom: 0;
        }

        .job-img {
            width: 100%;
            height: 50vh;
            background: url('img/jobs.png');
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
                    <h4 class="pry-color text-uppercase center-align">Terms and Conditions</h4>
                    <p>
                        The information contained in this website is for general information purposes only. 
                        The information is provided by PorkMoney and whilst we endeavour to keep the information 
                        up-to-date and correct, we make no representations or warranties of any kind, express or 
                        implied, about the completeness, accuracy, reliability, suitability or availability with 
                        respect to the website or the information, products, services, or related graphics contained
                         on the website for any purpose. Any reliance you place on such information is therefore 
                         strictly at your own risk.
                    </p>

                    <p>
                        In no event will we be liable for any loss or damage including without limitation, indirect
                         or consequential loss or damage, whatsoever arising from loss of data or profits arising 
                         out of, or in connection with, the use of this website (whether such liability arises under
                          these terms and conditions or negligence or otherwise).
                    </p>

                    <p>
                        Through this website you can link to other websites which are not under the control of 
                        PorkMoney. We have no control over the nature, content and availability of those sites. 
                        The inclusion of any links does not necessarily imply a recommendation or endorse the 
                        views expressed within them.
                    </p>

                    <p>
                        Every effort is made to keep the website up and running smoothly. However, PorkMoney takes
                         no responsibility for, and will not be liable for, the website being temporarily 
                         unavailable.
                    </p>

                    <p><h5 class="text-uppercase bold center">INTERNET COPYRIGHT NOTICE</h5></p>
                    <p>
                        Unless specifically noted otherwise this website and its content is copyright of 
                        “PorkMoney” – &copy; “PorkMoney” 2018. All rights reserved.
                    </p>
                    <p>
                        Any redistribution or reproduction of part or all of the contents in any form is
                         prohibited other than the following: <br>
                         <ul class="dotted">
                            <li>
                                 You may print or download to a local hard disk extracts for your personal
                                  and non-commercial use only.
                            </li>
                            <li>
                                You may copy the content to individual third parties for their personal use,
                                 but only if you acknowledge the website as the source of the material.
                            </li>
                            <li>
                                You may not, except with our express written permission, distribute or 
                                commercially exploit the content. Nor may you transmit it or store it in any other
                                 website or other form of electronic retrieval system.
                            </li>
                         </ul>
                    </p>

                    <p><h5 class="text-uppercase bold center">TERMS and CONDITIONS OF WEBSITE USAGE</h5></p>
                    <p>
                        Welcome to our website. If you continue to browse and use this website you are agreeing to 
                        comply with and be bound by the following terms and conditions of use, which together with 
                        our privacy policy govern Pork Farms’ relationship with you in relation to this website. 
                        This website is owned and operated by Divergent Enterprise Limited, the company under which
                        the activities of PorkMoney are carried out.
                    </p>

                    <p>
                        The use of this website is subject to the following terms of use:
                        <ul class="dotted">
                            <li>
                                The content of the pages of this website is for your general information and use only. It is subject to change without notice.
                            </li>
                            <li>
                                Neither we nor any third parties provide any warranty or guarantee as to the accuracy, 
                                timeliness, performance, completeness or suitability of the information and materials 
                                found or offered on this website for any purpose. All express or implied warranties and
                                representations are excluded fully as permissible by law. You acknowledge that such 
                                information and materials may contain inaccuracies or errors and we expressly exclude
                                liability for any such inaccuracies or errors fully as permitted by law.
                            </li>
                            <li>
                                Your use of any information or materials on this website is entirely at your own risk, 
                                for which we shall not be liable. It shall be your own responsibility to ensure that any 
                                products, services or information available through this website meet your specific requirements.
                            </li>
                            <li>
                                This website contains material which is owned by or licensed to us. This material includes, but is
                                not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other
                                than in accordance with the copyright notice, which forms part of these terms and conditions. Our 
                                social media accounts across Facebook and Twitter also contain material which is owned or licensed
                                by us. Reproduction of any content across social media, including, but not limited to design, look,
                                appearance, content and images submitted as well as all graphics is strictly prohibited.
                            </li>
                            <li>
                                All trademarks reproduced in this website, which are not the property of, or licensed to the operator,
                                are acknowledged on the website.
                            </li>
                            <li>
                                Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.
                            </li>
                            <li>
                                This website is controlled and operated by Divergent Enterprise Limited from Lagos, Nigeria. Divergent 
                                Enterprise Limited makes no representation that any material contained on this website is appropriate 
                                for any other jurisdiction. Should you choose to access this website from any location other than Nigeria, 
                                you are responsible for compliance with all applicable local laws.
                            </li>
                        </ul>
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
