@extends('layouts.main')

@section('styles')
<style>

	nav a, nav ul a{
		color: black;
	}

	nav ul li.pckg-link a{
		border: 1px solid;
		border-radius: 10px;
		display: initial;
		padding: 12px;
		font-size: 0.8rem;
	}

	.video-container{
		height: 274px
	}
	.watis h5{
        font-size: 1.5rem;
        margin-top: 3rem;
        height: 40px;
	}
	.det{
		font-size: 15px;
		padding: 3px 18px;
	}
	#packages .select-wrapper input.select-dropdown{
		padding: 0;
		border-radius: 2px
	}
	
	.info-card li.mid{
		padding: 0 15px;
		border: 2px solid;
		-webkit-border-image: url(../img/line.png) 5 stretch;
		-o-border-image: url(../img/line.png) 5 stretch;
		border-image: url(../img/line.png) 5 stretch;
	}
	.info-card{
		background: linear-gradient(to right top, #d6d6d6, white, #d6d6d6);
		padding: 10px 1px;
		cursor: pointer;
	}
	.info-card .list-inline .interest{
		background: var(--pry-color);
		color: white;
		border: 2px solid;
		border-radius: 50%;
		padding: 6px 2px;
		position: relative;
		top: -15px;
		font-size: 20px;
	}
	.info-card .list-inline.mag0 li{
		padding: 0 2px;
	}
	.info-card h4{
		font-size: 1.3rem;
		margin: 0;
		font-family: var(--font-bold);
		color: var(--pry-color);
		margin-bottom: 3px;
		position: relative;
		font-weight: bold;
	}
	.info-card .package{
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 0px 72px 58px 0;
		border-color: transparent var(--pry-color) transparent transparent;
		position: absolute;
		right: 0;
		top: -8px;
		color: white;
	}
	.info-card .package span{
		right: -18px;
		position: relative;
		font-weight: lighter;
	}
	.p-price{
		margin-left: 17%;
		position: relative;
	}
	.p-price::before {
		content: '';
		position: absolute;
		width: 100%;
		height: 100%;
		z-index: 1;
	}
	.con-period-text{
		margin-top: 10px;
		font-size: 1.3rem;
		color: var(--pry-color);
	}
	.flags{
		width: 40px;
	}

.btn:focus {
    background-color: var(--pry-color);
}
.btn-choose{
	margin: 20px auto 0;
	padding: 2px 12px;
	font-family: var(--font-bold);
}
.info-card:hover{
	background: linear-gradient(to right top, #FFE5E5, white, #FFE5E5);
}
@media(min-width: 601px){
		.count .select-wrapper input.select-dropdown{
			height: 3rem;
		}
	}
@media(min-width: 1200px){
	.card-panel{
		min-height: 328px;
	}
}
@media(min-width: 992px){
		.info-card .list-inline .interest{
			padding: 9px 2px;
			position: relative;
			top: -15px;
			font-size: 30px;
		}
		.info-card .package span {
			right: -30px;
			top: 10px;
		}
		.info-card .package{
			border-width: 0px 90px 105px 0;
		}
	}
	
	@media(max-width: 600px){
		.vac{
			font-size: .89rem;
		}
		.info-card .list-inline.mag0 li{
			font-size: 0.9rem;
		}
	}

@media(max-width: 330px){
	.info-card .list-inline.mag0 li {
		padding: 0;
		font-size: 0.7rem;
	}
}
@media (max-width: 992px) and (min-width: 601px){
	.video-container, .watis {
		height: 275px;
	}
}
	

</style>
@endsection

@section('content')
	
	<div class="section grey jb" id="">
		<div class="container">
			<div class="row">
				<div class="col s12 vid-cont">
					<div class="col s12 m6 pad0">
						<div class="video-container">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLu5T_YFgM7LnsNiJ0yG3OKKqI-dai9uGn&amp;showinfo=0&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col s12 m6 pad0 white watis">
						<div class="center">
							<h5 class="black-text text-uppercase">John Dumelo </h5>

							<p class="pry-color det">
                                I'm not just an actor, I'm also a farmer. As I venture into pig farming I  couldn't do it myself, 
                                so I partnered with PorkMoney so I can earn cool cash on the side. Like how I do it? You too can 
                                become a partner.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=== Packages category ===-->
	<div class="section become asset-bg rel" id="packages">
		<div class="container">
			<div class="row">
				<div class="">
					<div class="col s12">
												
						<div class="input-field col s7 offset-s1 mb-adjust m2 count offset-m5">
							<select id="country">
								<option value="" disabled selected>Select A Country</option>
								<option value="nigeria">Nigeria</option>
								<option value="ghana">Ghana</option>
							</select>
							<!-- <label for="country">Country</label> -->
						</div>
						<div class="col s4 m2">
							<img src=" img/Nigeria.ico" class="flags nigeria" alt="nigeria">
							<img src=" img/Ghana.ico" class="flags ghana" alt="ghana">
						</div>
					</div>

					<!-- Nigeria Packages -->
					<div id="nigeria" class="col s12 hidden country">
					
						<div class="row mobile">
							<div class="col s12">
								<div class="col s12 m6 pad0-xs mag-d-10">
									<div class="info-card" id="ng1a">

										<h4 class="">
											<span class="p-price">
												<input type="checkbox" class="filled-in pmn" id="pmn1" />
                                                <label for="pmn1">&#8358;250,000</label>
											</span>

											<div class="package"><span>PMN1</span></div>
										</h4>

										<ul class="list-inline mag0">
											<li> 
												<div class="interest">20%</div>
											</li>
											<li>5 Weaners <br> <small>[ 4 Gilts, 1 Boar ]</small></li>
											<li class="mid">Feed till <br> Maturation</li>
											<li class="vac">Vaccination</li>
										</ul>
										
									</div>
								</div>

								<div class="col s12 m6 pad0-xs mag-d-10">
									<div class="info-card" id="ng2a">

										<h4 class="">
											<span class="p-price">
												<input type="checkbox" class="filled-in pmn" id="pmn1" />
                                                <label for="pmn1">&#8358;500,000</label>
											</span>

											<div class="package"><span>PMN2</span></div>
										</h4>

										<ul class="list-inline mag0">
											<li> 
												<div class="interest">25%</div>
											</li>
											<li>10 Weaners <br> <small>[ 8 Gilts, 2 Boars ]</small></li>
											<li class="mid">Feed till <br> Maturation</li>
											<li class="vac">Vaccination</li>
										</ul>
										
									</div>
								</div>

								<div class="col s12 m6 pad0-xs mag-d-10">
									<div class="info-card" id="ng3a">

										<h4 class="">
											<span class="p-price">
												<input type="checkbox" class="filled-in pmn" id="pmn1" />
                                                <label for="pmn1">&#8358;1,000,000</label>
											</span>

											<div class="package"><span>PMN3</span></div>
										</h4>

										<ul class="list-inline mag0">
											<li> 
												<div class="interest">30%</div>
											</li>
											<li>20 Weaners <br> <small>[ 16 Gilts, 4 Boars ]</small></li>
											<li class="mid">Feed till <br> Maturation</li>
											<li class="vac">Vaccination</li>
										</ul>
										
									</div>
								</div>

								<div class="col s12 m6 pad0-xs mag-d-10">
									<div class="info-card" id="ng4a">

										<h4 class="">
											<span class="p-price">
												<input type="checkbox" class="filled-in pmn" id="pmn1" />
                                                <label for="pmn1">&#8358;5,000,000</label>
											</span>

											<div class="package"><span>PMN4</span></div>
										</h4>

										<ul class="list-inline mag0">
											<li> 
												<div class="interest">35%</div>
											</li>
											<li>100 Weaners <br> <small>[ 80 Gilts, 20 Boars ]</small></li>
											<li class="mid">Feed till <br> Maturation</li>
											<li class="vac">Vaccination</li>
										</ul>
										
									</div>
								</div>

								<div class="col s12 center bold con-period-text">CONTRACT PERIOD - 11 months</div>

							</div>
						</div>
											
					</div>
					
					<!-- Ghana Packages -->
					<div id="ghana" class="col s12 hidden country">
					
						<div class="row mobile">
							<div class="col s12">
								<div class="col s12 m6 pad0-xs mag-d-10">
									<div class="info-card" id="gh1a">

										<h4 class="">
											<span class="p-price">
												<input type="checkbox" class="filled-in pmn" id="pmg1" />
                                                <label for="pmg1">&#8373;2,000</label>
											</span>

											<div class="package"><span>PMG1</span></div>
										</h4>

										<ul class="list-inline mag0">
											<li> 
												<div class="interest">20%</div>
											</li>
											<li>3 Weaners <br> <small>[ 2 Gilts, 1 Boar ]</small></li>
											<li class="mid">Feed till <br> Maturation</li>
											<li class="vac">Vaccination</li>
										</ul>
										
									</div>
								</div>

								<div class="col s12 m6 pad0-xs mag-d-10">
									<div class="info-card" id="gh2a">

										<h4 class="">
											<span class="p-price">
												<input type="checkbox" class="filled-in pmn" id="pmg2" />
                                                <label for="pmg2">&#8373;5,000</label>
											</span>

											<div class="package"><span>PMG2</span></div>
										</h4>

										<ul class="list-inline mag0">
											<li> 
												<div class="interest">25%</div>
											</li>
											<li>12 Weaners <br> <small>[ 9 Gilts, 3 Boars ]</small></li>
											<li class="mid">Feed till <br> Maturation</li>
											<li class="vac">Vaccination</li>
										</ul>
										
									</div>
								</div>

								<div class="col s12 m6 pad0-xs mag-d-10">
									<div class="info-card" id="gh3a">

										<h4 class="">
											<span class="p-price">
												<input type="checkbox" class="filled-in pmn" id="pmg3" />
                                                <label for="pmg3">&#8373;10,000</label>
											</span>

											<div class="package"><span>PMG3</span></div>
										</h4>

										<ul class="list-inline mag0">
											<li> 
												<div class="interest">30%</div>
											</li>
											<li>21 Weaners <br> <small>[ 16 Gilts, 5 Boars ]</small></li>
											<li class="mid">Feed till <br> Maturation</li>
											<li class="vac">Vaccination</li>
										</ul>
										
									</div>
								</div>

								<div class="col s12 m6 pad0-xs mag-d-10">
									<div class="info-card" id="gh4a">

										<h4 class="">
											<span class="p-price">
												<input type="checkbox" class="filled-in pmn" id="pmg1" />
                                                <label for="pmg1">&#8373;2,000</label>
											</span>

											<div class="package"><span>PMG4</span></div>
										</h4>

										<ul class="list-inline mag0">
											<li> 
												<div class="interest">35%</div>
											</li>
											<li>90 Weaners <br> <small>[ 70 Gilts, 20 Boars ]</small></li>
											<li class="mid">Feed till <br> Maturation</li>
											<li class="vac">Vaccination</li>
										</ul>
										
									</div>
								</div>

								<div class="col s12 center bold con-period-text">CONTRACT PERIOD - 11 months</div>

							</div>
						</div>
					
					</div>
				</div>
	
			</div>
		</div>
	</div>
	<!--=== end of Packages category ===-->

	<!-- 5th Assets categories -->
	<div class="section hidden form" id='form'>
		<div class="container" id="assets">
			<div class="row">

				<span class="back"> &LeftArrow; Back</span>

				<h4 class="text-uppercase center">Become a porkmoney partner</h4>

				<h5 class="white-text center pack pack1 hidden">Package:
					<span class="text-uppercase">PMN1 - &#8358;250,000 </span>
				</h5>

				<h5 class="white-text center pack pack2 hidden">Package:
					<span class="text-uppercase">PMN2 - &#8358;500,000 </span>
				</h5>

				<h5 class="white-text center pack pack3 hidden">Package:
					<span class="text-uppercase">PMN3 - &#8358;1,000,000 </span>
				</h5>
				
				<h5 class="white-text center pack pack4 hidden">Package:
					<span class="text-uppercase">PMN4 - &#8358;5,000,000 </span>
				</h5>

				<h5 class="white-text center pack pack5 hidden">Package:
					<span class="text-uppercase">PMG1 - &#8373;2,000 </span>
				</h5>
				
				<h5 class="white-text center pack pack6 hidden">Package:
					<span class="text-uppercase">PMG2 - &#8373;5,000 </span>
				</h5>
				
				<h5 class="white-text center pack pack7 hidden">Package:
					<span class="text-uppercase">PMG3 - &#8373;10,000 </span>
				</h5>
				
				<h5 class="white-text center pack pack8 hidden">Package:
					<span class="text-uppercase">PMG4 - &#8373;50,000 </span>
				</h5>

				<div class="col s12 m10 offset-m1 padded right-align">
					<div class="form">
						<form id="theForm" class="simform" autocomplete="off" method="post" action="{{ route('join') }}">
                            {{csrf_field()}}
                            <input type="hidden" name="plan" id="thePlan" value="">
							<div class="simform-inner">
								<ol class="questions">
									<li>
										<span>
											<label for="q1">Name</label>
										</span>
										<input id="q1" name="name" type="text" />
									</li>
									<li>
										<span>
											<label for="q2">Email</label>
										</span>
										<input id="q2" name="email" type="email" />
									</li>
									<li>
										<span>
											<label for="q3">Phone</label>
										</span>
										<input id="q3" name="phone" type="tel" />
									</li>
								
								</ol>
								<!-- /questions -->
								<button class="submit" type="submit">Send answers</button>
								<div class="controls">
									<button class="next"></button>
									<button class="prev"></button>
									<div class="progress"></div>
									<span class="number">
										<span class="number-current"></span>
										<span class="number-total"></span>
									</span>
									<span class="error-message"></span>
								</div>
								<!-- / controls -->
							</div>
							<!-- /simform-inner -->
							<span class="final-message"></span>

							<div class="error-log invisible">
								<ul id="error-list"></ul>
							</div>
						</form>
						<!-- /simform -->
						
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- end of 5th Assets categories -->

@endsection

@section('scripts')
	<script src="js/modernizr.js"></script>
	<script src="js/stepsForm.js"></script>
	<script src="js/classie.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
	<script src="sliderengine/initslider-1.js"></script>
	<script src="js/instafeed.js"></script>

	<script>
		$(document).ready(function () {
			$('.materialboxed').materialbox();
			$('.parallax').parallax();
			$('.modal').modal();
			$('select').material_select();
			$('.tabs').tabs({swipeable: true});
			$('.carousel').carousel({ full_width: true, indicators: true});
			window.setInterval(function () { $('.carousel').carousel('next') }, 5000);
			$('#form').hide();
			$('.pack1, .pack2, .pack3, .pack4, .pack5, .pack6, .pack7, .pack8').hide();
		}
		);

		$(function() {
			$('#country').change(function(){
				$('.country').hide(1000, 'linear');
				$('.flags').hide();
				$('.become').removeClass('become');
				$('.mb-adjust').removeClass('mb-adjust');
				$('#' + $(this).val()).slideDown(1000);
				$('.' + $(this).val()).show();
			});
		});

		$(window).scroll(function(){
			$('nav.grey').toggleClass('fixed-nav', $(this).scrollTop() > 50);
		});

		$('#ng1, #ng1a').click(function () {
			$('#packages').hide(500, 'linear');
			$('#form').show(500, 'linear');	
			$('.pack1').show();
			$('.pack2, .pack3, .pack4, .pack5, .pack6, .pack7, .pack8').hide();	
			document.getElementById('thePlan').value = "ng1"

			if ($(window).width() <= 767) {
				location.href = '#red'
			}	
		});

		$('#ng2, #ng2a').click(function () {
			$('#packages').hide(500, 'linear');
			$('#form').show(500, 'linear');
			$('.pack2').show();
			$('.pack1, .pack3, .pack4, .pack5, .pack6, .pack7, .pack8').hide();
			document.getElementById('thePlan').value = "ng2"

			if ($(window).width() <= 767) {
				location.href = '#red'
			}
		});

		$('#ng3, #ng3a').click(function () {
			$('#packages').hide(500, 'linear');
			$('#form').show(500, 'linear');
			$('.pack3').show();
			$('.pack1, .pack2, .pack4, .pack5, .pack6, .pack7, .pack8').hide();
			
			document.getElementById('thePlan').value = "ng3"
			if ($(window).width() <= 767) {
				location.href = '#red'
			}
		});

		$('#ng4, #ng4a').click(function () {
			$('#packages').hide(500, 'linear');
			$('#form').show(500, 'linear');
			$('.pack4').show();
			$('.pack1, .pack2, .pack3, .pack5, .pack6, .pack7, .pack8').hide();
			
			document.getElementById('thePlan').value = "ng4"
			if ($(window).width() <= 767) {
				location.href = '#red'
			}
		});

		$('#gh1, #gh1a').click(function () {
			$('#packages').hide(500, 'linear');
			$('#form').show(500, 'linear');
			$('.pack5').show();
			$('.pack1, .pack2, .pack3, .pack4, .pack6, .pack7, .pack8').hide();
			
			document.getElementById('thePlan').value = "gh1"
			if ($(window).width() <= 767) {
				location.href = '#red'
			}
		});

		$('#gh2, #gh2a').click(function () {
			$('#packages').hide(500, 'linear');
			$('#form').show(500, 'linear');
			$('.pack6').show();
			$('.pack1, .pack2, .pack3, .pack4, .pack5, .pack7, .pack8').hide();

			document.getElementById('thePlan').value = "gh2"
			if ($(window).width() <= 767) {
				location.href = '#red'
			}
		});

		$('#gh3, #gh3a').click(function () {
			$('#packages').hide(500, 'linear');
			$('#form').show(500, 'linear');
			$('.pack7').show();
			$('.pack1, .pack2, .pack3, .pack4, .pack5, .pack6, .pack8').hide();
			
			document.getElementById('thePlan').value = "gh3"
			if ($(window).width() <= 767) {
				location.href = '#red'
			}
		});

		$('#gh4, #gh4a').click(function () {
			$('#packages').hide(500, 'linear');
			$('#form').show(500, 'linear');
			$('.pack8').show();
			$('.pack1, .pack2, .pack3, .pack4, .pack5, .pack6, .pack7').hide();

			document.getElementById('thePlan').value = "gh4"			
			if ($(window).width() <= 767) {
				location.href = '#red'
			}
		});

		$('.back').click(function () {
			$('#packages').show(500, 'linear');
			$('#form').hide(500, 'linear');
		});

		
	</script>

	<script>
		var theForm = document.getElementById('theForm');

		new stepsForm( theForm, {
			onSubmit : function( form ) {
				// hide form
				classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );
				var messageEl = theForm.querySelector( '.final-message' );
				messageEl.innerHTML = 'Updating. . .';
				classie.addClass( messageEl, 'show' );
				// form.submit()
                /*
				or
				*/
				$.post(theForm.getAttribute('action'), $('#theForm').serialize(), function(data){
		            if(data.status == 201){
						$('#error-list').parent().addClass('invisible')
						console.log(data)
						messageEl.innerHTML = 'Successful! We\'ll be in touch.';
					}
					else{
						$('#error-list').parent().removeClass('invisible')
						$('#error-list').empty()
						Object.keys(data.error).map(function(key){
							$('#error-list').append('<li>'+data.error[key][0]+'</li>')
						})
						classie.addClass( messageEl, 'hide' );
						classie.removeClass( messageEl, 'show' );
						classie.removeClass( theForm.querySelector( '.simform-inner' ), 'hide' );
					}
		        });

				// let's just simulate something...
			}
		} );
	</script>
@endsection