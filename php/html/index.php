<?php
include('../src/functions.php');

for($i = 0; $i< 50; $I++) {
    $users[] = createUser();
}

file_put_contents('users.json', json_encode($users));

$data = file_get_contents('users.json');
$decodeUsers = json_decode($data, true);

$names = [];
$sumAge = 0;
foreach ($decodeUsers as $user) {
    if (isset($names[$user['name']])) {
        $names[$user['name']]++;
    } else {
        $names[user['name']] = 1;
    }
    $sumAge += $user['age'];
}

var_dump($names);
echo "средний возраст:" .($sumAge / sizeof($decodedUsers));