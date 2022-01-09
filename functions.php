<?php
ob_start();
//if user login already reddirect user 
function redirectisuserlogin()
{
   if (isset($_SESSION['userlogin']) && $_SESSION['userlogin'] == 'OK') {
      header('location:admin');
   }
}

function edituser($db, $editname, $department, $id)
{
   $query = 'update admin SET name= ?, department = ? where adminID= ? ';
   $stmt = $db->stmt_init();
   $stmt = $db->prepare($query) or exit('Query Error.' . $db->errno);
   @$stmt->bind_param('ssi', $editname, $department, $id) or exit('Bind Param Error.');
   $stmt->execute() or exit('Query Execution failed.' . $db->errno);
   if (mysqli_affected_rows($db) == 1) {
      mysqli_close($db);
      header('Location:logout');
      exit();
   } else {
      echo "Error With Updated!";
   }
}

function getuser($db, $username)
{
   $query = 'select * from admin where username=?';
   $stmt = $db->stmt_init();
   $stmt->prepare($query) or exit('Query Error.' . $db->errno);
   @$stmt->bind_param('s', trim($username)) or exit('Bind Param Error.');
   $stmt->execute() or exit('Query Execution failed.' . $db->errno);
   $r = $stmt->get_result();

   while ($rec = $r->fetch_assoc()) {
      return $rec;
   }
}



function searchPeople($db, $name, $slc, $tt)
{

   $query = 'select * from ' . $tt . ' where ' . $slc . '_name like "%' . $name . '%"';
   $r = $db->query($query);
   return $r;
}

function personDetail($db, $personId, $slc, $tt)
{

   $query = 'select * from ' . $tt . ' where ' . $slc . '_id= ? ';

   $stmt = $db->stmt_init();
   $stmt->prepare($query) or exit('Query Error.' . $db->errno);
   @$stmt->bind_param('i', trim($personId)) or exit('Bind Param Error.');
   $stmt->execute() or exit('Query Execution failed.' . $db->errno);
   $r = $stmt->get_result();
   while ($rec = $r->fetch_assoc()) {

      if ($rec[$slc . '_show'] == 1) {
         return $rec;
      } else {

         echo "<script type='text/javascript'>alert('There is person is not avaible in the system!'); window.location = '../';</script>";
      }
   }
}

//Index Page carousel --------

function homempdetail($db)
{
   $query = 'select * from missingpeople where mp_id IN(' . rand(0, 3) . ',' . rand(3, 4) . ',' . rand(5, 6) . ')';
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

function homecpdetail($db)
{
   $query = 'select * from criminalpeople where cp_id IN(' . rand(0, 3) . ',' . rand(3, 4) . ',' . rand(5, 6) . ')';
   $stmt = $db->stmt_init();
   $stmt->prepare($query) or exit('Query Error.' . $db->errno);
   $stmt->execute() or exit('Query Execution failed.' . $db->errno);
   $r = $stmt->get_result();
   return $r;
}

function  delete($db, $userID, $tt, $slc)
{

   $query = 'DELETE FROM ' . $tt . ' where ' . $slc . '_id= ? ';
   $st = mysqli_stmt_init($db);
   mysqli_stmt_prepare($st, $query) or exit('Query error');

   @mysqli_stmt_bind_param($st, 's', $userID) or exit('Binding error');
   mysqli_stmt_execute($st); // omitted or exit('Query execution failed');

   if (mysqli_affected_rows($db) > 0) {
      echo "<script type='text/javascript'>alert('succesfully deleted'); window.top.location='admin.php';</script>";
      exit;
   } else {
      echo "Error in delete<br/>";
   }
}


function sendForm($db, $select, $reporter, $reporteremail, $phone, $name, $age, $contact, $details, $photo, $publish)
{
   $show = 0;
   if ($publish == 'on') {
      $show = 1;
   }
   $slc = ($select == 'missingpeople') ? 'mp' : 'cp';

   $date = date("Y/m/d");

   $query = 'INSERT INTO `' . $select . '` (`' . $slc . '_reporter`, `' . $slc . '_reportermail`, `' . $slc . '_phone`, `' . $slc . '_name`, `' . $slc . '_age`, `' . $slc . '_contact`, `' . $slc . '_details`, `' . $slc . '_photos`, `' . $slc . '_show`, `' . $slc . '_date`) VALUES (?,?,?,?,?,?,?,?,?,?)';

   $stmt = $db->stmt_init();
   $stmt->prepare($query) or exit('Query Error.' . $db->errno);
   $stmt->bind_param('ssssssssis', $reporter, $reporteremail, $phone, $name, $age, $contact, $details, $photo, $show, $date) or exit('Bind Param Error.');
   $stmt->execute() or exit('Query Execution failed.' . $db->errno);
   if ($stmt->affected_rows > 0) {
      return true;
   }
   $stmt->close();
   $db->close();
}

function getperson($db, $id, $slc)
{
   $tt = ($slc == 'mp') ? 'missingpeople' : 'criminalpeople';

   $query = 'select * from ' . $tt . ' where ' . $slc . '_id=?';

   $stmt = $db->stmt_init();
   $stmt->prepare($query) or exit('Query Error.' . $db->errno);
   @$stmt->bind_param('i', trim($id)) or exit('Bind Param Error.');
   $stmt->execute() or exit('Query Execution failed.' . $db->errno);
   $r = $stmt->get_result();

   while ($rec = $r->fetch_assoc()) {
      return $rec;
   }
}

function updateperson($db, $slc, $publish, $id)
{
   $show = 0;
   if ($publish == 'on') {
      $show = 1;
   }
   $slc = ($slc == 'mp') ? 'mp' : 'cp';
   $tt = ($slc == 'mp') ? 'missingpeople' : 'criminalpeople';

   $query = 'UPDATE `' . $tt . '` SET `' . $slc . '_show`=? WHERE `' . $slc . '_id`=?';
   $stmt = $db->stmt_init();
   $stmt->prepare($query) or exit('Query Error.' . $db->errno);
   $stmt->bind_param('ii', $show, $id) or exit('Bind Param Error.');
   $stmt->execute() or exit('Query Execution failed.' . $db->errno);
   if ($stmt->affected_rows > 0) {
      return true;
   }
   $stmt->close();
   $db->close();
}


ob_end_flush();
