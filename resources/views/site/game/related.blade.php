@if($data && count($gameData) > 0)
<?php 
	if(isset($dataSeri)) {
		$url = url($dataSeri->slug.'/'.$data->slug);	
	} else {
		$url = url($data->slug); 
	}
?>
<div class="gametypes">
	<div class="row column box-title no-padding-bottom">
		<h3>{!! $data->name !!}</h3>
		<a href="{{ $url }}" class="btn-seemore float-right hide-for-small-only hvr-icon-wobble-horizontal hvr-buzz-out">Xem thêm</a>
	</div>
	<div class="box-inner">
	@include('site.game.box', array('data' => $gameData))
	</div>
	<div class="row column show-for-small-only box-seemore">
		<a href="{{ $url }}" class="btn-seemore">Xem thêm <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
	</div>
</div>
@endif