<!DOCTYPE html>
<html charset='UTF-8'>
<head>
	<link rel="stylesheet" href="./form1.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>
  <body>
   <h3 class="w3-bar w3-teal">
  <a href="http://localhost/Project/reports.php" class="w3-bar-item w3-button w3-right">reports</a> 
  <a href="http://localhost/Project/form.php" class="w3-bar-item w3-button w3-right">co-po</a>
</h3><br>
	<form action="rep.php" method="get">
    <div class="wrapper">
      <div class="title">
        Course Detailed Reports
      </div>
      <div class="form">
        <p>*select only the required fields*</p><br>
        <div class="inputfield">
          <label for="dept">Department:</label>
          <div class="custom_select">
            <select name="dept" id="dept" oninput="load_staff(dept.value)">
              <option value=''></option>
              <option value="MECH">Mechanical Engineering</option>
              <option value="EXTC">Electronics and Telecommunications Enginnering</option>
              <option value="INSTRU">Instrumentation Engineering</option>
              <option value="CS">Computer Engineering</option>
              <option value="IT">Information Technology</option>
              <option value="CIVIL">Civil Engineering</option>
              <option value="ASH">Applied Science & Humanities</option>
            </select><br><br>
          </div>
          
        </div>
        <div class="inputfield">
          <label>Course code:</label><input type="text" maxlength="8"  id="course_cd" name="course_cd" value=""><br><br>
        </div>
        <div class="inputfield">
          <label>Staff name :</label>

          <div class="custom_select">
          <select id="staff_nm" name="staff_nm">
            
          </select>
        </div>
        </div>
        
        <div class="inputfield">
          <label for="cay">Academic Year:</label>
        <div class="custom_select">
            <select name="cay" id="cay">
              <option></option>
              <option value="17">17-18</option>
              <option value="18">18-19</option>
              <option value="19">19-20</option>
              <option value="20">20-21</option>
             </select><br><br>
          </div>
        </div>
      <div class="inputfield">
          <input type="submit" value="Submit" class="btn">
        </div>
      </div>  
        
    </div>
  </form>

<div class="wrapper">
    
    <?php

      $h=getallheaders();
        if($h["Referer"]=="http://localhost/Project/reports.php"){
          echo <<<EXCERPT
          <div class="w3-panel w3-pale-red w3-display-container w3-border">
          <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">×</span>
          <h4>Not Found!</h4>
          <p>There was no entry recorded for the following request.</p>
          </div>
          EXCERPT;
          
      }
      

    ?>
   </div> 



</body>
	<script>
  function load_staff(s){
    var x = new XMLHttpRequest();
    x.onreadystatechange = function(){
      if(this.readyState == 4 && this.status==200){
        document.getElementById("staff_nm").innerHTML=this.responseText;
      }
    };
    x.open("GET",`staff/${s}.txt`,true);
    x.send();
  }
</script>

</html>