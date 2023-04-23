<?php
//DATABASE FUNCTIONS
include '../../db.php';


$q = '
        UPDATE
            tbl_users
        SET
            user = :user,
            pass = :pass,
            position = :position,
            email = :email,
            contact = :contact,
            fname = :fname,
            lname = :lname
        WHERE
            id = :id
        
';

$d = [
    'user' => $_POST['user'],
    'pass' => $_POST['pass'],
    'position' => $_POST['position'],
    'email' => $_POST['email'],
    'contact' => $_POST['contact'],
    'fname' => $_POST['fname'],
    'lname' => $_POST['lname'],
    'id' => $_POST['id']
];

$db = new Database();
$result = $db->update($q, $d);