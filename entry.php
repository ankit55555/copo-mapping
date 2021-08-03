<html>
<head>
    <link rel="stylesheet" href="./form1.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
 <?php
    include "conn.php";

    $course_cd=htmlspecialchars($_POST['course_cd']);
    $course_nm=htmlspecialchars($_POST['course_nm']);
    $dept=htmlspecialchars($_POST['dept']);
    $sem=htmlspecialchars($_POST['sem']);
    $staff_nm=htmlspecialchars($_POST['staff_nm']);
    $cay=htmlspecialchars($_POST['cay']);
    $po1=serialize($_POST['po1']);
    $po2=serialize($_POST['po2']);
    $po3=serialize($_POST['po3']);
    $po4=serialize($_POST['po4']);
    $po5=serialize($_POST['po5']);
    $po6=serialize($_POST['po6']);
    $po7=serialize($_POST['po7']);
    $po8=serialize($_POST['po8']);
    $po9=serialize($_POST['po9']);
    $po10=serialize($_POST['po10']);
    $po11=serialize($_POST['po11']);
    $po12=serialize($_POST['po12']);
    $pso1=serialize($_POST['pso1']);
    $pso2=serialize($_POST['pso2']);
    $pso3=serialize($_POST['pso3']);
    $pso4=serialize($_POST['pso4']);
   
    $uid=$course_cd.$cay;
    $p1=$_POST['po1'];
    $p2=$_POST['po2'];
    $p3=$_POST['po3'];
    $p4=$_POST['po4'];
    $p5=$_POST['po5'];
    $p6=$_POST['po6'];
    $p7=$_POST['po7'];
    $p8=$_POST['po8'];
    $p9=$_POST['po9'];
    $p10=$_POST['po10'];
    $p11=$_POST['po11'];
    $p12=$_POST['po12'];
    $ps1=$_POST['pso1'];
    $ps2=$_POST['pso2'];
    $ps3=$_POST['pso3'];
    $ps4=$_POST['pso4'];



    $query="insert into copo (uid,course_cd,course_nm,staff_nm,dept,sem,cay,po1,po2,po3,po4,po5,po6,po7,po8,po9,po10,po11,po12,pso1,pso2,pso3,pso4) values ('$uid','$course_cd','$course_nm','$staff_nm','$dept','$sem','$cay','$po1','$po2','$po3','$po4','$po5','$po6','$po7','$po8','$po9','$po10','$po11','$po12','$pso1','$pso2','$pso3','$pso4');";

   $entry=mysqli_query($conn,$query);


  


    
  if(is_null($entry)){
            echo 'Could not enter data: ';
         }
  // else{ 

      
    //   header("Location: http://localhost/Project/form.php");
          
      //} 

  


 ?> 





<!-- Page Content -->

<div class=wrapp>
<div class="w3-container w3-teal">
  <h1>Justification mapping</h1>
