@extends('layouts.main')

@section('styles')
<style>

	
	nav a, nav ul a{
		color: black;
	}
	
	@media(max-width: 600px){
		:root {
		--font: 'ubuntu', sans-serif;
		--font-bold: 'ubuntu medium', sans-serif;
		--font-xlight: 'ubuntu light', sans-serif;
		--font-xbold: 'ubuntu bold', sans-serif;
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
		}
		.con-period-text{
			margin-top: 10px;
			font-size: 1.3rem;
    		color: var(--pry-color);
		}
		.flags{
			width: 40px;
		}
		.amazingslider-nav-1{
			bottom: -15px !important;
			right: 0px !important;
			left: auto !important;
		}
		.vac{
			font-size: .89rem;
		}
	}
	.video-container{
		padding-bottom: 70%;
	}
	nav ul li.pckg-link a{
		border: 1px solid;
		border-radius: 10px;
		display: initial;
		padding: 12px;
		font-size: 0.8rem;
	}
	.fst-txt h4{
		border-right: 2px solid;
		font-size: 1.38rem;
		font-weight: bold;
	}
	.snd-txt{
		font-size: 1.15rem;
		padding: 15px 0 15px 20px !important;
	}
	.short-sec{
		position: relative;
	}
	.gt-start{
		position: absolute;
		right: 2%;
		top: 25px;
	}
	.gt-start .btn-started{
		background: white;
		color: var(--pry-color);
		padding: 1px 10px;
		font-size: 0.85rem;
		font-family: var(--font);
		border-radius: 8px;
	}
	.section.min-black img{
		width: 100%;
		height: 50px;
	}

</style>
@endsection

