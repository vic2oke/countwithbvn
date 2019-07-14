<?php
require_once '../config/dbConnect.php'; // The mysql database connection script


if(isset($_GET['getCitizen']) && isset($_GET['bvn'])){
    $bvn = $_GET['bvn'];
    getCitizen($conn, $bvn);
}


function getCitizen($conn,$bvn){

$response = array();

$sql = "SELECT * FROM citizens WHERE bvn = '$bvn' ORDER BY id DESC";
$res = mysqli_query($conn,$sql);
$cnt = mysqli_num_rows($res);

if($res){
    while($row = mysqli_fetch_array($res)){
    
    $id = $row['id']; 
    $image = $row['image']; 
    $bvn = $row['bvn']; 
    $lname = $row['lname']; 
    $fname = $row['fname']; 
    $othernames = $row['othernames']; 
    $sex = $row['sex']; 
    $status = $row['status']; 
    $byear = $row['byear'];  
    $placeofbirth = $row['placeofbirth']; 
    $fatheoccupation = $row['fatheroccupation']; 
    $motheroccupation = $row['motheroccupation']; 
    $malekids = $row['malekids']; 
    $femalekids = $row['femalekids']; 
    $stateoforigin = $row['stateoforigin']; 
    $lgaoforigin = $row['lgaoforigin']; 
    $stateofres = $row['stateofres']; 
    $lgaofres = $row['lgaofres']; 
    $cars = $row['cars']; 
    $houses = $row['houses']; 
    $businesses = $row['businesses']; 

    array_push($response,array(
      'id' => $id, 
      'image' => $image,   
      'bvn' => $bvn,
      'lname' => $lname,   
      'fname' => $fname,
      'othernames'=> $othernames,
      'sex'=> $sex,
      'status'=> $status,
      'byear' => $byear,   
      'placeofbirth' => $placeofbirth,
      'fatheroccupation' => $fatheoccupation,   
      'motheroccupation' => $motheroccupation,
      'stateoforigin'=> $stateoforigin,
      'lgaoforigin'=> $lgaoforigin,
      'stateofres'=> $stateofres,
      'lgaofres'=> $lgaofres,
      'cars'=> $cars,
      'houses'=> $houses,
      'businesses'=> $businesses
      ));
    }      
    
    echo $json_response = json_encode($response);

}

}


	
if(!empty($_FILES['image']) 
        && isset($_POST['bvn']) 
        && isset($_POST['lname'])
        && isset($_POST['fname'])
        && isset($_POST['othernames'])
        && isset($_POST['sex'])
        && isset($_POST['status'])
        && isset($_POST['byear'])
        && isset($_POST['placeofbirth'])
        && isset($_POST['fatheroccupation'])
        && isset($_POST['motheroccupation'])
        && isset($_POST['malekids'])
        && isset($_POST['femalekids'])
        && isset($_POST['stateoforigin'])
        && isset($_POST['lgaoforigin'])
        && isset($_POST['stateofres'])
        && isset($_POST['lgaofres'])
        && isset($_POST['cars'])
        && isset($_POST['houses'])
        && isset($_POST['businesses'])){

    $date = date("Y-m-d h:i:sa");
    $bvn = $_POST['bvn'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $othername = $_POST['othernames'];
    $sex = $_POST['sex'];    
    $status = $_POST['status'];    
    $byear = $_POST['byear'];
    $placeofbirth = $_POST['placeofbirth'];
    $fatheroccupation= $_POST['fatheroccupation'];
    $motheroccupation = $_POST['motheroccupation'];
    $malekids = $_POST['malekids'];
    $femalekids = $_POST['femalekids'];
    $stateoforigin = $_POST['stateoforigin'];
    $lgaoforigin = $_POST['lgaoforigin'];
    $stateofres= $_POST['stateofres'];
    $lgaofres = $_POST['lgaofres'];
    $cars = $_POST['cars'];
    $houses = $_POST['houses'];
    $bussinesses = $_POST['businesses'];
    
    $maxSize = 100000000000;        
    $fileSize = $_FILES["image"]["size"];
    $allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "JPEG", "GIF", "PNG");
      
    $ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
//    
if(($fileSize < $maxSize && in_array($ext, $allowedExts))){
//        
switch($ext){
case 1: $fileExt = "jpg";
break;
case 2: $fileExt = "jpeg";
break;
case 3: $fileExt = "gif";
break;
case 4: $fileExt = "png";
break;
case 5: $fileExt = "JPG";
break;
case 6: $fileExt = "JPEG";
break;
case 7: $fileExt = "GIF";
break;
case 8: $fileExt = "PNG";
break;
}


$image = time().'.'.$ext;
$actualpath = "http://localhost/countwithbvn/uploads/$image";
$year = date("Y");

$select = $conn->query("selcet * from citizens where bvn = '$bvn' and year = '$year' ");
$cnt = mysqli_num_rows($select);
  

if($cnt == 0){
        $insert = $conn->query("INSERT INTO citizens (bvn,image,fname,lname,othernames,status,sex,byear,placeofbirth,fatheroccupation,
                motheroccupation,malekids,femalekids,stateoforigin,lgaoforigin,stateofres,lgaofres,cars,houses,businesses,year) 
                VALUES ('$bvn','$actualpath','$fname','$lname','$othername','$status','$sex','$byear','$placeofbirth',
                 '$fatheroccupation','$motheroccupation','$malekids','$femalekids','$stateoforigin','$lgaoforigin','$stateofres','$lgaofres','$cars','$houses','$bussinesses','$year') ");
//         
            if($insert){
               if(move_uploaded_file($_FILES["image"]["tmp_name"], '../uploads/'.$image)){
                   echo 1;
               }
            }
}  
      
    }           
}

















if(isset($_GET['getJobs'])){
    getJobs($conn);
}

function getJobs($conn){
$response = array();  

$select = $conn->query("SELECT * FROM jobs ORDER BY job_id DESC");
$cnt = mysqli_num_rows($select);

if($cnt > 0){    
while($row = mysqli_fetch_array($select)){
    $jobId = $row['job_id'];
    $jobtitle = $row['job_title'];
    $jobdesc = $row['job_desc'];
    $status = $row['status'];
    $date = $row['date'];
  
    if($status == null){
        $status = 0;
    }
    
    array_push($response, array(
           'id' => $jobId,
           'jobtitle' => $jobtitle,
           'jobdesc' => $jobdesc,
           'date' => $date,
           'status' => $status
        ));
}
    echo json_encode($response);
}
}



