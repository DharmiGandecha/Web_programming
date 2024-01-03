<html>
<body>
<form action="output.php" method="get">

<table align="center" bgcolor="#E7DDDB" cellpadding="10" cellspacing="10" >

<tr>
<td colspan="3" align="center"><h1>Registration from</h1></td>
</tr>

<tr><td>Username:</td><td><input type="text" name="unm"style="border-color:red"></td></tr><br>
<tr>
<td>Password:</td><td><input type="text" name="pwd"style="border-color:red"></td>
</tr>
<tr>
<td>Name:</td><td><input type="text" name="nm"style="border-color:red"></td>
</tr>
<tr>
<td>Address:</td><td><input type="text" name="add"style="border-color:red"></td>
</tr>
<tr>
<td>Country:</td>
<td>
<select id="cont" name="cout" style="border-color:red">
<option value="">(pleses select a country)</option>
<option value="India">India</option>
<option value="France">France</option>
<option value="Germany">Germany</option>
</select></td>
</tr>
<tr>
<td>ZIP Code:</td><td><input type="text" name="zip"style="border-color:red"></td>
</tr>
<tr>
<td>Email:</td><td><input type="email" name="eml"style="border-color:red"></td></tr>
<tr>
<label><td>Sex:</td></label>
<td><input type="radio" name="unm" value="male">male
<input type="radio" name="gen" value="Female">Female</td>
</tr>

<tr>
<label><td>Language:</td></label>
<td><input type="checkbox" name="lng" value="english"style="border-color:red">English
<input type="checkbox" name="lng" value="gujrati"style="border-color:red">Non English</td>
</tr>

<tr>
<td>About:</td>

<td ><textarea id="abt" name="abt" rows="7" cols="50"style="border-color:red" ></textarea>
</tr>
<tr><td><input type="submit" name="submit"style="border-color:red"></td></tr>
</table>
</body>
</html>





