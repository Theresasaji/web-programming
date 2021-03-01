<html>
<head>
<title>maximum of 3 numbers</title>
<body>
<?php
$a =756;
$b =786;
$c =783;
echo "first number=$a <br> second number=$b <br> third number= $c <br>";
if(($a > $b) && ($a > $c)) 
 echo "$a is  maximum";
else if($b > $c) 
 echo "$b is maximum";
else
 echo "$c is maximum";
?>
</body>
</html>