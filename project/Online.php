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
$account_noErr  =$commentErr=$passwordErr= "";
$account_no  = $comment=$password="";

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
  if (empty($_POST["password"])) {
   $valid = false;
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
  if($valid){
        header('location:login.php');
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
 <center>   <a href="home.php"><b>Wellcome to Aiub Bank</b></a></center> 
    
	
		

</div>
<div style="padding-top: 16px">
  
  <p><span class="error">* required field</span></p>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <table>
    <td>
      <tr>Enter User Account No here:  </tr><input type="text" name="account_no" placeholder="ENTER enter Account"> <br><br>
    <span class="error">* <?php echo $account_noErr;?></span> <br><br></td>
     <button class="button">Load Data</button><br><br>
   <h2>User INFORMATION</h2>
  <img src="IMG_9251.JPG" alt="saif_pic" width="160" height="145">
  <br><br>
  <table>
    <td>
       <tr>NAME:  </tr>MR.Latif  <br><br>
      <tr>Account no:  </tr>17004 <br><br>
      <tr>Account type:  </tr> <br><br>
      <tr>Account Created:  </tr>17-2-2010 <br><br>

      <tr>Account Balance:  </tr>1000000 <br><br>
      <tr>CONTACT NUMBER:  </tr>01737365943 <br><br>

    </td>
  </table>
 <td>
    <tr>Enter password here:  </tr><input type="password" name="password" placeholder="ENTER  Account password">
    <span class="error">* <?php echo $passwordErr;?></span> <br><br></td> <br><br>
     <button class="button">Avtivate online Banking</button><br><br>
 </td>
</table>


</div>
</form>
</div>
</div>
</body>
</html>