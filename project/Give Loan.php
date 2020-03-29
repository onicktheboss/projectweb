<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="style1.css">
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
  <div class="bgimage">

<div class="menubar">
 <a href="managerhome.php"><b>HOME</b></a>
    <a href="Terminate_emp.php">Terminate Employee</a>
    <a href="Give Loan.php">Give loan</a>
    <a href="emp_list.php">EMployee List</a>
    <a href="change_password.php">CHANGE PASSWORD</a>
    <a href="login.php">LOGOUT</a>
</div>
<div style="padding-left:16px">
  <h2>Give Loan</h2>
  <table>
    <td>
      <tr>Account No:  </tr><input type="text" name="account_no" placeholder="ENTER ACCOUNT NO HERE">
       
    <button class="button">Load Data</button><br><br>
    <h2>User INFORMATION</h2>
  <img src="IMG_9251.JPG" alt="saif_pic" width="160" height="145">
  <br><br>
  <table>
    <td>
      <tr>NAME:  </tr>MR.SAIF  <br><br>
      <tr>Account no:  </tr>17004 <br><br>
      <tr>Account type:  </tr> <br><br>
      <tr>Account Created:  </tr>17-2-2010 <br><br>

      <tr>Account Balance:  </tr>1000000 <br><br>
      <tr>CONTACT NUMBER:  </tr>01737365943 <br><br>

    </td>
  </table>
   <tr>Loan Ammount:  </tr><input type="text" name="account_no" placeholder="ENTER THE AMMOUNT HERE">
   <label for="LOANFILE">FILE AGAINST LOAN</label>
<input type="file" id="LOANFILE" name="LOANFILE">

 <button class="button">Give Loan</button><br><br>

     
     
    </td>
  </table>
</div>
</div>
</body>
</html>