@section('content')
	<!-- Slider -->
	<section class="z-depth-1" id="background-tranparent">
		<div class="" id="home">
			<div class="">

					<!--=== SLIDER ===-->
				 <div id="amazingslider-wrapper-1" class="hidden-xs" style="display:block;position:relative;max-width:100%;height:100%;margin:0 auto;">
					<div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
						<ul class="amazingslider-slides container" style="display:none;">
							<li>
								<img src="img/slider1.jpg" alt="Farming	is the future" title="Farming <br> is the future" data-description="Discover it now" />
								<a href="/dumelo"><button class="as-btn-white-medium">START NOW</button></a>
							</li>
							<li>
								<img src="img/slider2.jpg" alt="I&apos;m a PorkMoney Partner" title="I&apos;m a <br> PorkMoney Partner" data-description="Be smart like me" />
								<a href="/ebuka"><button class="as-btn-white-medium">START NOW</button></a>
							</li>
							<li>
								<img src="img/slider3.jpg" alt="slider3"  title="PorkMoney" data-description="the future of pig <br> farming" />
								<a href="/about"><button class="as-btn-white-medium">START NOW</button></a>
							</li>
						</ul>
						<ul class="amazingslider-thumbnails" style="display:none;">
							<li>
								<img src="img/slider1-tn.png" alt="Farming is the future" title="Farming is the future" />
							</li>
							<li>
								<img src="img/slider2-tn.png" alt="I&apos;m a PorkMoney Partner" title="I&apos;m a PorkMoney Partner" />
							</li>
							<li><img src="img/slider3-tn.png" alt="PorkMoney:" title="PorkMoney:" /></li>
						</ul>
					</div>
					<div class="scroll-btn">
						<a href="#asset4"><img src="img/scroll-button.png" alt="scroll"></a>
					</div>
				</div>
				<!--=== End of SLIDER ===-->

				<!--=== SLIDER MOBILE ===-->
				<div id="amazingslider-wrapper-2" class="visible-xs" style="display:block;position:relative;max-width:100%;height:100%;margin:0 auto;">
					<div id="amazingslider-2" style="display:block;position:relative;margin:0 auto;">
						<ul class="amazingslider-slides" style="display:none;">
							<li>
								<img src="img/slider1-mobile.png" alt="Farming	is the future" title="Farming <br> is the future" data-description="Discover it now" />
								<a href="/dumelo"><button class="as-btn-white-medium">START NOW</button></a>
							</li>
							<li>
								<img src="img/slider2-mobile.png" alt="I&apos;m a PorkMoney Partner" title="I&apos;m a <br> PorkMoney Partner" data-description="Be smart like me" />
								<a href="/ebuka"><button class="as-btn-white-medium">START NOW</button></a>
							</li>
							<li>
								<img src="img/slider3-mobile.jpg" alt="slider3"  title="PorkMoney" data-description="the future of pig <br> farming" />
								<a href="#packages"><button class="as-btn-white-medium">START NOW</button></a>
							</li>
						</ul>
						<ul class="amazingslider-thumbnails" style="display:none;">
							<li>
								<img src=" img/slider1-tn.png" />
							</li>
							<li>
								<img src=" img/slider2-tn.png" />
							</li>
							<li>
								<img src=" img/slider3-tn.png" />
							</li>
						</ul>
					</div>
				</div>
				<!--=== End of SLIDER MOBILE ===-->
					
					{{-- <div class="video-overlay" id="video-overlay">
						<a class="video-overlay-close">&times;</a>
					</div> --}}

			</div> 
		</div>
	</section>
	<!-- end of Slider -->

	<!--=== Short intro section ===-->
	<section class="short-sec pry-bg-color white-text">
		<div class="container">
			<div class="row">
				<div class="col s12 m3 fst-txt">
					<h4> We farm Pigs <br> You make money! </h4>
				</div>

				<div class="col hidden-xs m8 snd-txt">
					Utilise our pig farming skils to earn as much as 35% in returns with zero effort
					from you.
				</div>

				<div class="gt-start">
					<a href="#packages" class="btn btn-started">Get Started</a>
				</div>
			</div>
		</div>
	</section>
	<!--=== end of Short intro section ===-->

	<!--=== Assets categories ===-->
	<div class="section asset-bg" id='asset4'>
		<div class="container" id="assets">

			<div class="row mg-top-20 hidden-xs">

				<h2 class="start text-primary center color text-uppercase"> 
					<div class="center cen-img">
						<img src="img/Partner-stories-icon.png" alt="stories-icon">
					</div>
					How it works 
					<div style="line-height: .5;"><hr class="borline"></div>
				</h2>
				
				<div class="col s12 m6 illustrate-container">
					<div class="illustrate col s5">
						<img src="img/step1.png" alt="step1">
					</div>
					<div class="mont-font col s7">
						<div class="text-uppercase pt-text pry-color">Become a Partner</div>
						<p class="mag-db">
							Choose a PorkMoney partner plan that funds the purchase of pigs and feed for their growth.
						</p>
					</div>
				</div>
	
				<div class="col s12 m6 illustrate-container">
					<div class="illustrate col s5">
						<img src="img/step2.png" alt="step2">
					</div>
					<div class="mont-font col s7">
						<div class="text-uppercase pt-text pry-color">We do the work</div>
						<p class="mag-db">
							Our team of expert farm handlers cater for the healthy rearing and growth of the pigs.
						</p>
					</div>
				</div>
	
				<div class="col s12 m6 illustrate-container">
					<div class="illustrate col s5">
						<img src="img/step3.png" alt="step3">
					</div>
					<div class="mont-font col s7">
						<div class="text-uppercase pt-text pry-color">Processing</div>
						<p class="mag-db">
							The mature pigs are chopped, processed, packaged and sold to wholesalers and retailers.
						</p>
					</div>
				</div>
	
				<div class="col s12 m6 illustrate-container">
					<div class="illustrate col s5">
						<img src="img/step4.png" alt="step4">
					</div>
					<div class="mont-font col s7">
						<div class="text-uppercase pt-text pry-color">Return on capital</div>
						<p class="mag-db">
							you earn between 20-35% returns in 11months based on your capital.
						</p>
					</div>
				</div>
	
			</div>

			<div class="row mg-top-20 visible-xs">

				<h2 class="start text-primary center color text-uppercase"> How it works </h2>
				<div class="col s11 m3 illustrate-container pad0">
					<div class="illustrate col s2 m12">
						<img src="img/step1a.png" alt="step1">
					</div>
					<div class="mont-font col s10 m12 pad0">
						<div class="center text-uppercase pt-text">Partner with PorkMoney</div>
						<p class="center mag-db">
							by sponsoring the purchase of Pigs and the feed for their growth
						</p>
					</div>
				</div>
	
				<div class="col s11 m3 illustrate-container pad0">
					<div class="illustrate col s2 m12">
						<img src="img/step2a.png" alt="step2">
					</div>
					<div class="mont-font col s10 m12 pad0">
						<div class="center text-uppercase pt-text">PorkMoney’s team of farmers</div>
						<p class="center mag-db">
							and veterinarians would cater to the healthy growth of your livestock
						</p>
					</div>
				</div>
	
				<div class="col s11 m3 illustrate-container pad0">
					<div class="illustrate col s2 m12">
						<img src="img/step3a.png" alt="step3">
					</div>
					<div class="mont-font col s10 m12 pad0">
						<div class="center text-uppercase pt-text"> grown pigs are then chopped,</div>
						<p class="center mag-db">
							processed and packaged for sale to wholesalers and our distributors.
						</p>
					</div>
				</div>
	
				<div class="col s11 m3 illustrate-container pad0">
					<div class="illustrate col s2 m12">
						<img src="img/step4a.png" alt="step4">
					</div>
					<div class="mont-font col s10 m12 pad0">
						<div class="center text-uppercase pt-text">After 11 months </div>
						<p class="center mag-db">
							our partners get a 20-35% return on the capital provided.
						</p>
					</div>
				</div>
	
			</div>
		</div>
	</div>
	<!-- end of Assets categories -->


	<!-- 1st Assets categories -->
	<div class="section asset-bg" id="">
		<div class="container" id="">
			<div class="row">

				<div class="row mg-top-20 hidden-xs">

				<h2 class="start ls center color text-uppercase"> 
					<div class="center cen-img">
						<img src="img/bulb-icon.png" alt="bulb-icon">
					</div>
					Why pig farming? 
				</h2>

				<h5 class="ls ls-pos">
					pork is the most commonly consumed meat in the world, $3billion dollars of which is consumed
					in Ghana & Nigeria.
				</h5>
				
				<div class="col s12 pad0 m10 offset-m1">
					<div class="col s12 m6 illustrate-container">
						<div class="illustrate col s2 pad0">
							<img src="img/Tick-icon.png" class="" alt="point1">
						</div>
						<div class="mont-font col s10 pad0">
							<p class="mag-db">
								Because pigs are prolific and resilient
							</p>
						</div>
					</div>
		
					<div class="col s12 m6 illustrate-container">
						<div class="illustrate col s2 pad0">
							<img src="img/Tick-icon.png" class="" alt="point2">
						</div>
						<div class="mont-font col s10 pad0">
							<p class="mag-db">
								To localise profit-making from pigs
							</p>
						</div>
					</div>
		
					<div class="col s12 m6 illustrate-container">
						<div class="illustrate col s2 pad0">
							<img src="img/Tick-icon.png" class="" alt="point3">
						</div>
						<div class="mont-font col s10 pad0">
							<p class="mag-db">
								Pork is the mostly consumed meat in the world
							</p>
						</div>
					</div>
		
					<div class="col s12 m6 illustrate-container">
						<div class="illustrate col s2 pad0">
							<img src="img/Tick-icon.png" class="" alt="point4">
						</div>
						<div class="mont-font col s10 pad0">
							<p class="mag-db">
								They have a high feed to meat ratio than other livestock
							</p>
						</div>
					</div>
				</div>
	
			</div>
		</div>
	</div> </div>
	<!-- end of 1st Assets categories-->


	<!--=== Packages category ===-->
	<div class="section become asset-bg rel" id="packages">
		<div class="container">
			<div class="row">
				<div class="">
					<div class="col s12">
						<h2 class="start text-primary center color text-uppercase">
							Choose your country <br> to continue 
						</h2>
						
						<div class="input-field col s7 offset-s1 mb-adjust m2 count offset-m5">
							<select id="country">
								<option value="" disabled selected>Select Country</option>
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
					
						<div class="row hidden-xs">
							<div class="col s12 m6 l3">
								<div class="card-panel pry-bg-color" id='ng1'>
									<span class="white-text">
										<h4 class="center">PMN1</h4>
										<h5 class="amount center"> &#8358;250,000 </h5>
					
										<ul class="points">
											<li> 5 Weaners (4 Gilts, 1 Boar)</li>
											<li>Feed till Maturation</li>
											<li>Vaccination</li>
											<li>Return on Capital -
												<b>20%</b>
											</li>
											<li>Contract Period - 11 mths</li>
										</ul>
									</span>
									<div class="center">
										<button class="btn btn-select">select</button>
									</div>
								</div>
							</div>
					
							<div class="col s12 m6 l3">
								<div class="card-panel pry-bg-color" id="ng2">
									<span class="white-text">
										<h4 class="center">PMN2</h4>
										<h5 class="amount center">&#8358;500,000 </h5>
					
										<ul class="points">
											<li> 10 Weaners (8 Gilts, 2 Boars)</li>
											<li>Feed till Maturation</li>
											<li>Vaccination</li>
											<li>Return on Capital -
												<b>25%</b>
											</li>
											<li>Contract Period - 11 mths</li>
										</ul>
									</span>
									<div class="center">
										<button class="btn btn-select">select</button>
									</div>
								</div>
							</div>
					
							<div class="col s12 m6 l3">
								<div class="card-panel pry-bg-color" id="ng3">
									<span class="white-text">
										<h4 class="center">PMN3</h4>
										<h5 class="amount center">&#8358;1,000,000</h5>
					
										<ul class="points">
											<li> 20 Weaners (16 Gilts, 4 Boars)</li>
											<li>Feed till Maturation</li>
											<li>Vaccination</li>
											<li>Return on Capital -
												<b>30%</b>
											</li>
											<li>Contract Period - 11 mths</li>
										</ul>
									</span>
									<div class="center">
										<button class="btn btn-select">select</button>
									</div>
								</div>
							</div>
					
							<div class="col s12 m6 l3">
								<div class="card-panel pry-bg-color" id="ng4">
									<span class="white-text">
										<h4 class="center">PMN4</h4>
										<h5 class="amount center">&#8358;5,000,000</h5>
					
										<ul class="points">
											<li> 100 Weaners (80 Gilts, 20 Boars)</li>
											<li>Feed till Maturation</li>
											<li>Vaccination</li>
											<li>Return on Capital -
												<b>35%</b>
											</li>
											<li>Contract Period - 11 mths</li>
										</ul>
									</span>
									<div class="center">
										<button class="btn btn-select">select</button>
									</div>
								</div>
							</div>
					
						</div>

						<div class="row mobile visible-xs">
							<div class="col s12">
								<div class="col s12 pad0 mag-d-10">
									<div class="info-card" id="ng1a">

										<h4 class="">
											<span class="p-price">&#8358;250,000</span>

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

								<div class="col s12 pad0 mag-d-10">
									<div class="info-card" id="ng2a">

										<h4 class="">
											<span class="p-price">&#8358;500,000</span>

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

								<div class="col s12 pad0 mag-d-10">
									<div class="info-card" id="ng3a">

										<h4 class="">
											<span class="p-price">&#8358;1,000,000</span>

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

								<div class="col s12 pad0 mag-d-10">
									<div class="info-card" id="ng4a">

										<h4 class="">
											<span class="p-price">&#8358;5,000,000</span>

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
					
						<div class="row hidden-xs">
							<div class="col s12 m6 l3">
								<div class="card-panel pry-bg-color" id="gh1">
									<span class="white-text">
										<h4 class="center">PMG1</h4>
										<h5 class="amount center">&#8373;2,000</h5>
					
										<ul class="points">
											<li> 3 Weaners (2 Gilts, 1 Boar)</li>
											<li>Feed till Maturation</li>
											<li>Vaccination</li>
											<li>Return on Capital -
												<b>20%</b>
											</li>
											<li>Contract Period - 11 mths</li>
										</ul>
									</span>
									<div class="center">
										<button class="btn btn-select">select</button>
									</div>
								</div>
							</div>
					
							<div class="col s12 m6 l3">
								<div class="card-panel pry-bg-color" id="gh2">
									<span class="white-text">
										<h4 class="center">PMG2</h4>
										<h5 class="amount center">&#8373;5,000</h5>
					
										<ul class="points">
											<li> 12 Weaners (9 Gilts, 3 Boars)</li>
											<li>Feed till Maturation</li>
											<li>Vaccination</li>
											<li>Return on Capital -
												<b>25%</b>
											</li>
											<li>Contract Period - 11 mths</li>
										</ul>
									</span>
									<div class="center">
										<button class="btn btn-select">select</button>
									</div>
								</div>
							</div>
					
							<div class="col s12 m6 l3">
								<div class="card-panel pry-bg-color" id="gh3">
									<span class="white-text">
										<h4 class="center">PMG3</h4>
										<h5 class="amount center">&#8373;10,000</h5>
					
										<ul class="points">
											<li> 21 Weaners (16 Gilts, 5 Boars)</li>
											<li>Feed till Maturation</li>
											<li>Vaccination</li>
											<li>Return on Capital -
												<b>30%</b>
											</li>
											<li>Contract Period - 11 mths</li>
										</ul>
									</span>
									<div class="center">
										<button class="btn btn-select">select</button>
									</div>
								</div>
							</div>
					
							<div class="col s12 m6 l3">
								<div class="card-panel pry-bg-color" id="gh4">
									<span class="white-text">
										<h4 class="center">PMG4</h4>
										<h5 class="amount center">&#8373;50,000</h5>
					
										<ul class="points">
											<li> 90 Weaners (70 Gilts, 20 Boars)</li>
											<li>Feed till Maturation</li>
											<li>Vaccination</li>
											<li>Return on Capital -
												<b>35%</b>
											</li>
											<li>Contract Period - 11 mths</li>
										</ul>
									</span>
									<div class="center">
										<button class="btn btn-select">select</button>
									</div>
								</div>
							</div>
					
						</div>

						<div class="row mobile visible-xs">
							<div class="col s12">
								<div class="col s12 pad0 mag-d-10">
									<div class="info-card" id="gh1a">

										<h4 class="">
											<span class="p-price">&#8373;2,000</span>

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

								<div class="col s12 pad0 mag-d-10">
									<div class="info-card" id="gh2a">

										<h4 class="">
											<span class="p-price">&#8373;5,000</span>

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

								<div class="col s12 pad0 mag-d-10">
									<div class="info-card" id="gh3a">

										<h4 class="">
											<span class="p-price">&#8373;10,000</span>

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

								<div class="col s12 pad0 mag-d-10">
									<div class="info-card" id="gh4a">

										<h4 class="">
											<span class="p-price">&#8373;50,000</span>

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

	<!--=== Partners Videos ===-->
	<div class="section asset-bg" id="video-container">
		<div class="container">
			<div class="row">
				<div class="col s12 m10 offset-m1 vid-cont">
					<div class="col s12 m6 pad0">
						<div class="video-container">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLu5T_YFgM7LnsNiJ0yG3OKKqI-dai9uGn&amp;showinfo=0&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col s12 m6 pad0 white watis">
						<div class="center">
							<h4>What is <br class="hidden-xs"> PorkMoney?</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--=== end of Partners Videos ===-->

