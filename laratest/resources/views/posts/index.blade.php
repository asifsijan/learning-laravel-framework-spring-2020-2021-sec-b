
<!DOCTYPE html>
<html>
<head>

	@include('layouts.head')
</head>
<body>
	@include('layouts.header')
	<div class="container">
		
		@for($i=0; $i < count($list); $i++)
		<h5>
			{{ $list[$i]['name'] }}
		</h5>
		<p class="pt-2 pb-4">
			{{ $list[$i]['body'] }}
		</p>
		@endfor		
	</div>
	@include('layouts.footer')
<script src="/js/app.js"></script>
</body>
</html>