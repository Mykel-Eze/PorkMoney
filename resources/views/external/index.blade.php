@extends('layouts.main')

@section('styles')
<style>

	
	nav a, nav ul a{
		color: black;
	}
	
	.info-card li.mid{
		padding: 0 15px;
		border: 2px solid;
		-webkit-border-image: url(//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/line.png) 5 stretch;
		-o-border-image: url(//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/line.png) 5 stretch;
		border-image: url(//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/line.png) 5 stretch;
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
		border-width: 0 72px 58px 0;
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
	.amazingslider-nav-1{
		bottom: -15px !important;
		right: 0px !important;
		left: auto !important;
	}
		
	
	.video-container{
		padding-bottom: 63%;
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
		height: 100px;
		position: relative;
		opacity: 0.85;
	}
	.section.min-black img.punch-news-logo{
		height: 80px;
		top: 5px;
	}
	.info-card:hover{
		background: linear-gradient(to right top, #FFE5E5, white, #FFE5E5);
	}
	.naic-img-small{
		width: 22px;
	}
	#nigeria .mobile .info-card{
		width: 100%;
		height: 155px;
		background-size: contain; 
		background-repeat: no-repeat;
		text-align: center;
	}
	#ng1a.info-card{
		background-image: url("//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/plan/PLAN-1.png")
	}
	#ng2a.info-card{
		background-image: url("//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/plan/PLAN-2.png")
	}
	#ng3a.info-card{
		background-image: url("//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/plan/PLAN-3.png")
	}
	#ng4a.info-card{
		background-image: url("//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/plan/PLAN-4.png")
	}
	.infograph img{
		width: 100%;
	}
	#infograph{
		padding-bottom: 1px;
	}
	#asset4{
		padding-top: 1px; 
	}
	.bits img{
		width: 130%;
		position: relative;
		left: -16%;
	}
	.safe-info img{
		width: 25%;
	}
	.safe-info p{
		font-size: 1.2rem;
	}
	.safe-info p .green{
		background-color: transparent !important;
		color: green;
		font-weight: bold;
	}
	.safe-info h2{
		font-size: 2rem;
		font-weight: bold;
	}
	.pry-btn-sli{
		background: var(--pry-color);
		color: #fff !important;
	}
	.amazingslider-text-2{
		padding-left: 10px !important;
    	padding-top: 0 !important;
	}
	.red-txt{
		color: red;
	}
	.green-txt{
		color: green;
	}
	.porkoyum-btn{
		background: red;
		color: white !important;
	}
	.w-txt{
		position: absolute;
		width: 80%;
		display: none;
	}
	.nudge-1{
		position: absolute;
		width: 100%;
		left: 0;
		bottom: 0;
		background: black;
		color: white;
		text-align: center;
	}
	.nudge-2{
		position: relative;
		display: block;
		width: 100%;
		left: 0;
		top: -15px;
		background: black;
		color: white;
		text-align: center;
	}
	/* #sidenav-overlay {
		display: none;
	} */
	@media(min-width: 992px){
		.info-card .list-inline .interest{
			padding: 9px 2px;
			position: relative;
			top: -15px;
			font-size: 30px;
		}
		.info-card .package span {
			right: -25px;
			top: 5px;
		}
		.info-card .package{
			border-width: 0 90px 85px 0;
		}
		.info-card .list-inline.mag0 li {
			padding: 0 5px;
		}
		.infograph img{
			width: 80%;
		}
		.amazingslider-wrapper-1 .as-btn-white-medium{
			padding: 15px 22px;
			font-size: 1rem !important;
		}
	}
	@media(min-width: 601px) and (max-width: 992px){
		#nigeria .mobile .info-card{
			background-color: lightgray;
			border-radius: 10% 10% 0 0;
			height: 19vh;
		}
	}
	
	@media(max-width: 600px){
		.vac{
			font-size: .89rem;
		}
		.info-card .list-inline.mag0 li{
			font-size: 0.9rem;
		}
		#nigeria .mobile .info-card{
			height: 18vh;
		}
		
	}
</style>
@endsection

