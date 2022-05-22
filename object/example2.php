<?php

include_once __DIR__ . '/../timeExecution.php';
$timeStart = timeExecution::start();

function getUser()
{
    $users = [];
    for ($i = 0; $i < 1000000; $i++) {
        $user = [
            'name' => 'name' . $i,
            'lastname' => 'lastname' . $i,
            'age' => $i
        ];
        $users[] = $user;
    }

    return $users;
}
// To do something with $users variable
$users = getUser();
foreach ($users as $user) {
    if (1000000 === $user['age']) {
        break;
    }
}

timeExecution::end($timeStart);
