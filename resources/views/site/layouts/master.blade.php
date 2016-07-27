@include('site.common.head')
<body>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="off-canvas position-left offcanvas" id="offCanvasLeft" data-off-canvas data-position="left" aria-hidden="true">
			<button class="close-button" aria-label="Close menu" type="button" data-close="">
	        	<span aria-hidden="true">×</span>
	      	</button>
	      	<ul class="mobile-ofc vertical menu">
	      		<li class="title">Thể loại game</li>
	      		@if($topmenu)
		      		@foreach($topmenu as $key => $value)
						<li {{ checkCurrent(url($value->url)) }}><a href="{{ $value->url }}">{!! $value->name !!}</a></li>
					@endforeach
				@endif
	      	</ul>
		</div>
		<div class="off-canvas position-right offcanvas" id="offCanvasRight" data-off-canvas data-position="right" aria-hidden="true">
			<button class="close-button" aria-label="Close menu" type="button" data-close="">
	        	<span aria-hidden="true">×</span>
	      	</button>
	      	<ul class="mobile-ofc vertical menu">
	      		<li class="title">Games</li>
	      		@if($sidemenu)
		      		@foreach($sidemenu as $key => $value)
						<li {{ checkCurrent(url($value->url)) }}><a href="{{ $value->url }}">{!! $value->name !!}</a></li>
					@endforeach
				@endif
	      	</ul>
		</div>
		<div class="off-canvas-content" data-off-canvas-content>
			<div class="title-bar hide-for-medium">
				<div class="title-bar-left">
					<button class="menu-icon" type="button" data-open="offCanvasLeft" aria-expanded="false" aria-controls="offCanvasLeft"><span class="menu-button-text">Danh mục</span></button>
      				<span class="title-bar-title">choigames.net</span>
				</div>
				<div class="title-bar-right">
      				<button class="menu-icon" type="button" data-open="offCanvasRight" aria-expanded="false" aria-controls="offCanvasRight"></button>
				</div>
			</div>
			@include('site.common.top')
			@include('site.common.ad', ['posPc' => 1, 'posMobile' => 2])
			<div class="main">
				@if(isset($isPlay) && $isPlay == true)
					<div class="row">
						<div class="column">
							@yield('content')
						</div>
					</div>
				@else
					<div class="row">
						<div class="medium-9 small-12 columns">
							<div class="content">
								@yield('content')
							</div>
						</div>
						<div class="medium-3 columns hide-for-small-only">
							@include('site.common.side')
						</div>
					</div>
				@endif
			</div>
			@include('site.common.ad', ['posPc' => 3, 'posMobile' => 4])
			@include('site.common.bottom')
		</div>
	</div>
</div>

<script src="{{ asset('js/all.js') }}"></script>
</body>
</html>
