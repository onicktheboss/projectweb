<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
<body>

<div class="menubar">
 <a href="VERIFICATION.php">VERIFICATION</a>
	
		
		<a href="login.php">LOGOUT</a>
</div>
<div style="padding-top: 16px">
  <h2>CREDIT AMMOUNT VERIFICATION</h2>
  <table>
    <td>
      <tr>Enter verification code here:  </tr><input type="text" name="account_no" placeholder="ENTER enter verification code "> <br><br>
       <tr>Didn't receive the code yet??<a href="#get_again code">Click here</a></tr> <br><br>
    <button class="button">CONTINUE</button>
    <button class="button">Back</button>
     
     
    </td>
  </table>