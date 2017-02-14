<?php 
	$posPc = isset($posPc)?$posPc:null;
	$posMobile = isset($posMobile)?$posMobile:null;
?>
@if(getDevice() == PC)
	{!! CommonQuery::getAdByPosition($posPc) !!}
@else
	{!! CommonQuery::getAdByPosition($posMobile) !!}
@endif