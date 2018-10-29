@extends('layouts.main')
@section('styles')
    <style>

       .contracts{
           display: none;
       }

       .count .select-wrapper input.select-dropdown{
           height: 3rem;
           border-radius: 4px;
           text-align: center;
       }

       .pull-left{
           float: left;
       }
       .footer-copyright.min-black{
           display: none;
       }

       @media(min-width: 601px){
           body{
                height: auto;
                min-height: 100vh;
                position: relative;
            }
            footer.abs{
                position: absolute;
                bottom: 0;
                width: 100%;
            }
       }

    </style>
@endsection

@section('content')
    <div class="section jb">
        <div class="container">
            <div class="row">

            <h4 class="center">Select country to view contract</h4>
            <div class="input-field col s7 offset-s1 mb-adjust m2 count offset-m5">
                <select id="country">
					<option value="" disabled selected>Select Country</option>
					<option value="nigeria-contract">Nigeria</option>
					<option value="ghana-contract">Ghana</option>
				</select>
            </div>

                <div id="nigeria-contract" class="contracts">
                    <div class="hidden-xs">
                        <object data=" pdf/partnership-nigeria.pdf" type="application/pdf" width="100%" height="750px">
                            <embed src=" pdf/partnership-nigeria.pdf" type="application/pdf">
                                <p class="pull-left center">This browser does not support PDFs. Please download the PDF to view it:
                                    <a href=" pdf/partnership-nigeria.pdf">Download PDF</a>.
                                </p>
                            </embed>
                        </object>
                    </div>

                    <div class="visible-xs">
                        <p class="pull-left center">For, Nigerian partners, click here to download and view the contract:
                            <a href=" pdf/partnership-nigeria.pdf">Download PDF</a>.
                        </p>
                    </div>
                </div>

                <div id="ghana-contract" class="contracts">
                    <div class="hidden-xs">
                        <object data=" pdf/partnership-ghana.pdf" type="application/pdf" width="100%" height="750px">
                            <embed src=" pdf/partnership-ghana.pdf" type="application/pdf">
                                <p class="pull-left center">This browser does not support PDFs. Please download the PDF to view it:
                                    <a href=" pdf/partnership-ghana.pdf">Download PDF</a>.
                                </p>
                            </embed>
                        </object>
                    </div>

                    <div class="visible-xs">
                        <p class="pull-left center">For, Ghanaian partners, click here to download and view the contract:
                            <a href=" pdf/partnership-ghana.pdf">Download PDF</a>.
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
            $('.contracts').hide();
            $('select').material_select();
            $('footer').addClass('abs');
        });

        $(function() {
			$('#country').change(function(){
				$('.contracts').hide();
				$('#' + $(this).val()).show();
                $('footer').removeClass('abs');
			});
		});
    </script>
@endsection