
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="/css/app.css" rel="stylesheet">
</head>
<body>
	<h1>
		Hello
	</h1>
	<div class="container">
		@for($i=0; $i < count($list); $i++)
		<h5>
			{{ $list[$i]['name'] }}
		</h5>
		<h3>
			{{ $list[$i]['body'] }}
		</h3>
		@endfor		
	</div>
<script src="/js/app.js"></script>
</body>
</html>