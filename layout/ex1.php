<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>3.1 Write a simple PHP script to print your information (Name and your groupid). </h1>

<?php

echo "Anil Khanal <br>";
echo "BBCAP22";

?>
<h2>3.2  Write PHP code to display the following message. </h2>

<?php

echo "Hello world! My name is \"David\" ";

?> 

<h2>3.3 Write the PHP code in to display the current date.</h2>

<?php echo date ("d.m.Y")

?> 
<h2>3.4 Variables in php</h2>

<?php
$title = "PHP is interesting";

echo "<h1>" . $title . "</h1>";

?> 

<h2>3.5 Tables and Variables in php</h2>

<?php 
$g1 = 5;
$g2 = 4;
$g3 = 5;

echo "
<table>
<tr>
<th> S.N </th><th> Name </th><th> Grade </th>
</tr>

<tr>
<td> 1 </td><td> Pekka </td><td> $g1 </td>
</tr>

<tr>
<td> 2 </td><td> Johanna </td><td> $g2 </td>
</tr>

<tr>
<td> 3 </td><td> John </td><td> $g3 </td>
</tr>


</table>
"

?>

<h2>4 Screenshot of the development of environment</h2>
<img src="./screenshot.jpg" alt="screenshot of dev env">

</body>
</html>

