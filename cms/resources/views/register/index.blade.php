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
<td>Name</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td>Type</td>
<td><input type="text" name="type"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit"value="submit"></td>
</tr>
</table>
</form>
</body>
</html>
