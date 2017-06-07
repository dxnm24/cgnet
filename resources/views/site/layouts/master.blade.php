@include('site.common.head')
<body>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">

@if(isset($isPlay) && $isPlay == true)
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{{ FACEBOOK_APPID }}',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/vi_VN/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
@endif

@include('site.common.top')

@if(!isset($isPlay) || $isPlay == false)
@include('site.common.ad', ['posPc' => 1, 'posMobile' => 2])
@endif

<div class="main">
	@if(isset($isPlay) && $isPlay == true)
		<div class="row">
			<div class="column">
				@yield('content')
			</div>
		</div>
	@else
		<div class="row">
			<div class="medium-9 small-12 columns">
				<div class="content">
					@yield('content')
				</div>
			</div>
			<div class="medium-3 columns hide-for-small-only">
				@include('site.common.side')
			</div>
		</div>
	@endif
</div>
@include('site.common.ad', ['posPc' => 3, 'posMobile' => 4])
@include('site.common.bottom')

<script src="{{ asset('js/app.js') }}"></script>

@if(getDevice() == PC)
	<div class="sticky_column" id="ScrollLeft" data-top="110">
		@include('site.common.ad', ['posPc' => 18])
	</div>
	<div class="sticky_column" id="ScrollRight" data-top="110">
		@include('site.common.ad', ['posPc' => 19])
	</div>
	<script type="text/javascript">
		var scrollWidth = 160;
		checkPos($(window).width());
		$(function () {
			$(window).resize(function () {
				checkPos($(window).width());
			});
		});
		function checkPos(windowWidth) {
			var posLeft = (windowWidth - 1000) / 2 - scrollWidth - 3;
			var posRight = (windowWidth - 1000) / 2 - scrollWidth + 1;
			if (windowWidth < 1300) {
				$('.sticky_column').hide();
			} else {
				$('.sticky_column').show();
				$("#ScrollRight").css({ top: 110, right: posRight, position: "absolute",display:"block" });
				$("#ScrollLeft").css({ top: 110, left: posLeft, position: "absolute",display:"block" });
			}
		}
		$(document).scroll(function () {
			var scrollTop = $(document).scrollTop();
			$('#ScrollLeft').each(function () {
				var $qcs = $(this);
				var parentTop = parseInt($qcs.attr('data-top'));
				if (scrollTop > parentTop) {
					$qcs.css('top', scrollTop - parentTop + parseInt($qcs.attr('data-top')) + 10);
				}
				else {
					$qcs.css('top', parseInt($qcs.attr('data-top')));
				}
			});
			$('#ScrollRight').each(function () {
				var $qcs = $(this);
				var parentTop = parseInt($qcs.attr('data-top'));
				if (scrollTop > parentTop) {
					$qcs.css('top', scrollTop - parentTop + parseInt($qcs.attr('data-top')) + 10);
				}
				else {
					$qcs.css('top', parseInt($qcs.attr('data-top')));
				}
			});
		});
	</script>
@endif

</body>
</html>
