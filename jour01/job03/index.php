<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 
$str= "1";
$bool= true;
$azer= 10;
$wass= 3.2;

//echo "<h1>Bonjour</h1>";
?>

<table>
    <thead> <tr> <th>Type</th> 
<th> variable</th>
<th>Valeur</th>
</tr> </thead>
<tbody> 
    <?php
echo "<tr>";
echo "<td>string</td>";
echo "<td> \$str </td>";
echo "<td> $str </td>";
echo "</tr>";
echo "<tr>";
echo "<td>boolen</td>";
echo "<td> \$bool </td>";
echo "<td> $bool </td>";
echo "</tr>";
echo "<tr>";
echo "<td>integer</td>";
echo "<td> \$azer </td>";
echo "<td> $azer </td>";
echo "</tr>";
echo "<tr>";
echo "<td>float</td>";
echo "<td> \$wass </td>";
echo "<td> $wass </td>";
echo "</tr>";


var_dump($str);
?>



</tbody>
</table>

</body>

</html>