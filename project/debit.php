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
<body >

 
  <?php
$ammountErr = $account_noErr  = "";
$ammount = $account_no  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
$valid = true;
{
  if (empty($_POST["ammount"])) {
    $valid = false;
    $ammountErr = "ammount is required";
  } else {
     $ammount = test_input($_POST["ammount"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/^[0-9]*$/', $ammount)) {
       $valid = false;
      $ammountErr = "Only numbers allowed";
    }
  }
  
  if (empty($_POST["account_no"])) {
     $valid = false;
    $account_noErr = "account is required";
  } else {
     $account_no = test_input($_POST["account_no"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/^[0-9]*$/', $ammountErr)) {
       $valid = false;
      $account_noErr = "Only numbers allowed";
    }
    
  }

 if($valid){
        header('location:verification.php');
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
 <a href="#home">HOME</a>
		
		<a href="debit.php"><h4>DEBIT MONEY</h4></a>
		<a href="credit.php">CREDIT MONEY</a>
		<a href="change_password.php">CHANGE PASSWORD</a>
		<a href="signup.php">LOGOUT</a>
</div>
<div style="padding-left:16px">
  <h2>DEBIT AMMOUNT</h2>
  <p><span class="error">* required field</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <table>
    <td>
      <tr>ACCOUNT NO:  </tr><input type="text" name="account_no" placeholder="ENTER ACCOUNT NO HERE">
       <span class="error">* <?php echo $account_noErr;?></span> <br><br>
       <tr>ENTER AMMOUNT:  </tr><input type="text" name="ammount" placeholder="ENTER AMMOUNT HERE">
       <span class="error">* <?php echo $ammountErr;?></span>
        <br><br>
    <button class="button" type="submit" >CONTINUE</button>
     
     
    </td>
  </table>
</div>
</form>
</div>
</body>
</html>

