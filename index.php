<?php
$products = [
"fruit" => "apple", 
"berry" => "strawberry", 
"vegetable" => "cucumber"];
$s = serialize($products);
$open = fopen("text.txt", "w+");
$write = fwrite($open, $s);
$open2 = fopen("text.txt", "r");
$information = fread($open2, filesize("text.txt"));
$arr = unserialize($information);
echo "<table>";
echo "<tr><th>Type of product</th><th>Product's name</th></tr>";
foreach ($arr as $name => $type) {
    echo "<tr>";
    echo "<td>$type</td>";
    echo "<td>$name</td>";
    echo "</tr>";
}
echo "</table>";