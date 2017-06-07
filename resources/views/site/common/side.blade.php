@include('site.common.ad', ['posPc' => 12, 'posMobile' => 13])

@if($sidemenu)
<ul class="menu vertical menu-side-pc">
	@foreach($sidemenu as $key => $value)
		<li {{ checkCurrent(url($value->url)) }}><a href="{{ url($value->url) }}" class="hvr-icon-float-away">{!! $value->icon !!} {!! $value->name !!}</a></li>
	@endforeach
</ul>
@endif

@include('site.common.ad', ['posPc' => 7, 'posMobile' => 8])
