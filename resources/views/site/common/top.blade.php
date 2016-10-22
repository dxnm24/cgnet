<?php $device = getDevice(); ?>
@if($device == MOBILE)
<header>
	<div class="mobile-topbar">
		<div class="row">
			<div class="small-3 columns">
				<a class="mobile-menuopen" data-toggle="mobile-menubox" aria-controls="mobile-menubox" aria-haspopup="true" tabindex="0"><i class="fa fa-bars" aria-hidden="true"></i></a>
			</div>
			<div class="small-9 columns">
				<div class="logo">
					<a href="/"><img src="/img/logo-mobile.png" alt="choigames.net" /></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="column">
			<div class="mobile-search">
				<form action="{{ route('site.search') }}" method="GET" class="search-form">
					{{-- csrf_field() --}}
					<input name="name" type="text" value="" class="search-input" placeholder="Tìm kiếm game">
					<!-- <input type="submit" class="search-button" value="Tìm kiếm game" /> -->
					<a class="search-button" onclick="$('.search-form').submit()"><i class="fa fa-search" aria-hidden="true"></i></a>
				</form>
			</div>
		</div>
	</div>
</header>
<div class="full reveal mobile-menubox" id="mobile-menubox" data-reveal>
	<div class="mobile-menubox-head">
		<strong class="mobile-title mmh-left">Thể loại game</strong>
		<a class="mmh-right" data-close aria-label="Close modal"><i class="fa fa-times" aria-hidden="true"></i> Đóng Menu</a>
		<div class="clearfix"></div>
	</div>
	<ul class="mobile-menu">
  		@if($topmenu)
      		@foreach($topmenu as $key => $value)
				<li {{ checkCurrent(url($value->url)) }}><a href="{{ $value->url }}">{!! $value->name !!}</a></li>
			@endforeach
		@endif
		@if($sidemenu)
      		@foreach($sidemenu as $key => $value)
				<li {{ checkCurrent(url($value->url)) }}><a href="{{ $value->url }}">{!! $value->name !!}</a></li>
			@endforeach
		@endif
		<li class="mobile-li-close"><a class="mobile-menuclose" data-close aria-label="Close modal"><i class="fa fa-times" aria-hidden="true"></i> Đóng Menu</a></li>
  	</ul>
</div>
@else
<header>
	<div class="topbar show-for-medium">
		<div class="row">
			<div class="small-3 columns">
				<div class="logo">
					<a href="/"><img src="/img/logo.png" alt="choigames.net" /></a>
				</div>
			</div>
			<div class="small-9 columns">
				<form action="{{ route('site.search') }}" method="GET" class="search-form">
					{{-- csrf_field() --}}
					<input name="name" type="text" value="" class="search-input" placeholder="Nhập tên game bạn muốn tìm">
					<!-- <input type="submit" class="search-button" value="Tìm kiếm game" /> -->
					<a class="search-button" onclick="$('.search-form').submit()"><i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm game</a>
				</form>
			</div>
		</div>
	</div>
	<div class="topnav">
		<div class="row column">
			@if($topmenu)
			<ul class="menu show-for-medium menu-pc">
				@foreach($topmenu as $key => $value)
					<li {{ checkCurrent(url($value->url)) }}><a href="{{ url($value->url) }}">{!! $value->name !!}</a></li>
				@endforeach
			</ul>
			@endif
		</div>
	</div>
</header>
@endif