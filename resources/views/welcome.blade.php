@extends('layouts.home')

@section('content')

<section id="slider" class="no-padding main-banner">
		
	<div class="tp-banner-container">
		<div class="tp-banner">
			<ul>
				
				<li data-transition="fade" data-slotamount="1" data-masterspeed="1500">
					<!-- MAIN IMAGE -->
					<img src="/images/main-banner/tools.jpg"  alt=""  data-bgfit="" data-bgposition="left top" data-bgrepeat="no-repeat">
					
					<!-- LAYER NR. 1 -->
					<div class="tp-caption slide1-heading lfb skewtoleft"
						data-x="center"
						data-y="190"
						data-speed="2000"
						data-start="500"
						data-easing="Power4.easeOut"
						data-endspeed="400"
						data-endeasing="Power1.easeIn"
						style="z-index: 11">Work outsourcing done right!
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption slide1-text lfb skewtoleft"
						data-x="center"
						data-y="280"
						data-speed="2000"
						data-start="900"
						data-easing="Power4.easeOut"
						data-endspeed="400"
						data-endeasing="Power1.easeIn"
						style="z-index: 11">Get professionals to do your work and focus on the important things!
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption slide1-btn lfb skewtoleft"
						data-x="center"
						data-y="340"
						data-speed="2000"
						data-start="1300"
						data-easing="Power4.easeOut"
						data-endspeed="400"
						data-endeasing="Power1.easeIn"
						style="z-index: 11"><a href="/request-a-pro" class="btn btn-bordered">Request a Pro</a>
					</div>
				</li>
				
			</ul>
		</div>
	</div>
		
</section>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="available-widget">
				<i class="icon-icons20"></i>
				<p>We are Now Available<span>Monday to Saturday from 7am till 11pm</span></p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="place-order-widget">
				<i class="icon-icons202"></i>
				<p>Request a pro <span>TODAY</span><b class="tag"><a href="#" style="color: #fff;">Get a Pro</a></b></p>
			</div>
		</div>
	</div>	
</div>

@endsection

@push('scripts')

<script>
	(function () {
		"use strict";		
			
		/* ------------------------------------------------------------------------ 
		   MAIN BANNER [revolution slider]
		------------------------------------------------------------------------ */
		var revapi;
			
		revapi = jQuery('.tp-banner').revolution(
		{
			delay:9000,
			startwidth:1300,
			startheight:663,
			hideThumbs:10

		});
			
			
	})(jQuery);
	
	</script>

@endpush