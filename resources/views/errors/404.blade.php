<?php 
	$extendData = array(
			'is404' => true,
			'meta_title' => '',
			'meta_keyword' => '',
			'meta_description' => '',
			'meta_image' => '',
		);
?>
@extends('site.layouts.master', $extendData)

@section('title', PAGENOTFOUND)

@section('content')
<div class="box">
	<div class="row column box-title">
		<h3>{{ PAGENOTFOUND }}</h3>
	</div>
	<div class="row column">
		<p>Đường dẫn không tồn tại. Mời bạn tham khảo những tựa game hay khác tại đây</p>
	</div>
</div>
@endsection