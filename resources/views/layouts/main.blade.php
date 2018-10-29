<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#000000">
    <meta http-equiv="cache-control" content="no-cache" />
    <!-- browser cache control -->
    <meta http-equiv="cache-control" content="max-age=0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="-1">
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 11:00:00 GMT">
	<meta http-equiv="pragma" content="no-cache">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title)? $title : "PorkMoney" }}</title>
	<meta name="keyword" content="porkmoney, pork money, pork investment, pig investment">
	<meta name="author" content="PorkMoney">
	<meta name="description" content="Pork: The future of livestock farming">
	<link rel="shortcut icon" href=" favicon.png">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" media="screen" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" media="screen" rel="stylesheet">
	<link href="css/materialize.css?v=1.5" media="screen" rel="stylesheet" type="text/css">
    <link href="sliderengine/amazingslider-1.css" media="screen" rel="stylesheet" type="text/css" >
	<link href="css/fonts.css" media="screen" rel="stylesheet" type="text/css">
	<link href="css/component.css?v=1.1" media="screen" rel="stylesheet" type="text/css" >
	<link href="css/normalize.css" media="screen" rel="stylesheet" type="text/css" >
	<link href="css/styles.css?v=1.2.4" media="screen" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" media="screen" rel="stylesheet">
	@yield('styles')

	<style>
		@media(min-width: 601px){
			li.login{
				position: absolute;
				right: -15%;
			}
		}
		@media(max-width: 992px){
			.icons.mpd .col.s1{
                margin-left: 0;
			}
			.icon_social.cards{
				margin-left: -10px;
			}
            .discovery.col.s12{
                padding: 0;
			}
			.ml-10, .discovery.col.s12{
                margin-left: 0 !important;
			}
			.mpd.icons {
				margin-top: 30px;
			}
			.login-mobile{
				position: absolute;
				bottom: 10vh;
			}
		}
		
	</style>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122774426-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-122774426-1');
		</script>

		<!-- Global site tag (gtag.js) - Google AdWords: 796473401 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-796473401"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'AW-796473401');
		</script>

		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '245223152693783');
		fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=245223152693783&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->


</head>