@section('content')
	<!-- Slider -->
	<section class="z-depth-1" id="background-tranparent">
		<div class="" id="home">
			<div class="">

					<!--=== SLIDER ===-->
				 <div id="amazingslider-wrapper-1" class="hidden-xs hidden-tab" style="display:block;position:relative;max-width:100%;height:100%;margin:0 auto;">
					<div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
						<ul class="amazingslider-slides container" style="display:none;">
							
							<li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider3.jpg" alt="slider3"  title="<span class='pry-color'>Introducing Porkmoney</span>" data-description="<span class='pry-color'>the business of pig farming</span>" />
								<a href="#infograph"><button class="as-btn-white-medium pry-btn-sli">LEARN MORE</button></a>
							</li>
							<li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider2.jpg" alt="I&apos;m a PorkMoney Partner" title="I&apos;m a <br> PorkMoney Partner" data-description="Be smart like me" />
								<a href="#packages"><button class="as-btn-white-medium">START NOW</button></a>
							</li>
							{{-- <li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider1.jpg" alt="Farming is the future" title="Farming <br> is the future" data-description="Discover it now" />
								<a href="#packages"><button class="as-btn-white-medium">START NOW</button></a>
							</li> --}}
							<li>
								<a href="/porkoyum"><img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider4.png" alt="" title="" data-description="" /></a>
							</li>
							
						</ul>
						<ul class="amazingslider-thumbnails" style="display:none;">
							<li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider3-tn.png" alt="PorkMoney:" title="PorkMoney:" />
							</li>
							<li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider2-tn.png" alt="I&apos;m a PorkMoney Partner" title="I&apos;m a PorkMoney Partner" />
							</li>
							{{-- <li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider1-tn.png" alt="Farming is the future" title="Farming is the future" />
							</li> --}}
							<li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider4-tn.png" alt="Porkoyum by Porkmoney" title="Porkoyum by Porkmoney" />
							</li>
							
						</ul>
					</div>
					<div class="scroll-btn">
						<a href="#asset4"><img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/scroll-button.png" alt="scroll"></a>
					</div>
				</div>
				<!--=== End of SLIDER ===-->

				<!--=== SLIDER MOBILE ===-->
				<div id="amazingslider-wrapper-2" class="visible-xs hidden-tab" style="display:block;position:relative;max-width:100%;height:100%;margin:0 auto;">
					<div id="amazingslider-2" style="display:initial;position:relative;margin:0 auto;">
						<ul class="amazingslider-slides" style="display:none;">
							<li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider3-mobile.jpg" alt="slider3"  title="<span class='pry-color'>Introducing Porkmoney</span>" data-description="<span class='pry-color'>the business of pig farming</span>" />
								<a href="#infograph"><button class="as-btn-white-medium">LEARN MORE</button></a>
							</li>
							<li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider2-mobile.png" alt="I&apos;m a PorkMoney Partner" title="I&apos;m a <br> PorkMoney Partner" data-description="Be smart like me" />
								<a href="/ebuka"><button class="as-btn-white-medium">START NOW</button></a>
							</li>
							{{-- <li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider1-mobile.png" alt="Farming	is the future" title="Farming <br> is the future" data-description="Discover it now" />
								<a href="/dumelo"><button class="as-btn-white-medium">START NOW</button></a>
							</li> --}}
							<li>
								<a href="/porkoyum"><img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider4-mobile.jpg" alt="" title="" data-description="" /></a>
							</li>
						</ul>
						<ul class="amazingslider-thumbnails" style="display:none;">
							<li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider3-tn.png" />
							</li>
							<li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider1-tn.png" />
							</li>
							{{-- <li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider2-tn.png" />
							</li> --}}
							<li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider4-tn.png" alt="Porkoyum by Porkmoney" title="Porkoyum by Porkmoney" />
							</li>
						</ul>
					</div>
				</div>
				<!--=== End of SLIDER MOBILE ===-->

				<!--=== TABLET SLIDER ===-->
				 <div id="amazingslider-wrapper-3" class="visible-tab" style="display:block;position:relative;max-width:100%;height:100%;margin:0 auto;">
					<div id="amazingslider-3" style="display:block;position:relative;margin:0 auto;">
						<ul class="amazingslider-slides container" style="display:none;">
							<li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/ipad3.png" alt="Introducing porkmoney"  title="<span class='pry-color'>Introducing <br> Porkmoney</span>" data-description="<span class='pry-color'>the business of pig farming</span>" />
								<a href="#packages"><button class="as-btn-white-medium">LEARN MORE</button></a>
							</li>
							<li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/ipad1.png" alt="I&apos;m a PorkMoney Partner" title="I&apos;m a <br> PorkMoney Partner" data-description="Be smart like me" />
								<a href="#packages"><button class="as-btn-white-medium">START NOW</button></a>
							</li>
							{{-- <li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/ipad2.png" alt="Farming	is the future" title="Farming <br> is the future" data-description="Discover it now" />
								<a href="#package"><button class="as-btn-white-medium">START NOW</button></a>
							</li> --}}
							<li>
								<a href="/porkoyum"><img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/ipad4.jpg" alt="" title="" data-description="" /></a>
								
							</li>
						</ul>
						<ul class="amazingslider-thumbnails" style="display:none;">
							<li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider3-tn.png" alt="PorkMoney:" title="PorkMoney:" />
							</li>
							<li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider2-tn.png" alt="I&apos;m a PorkMoney Partner" title="I&apos;m a PorkMoney Partner" />
							</li>
							{{-- <li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider1-tn.png" alt="Farming is the future" title="Farming is the future" />
							</li> --}}
							<li>
								<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/slider4-tn.png" alt="Porkoyum by Porkmoney" title="Porkoyum by Porkmoney" />
							</li>
						</ul>
					</div>
				 </div>
				<!--=== End of TABLET SLIDER ===-->
				

					<div class="video-overlay" id="video-overlay">
						<a class="video-overlay-close">&times;</a>
					</div>

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
					Utilise our pig farming skills to earn as much as 35% in returns with zero effort
					from you
				</div>

				<div class="gt-start">
					<a href="#packages" class="btn btn-started">Get Started</a>
				</div>
			</div>
		</div>
	</section>
	<!--=== end of Short intro section ===-->
	

	<!--=== Infographic section ===-->
	<div class="section asset-bg" id='infograph'>
		<div class="container">
			<div class="row">
				<h2 class="start text-primary center color text-uppercase"> 
					<div class="center cen-img">
						<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/bulb-icon.png" alt="bulb-icon">
					</div>
					What is PorkMoney?
					<div style="line-height: .5;"><hr class="borline"></div>
				</h2>

				<div class="col s12">
					<p class="text-justify">
						We are a pig farming enterprise in West Africa. By farming pigs, we are able to compensate our 
						financial partners with up to 35% returns.  PorkMoney business works like this: we farm pigs till 
						maturation. They are chopped, processed, packaged and sold. 
					</p>
					<p class="text-justify">
						This farming and commerce happen for 11 months. This enables us accrue profits, from which we then 
						compensate partners with 20% - 35% returns on capital.  
					</p>
				</div>

				<div class="col s12 infograph center hidden-xs">
					<img src="img/pictogram.png" alt="infographics">
				</div>

				<div class="col s12 infograph-mobile visible-xs">

					<h2 class="start text-primary center color text-uppercase"> 
						Our Business Model
						<div style="line-height: .5;"><hr class="borline"></div>
					</h2>

					<!--bit 1 -->
					<div class="col s12 bits"> 
						<div class="col s3">
							<img src="img/bit1.png" alt="bit1" style="">
						</div>
						<div class="col s9">
							<div class="text-uppercase pt-text pry-color">Partner</div>
							<p class="mag-db">
								We welcome partnership from individuals
							</p>
						</div>
					</div>
					<!--end of bit 1 -->

					<!--bit 2 -->
					<div class="col s12 bits"> 
						<div class="col s3">
							<img src="img/bit2.png" alt="bit2" style="">
						</div>
						<div class="col s9">
							<div class="text-uppercase pt-text pry-color">Sign Up</div>
							<p class="mag-db">
								Sign up with your details. We set up your porkmoney account
							</p>
						</div>
					</div>
					<!--end of bit 2 -->

					<!--bit 3 -->
					<div class="col s12 bits"> 
						<div class="col s3">
							<img src="img/bit3.png" alt="bit3" style="">
						</div>
						<div class="col s9">
							<div class="text-uppercase pt-text pry-color">Sponsor</div>
							<p class="mag-db">
								Your funds sponsor the breeding of pigs
							</p>
						</div>
					</div>
					<!--end of bit 3 -->

					<!--bit 4-->
					<div class="col s12 bits"> 
						<div class="col s3">
							<img src="img/bit4.png" alt="bit4" style="">
						</div>
						<div class="col s9">
							<div class="text-uppercase pt-text pry-color">We process and sell</div>
							<p class="mag-db">
								We chop, process, package, and sell
							</p>
						</div>
					</div>
					<!--end of bit 4-->

					<!--bit 5-->
					<div class="col s12 bits"> 
						<div class="col s3">
							<img src="img/bit5.png" alt="bit5" style="">
						</div>
						<div class="col s9">
							<div class="text-uppercase pt-text pry-color">We pay you</div>
							<p class="mag-db">
								We pay 20-35% based on your chosen plan
							</p>
						</div>
					</div>
					<!--end of bit 5-->

				</div>
			</div>
		</div>
	</div>
	<!--=== end of Infographic section ===-->

	<!--=== NAIC info ===-->
	 <div class="section asset-bg" id="naic-info">
		 <div class="container">
			 <div class="row">
				 <div class="center safe-info">
					 <h2 class="start text-primary center color">
						Is PorkMoney <span class="pry-color"> safe?</span>
					 </h2>

					 <img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/agric_insurance.png" alt="naic-logo">
					 <p>
						 To protect from livestock loss, PorkMoney pigs are insured by the 
						 <span class="green">Nigerian Agriculture Insurance Corporation (NAIC).</span>
					 </p>
				 </div>
			 </div>
		 </div>
	 </div>
	<!--=== end of NAIC info ===-->


	<!--=== Assets categories ===-->
	<div class="section asset-bg" id='asset4'>
		<div class="container" id="assets">

			<div class="row mg-top-20 hidden-xs">

				<h2 class="start text-primary center color text-uppercase"> 
					<div class="center cen-img hiw">
						<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/how-it-works.png" alt="how-it-works-icon">
					</div>
					How it works 
					<div style="line-height: .5;"><hr class="borline"></div>
				</h2>
				
				<div class="col s12 m6 illustrate-container">
					<div class="illustrate col s5">
						<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/step1.png" alt="step1">
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
						<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/step2.png" alt="step2">
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
						<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/step3.png" alt="step3">
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
						<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/step4.png" alt="step4">
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
						<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/step1a.png" alt="step1">
					</div>
					<div class="mont-font col s10 m12 pad0">
						<div class="center text-uppercase pt-text">Become a Partner</div>
						<p class="mag-db">
							Choose a PorkMoney partner plan that funds the purchase of pigs and feed for their growth.
						</p>
					</div>
				</div>
	
				<div class="col s11 m3 illustrate-container pad0">
					<div class="illustrate col s2 m12">
						<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/step2a.png" alt="step2">
					</div>
					<div class="mont-font col s10 m12 pad0">
						<div class="center text-uppercase pt-text">We do the work</div>
						<p class="mag-db">
							Our team of expert farm handlers cater for the healthy rearing and growth of the pigs.
						</p>
					</div>
				</div>
	
				<div class="col s11 m3 illustrate-container pad0">
					<div class="illustrate col s2 m12">
						<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/step3a.png" alt="step3">
					</div>
					<div class="mont-font col s10 m12 pad0">
						<div class="center text-uppercase pt-text">Processing</div>
						<p class="mag-db">
							The mature pigs are chopped, processed, packaged and sold to wholesalers and retailers.
						</p>
					</div>
				</div>
	
				<div class="col s11 m3 illustrate-container pad0">
					<div class="illustrate col s2 m12">
						<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/step4a.png" alt="step4">
					</div>
					<div class="mont-font col s10 m12 pad0">
						<div class="center text-uppercase pt-text">Return on capital</div>
						<p class="mag-db">
							you earn between 20-35% returns in 11months based on your capital.
						</p>
					</div>
				</div>
	
			</div>
		</div>
	</div>
	<!-- end of Assets categories -->

	<!--=== Infographics Assets categories ===-->
	{{-- <div class="section asset-bg" id='asset4'>
		<div class="container" id="assets">

			<div class="row mg-top-20 hidden-xs">

				
	
			</div>
		</div>
	</div> --}}
	<!-- end of Infographics Assets categories -->

	<!-- 1st Assets categories -->
	<div class="section asset-bg" id="wpf">
		<div class="container" id="">
			<div class="row">

				<div class="row mg-top-20">

				<h2 class="start ls center color text-uppercase"> 
					<div class="center cen-img">
						<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/bulb-icon.png" alt="bulb-icon">
					</div>
					Why pig farming? 
				</h2>

				<h5 class="ls ls-pos">
					Pork is the most commonly consumed meat in the world, $3billion dollars of which is consumed in 
					Ghana and Nigeria. With more than 80% of that being imported.
				</h5>
				
				<div class="col s12 pad0 m10 offset-m1">
					<div class="col s12 m6 illustrate-container">
						<div class="illustrate col s2 pad0">
							<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/Tick-icon.png" class="" alt="point1">
						</div>
						<div class="mont-font col s10 pad0">
							<p class="mag-db">
								To localise revenue generated from pig farming and its processing
							</p>
						</div>
					</div>
		
					<div class="col s12 m6 illustrate-container">
						<div class="illustrate col s2 pad0">
							<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/Tick-icon.png" class="" alt="point2">
						</div>
						<div class="mont-font col s10 pad0">
							<p class="mag-db">
								Pig farming is the most profitable part of livestock farming
							</p>
						</div>
					</div>
		
					<div class="col s12 m6 illustrate-container">
						<div class="illustrate col s2 pad0">
							<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/Tick-icon.png" class="" alt="point3">
						</div>
						<div class="mont-font col s10 pad0">
							<p class="mag-db">
								Pigs have the highest feed to meat ratio of any livestock
							</p>
						</div>
					</div>
		
					<div class="col s12 m6 illustrate-container">
						<div class="illustrate col s2 pad0">
							<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/Tick-icon.png" class="" alt="point4">
						</div>
						<div class="mont-font col s10 pad0">
							<p class="mag-db">
								Because pigs are prolific and resilient with the lowest livestock mortality rate
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
							<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/Nigeria.ico" class="flags nigeria" alt="nigeria">
							<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/Ghana.ico" class="flags ghana" alt="ghana">
						</div>
						{{-- <span class="nudge-1">
							We are currently done with our first phase and not receiving any more partners, 
							but you can still fill out the form and when we begin the next chapter we would be in touch. 
						</span> --}}
					</div>

					<!-- Nigeria Packages -->
					<div id="nigeria" class="col s12 hidden country">
					

						<div class="row mobile">
							<div class="col s12">
								<div class="col s12 m6 pad0-xs mag-d-10">
									<div class="info-card" id="ng1a">
										
										<button class="btn btn-sel">select</button>
										
									</div>
								</div>

								<div class="col s12 m6 pad0-xs mag-d-10">
									<div class="info-card" id="ng2a">

										<button class="btn btn-sel">select</button>
										
									</div>
								</div>

								<div class="col s12 m6 pad0-xs mag-d-10">
									<div class="info-card" id="ng3a">

										<button class="btn btn-sel">select</button>
										
									</div>
								</div>

								<div class="col s12 m6 pad0-xs mag-d-10">
									<div class="info-card" id="ng4a">

										<button class="btn btn-sel">select</button>
										
									</div>
								</div>

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

										<button class="btn btn-sel">select</button>
										
									</div>
								</div>

								<div class="col s12 m6 pad0-xs mag-d-10">
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

										<button class="btn btn-sel">select</button>
										
									</div>
								</div>

								<div class="col s12 m6 pad0-xs mag-d-10">
									<div class="info-card" id="gh3a">

										<h4 class="">
											<span class="p-price">&#8373;20,000</span>

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

										<button class="btn btn-sel">select</button>
										
									</div>
								</div>

								<div class="col s12 m6 pad0-xs mag-d-10">
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

										<button class="btn btn-sel">select</button>
										
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
	<div class="section hidden form" id='form' style="position: relative">
		
		<span class="nudge-2">
			We are currently done with our first phase and not receiving any more partners, 
			but you can still fill out the form and when we begin the next chapter we would be in touch. 
		</span>

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

						            @if(count($errors)>0)
                                    @foreach($errors->all() as $error)
                                    <p style="color:red">{{$error}}</p>
                                    @endforeach
                                    @endif

						<form id="theForm" class="simform" autocomplete="off" method="post" action="{{route('join')}}">
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
									<li>
										<span>
											<label for="q4">Password</label>
										</span>
										<input id="q4" name="password" type="password" />
									</li>
									<li>
										<span>
											<label for="q5">Confirm Password</label>
										</span>
										<input id="q5" name="password_confirmation" type="password" />
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

							<div class="center w-txt">
								<h5 class="center in-view">Application will be kept in view</h5>
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
				<h2 class="start ls center color text-uppercase"> 
					<div class="center cen-img">
						<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/bulb-icon.png" alt="stories-icon">
					</div>
						Media 
					<div style="line-height: .5;"><hr class="borline"></div>
				</h2>
				<div class="col s12 m10 offset-m1 hidden-xs">{{-- vid-cont --}}
					{{-- <div class="col s12 m4">
						<div class="video-container">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLu5T_YFgM7LnsNiJ0yG3OKKqI-dai9uGn&amp;showinfo=0&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div> --}}

					<div class="col s12 m4">
						<div class="video-container">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/CcwztE7rhHE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>

					<div class="col s12 m4">
						<div class="video-container">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/8BUc60nbYcI?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>

					<div class="col s12 m4">
						<div class="video-container">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/fsU1GTMFN_c?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
					{{-- <div class="col s12 m6 pad0 white watis">
						<div class="center">
							<h4>What is <br class="hidden-xs"> PorkMoney?</h4>
						</div>
					</div> --}}
				</div>

				<div class="col s12 visible-xs vid-wrap">
					<div id="amazingslider-wrapper-vid" style="display:block;position:relative;max-width:900px;margin:0px auto 56px;">
						<div id="amazingslider-vid" style="display:block;position:relative;margin:0 auto;">
							<ul class="amazingslider-slides" style="display:none;">
								<li><a href="https://www.youtube.com/embed/CcwztE7rhHE" class="html5lightbox"><img src="sliderengine-mobile-vid/CcwztE7rhHE.jpg" /></a>
								</li>
								<li><a href="https://www.youtube.com/embed/8BUc60nbYcI" class="html5lightbox"><img src="sliderengine-mobile-vid/8BUc60nbYcI.jpg" /></a>
								</li>
								<li><a href="https://www.youtube.com/embed/fsU1GTMFN_c" class="html5lightbox"><img src="sliderengine-mobile-vid/fsU1GTMFN_c.jpg" /></a>
								</li>
							</ul>
							<ul class="amazingslider-thumbnails" style="display:none;">
								<li><img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/sliderengine-mobile-vid/CcwztE7rhHE-tn.jpg" /></li>
								<li><img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/sliderengine-mobile-vid/8BUc60nbYcI-tn.jpg" /></li>
								<li><img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/sliderengine-mobile-vid/fsU1GTMFN_c-tn.jpg" /></li>
							</ul>
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
					<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/Partner-stories-icon.png" alt="stories-icon">
				</div>
				Partner Stories 
				<div style="line-height: .5;"><hr class="borline"></div>
			</h2>
		</div>
	</div>

	<div class="stories">
		<div class="container">
			<div class="row">
				
				<div class="carousel">
					<a class="carousel-item" href="#one!">
						<div class="col s12 m8 offset-m2 white stc">
							<div class="stories-content text-justify">
								&quot; You guys are doing a good job. This agric business is something the government should pay attention 
								to. I like the format. And as someone whose parents farm, I understand the business and how lucrative this 
								could be. I really recommend to everyone to join. &quot;
							</div>
							<h4 class="testifier center">Femi Oyeyemi</h4>
						</div>
					</a>
					<a class="carousel-item" href="#two!">
						<div class="col s12 m8 offset-m2 white stc">
							<div class="stories-content text-justify">
								&quot; PorkMoney! PorkMoney!! PorkMoney!!! This is pretty cool, you guys. Leaving funds in my account 
								has always been an issue for me. I have always been a Shares and fixed deposit kind of gal. But you guys 
								are changing the game and giving people like me an alternative. Thank you. &quot;
							</div>
							<h4 class="testifier center">Hannah Hamilton</h4>
						</div>
					</a>
					<a class="carousel-item" href="#three!">
						<div class="col s12 m8 offset-m2 white stc">
							<div class="stories-content text-justify">
								&quot;Hmm! So, I feel like this doesn't get talked about enough. I discovered you guys while working on 
								an article. This is a smart idea that deserves more attention. I will definitely be partnering with you 
								guys for a long time. &quot;
							</div>
							<h4 class="testifier center">Godwin Oburuoga</h4>
						</div>
					</a>
					<a class="carousel-item" href="#four!">
						<div class="col s12 m8 offset-m2 white stc">
							<div class="stories-content text-justify">
								&quot; See? We can do good stuff in this country. Imagine this type of business replicated at the federal 
								level. Kudos! To you guys. You have a believer in me. &quot;
							</div>
							<h4 class="testifier center">Emmanuel Okon</h4>
						</div>
					</a>
					{{-- <a class="carousel-item" href="#five!">
						<div class="col s12 m8 offset-m2 white stc">
							<div class="stories-content text-justify">
								&quot; It's really funny how we ignore opportunities in this country. It never occurred to me 
								how much potential pig farming had. When everyone knows agriculture was how most people made 
								it big back in the day. After reading through the site, visiting their office and talking to them, 
								I knew I didn't want to miss this. &quot;
							</div>
							<h4 class="testifier center">Ken Diri</h4>
						</div>
					</a> --}}
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
				<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/agric_insurance.png" alt="NAIC" class="">
			</div>
			<div class="col s10 offset-s1 m3 p-logos f-img">
				<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/assoc.png" alt="oke-aro" class="">
			</div>
			<div class="col s10 offset-s1 m3 p-logos">
				<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/ashanti-pigs.png" alt="P.I.G.S" class="">
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
					<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/news/vanguard.png" alt="vanguard">
				</div>

				<div class="col s6 m3 news-img">
					<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/news/business.png" alt="business_day">
				</div>

				<div class="col s6 m3 news-img">
					<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/news/punch.png" alt="punch" class="punch-news-logo">
				</div>

				<div class="col s6 m3 news-img">
					<img src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/news/guardian.png" alt="guardian">
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
	<script src="sliderengine/initslider-1.js?v=1.1.6"></script>
	<script src="sliderengine/initslider-2.js?v=1.1.5"></script>
	<script src="sliderengine/initslider-3.js?v=1.1.5"></script>
	{{-- <script src="sliderengine/initslider-4.js?v=1.1.5"></script> --}}
	<script src="js/instafeed.js"></script>
	<!-- <script src="js/custom-instafeed.js"></script> -->

	<script>
		$(document).ready(function () {
			$('.materialboxed').materialbox();
			$('.parallax').parallax();
			$('.modal').modal();
			$('select').material_select();
			$('.tabs').tabs({swipeable: true});
			$('.carousel').carousel({ full_width: true, indicators: true, duration: 5000});
			window.setInterval(function () { $('.carousel').carousel('next') }, 10000);
			$('#form').hide();
			$('.pack1, .pack2, .pack3, .pack4, .pack5, .pack6, .pack7, .pack8').hide();
		
		});

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

		if ($('#amazingslider-wrapper-1 .amazingslider-title-1:contains("Introducing")')){
				$('.amazingslider-title-1').addClass("pry-color");
			}


		$(window).scroll(function(){
			$('nav.grey').toggleClass('fixed-nav', $(this).scrollTop() > 50);
		});

		$('#country').change(function () {
			alert("We are currently done with our first phase and not receiving any more partners, but you can still fill out the form and when we begin the next chapter we would be in touch.");
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
				messageEl.innerHTML = 'Registration Successful...';
				classie.addClass( messageEl, 'show' );
				//You can now login
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