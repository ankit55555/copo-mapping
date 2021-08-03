<html>
<head>
			<?php

		include 'conn.php';

		

	
		$course_cd=$_POST['course_cd'];
		$cay=$_POST["cay"];
		$jc1=serialize($_POST['jc1']);
   		$jc2=serialize($_POST['jc2']);
    	$jc3=serialize($_POST['jc3']);
    	$jc4=serialize($_POST['jc4']);
    	$uid=$course_cd.$cay;
		
	


        $q="insert into justify (uid,course_cd,jc1,jc2,jc3,jc4) values ('$uid','$course_cd','$jc1','$jc2','$jc3','$jc4');";
        $e=mysqli_query($conn,$q);

if(is_null($e)){
             echo 'Could not enter data: ';
         }
    else{ 

      
         header("Location: http://localhost/Project/form.php");
          
       } 


 ?> 
</head>

<body></body>

</html>