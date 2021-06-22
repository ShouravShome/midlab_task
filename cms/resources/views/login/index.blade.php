<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
</head>
<body>
<form method="post">
@csrf
<table>
<tr>
<td>Email</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td><a href ="{{route('register.index')}}">
		<input type="button" name="reg" value="Register"></td>
		</a>
<td><input type="submit" name="submit"value="submit"></td>
</tr>
<tr>
<td>{{session('msg')}}</td>
<td>{{session('msg1')}}</td>
<td>{{session('msg2')}}</td>
@foreach($errors->all() as $error)
<tr>
<td>{{$error}}</td><br>
</tr>
@endforeach
</tr>
</table>
</form>
</body>
</html>
