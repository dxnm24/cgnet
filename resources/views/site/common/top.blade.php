<header>
	<div class="topbar show-for-medium">
		<div class="row">
			<div class="small-3 columns">
				<div class="logo">
					<a href="/"><img src="/img/logo.png" alt="" /></a>
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
					<li {{ checkCurrent(url($value->url)) }}><a href="{{ CommonUrl::getUrl($value->url) }}">{{ $value->name }}</a></li>
				@endforeach
			</ul>
			@endif
		</div>
	</div>
</header>
