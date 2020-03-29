<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  .error {color: #FF0000;}
  
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.menubar {
  overflow: hidden;
  background-color: #3300FF;
}

.menubar a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  text-transform: bold;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.menubar a:hover {
  background-color: #3300FF;
  color: black;
}

.menubar a.active {
  background-color: #FFFFFF;
  color: blue;
}

.button {
  background-color: #3300FF;
  border: none;
 
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
</head>
<body><div class="bgimage">
  <?php
$account_noErr  =$commentErr= "";
$account_no  = $comment="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
$valid = true;
{
  if (empty($_POST["account_no"])) {
     $valid = false;
    $account_noErr = "account is required";
  } else {
     $account_no = test_input($_POST["account_no"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/^[0-9]*$/', $account_no)) {
       $valid = false;
      $account_noErr = "Only numbers allowed";
    }
  }
  if (empty($_POST["comment"])) {
    $commentErr = "comment is required";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  if($valid){
        header('location:managerhome.php');
        exit();
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  ?>
  

<div class="menubar">
 <a href="managerhome.php"><b>HOME</b></a>
    <a href="Terminate_emp.php">Terminate Employee</a>
    <a href="Give LOan.php">Give loan</a>
    <a href="emp_list.php">EMployee List</a>
    <a href="change_password.php">CHANGE PASSWORD</a>
    <a href="signup.php">LOGOUT</a>
	
		

</div>
<div style="padding-top: 16px">
  <h2>Terminate Employee</h2>
  <p><span class="error">* required field</span></p>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <table>
    <td>
      <tr>Enter Employee Account No here:  </tr><input type="text" name="account_no" placeholder="ENTER enter Account"> <br><br>
    <span class="error">* <?php echo $account_noErr;?></span> <br><br>
     <button class="button">Load Data</button><br><br>
    <h2>Employee INFORMATION</h2>
  <img src="IMG_9251.JPG" alt="saif_pic" width="160" height="145">
  <br><br>
  <table>
    <td>
      <tr>NAME:  </tr>MR.SAIF  <br><br>
      <tr>ID:  </tr>17004 <br><br>
      <tr>DESIGNATION:  </tr>SENIOR ACCOUNT OFFICER <br><br>
      <tr>JOINING DATE:  </tr>17-2-2010 <br><br>
      <tr>CONTACT NUMBER:  </tr>01737365943 <br><br>
      <tr>
      <td>
        <b> Reason Behind Termination </b> <br>
        
      </td>
      <td>
        <textarea type="text" name="comment" size="100" style="font-family: sans-serif;font-size: 1.2em;">
          
        </textarea> <span class="error">* <?php echo $commentErr;?></span> <br><br> <br><br>
      </td>
    </tr>



    </td>

  </table>
  <button class="button">Terminate</button><br><br>

   </td>
 </table>
</form>
</div>
</div>
</body>
</html>