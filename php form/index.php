<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP FORM</title>
    <link rel="stylesheet" href="css/demo.css">

</head>

<body>
    <div class="frm_header">
        <h2 style="text-align:center;">PHP FORM </h2>
    </div>
    <div class="frm_main">
       
      <?php if(isset($_POST['submit'])){ 
        if(!empty($_POST['gender']) && !empty(implode(',',$_POST['Coder']))){ ?>
        <table>
            <tr>
                <td>Name : </td>
                <td><?php echo $_POST['username']; ?></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><?php echo $_POST['email']; ?></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><?php echo $_POST['password']; ?></td>
            </tr>
            <tr>
                <td>DEPARTMENT : </td>
                <td><?php echo $_POST['dept']; ?></td>
            </tr>
            <tr>
                <td>GENDER : </td>
                <td><?php echo $_POST['gender']; ?></td>
            </tr>
            <tr>
                <td>Language : </td>
                <td><?php echo implode(',',$_POST['Coder']); ?></td>
            </tr>
        </table>
        
        <?php }else{
             echo '<h2>please select gender and language </h2>';
        }

         } ?>
        <br>
        <form action="#" method="post" name="radio_input">
            <span>Enter your name</span>
            <input type="text" name='username'> <br>
            <span>Enter your email</span>
            <input type="email" name='email'> <br>
            <span>Enter your password</span>
            <input type="password" name='password'> <br>
            <b>Select Gender : </b>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="FeMale">FeMale <br>


            <b>Select Dept : </b>
            <select name="dept" id="language">
                <option disabled><b>Select department</b></option>
                <option value="CSE">CSE</option>
                <option value="ECE">ECE</option>
                <option value="PYTHON">EEE</option>
                <option value="JAVA">CE</option>
                <option value="PHP">LLB</option>
                <option value="C#">SCE</option>
            </select>
            <br>
            <b>Select Language : </b>
            <input type="checkbox" name="Coder[]" value="C" />C
            <input type="checkbox" name="Coder[]" value="C++" />C++
            <input type="checkbox" name="Coder[]" value="PHP" />PHP
            <input type="checkbox" name="Coder[]" value="Python" />PYTHON
            <input type="checkbox" name="Coder[]" value="Java" />Java
            <input type="checkbox" name="Coder[]" value="C#" />C# <br>
            <input type="submit" name="submit" value="submit">
        </form>

    </div>
    <div class="frm_footer">
        <h2>Jamir.cse@gmail.com</h2>
    </div>
</body>

</html>