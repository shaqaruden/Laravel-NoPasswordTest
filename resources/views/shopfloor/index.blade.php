<!DOCTYPE html>
<html lang="en" style="height: 100%; width: 100%;">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Shopfloor | Login</title>
</head>
<body style="height: 100%; width: 100% display: initial;">

	@if ($errors->all())
		<ul style="list-style: none; width: 300px; margin-top: 40px; position: absolute;">
			<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
					<li> {{ $error }}</li>
				@endforeach
			</div>
		</ul>
	@endif

<div class="flex" style="display: flex; height: 100%; align-items: center; justify-content: center;">

	<div class="jumbotron" style="border-radius: 5px; -webkit-box-shadow: 3px 3px 12px 1px rgba(117,117,117,1); -moz-box-shadow: 3px 3px 12px 1px rgba(117,117,117,1); box-shadow: 3px 3px 12px 1px rgba(117,117,117,1);">

		<img src="images/ltiblue.svg" width="200" style="margin: 0 100px 30px;" alt="">
			
			<div class="container" style="width:400px;">
				<center><h4>Welcome, {{ $user->name }} ({{ $user->number }})</h4></center>
                
                    <a href="logout" class="btn btn-block btn-danger">Logout</a>
                
			</div>

		</div>
	</div>
</body>
</html>