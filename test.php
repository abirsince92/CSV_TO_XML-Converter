<?php
$con = mysqli_connect("localhost", "root", "", "library");

$sql = "SELECT udid, country FROM country ORDER BY udid";
$res = mysqli_query($con, $sql);

echo "<pre>";
echo "&lt;?xml version=\"1.0\"?&gt;<br>";
echo "&lt;countries&gt;";
while($r=mysqli_fetch_array($res))
{	
 echo "<br>&nbsp;&lt;country udid=\"$r[0]\"&gt;$r[1]&lt;/country&gt;";
}
echo "<br>&lt;/countries&gt;<br>";
echo "</pre>";
?>