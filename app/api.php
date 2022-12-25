<?php


$response = [];

extract($_POST);

if (isset($_POST['username'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    if (! (mb_strlen($username) > 1 && $username)) {
        $response ['message']['username'] = 'too short name';
    }
}

if (isset($_POST['tel'])) {
    $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_SPECIAL_CHARS);

    if (!preg_match('/^(\+)?((\d{2,3}) ?\d|\d)(([ -]?\d)|( ?(\d{2,3}) ?)){5,12}\d$/', $tel)) {
        $response ['message']['tel'] = 'incorrect telephone number';
    }
}

$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

if (!isset($response['message'])) {
    require './mailer.php';
}

header("Content-Type: application/json; charset=utf-8");

echo json_encode($response);