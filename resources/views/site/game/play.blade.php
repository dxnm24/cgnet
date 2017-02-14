<?php 
	$device = getDevice();
	$countGame = count($game);
	if($countGame > 0) {
		$title = ($game->meta_title!='')?$game->meta_title:$game->name;
		$h1 = $game->name;
		$isPlay = true;
		$is404 = false;
		$meta_title = $game->meta_title;
		$meta_keyword = $game->meta_keyword;
		$meta_description = $game->meta_description;
		$meta_image = $game->meta_image;
	} else {
		$title = PAGENOTFOUND;
		$h1 = PAGENOTFOUND;
		$isPlay = false;
		$is404 = true;
		$meta_title = '';
		$meta_keyword = '';
		$meta_description = '';
		$meta_image = '';
	}
	$extendData = array(
			'isPlay' => $isPlay,
			'is404' => $is404,
			'meta_title' => $meta_title,
			'meta_keyword' => $meta_keyword,
			'meta_description' => $meta_description,
			'meta_image' => $meta_image,
		);
?>
@extends('site.layouts.master', $extendData)

@section('title', $title)

@section('content')
<div class="box">
	<div class="row column">
		<?php
			if(isset($typeMainParent)) {
				$breadcrumb = array(
					['name' => $typeMainParent->name, 'link' => url($typeMainParent->slug)],
					['name' => $typeMain->name, 'link' => url($typeMainParent->slug.'/'.$typeMain->slug)],
					['name' => $h1, 'link' => '']
				);
			} else {
				$breadcrumb = array(
					['name' => $typeMain->name, 'link' => url($typeMain->slug)],
					['name' => $h1, 'link' => '']
				);
			}
		?>
		@include('site.common.breadcrumb', $breadcrumb)
	</div>
	<div class="row column box-title game-title">
		<h1>{!! $h1 !!}</h1>
	</div>
	@if($device == MOBILE)
	<div class="row column">
		<a href="{{ $linkToPlayGame }}" class="btn-play">Chơi ngay! <i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
	</div>
	@else
	<div class="row column game">
		<div class="play">
			{!! CommonGame::getBoxGame($game->url, $game->type, $game->width, $game->height, $adCode) !!}
		</div>
		@if($game->type == GAMEHTML5)
			@include('site.game.fullscreen')
		@endif
	</div>
	@include('site.common.ad', ['posPc' => 11])
	@endif
	<div class="row">
		<div class="medium-9 small-12 columns">
			<div class="content">
				<div class="info">
					<div class="row">
						<div class="medium-2 small-3 columns"><img src="{{ url($game->image) }}" alt="{!! $game->name !!}" /></div>
						<div class="medium-10 small-9 columns">
							<p class="summary">{!! $game->summary !!}</p>
							<p class="view"><span>Lượt chơi:</span> {{ number_format(getZero($game->view, 0, '.', '.')) }}</p>
							@if($device == PC)
								@include('site.common.social')
							@endif
						</div>
						@if($device == MOBILE)
						<div class="column center">
							@include('site.common.social')
						</div>
						@endif
						<div class="column description">{!! $game->description !!}</div>
						@include('site.common.ad', ['posPc' => 9, 'posMobile' => 10])
					</div>
				</div>

				@if($device == MOBILE)
				<div class="row column">
					<a href="{{ $linkToPlayGame }}" class="btn-play">Chơi ngay! <i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
				</div>
				@endif

				@if(count($tags) > 0)
				<div class="tags">
					<div class="tags-icon"><i class="fa fa-tags" aria-hidden="true"></i> Danh mục</div>
					<ul>
						@foreach($tags as $value)
						<li><h2><a href="{{ url('tag/'.$value->slug) }}" title="{!! $value->name !!}">{!! $value->name !!}</a></h2></li>
						@endforeach
					</ul>
				</div>
				@endif

				<div class="fb-comments" data-numposts="5"></div>

				@include('site.game.related', ['data' => $seri, 'gameData' => $gameSeries, 'dataSeri' => $seriParent])
				@include('site.game.related', ['data' => $typeMain, 'gameData' => $gameTypes])
				@include('site.game.related', ['data' => $related, 'gameData' => $gameRelated])

			</div>
		</div>
		<div class="medium-3 columns hide-for-small-only">
			@include('site.common.side')
		</div>
	</div>
</div>
@endsection