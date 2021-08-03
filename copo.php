<!DOCTYPE html>
<meta charset="UTF-8"> 
<head>
   <link rel="stylesheet" href="stylesheet.css"> 
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   
</head>
<?php
    include 'conn.php';
    
    $staff_nm=htmlspecialchars($_POST["staff_nm"]);
   $dept=htmlspecialchars($_POST["dept"]);
   $cay=htmlspecialchars($_POST["cay"]);
   $course_nm=htmlspecialchars($_POST["course_nm"]);
   $course_cd=htmlspecialchars($_POST["course_cd"]);
   $sem=htmlspecialchars($_POST["sem"]);
   $co1=htmlspecialchars($_POST["co1"]);
   $co2=htmlspecialchars($_POST["co2"]);
   $co3=htmlspecialchars($_POST["co3"]);
   $co4=htmlspecialchars($_POST["co4"]);
   $b1=htmlspecialchars($_POST["b1"]);
   $b2=htmlspecialchars($_POST["b2"]);
   $b3=htmlspecialchars($_POST["b3"]);
   $b4=htmlspecialchars($_POST["b4"]);
   $uid=$course_cd.$cay;
   
    
    $query="insert into test (uid,staff_nm,dept,sem,cay,course_nm,course_cd,co1,co2,co3,co4,b1,b2,b3,b4) values ('$uid','$staff_nm','$dept','$sem','$cay','$course_nm','$course_cd','$co1','$co2','$co3','$co4','$b1','$b2','$b3','$b4');";
    
    $result=mysqli_query($conn,$query);
    if(!$result){
    header("Location: http://localhost/Project/form.php");
    }
    mysqli_close($conn);


?>
<html>
   <h3 class="w3-bar w3-teal">
           <button onclick="document.getElementById('m1').style.display='block'" class="w3-button w3-dark-grey w3-right">Instructions</button>  

