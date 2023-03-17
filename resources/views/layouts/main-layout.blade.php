<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="{{ $description }}" />
	<meta name="viewport" content="width=device-width" />
	<link href="/favicon.png" rel="shortcut icon" type="image/x-icon" />
	<link type="text/css" rel="stylesheet" href="css/styles.css" />
	
</head>
<body>
	<div id="header_conteiner">
		<div id="header">
			<a href='/' style='text-decoration:none'><div style="font-size:150%;font-weight:bold">GITLAB SERVICE</div></a>
			<div style='position:relative'>
				
				@if(Auth::check() === false)
				<div id='guest_window'>
					<p><a href="/gitlab">Login to service</a></p>
				</div>
				@else
				<div id='user_button'>
					<p><?=Auth::user()->name?>&nbsp;&nbsp;
					<img src="https://secure.gravatar.com/avatar/<?=Auth::user()->avatar?>" style="width:37px;margin-right: 10px;"/><a href='/logout'>Logout</a></p>
				</div>
				@endif
			</div>
		</div>
	</div>
	{{ $center }}
	<footer id='footer_conteiner'>
		<div id="footer">
			<p style="text-align:center">Copyright &copy; 2023 Miestiechkin Oleg. Open sourse code is <a style='color:#fc6d26' href='#'>here</a></p>
		</div>
	</footer>
</body>
</html>