<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
</head>
<body>
Home Page<br>
{{$email}}<br>
{{$type}}<br>
<tr>
<td> <a href="/user/create"> <input type="button" name="Create User" value="Create User"></td>
</tr>
<tr>
<td> <a href="/user/all"> <input type="button" name="All User" value="All User"></td>
<td> <a href="{{route('logout')}}"> <input type="button" name="logout" value="logout"></td>
</tr>
</body>
</html>