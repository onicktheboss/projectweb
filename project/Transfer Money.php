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
<body background="Screenshot (3).png">

<div class="menubar">
  <a href="userhome.php"><b>HOME</b></a>
    <a href="makepayment.php">Make Payment</a>
    <a href="Transfer Money.php">Money Transfer</a>
    
    <a href="change_password.php">CHANGE PASSWORD</a>
    <a href="login.php">LOGOUT</a>
</div>
<div style="padding-left:16px">
  <h2>DEBIT AMMOUNT</h2>
  <table>
    <td>
      <tr>ACCOUNT NO:  </tr><input type="text" name="account_no" placeholder="ENTER ACCOUNT NO HERE"> <br><br>
      <tr>ENTER RECEIVER ACCOUNT NO:  </tr><input type="text" name="account_no" placeholder="ENTER ACCOUNT NO HERE"> <br><br>
       <tr>ENTER AMMOUNT:  </tr><input type="text" name="account_no" placeholder="ENTER AMMOUNT HERE"> <br><br>
    <button class="button">CONTINUE</button>
     
     
    </td>
  </table>
</div>
</body>
</html>