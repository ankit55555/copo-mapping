<!DOCTYPE html>

<head>
  <meta charset="UTF-8"> 
  <link rel="stylesheet" href="./form1.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
   <h3 class="w3-bar w3-teal">
  <a href="http://localhost/Project/reports.php" class="w3-bar-item w3-button w3-right">reports</a> 
  <a href="http://localhost/Project/form.php" class="w3-bar-item w3-button w3-right">co-po</a>

</h3>
  <form action="http://localhost/Project/copo.php" method="post">
    <div class="wrapper">
      <div class="title">
        CO-PO Mapping Form
      </div>
      <div class="form">
        <div class="inputfield">
          <label for="dept">Department:</label>
          <div class="custom_select">
            <select name="dept" id="dept" oninput="load_staff(dept.value)"required>
              <option value="none" selected disabled>--</option>
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
          <label>Staff name :</label>
          <div class="custom_select">
          <select id="staff_nm" name="staff_nm" required>
            <option value="none" selected disabled>--</option>
          </select>
        </div>
        </div>
        <div class="inputfield">
          <label for="sem">Semester of course:</label>
        <div class="custom_select">
            <select name="sem" id="sem" required>
              <option value="none" selected disabled>--</option>
              <option value="1">I</option>
              <option value="2">II</option>
              <option value="3">III</option>
              <option value="4">IV</option>
              <option value="5">V</option>
              <option value="6">VI</option>
              <option value="7">VII</option>
              <option value="8">VIII</option>
             </select><br><br>
          </div>
        </div>
        <div class="inputfield">
          <label>Course name:</label><input type="text" id="course_nm" name="course_nm"><br><br>
        </div>
        <div class="inputfield">
          <label>Course code:</label><input type="text" maxlength="8"  id="course_cd" name="course_cd" required><br><br>
        </div>
        <h5>Enter your Course Outcome:</h5><br>
        <div class=w3-responsive>
        <table class="w3-table-all w3-card-4">
          <tr>
            <th></th>
            <th>Course Outcome</th>
            <th>Bloom Level
              <input type=button onclick="document.getElementById('m1').style.display='block'" class="w3-button w3-dark-grey w3-right" value="?">
            </th>

          </tr>
          <tr>
            <th>co1</th>
            <td><input class=co type="text" id="co1" name="co1"></td>
            <td><div class="custom_select">
            <select name="b1" id="b1" required>
              <option value="none" selected disabled>--</option>
              <option value="Remember">Remember</option>
              <option value="Understand">Understand</option>
              <option value="Apply">Apply</option>
              <option value="Analyze">Analyze</option>
              <option value="Evaluate">Evaluate</option>
              <option value="Create">Create</option>
             
             </select>
          </div></td>

          </tr>
          <tr>
            <th>co2</th>
            <td><input class=co type="text" id="co2" name="co2"></td>
            <td><select name="b2" id="b2" required>
              <option value="none" selected disabled>--</option>
              <option value="Remember">Remember</option>
              <option value="Understand">Understand</option>
              <option value="Apply">Apply</option>
              <option value="Analyze">Analyze</option>
              <option value="Evaluate">Evaluate</option>
              <option value="Create">Create</option>
             
             </select></td>
          </tr>
          <tr>
            <th>co3</th>
            <td><input class=co type="text" id="co3" name="co3"></td>
            <td><select name="b3" id="b3" required>
              <option value="none" selected disabled>--</option>
              <option value="Remember">Remember</option>
              <option value="Understand">Understand</option>
              <option value="Apply">Apply</option>
              <option value="Analyze">Analyze</option>
              <option value="Evaluate">Evaluate</option>
              <option value="Create">Create</option>
             
             </select></td>
          </tr>
          <tr>
            <th>co4</th>
            <td><input class=co type="text" id="co4" name="co4"></td>
            <td><select name="b4" id="b4" required>
              <option value="none" selected disabled>--</option>
              <option value="Remember">Remember</option>
              <option value="Understand">Understand</option>
              <option value="Apply">Apply</option>
              <option value="Analyze">Analyze</option>
              <option value="Evaluate">Evaluate</option>
              <option value="Create">Create</option>
             
             </select></td>
          </tr>
        </table>
      </div><br>
        <div class="inputfield">
          <label for="cay">Academic Year:</label>
        <div class="custom_select">
            <select name="cay" id="cay" required>
              <option value="" disabled>--</option>
              <option value="17">2017-2018</option>
              <option value="18">2018-2019</option>
              <option value="19">2019-2020</option>
              <option value="20">2020-2021</option>
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
        if($h["Referer"]=="http://localhost/Project/form.php"){
          echo <<<EXCERPT
          <div class="w3-panel w3-pale-red w3-display-container w3-border">
          <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">×</span>
          <h4>Error!</h4>
          <p>Seems like the data was already stored.</p>
          </div>
          EXCERPT;
          
      }
      
   
       
    ?>
   </div> 
      
 <div id="m1" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom">
              
              
                  <span onclick="document.getElementById('m1').style.display='none'" class="w3-black w3-button w3-display-topright">x</span>
        <img src=bloom.png>
        </div>
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
