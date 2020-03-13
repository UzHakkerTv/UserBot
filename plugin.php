<?php
if($text == "/ping" || $text == "Robot"){ // ushbu buyruqni Userbot o'rnatilgan profilga yozing 
$MadelineProto->messages->sendMessage(['peer' => $chat_id, 'message' => "Userbot ishlamoqda! /start buyrug'ini yuboring."]);
$MadelineProto->messages->sendMessage(['peer' => $chat_id, 'message' => "https://www.youtube.com/watch?v=aFDDriV6Fqo"]); // Bunga tegmang buzib quyasiz.
}

if($text == "/start" || $text == "شروع" || $text == "روشن"){ // ushbu buyruq orqali ish faoliyatini boshlaydi
if(!is_dir("post")){mkdir("post");}
if(!is_dir("post2")){mkdir("post2");}
if(!is_dir("post3")){mkdir("post3");}
if(!is_dir("post4")){mkdir("post4");}
if(!is_dir("post5")){mkdir("post5");}
$MadelineProto->messages->sendMessage(['peer' => $chat_id, 'message' => "Juda yaxshi! Men ishni boshladim 🏃🏻‍♂️"]);


foreach ($MadelineProto->get_dialogs() as $id) {
$MadelineProto->messages->sendMessage(['peer' => $id, 'message' => "https://www.youtube.com/watch?v=aFDDriV6Fqo\n\n👆👆👆👆Obuna bo'ling."]); // Bunga tegmang buzib quyasiz.    
}
}

$soltanview = $MadelineProto->messages->getHistory(['peer' => '@VbazdidGir_post', 'offset_id' => 0, 'offset_date' => 0, 'add_offset' => 0, 'limit' => 2136000, 'max_id' => 0, 'min_id' => 0, 'hash' => 0 ]);
foreach($soltanview['messages'] as $message){
$id = $message['id'];
if(!file_exists("post/$id.txt")){
foreach($message['reply_markup']['rows'] as $row){
foreach($row['buttons'] as $button){
$mn = $button['text'];
if(strpos($mn,'ثبت') !== false){ // Bu yerga arabcha yozuvni o'zrniga knopka nomini yosasiz
$button->click();
file_put_contents("post/$id.txt","ok");
$MadelineProto->messages->sendMessage(['peer' => $chat_id, 'message' => "👻 Bir Ball oldim !!"]);
}}}}}
$gemseen = $MadelineProto->messages->getHistory(['peer' => '@adsgemseen', 'offset_id' => 0, 'offset_date' => 0, 'add_offset' => 0, 'limit' => 195000, 'max_id' => 0, 'min_id' => 0, 'hash' => 0 ]);
foreach($gemseen['messages'] as $message){
$id = $message['id'];
if(!file_exists("post2/$id.txt")){
foreach($message['reply_markup']['rows'] as $row){
foreach($row['buttons'] as $button){
$mn = $button['text'];
if(strpos($mn,'دریافت') !== false){ // Bu yerga arabcha yozuvni o'zrniga knopka nomini yosasiz
$button->click();
file_put_contents("post2/$id.txt","ok");
$MadelineProto->messages->sendMessage(['peer' => $chat_id, 'message' => "👻 Bir Ball oldim  !!"]);
}}}}}
$weview = $MadelineProto->messages->getHistory(['peer' => '@weViewers', 'offset_id' => 0, 'offset_date' => 0, 'add_offset' => 0, 'limit' => 6107000, 'max_id' => 0, 'min_id' => 0, 'hash' => 0 ]);
foreach($weview['messages'] as $message){
$id = $message['id'];
if(!file_exists("post3/$id.txt")){
foreach($message['reply_markup']['rows'] as $row){
foreach($row['buttons'] as $button){
$mn = $button['text'];
if(strpos($mn,'بازدید') !== false){ // Bu yerga arabcha yozuvni o'zrniga knopka nomini yosasiz
$button->click();
file_put_contents("post3/$id.txt","ok");
$MadelineProto->messages->sendMessage(['peer' => $chat_id, 'message' => "👻 Bir Ball oldim  !!"]);
}}}}}
$ibazdid = $MadelineProto->messages->getHistory(['peer' => '@ibazdidads', 'offset_id' => 0, 'offset_date' => 0, 'add_offset' => 0, 'limit' => 652600, 'max_id' => 0, 'min_id' => 0, 'hash' => 0 ]);
foreach($ibazdid['messages'] as $message){
$id = $message['id'];
if(!file_exists("post4/$id.txt")){
foreach($message['reply_markup']['rows'] as $row){
foreach($row['buttons'] as $button){
$mn = $button['text'];
if(strpos($mn,'ثبت') !== false){ // Bu yerga arabcha yozuvni o'zrniga knopka nomini yosasiz
$button->click();
file_put_contents("post4/$id.txt","ok");
$MadelineProto->messages->sendMessage(['peer' => $chat_id, 'message' => "👻 Bir Ball oldim  !!"]);
}}}}}
$bazdid = $MadelineProto->messages->getHistory(['peer' => '@BazdidGirAdv', 'offset_id' => 0, 'offset_date' => 0, 'add_offset' => 0, 'limit' => 10078000, 'max_id' => 0, 'min_id' => 0, 'hash' => 0 ]);
foreach($bazdid['messages'] as $message){
$id = $message['id'];
if(!file_exists("post5/$id.txt")){
foreach($message['reply_markup']['rows'] as $row){
foreach($row['buttons'] as $button){
$mn = $button['text'];
if(strpos($mn,'کسب') !== false){ // Bu yerga arabcha yozuvni o'zrniga knopka nomini yosasiz
$button->click();
file_put_contents("post5/$id.txt","ok");
$MadelineProto->messages->sendMessage(['peer' => $chat_id, 'message' => "👻 Bir Ball oldim "]);
}}}}}
?>
