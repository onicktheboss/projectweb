<?php include('db.php');
?>


<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>.error {color: #FF0000;}
.body{
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
<body>
<div class="bgimage">
 <?php
class User
 {
  public $Id;
  public $fname;
   public $lname;
  public $gender;
  public $zip;
  public $phone;
  public $email;
  public $Address;
  public $Nid;
  public $ammount;

  
   
  
}
?>
  <?php
$Id=$fname =$lname=$Address=$Nid=$zip=$phone=$city=$email=$ammount=$gender=$Id="";
$IdErr=$fnameErr =$lnameErr=$AddressErr=$NidErr=$zipErr=$phoneErr=$cityErr=$emailErr=$ammountErr=$genderErr=$IdErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
  if (empty($_POST["fname"])) {

  
    $fnameErr = "Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }



  if (empty($_POST["lname"])) {
    $lnameErr = "Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      
      $lnameErr = "Only letters and white space allowed";
    }
  }
  


  if (empty($_POST["email"])) {
   
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
      $emailErr = "Invalid email format";
    }
  }
    


   if (empty($_POST["ammount"])) {
   
    $ammountErr = "ammount is required";
  } else {
     $ammount = test_input($_POST["ammount"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/^[0-9]*$/', $ammount)) {
      
      $ammountErr = "Only numbers allowed";
    }
  }



   if (empty($_POST["Nid"])) {
   
    $NidErr = "Nid is required";
  } else {
     $Nid = test_input($_POST["Nid"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/^[0-9]*$/', $Nid)) {
      
      $NidErr = "Only numbers allowed";
    }
  }



   if (empty($_POST["phone"])) {
   
    $phoneErr = "phone is required";
  } else {
     $phone = test_input($_POST["phone"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/^[0-9]*$/', $phone)) {
       
      $phoneErr = "Only numbers allowed";
    }
  }

 if (empty($_POST["Id"])) {
    $IdErr= "Id is required";
  } else {
    $Id = test_input($_POST["Id"]);
  }


  if (empty($_POST["Address"])) {
    $AddressErr= "Address is required";
  } else {
    $Address = test_input($_POST["Address"]);
  }



  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }


   if (empty($_POST["zip"])) {
    $zipErr = "zip is required";
  } else {
    $zip = test_input($_POST["zip"]);
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
  <a href="emphome.php">HOME</a>
  <a href="debit.php">DEBIT MONEY</a>
    <a href="credit.php">CREDIT MONEY</a>
    <a href="change_password.php">CHANGE PASSWORD</a>
    <a href="signup.php"><b>New user</b></a>
    <a href="login.php">Logout</a>

</div>

<div style="padding-left:16px">
   <table>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   <td>   
  <tr>
   
      <h3>Registration from</h3></tr>
    </td>
   <td>
       <tr> User  Id  <input type="text" name="Id">
           <span class="error">* <?php echo $IdErr;?></span>  </tr>
        </td>
    
      <br>
      <br>
        <td>
       <tr>    First name*  <input type="text" name="fname">
           <span class="error">* <?php echo $fnameErr;?></span>  </tr>
        </td>
    
<br>
<br>
          
        <td>  <tr>Last name*</tr></td>
        <td>
       <tr>   <input type="text" name="lname">
           <span class="error">* <?php echo $lnameErr;?> </tr></span>
        </td>
     
      <br>
<br>

           
        <td> <tr>NID Card Number*</tr></td>
        <td>
        <tr>  <input type="text" name="Nid">
           <span class="error">* <?php echo $NidErr;?></span></tr>
        </td>
      
      <br>
<br>

           
        <td> <tr>Address*</tr></td>
        <td>
         <tr>  <input type="text" name="Address">
           <span class="error">* <?php echo $AddressErr;?></span></tr>
        </td>
      
<br>
<br>
       
         
        <td>   <tr>zip code* </tr></td>
        <td>
         <tr>    <input type="text" name="zip">
           <span class="error">* <?php echo $zipErr;?></span>    </tr>
        </td>
  
      <br>
<br>

            
        <td>
      <tr>  phone no*</tr>
</td>
        <td>
        <tr>  <input type="text" name="phone">
           <span class="error">* <?php echo $phoneErr;?></span></tr>
        </td>
      
<br>
<br>
          
            
        <td><tr>email id*</tr></td>
        <td>
      <tr>    <input type="text" name="email" placeholder="enter email id here">
           <span class="error">* <?php echo $emailErr;?></span></tr>
        </td>
      
<br>
<br>
           
        <td> <tr>Deposition ammount*</tr></td>
        <td>
 <tr> <input type="text" name="ammount" placeholder="enter ammount here">
         <span class="error">* <?php echo $ammountErr;?></tr></span>


        </td>
      <br><br>
      
        <td>
    <tr>   Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br></tr>
</td>
  
  
   

  </table>
  <button class="button" name="signup" >CONTINUE</button>
</form>
</table>
</div>



</div>


</body>
</html>




      