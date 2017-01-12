
<?php

$botToken = "300006676:AAEOGtGg7fETHQqr0Ojppl6NuggGmB_IXUg";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website"/getupdates");

$updateArray = jason_decode($update, TRUE);

print_r($updateArray);

?>
