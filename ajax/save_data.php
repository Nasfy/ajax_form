<?php

include '../db/connect_db.php';
include '../db/save_db.php';

$dbhost = 'localhost';
$dbuser = 'Anastasiia';
$dbpass = '000000';
$dbname = 'Ajax_form';

$data = array($_POST["username"], $_POST["email"], $_POST["phone"], $_POST["message"]);

function dataValidate($data) {
    $validate = TRUE;
    if (!ctype_alnum($data[0])) {
        echo "Username is only alphanumeric characters.\n";
        $validate = FALSE;
    }
    if (!filter_var($data[1], FILTER_VALIDATE_EMAIL)) {
        echo "E-mail  '$data[1]' is not correct.\n";
        $validate = FALSE;
    }
    if(!preg_match("/^[0-9]{3}-[0-9]{2}-[0-9]{2}-[0-9]{3}$/", $data[2])) {
        echo "Phone number '$data[2]' is not correct. Use XXX-XX-XX-XXX. \n";
        $validate = FALSE;
    }
    return $validate;
}

$success = dataValidate($data);

if ($success) {
    $db = new Database($dbhost, $dbuser, $dbpass, $dbname);
    $info = new Data($db);
    $info->putDb($data);
    $info->putFile($data);
    $db->close();
}
else {
    echo $success;
}
