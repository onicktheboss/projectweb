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
<body><div class="bgimage">

<div class="menubar">
 <a href="managerhome.php"><b>HOME</b></a>
    <a href="Terminate_emp.php">Terminate Employee</a>
    <a href="Give Loan.php">Give loan</a>
    <a href="emp_list">EMployee List</a>
    <a href="change_password.php">CHANGE PASSWORD</a>
    <a href="login.php">LOGOUT</a>
</div>
<div style="padding-left:16px">
  <h2>Change Password</h2>
  <table>
    <td>
      <tr>NEW PASSWORD:  </tr><input type="text" name="account_no" placeholder="ENTER Password NO HERE"> <br><br>
       
    <button class="button">CONTINUE</button>
     
     
    </td>
  </table>
</div>
</div>
</body>
</html>
