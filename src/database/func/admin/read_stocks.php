<?php
//DATABASE FUNCTIONS
include '../../db.php';


$q = '
        SELECT 
               A.id,
               product_id,
               stock_count,
               low_stock_indicator,
               name	
        FROM
                tbl_stocks A
        LEFT JOIN    
                tbl_products B
        ON      
                B.id = A.product_id
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