<!--=== Testimonies ===-->
<div class="section asset-bg" id="testimonies">
	<div class="container">
		<div class="row">
			<h2 class="start ls center color text-uppercase"> 
				<div class="center cen-img">
					<img src="img/Partner-stories-icon.png" alt="stories-icon">
				</div>
				Partner Stories 
				<div style="line-height: .5;"><hr class="borline"></div>
			</h2>
		</div>
	</div>

	<div class="stories pry-bg-color">
		<div class="container">
			<div class="row">
				
				<div class="carousel">
					<a class="carousel-item" href="#one!">
						<div class="col s12 m8 offset-m2 white stc">
							<div class="stories-content text-justify">
								&quot; I did not want to believe at first because there are many sites always 
								talking about investment this, investment that. But calling one of the customer 
								relations agent put my concerns to rest. Since I became a partner, my returns is 
								growing everyday . I am happy. &quot;
							</div>
							<h4 class="testifier center">Mrs. Aderibigbe</h4>
						</div>
					</a>
					<a class="carousel-item" href="#two!">
						<div class="col s12 m8 offset-m2 white stc">
							<div class="stories-content text-justify">
								&quot; I am always looking for opportunities to earn more money. As a single working 
								guy in Canada who hopes to relocate back to Nigeria, this give an avenue to save more 
								money for when I make the move. &quot;
							</div>
							<h4 class="testifier center">Tunji Akilapa</h4>
						</div>
					</a>
					<a class="carousel-item" href="#three!">
						<div class="col s12 m8 offset-m2 white stc">
							<div class="stories-content text-justify">
								&quot; When I first saw the ROI rates, I thought. This? In Nigeria? Then I saw the Ebuka 
								endorsement & I thought, “maybe they are legit oo.” So I visited their office. They even 
								paid for the Uber ride that took me & brought me back. After seeing for myself, I had to 
								cash in. &quot;
							</div>
							<h4 class="testifier center">Mr. Tony Oruma</h4>
						</div>
					</a>
					<a class="carousel-item" href="#four!">
						<div class="col s12 m8 offset-m2 white stc">
							<div class="stories-content text-justify">
								&quot; All I will say is, I am happy my brother told me about this. Since I became a partner, 
								all I can think of is how fast I can't wait for 11 months so I can smile to the bank &quot;
							</div>
							<h4 class="testifier center">Chuks</h4>
						</div>
					</a>
					<a class="carousel-item" href="#five!">
						<div class="col s12 m8 offset-m2 white stc">
							<div class="stories-content text-justify">
								&quot; It's really funny how we ignore opportunities in this country. It never occurred to me 
								how much potential pig farming had. When everyone knows agriculture was how most people made 
								it big back in the day. After reading through the site, visiting their office & talking to them, 
								I knew I didn't want to miss this. &quot;
							</div>
							<h4 class="testifier center">Ken Diri</h4>
						</div>
					</a>
				</div>      
			</div>
		</div>
	</div>
