<html lang="en">

<head>
<meta charset="UTF-8">

</head>

<body>
	<h1> All Users</h1>
	@if ($users.count() >'0')

		@foreach ($users as $user)
			<li> {{link_to("/users/{$user->username}",$user->username)}}</li>
			
		@endforeach
	@endif
		{{{"No User Found"}}}
</body>

</html>