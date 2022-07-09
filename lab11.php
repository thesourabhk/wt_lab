<?php
print "<h3> REFRESH PAGE </h3>";
$file = fopen("counter.txt","r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen("counter.txt","w");
fprintf($file,"%d",$hits[0]);
fclose($file);
echo "number of times visited: " .$hits[0];
?>