</div>
<!--=== end of Testimonies ===-->

<!--=== Partners and Newspaper ===-->
<div class="section white asset-bg pad-d-0" style="background: #fff;" id="partners-media">
	<div class="container">
		<div class="row p-med">
			<div class="col s12 m3">
				<h2 class="start ls color mag0 text-uppercase"> 
					Our <br class="hidden-xs"> Partners 
					<div style="line-height: .5;"><hr class="borline"></div>
				</h2>
			</div>
			<div class="col s10 offset-s1 m3 p-logos f-img">
				<img src="img/agric_insurance.png" alt="NAIC" class="">
			</div>
			<div class="col s10 offset-s1 m3 p-logos f-img">
				<img src="img/assoc.png" alt="oke-aro" class="">
			</div>
			<div class="col s10 offset-s1 m3 p-logos">
				<img src="img/ashanti-pigs.png" alt="P.I.G.S" class="">
			</div>
		</div>

		<div class="as-seen row mag0 hidden-xs">
			<h2 class="start ls center color text-uppercase"> 
				As seen on 
				<div style="line-height: .5;"><hr class="borline"></div>
			</h2>
		</div>
	</div>
	
	<div class="section min-black">
		<div class="container">
			<div class="row">

				<div class="as-seen row mag0 visible-xs">
					<h2 class="start ls center color text-uppercase white-text"> 
						As seen on 
						<div style="line-height: .5;"><hr class="borline white"></div>
					</h2>
				</div>

				<div class="col s6 m3 news-img">
					<img src="img/news/vanguardlogo.png" alt="vanguard">
				</div>

				<div class="col s6 m3 news-img">
					<img src="img/news/business_day.png" alt="business_day">
				</div>

				<div class="col s6 m3 news-img">
					<img src="img/news/logox.png" alt="punch">
				</div>

				<div class="col s6 m3 news-img">
					<img src="img/news/guardian_logo.png" alt="guardian">
				</div>
			</div>
		</div>
	</div>
</div>

<!--=== end of Partners and Newspaper ===-->


@endsection

@section('scripts')
	<script src="js/modernizr.js"></script>
	<script src="js/stepsForm.js"></script>
	<script src="js/classie.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
	<script src="sliderengine/initslider-1.js"></script>
	<script src="js/instafeed.js"></script>
	<!-- <script src="js/custom-instafeed.js"></script> -->

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