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
    <title>PHP Radio INPUT</title>
    <link rel="stylesheet" href="css/demo.css">

</head>
<body>
    <div class="frm_header">
        <h2 style="text-align:center;">PHP Radio INPUT </h2>
    </div>
    <div class="frm_main">
    <?php
    
      if(isset($_POST['submit'])){
        if(!empty($_POST['gender'])) {
            echo "<span>You have selected :</span> ";
            echo "<span><b>".$_POST['gender']."</b></span>";
        }
        else { 
            echo "<span>Please Select Atleast One Gender.</span><br/>";}
        }
        
     ?>
        <br>
        <form action="#" method="post" name="radio_input">
           <b>Select Gender : </b>
           <input type="radio" name="gender" value="Male">Male
           <input type="radio" name="gender" value="FeMale">FeMale <br>
           <input type="submit" name="submit" value="submit">
        </form>

    </div>
    <div class="frm_footer">
        <h2>Jamir.cse@gmail.com</h2>
    </div>
</body>

</html>