</div>
<form action="just.php" method="post">
<div class="w3-container">
<table class="w3-table-all">
 <tr>
    <th>CO</th>
    <th style="width:150px">PO</th>
    <th style="width:150px">Level of mapping</th>
    <th>Justification</th>
 </tr>
 <tr>
     <td>CO1</td>
     <td>
        <table class="w3-table-all">
         <tr>
            <th>PO1</th>
        </tr>
         <tr>
            <th>PO2</th>
        </tr>
         <tr>
            <th>PO3</th>
        </tr>
         <tr>
            <th>PO4</th>
        </tr>
         <tr>
            <th>PO5</th>
        </tr>
         <tr>
            <th>PO6</th>
        </tr>
         <tr>
            <th>PO7</th>
        </tr>
         <tr>
            <th>PO8</th>
        </tr>
         <tr>
            <th>PO9</th>
        </tr>
         <tr>
            <th>PO10</th>
        </tr>
         <tr>
            <th>PO11</th>
        </tr>
         <tr>
            <th>PO12</th>
        </tr>
     </table>
     </td>
     <td>
         <table class="w3-table-all">
             <tr>
                 <th style="height:36px;"><?php echo $p1[0];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p2[0];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p3[0];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p4[0];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p5[0];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p6[0];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p7[0];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p8[0];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p9[0];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p10[0];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p11[0];?></th>
             </tr>
             <tr>
                <th style="height:36px;"><?php echo $p12[0];?></th>
             </tr>
         </table>
     </td>
     <td>
         <table class="w3-table w3-border" >
          <tr>
            <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc1[]" value=""></td>
          </tr>
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; margin:0; border:hidden;" type="text" name="jc1[]" value=""></td>
          </tr>
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc1[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc1[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc1[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc1[]" value=""></td>
          </tr>     
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc1[]" value=""></td>
          </tr>   
          <tr>
               <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc1[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc1[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc1[]" value=""></td>
          </tr>   
          <tr>
                <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc1[]" value=""></td>
          </tr>   
          <tr>
               <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc1[]" value=""></td>
          </tr>
         </table>
     </td>
 </tr>
<tr>

     <td>CO2</td>
     <td>
        <table class="w3-table-all">
         <tr>
            <th>PO1</th>
        </tr>
         <tr>
            <th>PO2</th>
        </tr>
         <tr>
            <th>PO3</th>
        </tr>
         <tr>
            <th>PO4</th>
        </tr>
         <tr>
            <th>PO5</th>
        </tr>
         <tr>
            <th>PO6</th>
        </tr>
         <tr>
            <th>PO7</th>
        </tr>
         <tr>
            <th>PO8</th>
        </tr>
         <tr>
            <th>PO9</th>
        </tr>
         <tr>
            <th>PO10</th>
        </tr>
         <tr>
            <th>PO11</th>
        </tr>
         <tr>
            <th>PO12</th>
        </tr>
     </table>
     </td>
     <td>
         <table class="w3-table-all">
             <tr>
                 <th style="height:36px;"><?php echo $p1[1];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p2[1];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p3[1];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p4[1];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p5[1];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p6[1];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p7[1];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p8[1];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p9[1];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p10[1];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p11[1];?></th>
             </tr>
             <tr>
                <th style="height:36px;"><?php echo $p12[1];?></th>
             </tr>
         </table>
     </td>
     <td>
         <table class="w3-table w3-border" >
          <tr>
            <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc2[]" value=""></td>
          </tr>
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; margin:0; border:hidden;" type="text" name="jc2[]" value=""></td>
          </tr>
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc2[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc2[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc2[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc2[]" value=""></td>
          </tr>     
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc2[]" value=""></td>
          </tr>   
          <tr>
               <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc2[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc2[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc2[]" value=""></td>
          </tr>   
          <tr>
                <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc2[]" value=""></td>
          </tr>   
          <tr>
               <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc2[]" value=""></td>
          </tr>
         </table>
     </td>
 </tr>
<tr>
     <td>CO3</td>
     <td>
        <table class="w3-table-all">
         <tr>
            <th>PO1</th>
        </tr>
         <tr>
            <th>PO2</th>
        </tr>
         <tr>
            <th>PO3</th>
        </tr>
         <tr>
            <th>PO4</th>
        </tr>
         <tr>
            <th>PO5</th>
        </tr>
         <tr>
            <th>PO6</th>
        </tr>
         <tr>
            <th>PO7</th>
        </tr>
         <tr>
            <th>PO8</th>
        </tr>
         <tr>
            <th>PO9</th>
        </tr>
         <tr>
            <th>PO10</th>
        </tr>
         <tr>
            <th>PO11</th>
        </tr>
         <tr>
            <th>PO12</th>
        </tr>
     </table>
     </td>
     <td>
         <table class="w3-table-all">
             <tr>
                 <th style="height:36px;"><?php echo $p1[2];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p2[2];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p3[2];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p4[2];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p5[2];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p6[2];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p7[2];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p8[2];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p9[2];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p10[2];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p11[2];?></th>
             </tr>
             <tr>
                <th style="height:36px;"><?php echo $p12[2];?></th>
             </tr>
         </table>
     </td>
     <td>
        <table class="w3-table w3-border" >
          <tr>
            <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc3[]" value=""></td>
          </tr>
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; margin:0; border:hidden;" type="text" name="jc3[]" value=""></td>
          </tr>
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc3[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc3[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc3[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc3[]" value=""></td>
          </tr>     
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc3[]" value=""></td>
          </tr>   
          <tr>
               <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc3[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc3[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc3[]" value=""></td>
          </tr>   
          <tr>
                <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc3[]" value=""></td>
          </tr>   
          <tr>
               <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc3[]" value=""></td>
          </tr>
         </table>
     </td>
 </tr>
<tr>
     <td>CO4</td>
     <td>
        <table class="w3-table-all">
         <tr>
            <th>PO1</th>
        </tr>
         <tr>
            <th>PO2</th>
        </tr>
         <tr>
            <th>PO3</th>
        </tr>
         <tr>
            <th>PO4</th>
        </tr>
         <tr>
            <th>PO5</th>
        </tr>
         <tr>
            <th>PO6</th>
        </tr>
         <tr>
            <th>PO7</th>
        </tr>
         <tr>
            <th>PO8</th>
        </tr>
         <tr>
            <th>PO9</th>
        </tr>
         <tr>
            <th>PO10</th>
        </tr>
         <tr>
            <th>PO11</th>
        </tr>
         <tr>
            <th>PO12</th>
        </tr>
     </table>
     </td>
     <td>
         <table class="w3-table-all">
             <tr>
                 <th style="height:36px;"><?php echo $p1[3];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p2[3];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p3[3];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p4[3];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p5[3];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p6[3];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p7[3];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p8[3];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p9[3];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p10[3];?></th>
             </tr>
             <tr>
                 <th style="height:36px;"><?php echo $p11[3];?></th>
             </tr>
             <tr>
                <th style="height:36px;"><?php echo $p12[3];?></th>
             </tr>
         </table>
     </td>
     <td>
        <table class="w3-table w3-border" >
          <tr>
            <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc4[]" value=""></td>
          </tr>
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; margin:0; border:hidden;" type="text" name="jc4[]" value=""></td>
          </tr>
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc4[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc4[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc4[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc4[]" value=""></td>
          </tr>     
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc4[]" value=""></td>
          </tr>   
          <tr>
               <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc4[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc4[]" value=""></td>
          </tr>   
          <tr>
              <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc4[]" value=""></td>
          </tr>   
          <tr>
                <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc4[]" value=""></td>
          </tr>   
          <tr>
               <td style="padding:3px;"><input style="height:29px; width:100%; border:hidden;" type="text" name="jc4[]" value=""></td>
          </tr>
         </table>
     </td>
 </tr>
     </table>
     </td></tr>

</tr>
  <input type=hidden name=course_cd value=<?php echo $course_cd;?>>
  <input type=hidden name=cay value=<?php echo $cay;?>>

</table>
</div>
<div class="w3-container w3-teal">
    <h3>
        <button class="w3-bar-item w3-button w3-right" type="submit" name="submit">Submit</button>
    </h3>
    
</div>
</form>
</div>
</body>
</html>