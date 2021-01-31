<DOCTYPE HTML>
<html>
<head>
<title> Registration Page </title>
</head>
<body>
<h1> My Registration Page </h1>

<form>
<table>
<tr> 
<td> Name: </td>
<td> <input type="text" name="firstname"></td> 
</tr>
<br>
<br>
<tr> <td> Email: </td>
<td><input type="text" name="email"></td>
</tr>

<tr>
<td>User Name:</td>
<td><input type="text" name="uname"></td>
</tr>


<tr>
<td>Password:</td>
<td><input type="password" name="pass"></td>
</tr>


<tr>
<td>Confirm Password:</td>
<td><input type="password" name="pass"></td>
</tr>

<tr>
<td>Genders: </td>
</tr>
<tr>
<td>
<input type="radio" id="male" name="gender" value="male">
 <label for="male">Male</label>
 <input type="radio" id="female" name="gender" value="female">
 <label for="female">Female</label>
 <input type="radio" id="others" name="gender" value="others">
 <label for="others">Others</label>
 </td>
 </tr>
 <br>

<tr>
<td>
 Date of Birth: <br>
<input type="date" >
</td>
</tr>




<tr>
<td>
<br>
 <input type="submit" value="Submit">
<input type="reset">
</td>
</tr>
 

</table>
</form>


</body>

</html>