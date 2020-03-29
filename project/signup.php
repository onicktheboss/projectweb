<?php

session_start();


include_once("db.php");
 ?>

 <?php
if(isset($_SESSION["id"])){
    $id =  $_SESSION["id"] ;}

if(isset($_POST['signup'])) { 
 $id =  $_SESSION["id"] ;

 $fname = $_POST['fname'];  
 $lname = $_POST['lname'];  
    $email = $_POST['email'];
    $Nid = $_POST['Nid'];
     $gender = $_POST['gender'];
     $ammount = $_POST['ammount'];
     $phone = $_POST['phone'];
      $dob = $_POST['dob'];
      $zip = $_POST['zip'];
       if(empty($fname)||empty($lname)|| empty($email)|| empty($Nid) || empty($gender)||empty($phone)||empty($dob)||empty($zip)||!preg_match("/^[a-zA-Z ]*$/",$fname)||!preg_match("/^[a-zA-Z ]*$/",$lname)||!filter_var($email, FILTER_VALIDATE_EMAIL)||!preg_match('/^[0-9]*$/', $ammount)||!preg_match('/^[0-9]*$/', $Nid)||!preg_match('/^[0-9]*$/', $phone)) {

   

echo"<script type='text/javascript'>
  alert('please intert all value completely and correctly');

 </script>";

    
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "INSERT `user` SET `fname`='$fname',`lname`='$lname',`email`='$email',`Nid`='$Nid',`gender`='$gender',`phone`='$phone',`zip`='$zip',`dob`='$dob',`user_type`='user'  ");
        
        //redirectig to the display page. In our case, it is index.php
    echo"<script type='text/javascript'>
  alert('successfully added');
Location:signup.php;
 </script>";
  
    }



}
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
$Id=$fname =$lname=$Address=$Nid=$zip=$phone=$city=$email=$ammount=$gender=$Id="";
$IdErr=$fnameErr =$lnameErr=$AddressErr=$NidErr=$zipErr=$phoneErr=$cityErr=$emailErr=$ammountErr=$genderErr=$IdErr="";




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
     	 <form name="form1" method="post" action="signup.php">
     	 	<td>
     	 		<tr>
     	 			     <?php
 if(isset($_SESSION["id"])){
    $id =  $_SESSION["id"] ;
echo "Id :". $_SESSION["id"] ."";
}
?>
     	 		</tr>
     	 	</td>
   <td>   
  <tr>
   
      <h3>Registration from</h3></tr>
    </td>
  
      
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

      <td> <tr>birthdate*</tr></td>
        <td>
 <tr> <input type="date" name="dob" placeholder="enter birthdate  here">
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




