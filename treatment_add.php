<?php
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);



  date_default_timezone_set('Asia/Manila');


      $date = date("M d,Y H:i:s A");

 //$date = $_POST['date'];

$insert = $db->insert("treatment", [
   "cure"     => $_POST['cure'],
   "date" =>   $date,
   "disease"      => $_POST['disease']
]);

if($insert){
   ?>
      <script type="text/javascript">
         alert("Successfully Add");
         location.href="./";
      </script>
   <?php
}

?>