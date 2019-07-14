<?php
require 'app.php';

session_start();
if(isset($_SESSION['email'])){
    include 'public/header.php';
?>
<div ng-view>
    
   
</div>
<?php
    include 'public/footer.php';
}else{
    include 'public/head.php';
    
    include 'html/login.php';
    
    include 'public/footer.php';
}
