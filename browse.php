<?php

echo '<link rel="stylesheet" type="text/css" href="style.css">';

$con=mysql_connect("localhost","root","72147214");

mysql_select_db("item");

$q=mysql_query("select * from item");

while($row=mysql_fetch_array($q))
{
    echo "<form class='theform' method='post' action='deletethis.php'>";
    echo " <img src='$row[photo]' >"."<br>" ;   
	echo $row["DESC_"]."<br>";
	echo $row["category"]."<br>";
    echo "<a href='$row[formlink]' target='_blank' >Claim</a>"."<br>";
    echo "<button type='submit'>DeleteThis</button>";
    echo "</form>";
    echo "<br>"."<br>"."<br>";  
}
mysql_close($con);

?>