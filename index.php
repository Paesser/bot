<?php

$botToken = "644463703:AAGFa_GmvIA_qKWajXR7Z7l7mp1cuaOMGnM";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

$updateArray = json_decode($update, TRUE);

//print_r($updateArray);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

//print_r($text);

file_get_contents($website."/sendMessage?chat_id=".$chatId."&text=test");
?>