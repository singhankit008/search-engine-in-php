<html>
	<head>
	<title>Search Engine In PHP</title>
	</head>
<body bgcolor="white">
<form action="search.php" method="POST"><br><br><center>
<img src="google.png"  width="400" height="200"> <br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea rows="1" cols="70" name="value" placeholder="Search Karo"></textarea>
<input type="submit" name="search" value="search now"></center><hr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("search");
if(isset($_POST['search']))
{
$search_value = $_POST['value'];

$query= "select * from sites where site_keywords like '%$search_value%'";
$run = mysql_query($query);
while($fetch=mysql_fetch_array($run))
{
$site_title=$fetch['site_title'];
$site_link=$fetch['site_link'];
$site_desc=$fetch['site_desc'];
$site_key=$fetch['site_keywords'];
print "<h1>$site_title</h1><a href='$site_link'>$site_link</a><p>$site_desc</p><br>$site_key";
}
}
?>
</body>
</html>