<?php
//DATABASE FUNCTIONS
include '../../db.php';


$q = '
    DELETE FROM
        tbl_users
    WHERE
        id =:id
        
';

$d = [
    'id' => $_POST['id'],
];

$db = new Database();
$result = $db->update($q, $d);
