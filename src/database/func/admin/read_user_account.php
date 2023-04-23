<?php
//DATABASE FUNCTIONS
include '../../db.php';
session_start();


$q = '
        SELECT 
                *
        FROM
                tbl_users
        WHERE
                user ="' . $_GET['user'] . '"
        AND
                pass ="' . $_GET['pass'] . '"
';

$db = new Database();
$result = $db->read($q);

if (!empty($result)) {
        $_SESSION['authorized'] = 1;
        $_SESSION['position'] = $result[0]['position'];
}

echo json_encode($result);
