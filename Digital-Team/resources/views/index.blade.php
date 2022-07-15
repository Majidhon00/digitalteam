<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Digital Team </title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
<!--
Template 2075 Digital Team

http://www.tooplate.com/view/2075-digital-team

-->
	<style>
		.smoothScroll
		{
			text-transform: uppercase;
		}

        /* Custom dropdown */
		/*body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            margin: 0 auto;
        }*/

		.u18-languagewrapper {
			text-align: center;
			width: 130px;
		}

		ul {
			list-style: none;
			position: relative;
			padding: 0;
			margin: 0 auto;
		}

		ul li {

		}

		ul li a {
			display: block;
			width: 100%;
			text-decoration: none;
			border-right: none;
			z-index: 10;
			position: relative;
		}

		ul li div {
			width: 130px;
			display: block;
			position: absolute;
			left: 0;
			background-color: #333;
			text-align: center;
			z-index: 5;
			visibility: hidden;
			opacity: 0;
			pointer-events: none;
		}

		ul li:hover div {
			visibility: visible;
			opacity: 1;
			pointer-events: auto;
		}

		.language {
			font-size: 1.1em;
			line-height: 1.6em;
			text-decoration: none;
			color: #324B5C;
			font-weight: 300;
			text-align: center;
		}

		.language:hover {
			text-decoration: underline;
		}

		.u18-languagesub {
			padding: 6px 0;
			-moz-transition: all 0.4s ease-in-out;
			-o-transition: all 0.4s ease-in-out;
			-webkit-transition: all 0.4s ease-in-out;
			transition: all 0.4s ease-in-out;
		}

		.u18-languagesub:before {
			content:"\A";
			border-left: 12px solid transparent;
			border-right: 12px solid transparent;
			border-bottom: 12px solid #E1E8EB;
			position: absolute;
			top: -10px;
			left: 56px;
		}

		.u18-languagetrigger {
			font-size: 1.2em;
			line-height: 1.2em;
			font-weight: 300;
			padding: 20px 0;
			color: #324B5C;
		}
		.u18-languagewrapper {float: right; position: relative; -webkit-perspective: 1000px; perspective: 1000px; -webkit-perspective-origin: 50% 200%; perspective-origin: 50% 200%;}
		.u18-languagewrapper:first-child {}
		.u18-languagewrapper button {width: 120px; height: 65px; background: #fff; transition: all .0s ease-out; padding: 0; outline: 0; border: 2px solid #fff; font-size: 16px; line-height:  1.3; font-weight: normal; text-transform:  normal; color: #324B5C; cursor: pointer; margin: 0; float: left;}
		.u18-languagewrapper button:hover, .u18-languagewrapper button.u18-active {background: #ffffff;}
		.u18-languagewrapper:before {background: url("http://clients.artandcodestudio.com/oracle/u18-language/globe.png") no-repeat 26px 23px; margin-right: 10px;
			vertical-align: middle;}
		.globe img{margin-bottom: -8px; padding-right: 7px;}
    </style>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-circle">
       <div class="sk-circle1 sk-circle"></div>
       <div class="sk-circle2 sk-circle"></div>
       <div class="sk-circle3 sk-circle"></div>
       <div class="sk-circle4 sk-circle"></div>
       <div class="sk-circle5 sk-circle"></div>
       <div class="sk-circle6 sk-circle"></div>
       <div class="sk-circle7 sk-circle"></div>
       <div class="sk-circle8 sk-circle"></div>
       <div class="sk-circle9 sk-circle"></div>
       <div class="sk-circle10 sk-circle"></div>
       <div class="sk-circle11 sk-circle"></div>
       <div class="sk-circle12 sk-circle"></div>
    </div>
</div>

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Digital Team</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="smoothScroll">@lang('lang.HOME')</a></li>
				<li><a href="#work" class="smoothScroll">@lang('lang.WORK')</a></li>
				<li><a href="#about" class="smoothScroll">@lang('lang.ABOUT')</a></li>
				<li><a href="#team" class="smoothScroll">@lang('lang.TEAM')</a></li>

				<li><a href="#portfolio" class="smoothScroll">@lang('lang.PORTFOLIO')</a></li>
				<li><a href="#pricing" class="smoothScroll">@lang('lang.PRICING')</a></li>
				<li><a href="#contact" class="smoothScroll">@lang('lang.CONTACT')</a></li>
				<li class="18-languagewrappe smoothScroll">

					<a href="#" class="u18-languagetrigger"><span class="globe"><img src="http://clients.artandcodestudio.com/oracle/u18-language/globe.png"></span>@lang('lang.Language')</a>
					<div class="u18-languagesub">
						<ul>
							<li><a href="{{ url('/en')}}" class="language">@lang('lang.English')</a></li>
							<li><a href="{{ url('/uz')}}" class="language">@lang('lang.Uzbek')</a></li>
							<li><a href="{{ url('/fr')}}" class="language">@lang('lang.French')</a></li>
							<li><a href="{{ url('/ar')}}" class="language">@lang('lang.Arabic')</a></li>
							<li><a href="{{ url('/tr')}}" class="language">@lang('lang.Turkey')</a></li>
							<li><a href="{{ url('/ru')}}" class="language">@lang('lang.Russian')</a></li>
							<li><a href="{{ url('/ko')}}" class="language">@lang('lang.Korean')</a></li>
							<li><a href="{{ url('/tk')}}" class="language">@lang('lang.Turkmen')</a></li>
							<li><a href="{{ url('/zh')}}" class="language">@lang('lang.chinese')</a></li>
							<li><a href="{{ url('/fa')}}" class="language">@lang('lang.Persian')</a></li>
							<li><a href="{{ url('/es')}}" class="language">@lang('lang.Spanish')</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>

	</div>
</section>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>@lang('lang.accepted_if')</h3>
				<h1>@lang('lang.Digital')</h1>
				<hr>
				<a href="#work" class="smoothScroll btn btn-danger">@lang('lang.What_we_do')</a>
				<a href="#contact" class="smoothScroll btn btn-default">@lang('lang.Talk_to_us')</a>
			</div>
		</div>
	</div>		
</section>

<!-- work section -->
<section id="work">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>01</strong>
					<h1 class="heading bold">@lang('lang.What_we_do')</h1>
					<hr>
				</div>
			</div>
			@foreach($WhatWeDo as $row)
				<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<i class="{{$row->icon}} medium-icon"></i>
						<h3>{{$row->title}}</h3>
						<hr>
						<p>{{substr($row->content,0,100)}}</p>
				</div>
			@endforeach
		</div>
	</div>
</section>

<!-- about section -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<strong>02</strong>
					<h1 class="heading bold">@lang('lang.OUR_AGENCY')</h1>
					<hr>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<img src="{{ Voyager::image($OurAgency->img)}}" class="img-responsive" alt="">
			</div>
			<div class="col-md-6 col-sm-12">
				<h3 class="bold">{{$OurAgency->title1}}</h3>
				<h1 class="heading bold">{{$OurAgency->title2}}</h1>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">

					<li class="active"><a href="#design" aria-controls="design" role="tab" data-toggle="tab">{{$OurContentid->name}}</a></li>

					@foreach($OurContent as $row)
					<li><a href="#{{$row->name}}" aria-controls="mobile" role="tab" data-toggle="tab">{{$row->name}}</a></li>
					@endforeach
				</ul>
				<!-- tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="design">
						<p>{{substr($OurContentid->content,0,450)}}</p>

					</div>
					@foreach($OurContent as $row)
					<div role="tabpanel" class="tab-pane" id="{{$row->name}}">
						<p>{{$row->content}}</p>
					</div>
					@endforeach

				</div>
			</div>
		</div>
	</div>
</section>

<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>03</strong>
					<h1 class="heading bold">@lang('lang.TALENTED_TEAM')</h1>
					<hr>
				</div>
			</div>
			@foreach($teams as $team)
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="{{ Voyager::image($team->Image)}}" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>{{$team->name}}</h4>
							<h3>{{$team->developer}}</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="{{$team->facebook}}" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

<!-- portfolio section -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>04</strong>
					<h1 class="heading bold">@lang('lang.OUR_PORTFOLIO')</h1>
					<hr>
				</div>
				<!-- ISO section -->
				<div class="iso-section">
					<ul class="filter-wrapper clearfix">
                   		 <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
						@foreach($types as $type)
							<li><a href="#" class="opc-main-bg" data-filter=".{{$type->type}}">{{$type->type}}</a></li>
						@endforeach
               		</ul>
               		<div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
               			<div class="iso-box-wrapper col4-iso-box">


							@foreach($partfollios as $partfollio)

							<div class="iso-box {{$partfollio->tyupes}} col-lg-4 col-md-4 col-sm-6">
               				 	<a href="{{ Voyager::image($partfollio->image)}}" data-lightbox-gallery="portfolio-gallery"><img src="{{ Voyager::image($partfollio->image)}}" alt="portfolio img"></a>
               				 </div>
							@endforeach
               			</div>
               		</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- pricing section -->
<section id="pricing">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<strong>05</strong>
					<h1 class="heading bold">@lang('lang.OUR_PRICING')</h1>
					<hr>
				</div>
			</div>
			@foreach($pricings as $pricing)
			<div class="col-md-4 col-sm-6">
				<div class="plan  wow bounceIn" data-wow-delay="0.3s">
					<div class="plan_title">
						<i class="icon-mobile medium-icon"></i>
						<h3>{{$pricing->title}}</h3>
						<h2>${{$pricing->summa}} <span> @lang('lang.per_year')</span></h2>
					</div>
					<ul>
                    	<li>{{$pricing->Cloud_Storage}} @lang('lang.Cloud_Storage')</li>
						<li>{{$pricing->Websites}} @lang('lang.Pro_Websites')</li>
						<li> {{$pricing->Emails}} @lang('lang.Emails')</li>
                        <li>{{$pricing->Support}} @lang('lang.Support')</li>
					</ul>
					<button class="btn btn-warning"> @lang('lang.Get_it_now')</button>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<strong>06</strong>
					<h1 class="heading bold">@lang('lang.CONTACT_US')</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 contact-info">
				<h2 class="heading bold">@lang('lang.CONTACT_INFO')</h2>
				<p>	</p>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> @lang('lang.EMAIL')</h3>
					<p>{{$email->email}}</p>
				</div>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i>   @lang('lang.PHONE') </h3>
					<p>{{$email->phone1}}<br>
					@if(isset($email->phone2))
					{{$email->phone2}}
					@endif</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<form action="{{  route('inapi.store')}}" method="post" class="wow fadeInUp" data-wow-delay="0.6s">
				@csrf
					<div class="col-md-6 col-sm-6">
						<input type="text"
						   class="form-control"
						   placeholder="@lang('lang.NAME')"
						   name="name"
                        >
					</div>
					<div class="col-md-6 col-sm-6">
						<input type="text"
						 class="form-control @error('phone') is-invalid @enderror"
						 placeholder="@lang('lang.PHONE')"
						 name="phone"
						 value="{{ old('phone') }}"
						 required
                        >
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control @error('text') is-invalid @enderror"
						placeholder="@lang('lang.MASSAGE')"
						rows="7"
						name="text"
						required
						></textarea>
					</div>
					<div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
						<input type="submit" class="form-control" value="@lang('lang.SEND_MESSAGE')">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Copyright © Digital Team HTML5 Template | Design: <a href="http://www.tooplate.com" target="_parent">Tooplate</a></p>
				<hr>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="0.9s"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
</body>
<script>
    $(function(){

        $(".aa").click(function (e) {
            e.preventDefault();
            a = $(this).attr("href");
            window.location.href="/greeting/"+a;
        });
    })
</script>

</html>

