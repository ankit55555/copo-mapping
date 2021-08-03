<!DOCTYPE html>
<html charset="UTF-8">
<head>
  <title>CO-PO-Mapping</title>
  <link rel="stylesheet" href="stylesheet.css"> 
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <script src=base.js></script>
	
</head>
<body>
<h3 class="w3-bar">
  <a href="http://localhost/Project/reports.php" class="w3-bar-item w3-button w3-right">reports</a> 
  <a href="http://localhost/Project/form.php" class="w3-bar-item w3-button w3-right">co-po</a>

</h3><br>
<?php
    include "conn.php";


    $dept=$_GET["dept"];
    $cay=$_GET['cay'];
    $staff_nm=urldecode($_GET["staff_nm"]);
    $course_cd=$_GET["course_cd"];
    $arr=array("dept"=>$dept,'cay'=>$cay,'course_cd'=>$course_cd,'staff_nm'=>$staff_nm);
    $arr=array_filter($arr);
    $a=array_keys($arr);
    $arr=array_values($arr);
    $count=count($arr);

    if($count==1){
      
      $query="select * from copo where $a[0]='$arr[0]' order by sem;";
    

    }
    else if($count==2){
      $query="select * from copo where $a[0]='$arr[0]' and $a[1]='$arr[1]' order by sem;";
   

    }
    else if($count==3){
      $query="select * from copo where $a[0]='$arr[0]' and $a[1]='$arr[1]' and $a[2]='$arr[2]' order by sem;";
    

    }
    else{
      $query="select * from copo where $a[0]='$arr[0]' and $a[1]='$arr[1]' and $a[2]='$arr[2]' and $a[3]='$arr[3]' order by sem;";
    
    }

    $result=mysqli_query($conn,$query);
    if(!$result){
     header("Location: http://localhost/Project/reports.php");
    }
    mysqli_close($conn);

     $emp=array();
    while($row = mysqli_fetch_array($result)){

 
       $po1=unserialize($row[7]);
       $po2=unserialize($row[8]);
       $po3=unserialize($row[9]);
       $po4=unserialize($row[10]);
       $po5=unserialize($row[11]);
       $po6=unserialize($row[12]);
       $po7=unserialize($row[13]);
       $po8=unserialize($row[14]);
       $po9=unserialize($row[15]);
       $po10=unserialize($row[16]);
       $po11=unserialize($row[17]);
       $po12=unserialize($row[18]);
       $pso1=unserialize($row[19]);
       $pso2=unserialize($row[20]);
       $pso3=unserialize($row[21]);
       $pso4=unserialize($row[22]);
       $course=$row[1];
       $sem=$row[5];
       $year=$row[6];
       $year1=$year+1;
       $course_nm=$row[2];
       $staff=$row[3];
       $jus=$course.$year;
       $a1=array_sum($po1)/4;
       $a2=array_sum($po2)/4;
       $a3=array_sum($po3)/4;
       $a4=array_sum($po4)/4;
       $a5=array_sum($po5)/4;
       $a6=array_sum($po6)/4;
       $a7=array_sum($po7)/4;
       $a8=array_sum($po8)/4;
       $a9=array_sum($po9)/4;
       $a10=array_sum($po10)/4;
       $a11=array_sum($po11)/4;
       $a12=array_sum($po12)/4;
       $a13=array_sum($pso1)/4;
       $a14=array_sum($pso2)/4;
       $a15=array_sum($pso3)/4;
       $a16=array_sum($pso4)/4;
      echo '
      <div class=w3-container>
      <div class="w3-card w3-third w3-pale-green">
      
      
      <button class="w3-button w3-teal w3-right" name='.$jus.' onclick=XaD("'.$jus.'")>Justification</button>
      
     
      <h2>&nbsp;course code : '.$course.'</h2>
      <pre>     staff name  : '.$staff.'</pre>
      <pre>     course name : '.$course_nm.'</pre>
      <pre>     Sem         : '.$sem.'</pre>
      <pre>     year        : 20'.$year.'-'.'20'.$year1.'</pre>
      </div>
      <div class=w3-card w3-twothird>
      <div id='.$jus.'>


      </div>
      </div>
      </div><br><br>
      
      <table name="tbl" class="copo" border="1">
        <tr>
          <th></th>
          <th>po1</th>
          <th>po2</th>
          <th>po3</th>
          <th>po4</th>
          <th>po5</th>
          <th>po6</th>
          <th>po7</th>
          <th>po8</th>
          <th>po9</th>
          <th>po10</th>
          <th>po11</th>
          <th>po12</th>
          <th>pso1</th>
          <th>pso2</th>
          <th>pso3</th>
          <th>pso4</th>
        </tr>
        
        <tr>
            <th>co1</th>
            <td>'.$po1[0].'</td>
            <td>'.$po2[0].'</td>
            <td>'.$po3[0].'</td>
            <td>'.$po4[0].'</td>
            <td>'.$po5[0].'</td>
            <td>'.$po6[0].'</td>
            <td>'.$po7[0].'</td>
            <td>'.$po8[0].'</td>
            <td>'.$po9[0].'</td>
            <td>'.$po10[0].'</td>
            <td>'.$po11[0].'</td>
            <td>'.$po12[0].'</td>
            <td>'.$pso1[0].'</td>
            <td>'.$pso2[0].'</td>
            <td>'.$pso3[0].'</td>
            <td>'.$pso4[0].'</td>

          
            
        </tr>
        <tr>
            <th>co2</th>
           <td>'.$po1[1].'</td>
            <td>'.$po2[1].'</td>
            <td>'.$po3[1].'</td>
            <td>'.$po4[1].'</td>
            <td>'.$po5[1].'</td>
            <td>'.$po6[1].'</td>
            <td>'.$po7[1].'</td>
            <td>'.$po8[1].'</td>
            <td>'.$po9[1].'</td>
            <td>'.$po10[1].'</td>
            <td>'.$po11[1].'</td>
            <td>'.$po12[1].'</td>
            <td>'.$pso1[1].'</td>
            <td>'.$pso2[1].'</td>
            <td>'.$pso3[1].'</td>
            <td>'.$pso4[1].'</td>
        </tr>
        <tr>
            <th id="co3">co3</th>
            <td>'.$po1[2].'</td>
            <td>'.$po2[2].'</td>
            <td>'.$po3[2].'</td>
            <td>'.$po4[2].'</td>
            <td>'.$po5[2].'</td>
            <td>'.$po6[2].'</td>
            <td>'.$po7[2].'</td>
            <td>'.$po8[2].'</td>
            <td>'.$po9[2].'</td>
            <td>'.$po10[2].'</td>
            <td>'.$po11[2].'</td>
            <td>'.$po12[2].'</td>
            <td>'.$pso1[2].'</td>
            <td>'.$pso2[2].'</td>
            <td>'.$pso3[2].'</td>
            <td>'.$pso4[2].'</td>
        </tr>
        <tr>
            <th id="co4" value="co4">co4</th>
            <td>'.$po1[3].'</td>
            <td>'.$po2[3].'</td>
            <td>'.$po3[3].'</td>
            <td>'.$po4[3].'</td>
            <td>'.$po5[3].'</td>
            <td>'.$po6[3].'</td>
            <td>'.$po7[3].'</td>
            <td>'.$po8[3].'</td>
            <td>'.$po9[3].'</td>
            <td>'.$po10[3].'</td>
            <td>'.$po11[3].'</td>
            <td>'.$po12[3].'</td>
            <td>'.$pso1[3].'</td>
            <td>'.$pso2[3].'</td>
            <td>'.$pso3[3].'</td>
            <td>'.$pso4[3].'</td>
        </tr>
        <tr>
          <th id="avg" value="avg">avg</th>
          <td>'.$a1.'</td>
            <td>'.$a2.'</td>
            <td>'.$a3.'</td>
            <td>'.$a4.'</td>
            <td>'.$a5.'</td>
            <td>'.$a6.'</td>
            <td>'.$a7.'</td>
            <td>'.$a8.'</td>
            <td>'.$a9.'</td>
            <td>'.$a10.'</td>
            <td>'.$a11.'</td>
            <td>'.$a12.'</td>
            <td>'.$a13.'</td>
            <td>'.$a14.'</td>
            <td>'.$a15.'</td>
            <td>'.$a16.'</td>

        </tr>
      </table>
      <br><br>
      
      ';
      $check=array_push($emp,"1");
     }
   ;
    
  if(is_null($check)){
    header("Location: http://localhost/Project/reports.php");
  }

 





 //Justification:-
 


    
  ?>
</body>
	

</html>