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
    <title>PHP CHECKBOX INPUT</title>
    <link rel="stylesheet" href="css/demo.css">

</head>
<style>


</style>

<body>
    <div class="frm_header">
        <h2 style="text-align:center;">PHP CHECKBOX INPUT </h2>
    </div>
    <div class="frm_main">
        <?php
    
      if(isset($_POST['submit'])){
            if(!empty($_POST['Coder'])) {
            echo "<span>You have selected :</span> ";
                  echo implode(',',$_POST['Coder']);
            }
            else { echo "<span>Please Select Atleast One Language.</span><br/>";
            }
        }
        
?>
        <br>
        <form action="#" method="post" name="myform">
            <table>
                <tr>
                    <td>
                        Coder:
                    </td>
                    <td>
                        <input type="checkbox" name="Coder[]" value="C" />C
                        <input type="checkbox" name="Coder[]" value="C++" />C++
                        <input type="checkbox" name="Coder[]" value="PHP" />PHP
                        <input type="checkbox" name="Coder[]" value="Python" />PYTHON
                        <input type="checkbox" name="Coder[]" value="Java" />Java
                        <input type="checkbox" name="Coder[]" value="C#" />C#
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="submit" />
                    </td>
                </tr>
            </table>
        </form>

    </div>
    <div class="frm_footer">
        <h2>Jamir.cse@gmail.com</h2>
    </div>
</body>

</html>