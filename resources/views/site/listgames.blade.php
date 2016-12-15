<?php 
	$gameTypes = CommonQuery::getAllWithStatus('game_types');
    $gameTags = CommonQuery::getAllWithStatus('game_tags');
    $games = CommonQuery::getAllWithStatus('games');
?>
@if($gameTypes)
    @foreach($gameTypes as $value)
    <?php 
        if($value->parent_id > 0) {
            $parentSlug = CommonQuery::getFieldById('game_types', $value->parent_id, 'slug');
            $gameTypeUrl = url($parentSlug.'/'.$value->slug);
        } else {
            $gameTypeUrl = url($value->slug);
        }
    ?>
    	{{ $gameTypeUrl }}<br>
    @endforeach
@endif
@if($gameTags)
    @foreach($gameTags as $value)
    	{{ url('tag/'.$value->slug) }}<br>
    @endforeach
@endif
@if($games)
    @foreach($games as $value)
       {{ url($value->slug) }}<br>
    @endforeach
@endif
