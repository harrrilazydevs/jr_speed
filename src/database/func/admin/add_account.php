<?php
//DATABASE FUNCTIONS
include '../../db.php';


$q = '
        INSERT INTO
            tbl_users(user,pass,position,email,contact,fname,lname)
        VALUES
            (:user,:pass,:position,:email,:contact,:fname,:lname)
        
';

$d = [
    'user' => $_POST['user'],
    'pass' => $_POST['pass'],
    'position' => $_POST['position'],
    'email' => $_POST['email'],
    'contact' => $_POST['contact'],
    'fname' => $_POST['fname'],
    'lname' => $_POST['lname'],
];

$db = new Database();
$result = $db->update($q, $d);
