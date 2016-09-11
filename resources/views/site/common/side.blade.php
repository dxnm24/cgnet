@if($sidemenu)
<ul class="menu vertical menu-side-pc">
	@foreach($sidemenu as $key => $value)
		<li {{ checkCurrent(url($value->url)) }}><a href="{{ url($value->url) }}" class="hvr-icon-float-away">{!! $value->icon !!} {!! $value->name !!}</a></li>
	@endforeach
</ul>
@endif