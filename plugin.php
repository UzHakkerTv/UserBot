<?php
// @VbazdidGirads
if($from_id == "201885229"){ // آیدی ادمین ربات
if($text == "/ping" || $text == "ربات"){ // دستور آنلاین بودن ربات
$MadelineProto->messages->sendMessage(['peer' => $chat_id, 'message' => "آنلاینم!"]);
}
// @VbazdidGirads
if($text == "/start" || $text == "شروع" || $text == "روشن"){ // دستور جمع کردن سکه
if(!is_dir("post")){mkdir("post");}
if(!is_dir("post2")){mkdir("post2");}
if(!is_dir("post3")){mkdir("post3");}
if(!is_dir("post4")){mkdir("post4");}
if(!is_dir("post5")){mkdir("post5");}
// @VbazdidGirads
$MadelineProto->messages->sendMessage(['peer' => $chat_id, 'message' => "رفتم در حال جمع آوری سکه ها 🏃🏻‍♂️"]);
// @VbazdidGirads
$soltanview = $MadelineProto->messages->getHistory(['peer' => '@VbazdidGir_post', 'offset_id' => 0, 'offset_date' => 0, 'add_offset' => 0, 'limit' => 2136000, 'max_id' => 0, 'min_id' => 0, 'hash' => 0 ]);
foreach($soltanview['messages'] as $message){
$id = $message['id'];
if(!file_exists("post/$id.txt")){
foreach($message['reply_markup']['rows'] as $row){
foreach($row['buttons'] as $button){
$mn = $button['text'];
if(strpos($mn,'ثبت') !== false){
$button->click();
file_put_contents("post/$id.txt","ok");
$MadelineProto->messages->sendMessage(['peer' => $chat_id, 'message' => "👻 سکه سلطان ویو گرفتم !!"]);
}}}}}
// @VbazdidGirads
$gemseen = $MadelineProto->messages->getHistory(['peer' => '@adsgemseen', 'offset_id' => 0, 'offset_date' => 0, 'add_offset' => 0, 'limit' => 195000, 'max_id' => 0, 'min_id' => 0, 'hash' => 0 ]);
foreach($gemseen['messages'] as $message){
$id = $message['id'];
if(!file_exists("post2/$id.txt")){
foreach($message['reply_markup']['rows'] as $row){
foreach($row['buttons'] as $button){
$mn = $button['text'];
if(strpos($mn,'دریافت') !== false){
$button->click();
file_put_contents("post2/$id.txt","ok");
$MadelineProto->messages->sendMessage(['peer' => $chat_id, 'message' => "👻 سکه جم سین گرفتم !!"]);
}}}}}
// @VbazdidGirads
$weview = $MadelineProto->messages->getHistory(['peer' => '@weViewers', 'offset_id' => 0, 'offset_date' => 0, 'add_offset' => 0, 'limit' => 6107000, 'max_id' => 0, 'min_id' => 0, 'hash' => 0 ]);
foreach($weview['messages'] as $message){
$id = $message['id'];
if(!file_exists("post3/$id.txt")){
foreach($message['reply_markup']['rows'] as $row){
foreach($row['buttons'] as $button){
$mn = $button['text'];
if(strpos($mn,'بازدید') !== false){
$button->click();
file_put_contents("post3/$id.txt","ok");
$MadelineProto->messages->sendMessage(['peer' => $chat_id, 'message' => "👻 سکه وی ویو گرفتم !!"]);
}}}}}
// @VbazdidGirads
$ibazdid = $MadelineProto->messages->getHistory(['peer' => '@ibazdidads', 'offset_id' => 0, 'offset_date' => 0, 'add_offset' => 0, 'limit' => 652600, 'max_id' => 0, 'min_id' => 0, 'hash' => 0 ]);
foreach($ibazdid['messages'] as $message){
$id = $message['id'];
if(!file_exists("post4/$id.txt")){
foreach($message['reply_markup']['rows'] as $row){
foreach($row['buttons'] as $button){
$mn = $button['text'];
if(strpos($mn,'ثبت') !== false){
$button->click();
file_put_contents("post4/$id.txt","ok");
$MadelineProto->messages->sendMessage(['peer' => $chat_id, 'message' => "👻 سکه آی بازدید گرفتم !!"]);
}}}}}
// @VbazdidGirads
$bazdid = $MadelineProto->messages->getHistory(['peer' => '@BazdidGirAdv', 'offset_id' => 0, 'offset_date' => 0, 'add_offset' => 0, 'limit' => 10078000, 'max_id' => 0, 'min_id' => 0, 'hash' => 0 ]);
foreach($bazdid['messages'] as $message){
$id = $message['id'];
if(!file_exists("post5/$id.txt")){
foreach($message['reply_markup']['rows'] as $row){
foreach($row['buttons'] as $button){
$mn = $button['text'];
if(strpos($mn,'کسب') !== false){
$button->click();
file_put_contents("post5/$id.txt","ok");
$MadelineProto->messages->sendMessage(['peer' => $chat_id, 'message' => "👻 سکه بازدیدگیر گرفتم"]);
}}}}}}}
// @VbazdidGirads
?>