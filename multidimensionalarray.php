<?php
$students_master=array(array("rollno"=>37,"name"=>"Shreya","hobbies"=>"singing","color"=>
"purple","Country"=>"Dubai","Department"=>"CSIT","program"=>"BCA","division"=>"B1",
"enrollmentno"=>220801131,"food"=>"punjabi"),array("rollno"=>31,"name"=>"Dharmi","hobbies"=>"Dance","color"=>
"blue","Country"=>"Berlin","Department"=>"CSIT","program"=>"BCA","division"=>"B1",
"enrollmentno"=>220801112,"food"=>"chinese"),array("rollno"=>42,"name"=>"yatri","hobbies"=>"music","color"=>
"black","Country"=>"newyork","Department"=>"CSIT","program"=>"BCA","division"=>"B1",
"enrollmentno"=>220801158,"food"=>"continental"),array("rollno"=>35,"name"=>"Aarchi","hobbies"=>"dancing","color"=>
"purple","Country"=>"Moscow","Department"=>"CSIT","program"=>"BCA","division"=>"B1",
"enrollmentno"=>220801125,"food"=>"Gujarati"),array("rollno"=>17,"name"=>"Purvisha","hobbies"=>"classical dance","color"=>
"lavender","Country"=>"Dubai","Department"=>"CSIT","program"=>"BCA","division"=>"B1",
"enrollmentno"=>34543544,"food"=>"punjabi"),array("rollno"=>60,"name"=>"purva","hobbies"=>"writing","color"=>
"Green","country"=>"France","Department"=>"CSIT","program"=>"BCA","division"=>"B2",
"enrollmentno"=>5456464,"food"=>"Gujarati"),array("rollno"=>30,"name"=>"Prinsi","hobbies"=>"singing","color"=>
"Crimson","Counrty"=>"Brazil","Department"=>"CSIT","program"=>"BCA","division"=>"B1",
"enrollmentno"=>22080029,"food"=>"punjabi"));

echo "<table border=2>";
echo '<tr><th>rollno</th><th>name</th><th>hobbies</th><th>color</th><th>Country</th>
<th>Departmnet</th><th>program</th><th>division</th><th>enrollmentno</th>
<th>food</th>';
foreach($students_master as $students_master)
{
	echo "<tr>";
	foreach($students_master as $key)
	{
	
		echo "<td>".$key."</td>";
	}

	echo "</tr>";
	
}
echo "</table>";
?>