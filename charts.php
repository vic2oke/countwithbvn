<?php
require_once '../config/dbConnect.php'; // The mysql database connection script


$response = array();
    


//if(isset($_GET['genderchart'])){
    

$sql = "SELECT DISTINCT year FROM citizens ORDER BY year ASC ";
$res = mysqli_query($conn,$sql);
   
  

   
 
 while($row = mysqli_fetch_array($res)){ 
         
$year = $row['year'];
         
$marriedsql = $conn->query("SELECT * FROM citizens WHERE status = 'Married' AND year = '$year' ");
$singlesql = $conn->query("SELECT * FROM citizens WHERE status = 'Single' AND year = '$year' ");
$cntmarried = mysqli_num_rows($marriedsql);
$cntsingles = mysqli_num_rows($singlesql);

$malesql = $conn->query("SELECT * FROM citizens WHERE sex = 'Male' AND year = '$year' ");
$femalesql = $conn->query("SELECT * FROM citizens WHERE sex = 'Female' AND year = '$year' ");
$cntmale = mysqli_num_rows($malesql);
$cntfemale = mysqli_num_rows($femalesql);

$cntcars = 0;
$carsql = $conn->query("SELECT * FROM citizens WHERE cars > 0 AND year = '$year' ");
while($rowc = mysqli_fetch_array($carsql)){
$cntcars = $cntcars + $rowc['cars'];
}

$cnthuz = 0;
$huzsql = $conn->query("SELECT * FROM citizens WHERE houses > 0 AND year = '$year' ");
while($rowh = mysqli_fetch_array($huzsql)){
$cnthuz = $cntcars + $rowh['houses'];
}

$cntbiz = 0;
$bizsql = $conn->query("SELECT * FROM citizens WHERE businesses > 0 AND year = '$year' ");
while($rowb = mysqli_fetch_array($bizsql)){
$cntbiz = $cntcars + $rowb['businesses'];
}



 array_push($response,array(
      'year' => $year,
      'cntmale' => $cntmale,
      'cntfemale' => $cntfemale,
      'cntmarried' => $cntmarried,
      'cntsingles' => $cntsingles,
      'cntcars' => $cntcars,
      'cnthuz' => $cnthuz,
      'cntbiz' => $cntbiz,
      'cntpop' => $cntfemale + $cntmale
      ));
 
  }
 echo json_encode($response);

// }