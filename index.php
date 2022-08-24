<form method="POST" action="">
    <input type="text" name="a" value="alert(123)">
    <button onclick="submit()">GO</button>
</form>

<?php

var_dump($_POST);
var_dump($_REQUEST);
// example code
/*
$welcome = file_get_contents('/content/welcome');
$array = [
    "foo" => "b\'ar",
    "bar" => "aa" . exec("ls -l") . "aaa",
];
iconv('UTF-8', 'CP1252', var_export($array, true)) ;

print iconv('UTF-8', 'CP1252', var_export($array, true)) ;
*/
?>
