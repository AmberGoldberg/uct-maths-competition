 <?php
 include("header.php");
 
 if($school_submitted) {
	include("submitted.inc.php");
 }
 else {
	include("teachers.inc.php");
	include("buttons.php");
 }
  echo $page;
 
 include("footer.php"); 
 ?>