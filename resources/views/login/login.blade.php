<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to My First Laravel Application</title>
</head>
<body>
    <h1>Login</h1>
	<form action="/login" method="post">
        @csrf
		<fieldset>
			<legend>Login</legend>
            <div style="color: red; font-weight:bold;">
                @if(Session::has('empty'))
                <br>
                {{Session::get('empty')}}
                @endif
            </div>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>