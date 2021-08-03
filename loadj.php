<!DOCTYPE html>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<head>
	<link rel="stylesheet" href="./form1.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<?php
include "conn.php";
 $uid=$_GET['t'];

 $query="select justify.uid,justify.jc1,justify.jc2,justify.jc3,justify.jc4,copo.po1,copo.po2,copo.po3,copo.po4,copo.po5,copo.po6,copo.po7,copo.po8,copo.po9,copo.po10,copo.po11,copo.po12,copo.pso1,copo.pso2,copo.pso3,copo.pso4 from justify inner join copo on copo.uid=justify.uid and justify.uid='$uid'";

$result=mysqli_query($conn,$query);
    if(!$result){
    echo "Not Found";
    }


$row = mysqli_fetch_array($result);


 $jc1=unserialize($row[1]); 
 $jc2=unserialize($row[2]); 
 $jc3=unserialize($row[3]); 
 $jc4=unserialize($row[4]); 

  


$p1=unserialize($row[5]); 
$p2=unserialize($row[6]); 
$p3=unserialize($row[7]); 
$p4=unserialize($row[8]); 
$p5=unserialize($row[9]); 
$p6=unserialize($row[10]);
$p7=unserialize($row[11]); 
$p8=unserialize($row[12]); 
$p9=unserialize($row[13]); 
$p10=unserialize($row[14]); 
$p11=unserialize($row[15]); 
$p12=unserialize($row[16]); 
$ps1=unserialize($row[17]); 
$ps2=unserialize($row[18]); 
$ps3=unserialize($row[19]); 
$ps4=unserialize($row[20]); 



?>


<div class="w3-container">
<table class="w3-table-all">
 <tr>
    <th>CO</th>
    <th style="width:50px">PO</th>
    <th style="width:50px">Level of mapping</th>
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
         <table class="w3-table w3-stripped">
             <tr>
                 <th style="height:37px;"><?php echo $p1[0];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p2[0];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p3[0];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p4[0];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p5[0];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p6[0];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p7[0];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p8[0];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p9[0];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p10[0];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p11[0];?></th>
             </tr>
             <tr>
                <th style="height:37px;"><?php echo $p12[0];?></th>
             </tr>
         </table>
     </td>
     <td>
         <table class="w3-table w3-border" >
          <tr>
            <td style="padding:3px; height:36px; width:100%;"><?php echo $jc1[0]?></td>
          </tr>
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc1[1]?></td>
          </tr>
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc1[2]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc1[3]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc1[4]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc1[5]?></td>
          </tr>     
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc1[6]?></td>
          </tr>   
          <tr>
               <td style="padding:3px; height:36px; width:100%;"><?php echo $jc1[7]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc1[8]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc1[9]?></td>
          </tr>   
          <tr>
                <td style="padding:3px; height:36px; width:100%;"><?php echo $jc1[10]?></td>
          </tr>   
          <tr>
               <td style="padding:3px; height:36px; width:100%;"><?php echo $jc1[11]?></td>
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
                 <th style="height:37px;"><?php echo $p1[1];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p2[1];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p3[1];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p4[1];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p5[1];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p6[1];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p7[1];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p8[1];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p9[1];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p10[1];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p11[1];?></th>
             </tr>
             <tr>
                <th style="height:37px;"><?php echo $p12[1];?></th>
             </tr>
         </table>
     </td>
     <td>
         <table class="w3-table w3-border" >
          <tr>
            <td style="padding:3px; height:36px; width:100%;"><?php echo $jc2[0]?></td>
          </tr>
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc2[1]?></td>
          </tr>
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc2[2]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc2[3]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc2[4]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc2[5]?></td>
          </tr>     
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc2[6]?></td>
          </tr>   
          <tr>
               <td style="padding:3px; height:36px; width:100%;"><?php echo $jc2[7]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc2[8]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc2[9]?></td>
          </tr>   
          <tr>
                <td style="padding:3px; height:36px; width:100%;"><?php echo $jc2[10]?></td>
          </tr>   
          <tr>
               <td style="padding:3px; height:36px; width:100%;"><?php echo $jc2[11]?></td>
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
                 <th style="height:37px;"><?php echo $p1[2];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p2[2];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p3[2];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p4[2];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p5[2];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p6[2];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p7[2];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p8[2];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p9[2];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p10[2];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p11[2];?></th>
             </tr>
             <tr>
                <th style="height:37px;"><?php echo $p12[2];?></th>
             </tr>
         </table>
     </td>
     <td>
        <table class="w3-table w3-border" >
          <tr>
            <td style="padding:3px; height:36px; width:100%;"><?php echo $jc[0]?></td>
          </tr>
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc3[1]?></td>
          </tr>
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc3[2]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc3[3]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc3[4]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc3[5]?></td>
          </tr>     
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc3[6]?></td>
          </tr>   
          <tr>
               <td style="padding:3px; height:36px; width:100%;"><?php echo $jc3[7]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc3[8]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc3[9]?></td>
          </tr>   
          <tr>
                <td style="padding:3px; height:36px; width:100%;"><?php echo $jc3[10]?></td>
          </tr>   
          <tr>
               <td style="padding:3px; height:36px; width:100%;"><?php echo $jc3[11]?></td>
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
                 <th style="height:37px;"><?php echo $p1[3];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p2[3];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p3[3];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p4[3];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p5[3];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p6[3];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p7[3];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p8[3];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p9[3];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p10[3];?></th>
             </tr>
             <tr>
                 <th style="height:37px;"><?php echo $p11[3];?></th>
             </tr>
             <tr>
                <th style="height:37px;"><?php echo $p12[3];?></th>
             </tr>
         </table>
     </td>
     <td>
        <table class="w3-table w3-border" >
          <tr>
            <td style="padding:3px; height:36px; width:100%;"><?php echo $jc4[0]?></td>
          </tr>
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc4[1]?></td>
          </tr>
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc4[2]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc4[3]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc4[4]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc4[5]?></td>
          </tr>     
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc4[6]?></td>
          </tr>   
          <tr>
               <td style="padding:3px; height:36px; width:100%;"><?php echo $jc4[7]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc[8]?></td>
          </tr>   
          <tr>
              <td style="padding:3px; height:36px; width:100%;"><?php echo $jc4[9]?></td>
          </tr>   
          <tr>
                <td style="padding:3px; height:36px; width:100%;"><?php echo $jc4[10]?></td>
          </tr>   
          <tr>
               <td style="padding:3px; height:36px; width:100%;"><?php echo $jc4[11]?></td>
          </tr>
         </table>
     </td>
 </tr>
     </table>
     </td></tr>

</tr>

</table>
</div>
</html>