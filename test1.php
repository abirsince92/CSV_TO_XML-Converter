<?php
$con = mysqli_connect("localhost", "root", "", "library");

$sql = "SELECT name,author,date FROM book;";
$res = mysqli_query($con, $sql);

echo "<pre>";
echo "&lt;?xml version=\"1.0\"?&gt;<br>";
echo "&lt;names&gt;";
while($r=mysqli_fetch_array($res))
{	
 echo "<br>&nbsp;&lt;author =\"$r[0]\"&gt;$r[1] $r[2]&lt;/author&gt;";
}
echo "<br>&lt;/names&gt;<br>";
echo "</pre>";
?>