<?php

// @VbazdidGirads
error_reporting(0);
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
define('MADELINE_BRANCH', 'deprecated');
include 'madeline.php';
function closeConnection($message = '✅ Clicker Is Running ... @VbazdidGirads')
{
    if (php_sapi_name() === 'cli' || isset($GLOBALS['exited'])) {
        return;
    }
    @ob_end_clean();
    header('Connection: close');
    ignore_user_abort(true);
    ob_start();
    echo "$message";
    $size = ob_get_length();
    header("Content-Length: $size");
    header('Content-Type: text/html');
    ob_end_flush();
    flush();
    $GLOBALS['exited'] = true;
}
function shutdown_function($lock)
{
    $a = fsockopen((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] ? 'tls' : 'tcp') . '://' . $_SERVER['SERVER_NAME'], $_SERVER['SERVER_PORT']);
    fwrite($a, $_SERVER['REQUEST_METHOD'] . ' ' . $_SERVER['REQUEST_URI'] . ' ' . $_SERVER['SERVER_PROTOCOL'] . "\r\n" . 'Host: ' . $_SERVER['SERVER_NAME'] . "\r\n\r\n");
    flock($lock, LOCK_UN);
    fclose($lock);
}
if (!file_exists('bot.lock')) {
    touch('bot.lock');
}
$lock = fopen('bot.lock', 'r+');
$try = 1;
$locked = false;
while (!$locked) {
    $locked = flock($lock, LOCK_EX | LOCK_NB);
    if (!$locked) {
        closeConnection();

        if ($try++ >= 20) {
            continue;
        }
        sleep(0.5);
    }
}
 
$settings = ['logger'=>['logger'=>0],'app_info'=> ['api_id'=>575238,'api_hash'=> 'a90de900f4d398925565835ce37fa91e']];
$MadelineProto = new \danog\MadelineProto\API('soltan.madeline',$settings);
$MadelineProto->start();
$offset = 0;
register_shutdown_function('shutdown_function', $lock);
closeConnection();
while (true) {
    $updates = $MadelineProto->get_updates(['offset' => $offset, 'limit' => 50, 'timeout' => 0]);
    \danog\MadelineProto\Logger::log($updates);
    foreach ($updates as $update) {
   $offset = $update['update_id'] + 1;
        $up = $update['update']['_'];
        if ($up == 'updateNewMessage' or $up == 'updateNewChannelMessage') {
            $chat_id = $MadelineProto->get_info($update['update'])['bot_api_id'];
            $from_id = $update['update']['message']['from_id'];
            $text = $update['update']['message']['message'];
            $message_id = $update['update']['message']['id'];
            try {
                require 'plugin.php';
            } catch (\danog\MadelineProto\RPCErrorException $e) {
                $e->getMessage() . PHP_EOL . $e->getTraceAsString();
            }
        }
    }
}
// @VbazdidGirads
?>