</h3><br>
    <form id="form" method="post" action="entry.php">
    <div class=w3-responsive>
    <table class='w3-center w3-striped copo' border='1'>
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
            <td><input type="text" name='po1[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po2[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po3[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po4[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po5[]' maxlength='1' value=""/></td>
            <td><input type="text" name="po6[]" maxlength='1' value=""/></td>
            <td><input type="text" name='po7[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po8[]' maxlength='1' value=""/></td>
            <td><input type="text" name="po9[]" maxlength='1' value=""/></td>
            <td><input type="text" name="po10[]" maxlength='1' value=""/></td>
            <td><input type="text" name="po11[]" maxlength='1' value=""/></td>
            <td><input type="text" name="po12[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso1[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso2[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso3[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso4[]" maxlength='1' value=""/></td>

          
            
        </tr>
        <tr>
            <th>co2</th>
            <td><input type="text" name='po1[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po2[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po3[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po4[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po5[]' maxlength='1' value=""/></td>
            <td><input type="text" name="po6[]" maxlength='1' value=""/></td>
            <td><input type="text" name='po7[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po8[]' maxlength='1' value=""/></td>
            <td><input type="text" name="po9[]" maxlength='1' value=""/></td>
            <td><input type="text" name="po10[]" maxlength='1' value=""/></td>
            <td><input type="text" name="po11[]" maxlength='1' value=""/></td>
            <td><input type="text" name="po12[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso1[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso2[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso3[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso4[]" maxlength='1' value=""/></td>
        </tr>
        <tr>
            <th id="co3">co3</th>
            <td><input type="text" name='po1[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po2[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po3[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po4[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po5[]' maxlength='1' value=""/></td>
            <td><input type="text" name="po6[]" maxlength='1' value=""/></td>
            <td><input type="text" name='po7[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po8[]' maxlength='1' value=""/></td>
            <td><input type="text" name="po9[]" maxlength='1' value=""/></td>
            <td><input type="text" name="po10[]" maxlength='1' value=""/></td>
            <td><input type="text" name="po11[]" maxlength='1' value=""/></td>
            <td><input type="text" name="po12[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso1[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso2[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso3[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso4[]" maxlength='1' value=""/></td>
        </tr>
        <tr>
            <th id="co4" value='co4'>co4</th>
            <td><input type="text" name='po1[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po2[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po3[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po4[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po5[]' maxlength='1' value=""/></td>
            <td><input type="text" name="po6[]" maxlength='1' value=""/></td>
            <td><input type="text" name='po7[]' maxlength='1' value=""/></td>
            <td><input type="text" name='po8[]' maxlength='1' value=""/></td>
            <td><input type="text" name="po9[]" maxlength='1' value=""/></td>
            <td><input type="text" name="po10[]" maxlength='1' value=""/></td>
            <td><input type="text" name="po11[]" maxlength='1' value=""/></td>
            <td><input type="text" name="po12[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso1[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso2[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso3[]" maxlength='1' value=""/></td>
            <td><input type="text" name="pso4[]" maxlength='1' value=""/></td>
        </tr>
      </table>
    </div>
      <button type='submit' class="w3-button w3-round w3-border w3-teal">Justify</button>
      <input type='hidden' name='course_nm' value=<?php echo '"'.$course_nm.'"';?>>
      <input type='hidden' name='staff_nm' value=<?php echo '"'.$staff_nm.'"';?>>
      <input type='hidden' name='cay' value=<?php echo $cay;?>>
      <input type='hidden' name='sem' value=<?php echo $sem;?>>
      <input type='hidden' name='dept' value=<?php echo $dept;?>>
      <input type="hidden" name='course_cd' value=<?php echo $course_cd;?>>
      </form>
     
      <div id="m1" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom">
              
              <header class="w3-container w3-black"><pre> Instructions :</pre></header>
                  <span onclick="document.getElementById('m1').style.display='none'" class="w3-black w3-button w3-display-topright">x</span>
        <ul>
                  <li>Enter the marks according to course and academic year chosen in the previous form.</li>
                  <li>Marks should range from 0-3.</li>
                  <li>PO and PSO is provided for mapping with CO.</li>
                  <li>fill only upto PSO provided for your department.</li><br>
        </ul>
        </div>
      </div>
        
      <div class="w3-card-4">
          <table class=w3-table-all>
          <tr>
            <td class=t>Course code</td>
            <td class=t>At the end of the course student will be able to:</td>
            <td class=t>Bloom Level</td>
          </tr>
          <tr>
            <td><?php echo $course_cd.".1" ?></td>
            <td><?php echo $co1 ?></td>
            <td><?php echo $b1 ?></td>
          </tr>
          <tr>
            <td><?php echo $course_cd.".2" ?></td>
            <td><?php echo $co2 ?></td>
            <td><?php echo $b2 ?></td>
          </tr>
          <tr>
            <td><?php echo $course_cd.".3" ?></td>
            <td><?php echo $co3 ?></td>
            <td><?php echo $b3 ?></td>
          </tr>
          <tr>
            <td><?php echo $course_cd.".4" ?></td>
            <td><?php echo $co4 ?></td>
            <td><?php echo $b4 ?></td>
          </tr>
        </table>
   
      </div><br>
      <div class=w3-container>
      <h2 class="w3-teal">Program Outcomes (POs):</h2>
      <div class="w3-container">
          <ol>
              <li>Engineering knowledge: Apply the knowledge of mathematics, science, engineering fundamentals, and an engineerng to the solution of complex engineering problems.</li>
              <li>Problem analysis: identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.</li>
              <li>Design/development of solutions: Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations.</li>
              <li>Conduct investigations of complex problems: Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.</li>
              <li>Modern tool usage: Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.</li>
              <li>The engineer and society: Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.</li>
              <li>Environment and sustainability: Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.</li>
              <li>Ethics: Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice.</li>
              <li>Individual and team work: Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.</li>
              <li>Communication: Communicate effectively on complex engineering activities with the engineering community and with society at large, such as, being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions.</li>
              <li>Project management and finance: Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s own work, as a member and leader in a team, to manage projects and in multidisciplinary environments.</li>
              <li>Life-long learning: Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change.</li>
              
          </ol>

      </div>
    </div>
      <h2 class="w3-teal">Program Specific Outcome (PSOs):</h2>
      <div id="pso" class="w3-container">
        <?php 
        $dept=htmlspecialchars($_POST["dept"]);
        if($dept=="MECH"){
                $dept="1. Graduates will exhibit the ability to analyze and solve problems in Design, Thermal, Manufacturing and Renewable energy domains.<br>2. Graduates will incorporate technical and professional skills in their career.";

        }else if($dept=="IT"){
          $dept="1. Apply and implement IT solutions in allied fields of engineering to solve real word problems.<br>2. Identify social and industrial problems, provide creative solutions and become quality asset for society and industry.<br>3. Deploy secured solution using Information Technology practices and strategies.";

        }else if($dept=="EXTC"){
          $dept="1. To apply the knowledge of Electronics and Communication to analyse, design and implement application specific problems with modern tools.<br>2. Adapt emerging technologies with continuous learning in the field of electronics and telecommunication engineering with appropriate solutions to real life problems.";

        }else if($dept=="CS"){
          $dept="1. Analyze problems and design applications of database, networking, security, web technology, cloud computing, machine learning using mathematical skills and computational tools<br>2. Develop computer-based systems to provide solutions for organizational, societal  problems by working in multidisciplinary teams and pursue a career in IT industry ";


        }
        else if($dept=="INSTRU"){
          $dept="1. Apply fundamentals of applied sciences, engineering mathematics, electrical, electronics, measurements and control to work as a successful professional in automation as well as interdisciplinary fields.<br>2. Demonstrate professional ethics and standards, effective communication skills and team work to solve real-world problems.";


        }
        else if($dept=="CIVIL"){
            $dept="1. Proficiency in Civil Engineering: Apply knowledge of mathematics and physical science with higher proficiency in the core areas of civil engineering fields.<br>2. Analytical and Executive Skill: Develop a plan, drawings, analyze, design, write specification, prepare cost estimates and perform all kinds of civil engineering activities.<br>3. Application of Technology at the frontiers of knowledge: Encourage for the application of modern engineering tools and multidisciplinary concept to solve civil engineering problems and research.<br>4. Responsibility: Provide sustainable solutions to complex civil engineering problems for the development of nation and society.";


          }else{
            $dept="";
          }
          echo $dept;
        ?>
     
          <br>
      </div>



<script>
  function r(i){
    var re=/[^0-3]/;
    var san=i.replace(re,"");

    var san1=san.replace(/[^[\d]{1}]/,"");
    alert(san1);
  }
</script>




</html>