<body>
	<!-- <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
		<a class="btn-floating red" href="#home">
			<i class="material-icons">navigation</i>
		</a>
	</div> -->
	<!-- Menu -->
	<nav class="grey darken-4" role="navigation">
		<div class="nav-wrapper container">
			<a class="brand-logo" href="/" id="logo-container">
				<img alt="PorkMoney" src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/img/logo-black.png">
			</a>
			<ul class="right hide-on-med-and-down">
				<!-- <li>
					<a href="#home">HOME</a>
				</li> -->
				
				<li>
					<a href="/about">ABOUT</a>
				</li>
				<li>
					<a href="/#asset4">HOW IT WORKS</a>
				</li>
				<li>
					<a href="/biocycle-project">BIOCYCLE PROJECT</a>
				</li>
				<li>
					<a href="/faq">FAQ</a>
				</li>				
				<li>
					<a href="/blog">BLOG</a>
				</li>
				<li class="pckg-link">
					<a href="/#packages">BECOME A PARTNER</a>
				</li>
				@guest
				<li class="login">
					<a href="{{url('login')}}">LOGIN</a>
				</li>
				@else
				<li>
					<a href="{{url('dashboard')}}">DASHBOARD</a>
				</li>

				<li class="login">
					<a href="{{ route('logout') }}" onclick="
						event.preventDefault();
                        document.getElementById('logout-form').submit();
                    ">
                    	LOGOUT
	                </a>
	            </li>
				@endguest
			</ul>

			<ul class="side-nav" id="nav-mobile">
				@guest
				<li>
					<a href="/login" class="login-mobile">LOGIN</a>
				</li>
				@else
				<li>
					<a href="{{ route('logout') }}" class="login-mobile" onclick="
						event.preventDefault();
                        document.getElementById('logout-form').submit();
                    ">
                    	LOGOUT
	                </a>
	            </li>
				@endguest
				<li>
					<a href="/about">ABOUT</a>
				</li>
				<li>
					<a href="/#asset4">HOW IT WORKS</a>
				</li>
				<li>
					<a href="/biocycle-project">BIOCYCLE PROJECT</a>
				</li>
				<li>
					<a href="/faq">FAQ</a>
				</li>					
				<li>
					<a href="/blog">BLOG</a>
				</li>
				<li class="pckg-link">
					<a href="/#packages">BECOME A PARTNER</a>
				</li>
			</ul>
			<a class="button-collapse" data-activates="nav-mobile" href="#">
				<i class="material-icons toggle-remove">menu</i>
			</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
		</div>
	</nav>
	<!-- end of Menu -->
	@yield('content')
		<!-- Footer -->
	<footer class="page-foo bter blacked" id='contactus'>

		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col s12 m6 l3">
						
						<div class="col s12">
							<div class="col s12 mpd bold">
								<h5 class="bold white-text">CONTACT</h5>
								<p class="start-paragraph-text text-primarycolor center">
									<h5 class="black bold grey-text"> <i class="material-icons">email</i> Email	<br>
										<span class="sp-big be2 pry-color">partners@porkmoney.com</span>
										<span class="sp-big be2 pry-color">inquiry@porkmoney.com</span>
									</h5>
								</p>

								<p class="start-paragraph-text text-primarycolor center">
									<h5 class="black bold grey-text"> <i class="material-icons">public</i> Website	<br>
										<a href="/" class="sp-big be2 pry-color">www.porkmoney.com</a>
									</h5>
								</p>
							</div>
						</div>
					</div>

					<div class="col s12 m6 l3 address">
						<div class="col s12 mpd">
							<div>
								<h5 class="bold grey-text">Nigeria</h5>
								<span>1686 Oladele Olashore street, off Sanusi Fafunwa street, Victoria Island, Lagos</span> <br>
								<span class="sp-big grey-text">+2348173656192&nbsp;|&nbsp;+2348173656194</span>
							</div>
					
							<div>
								<h5 class="bold grey-text">Ghana</h5>
								<span>28, Nii Owoo Avenue, Westlegon, Opposite Oline Heights Hotel, Accra</span> <br>
								<span class="sp-big grey-text">+233558323973&nbsp;|&nbsp;+233558325057</span>
							</div>
						</div>
					</div>

					<div class="col s12 m6 l3">
						<div class="col s12">
							<div class="mpd icons">
								<div class="discovery">

										@if (session('status'))
                          					<div class="alert alert-success" style="color:red">
                              				{{ session('status') }}
                          					</div>
                         					 @endif
									<h5 class="bold white-text" style="margin-top: 3px;">Email US</h5>
									<form action="{{url('contact-us')}}" method="POST">
										@csrf
										<div class="input-field inp-footer col s12">
											<input id="name" name="name" placeholder="Name" required type="text" class="input-footer">
										</div>
										<div class="input-field inp-footer col s12">
											<input id="email" name="email" placeholder="E-mail" required type="email" class="input-footer">
										</div>
										<div class="input-field inp-footer col s12">
											<textarea id="message" name="message" placeholder="Your Message" required type="email" class="input-footer"></textarea>
										</div>
										<div class="center">
											<button class="btn btn-custom btn-sub black-btn" type="submit">SEND MESSAGE</button>
										</div>
									</form>
									
								</div>

								{{-- <div class="discovery col s12">
									<h5 class="pay-text">Payments</h5>
									
									<div class="col s2 m4 discover pad0 ml-10">
										<img alt="visa card" class="icon_social cards" src=" img/icon/visa.svg">
									</div>
									<div class="col s2 m4 discover pad0">
										<img alt="master card" class="icon_social cards" src=" img/icon/master.svg">
									</div>
								</div> --}}
								
							</div>
						</div>
					</div>

					<div class="col s12 m6 l3">
						<div class="col s12">
							<div class="mpd icons">
								<div class="">
									<h5 class="bold white-text" style="margin-top: 3px;">Newsletter</h5>
									@if (session('newsletterpop'))
                          					<div class="alert alert-success" style="color:red">
                              				{{ session('newsletterpop') }}
                          					</div>
                         					 @endif
									<span style="font-size: 14px">
										Subscribe to our newsletter and stay up to date with all events comming straight 
										to your mailbox.
									</span>
									
									{{--@if(!Auth::check())--}}
									<div class="col s12 discover">
										<form action="{{route('newsletter')}}" method="POST">
											@csrf
											<div class="input-field inp-footer col s12">
												<input id="email-footer" name="user_email" placeholder="E-mail" type="email" required class="">
												<!-- <label for="email">Email</label> -->
											</div>
											<div class="center">
												<button class="btn btn-custom btn-sub black-btn">Submit</button>
											</div>
										</form>
									</div>
									{{--@endif--}}
								</div>
								
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		</footer>
		<div class="footer-copyright min-black">
			<div class="container">
				<div class="row mag0">
					<div class="col s8 m4">
						<a class="grey-text"><span class="hidden-xs t-c">Copyright</span> &copy; <span class="pry-color">PORKMONEY</span> 2018</a>
					</div>
					<div class="col s4 m3 center visible-xs">
						<div class="col s4">
							<a href="https://www.instagram.com/porkmoney/" target="_blank">
								<img alt="#" class="icon_social" src=" img/icon/icon_instagrame.svg">
							</a>
						</div>
						<div class="col s4">
							<a href="https://www.facebook.com/PorkmoneyAfrica" target="_blank">
								<img alt="#" class="icon_social" src=" img/icon/icon_facebook.svg">
							</a>
						</div>
						<div class="col s4">
							<a href="https://www.youtube.com/channel/UCOsjSpME4bThj8ieaEEZ2HA" target="_blank">
								<img alt="#" class="icon_social" src=" img/icon/icon_youtube.svg">
							</a>
						</div>
					</div>

					<div class="col s12 m5 center">
						<a class="grey-text" href="/terms">
							<span class="hidden-xs t-c">Terms and Conditions</span>
							<span class="visible-xs t-c">T&C</span>
						</a> 
						<span class="grey-text" style="padding: 0 5px;"> | </span> 
						<a class="grey-text" href="/policy">Privacy Policy</a>
						<span class="grey-text" style="padding: 0 5px;"> | </span> 
						<a class="grey-text" href="/faq">FAQ</a>
					</div>

					<div class="col s12 m3 center hidden-xs">
						<div class="col s2 pull-right left-xs">
							<a href="https://www.instagram.com/porkmoney/" target="_blank">
								<img alt="#" class="icon_social" src=" img/icon/icon_instagrame.svg">
							</a>
						</div>
						<div class="col s2 pull-right left-xs">
							<a href="https://www.facebook.com/PorkmoneyAfrica" target="_blank">
								<img alt="#" class="icon_social" src=" img/icon/icon_facebook.svg">
							</a>
						</div>
						<div class="col s2 pull-right left-xs">
							<a href="https://www.youtube.com/channel/UCOsjSpME4bThj8ieaEEZ2HA" target="_blank">
								<img alt="#" class="icon_social" src=" img/icon/icon_youtube.svg">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	<!-- end of Footer -->
	<!-- Scripts-->
	<script src="js/jquery.min.js"></script>
	<script src="js/materialize.min.js?v=1.3"></script>
	<script src="js/init.js"></script>

	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5af55bd4227d3d7edc2526be/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
	</script>

	{{-- <script>
		$('.toggle-remove').click(function () {
			$('.toggle-remove').toggleClass('remove-icon')
			if ($(window).width() <= 992) {
				$('.toggle-remove').text('menu');
				$('.remove-icon').text('close')
			}
		})
	</script> --}}

	<!-- end of Scripts-->

	@yield('scripts')
	
</body>

</html>

</html>