<?php

function searchPeople($db, $name, $slc, $tt) {
    
$query = 'select * from '. $tt .' where '.$slc.'_name  like ?';
$name = '%'.$name."%";
$stmt = $db->stmt_init();
$stmt->prepare($query) or exit('Query Error.' . $db->errno);
@$stmt->bind_param('s', trim($name)) or exit('Bind Param Error.');
$stmt->execute() or exit('Query Execution failed.' . $db->errno);
$r = $stmt->get_result();
return $r;
}

function personDetail($db, $personId, $slc, $tt) {

    $query = 'select * from '.$tt.' where '.$slc.'_id= ? ';

    $stmt = $db->stmt_init();
    $stmt->prepare($query) or exit('Query Error.' . $db->errno);
    @$stmt->bind_param('i', trim($personId)) or exit('Bind Param Error.');
    $stmt->execute() or exit('Query Execution failed.' . $db->errno);
    $r = $stmt->get_result();
    while ($rec = $r->fetch_assoc()) {
       return $rec;
    }
 }


 //Index Page carousel --------

function homempdetail($db) {
    $query = 'select * from missingpeople where mp_id IN('.rand(0,3).','.rand(3,4).','.rand(5,6).')';
    $stmt = $db->stmt_init();
    $stmt->prepare($query) or exit('Query Error.' . $db->errno);
    $stmt->execute() or exit('Query Execution failed.' . $db->errno);
    $r = $stmt->get_result();

  /*  $rowcount = mysqli_num_rows( $r );
    printf("Total rows in this table :  %d\n", $rowcount); */

   /* while ($rec = $r->fetch_assoc()) {
        return $rec;
    }  */
    return $r;
 }
 
function homecpdetail($db) {
   $query = 'select * from criminalpeople where cp_id IN('.rand(0,3).','.rand(3,4).','.rand(5,6).')';
   $stmt = $db->stmt_init();
   $stmt->prepare($query) or exit('Query Error.' . $db->errno);
   $stmt->execute() or exit('Query Execution failed.' . $db->errno);
   $r = $stmt->get_result();
   return $r;
   

}
 ?>