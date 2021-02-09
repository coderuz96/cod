<?php
header('Content-Type: application/json', FALSE);

copy('https://getcomposer.org/installer', 'composer-setup.php');

include 'composer-setup.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

try {
    $chat =  $MadelineProto->getPwrChat($_GET['user']);
    $MadelineProto->echo (json_encode($chat, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
} catch (Exception $e) {
    print_r($e);
}
