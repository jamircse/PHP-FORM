<?php
session_start();
include "classes/db.php";
include "classes/config.php";
$db=new database();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP SELECT OPTION INPUT</title>
    <link rel="stylesheet" href="css/demo.css">

</head>
<body>
    <div class="frm_header">
        <h2 style="text-align:center;">PHP SELECT OPTION INPUT </h2>
    </div>
    <div class="frm_main">
    <?php
    
      if(isset($_POST['submit'])){
        if(!empty($_POST['language'])) {
            echo "<span>You have selected :</span> ";
            echo "<span><b>".$_POST['language']."</b></span>";
        }
        else { 
            echo "<span>Please Select Atleast One language.</span><br/>";}
        }
        
     ?>
        <br>
        <form action="#" method="post" name="radio_input">
           <b>Select Language : </b>
             <select name="language" id="language">
                 <option value=""><b>Select one</b></option>
                 <option value="C">C</option>
                 <option value="C++">C++</option>
                 <option value="PYTHON">PYTHON</option>
                 <option value="JAVA">JAVA</option>
                 <option value="PHP">PHP</option>
                 <option value="C#">C#</option>
             </select>
           <input type="submit" name="submit" value="submit">
        </form>

    </div>
    <div class="frm_footer">
        <h2>Jamir.cse@gmail.com</h2>
    </div>
</body>

</html>