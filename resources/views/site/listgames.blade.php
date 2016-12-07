<?php 
    $games = CommonQuery::getAllWithStatus('games');
?>
@if($games)
    @foreach($games as $value)
       {{ url($value->slug) }}<br>
    @endforeach
@endif
