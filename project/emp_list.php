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
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
 <a href="managerhome.php"><b>HOME</b></a>
    <a href="Terminate_emp.php">Terminate Employee</a>
    <a href="Give Loan.php">Give loan</a>
    <a href="emp_list">EMployee List</a>
    <a href="change_password.php">CHANGE PASSWORD</a>
    <a href="login.php">LOGOUT</a>
</div>
<div style="padding-left:16px">

<h2>Employee List</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Designation</th>
    <th>Id</th>
     <th>Contact No</th>
      <th>Address</th>
  </tr>
  <tr>
    <td>Mr.Rahim Uddin</td>
    <td>Clerk</td>
    <td>10001</td>
    <td>01000000</td>
    <td>Uttara</td>

  </tr>
  <tr>
    <td>Mrs. Afsana begum</td>
    <td>Receiptionist</td>
    <td>10002</td>
    <td>01000050</td>
    <td>Uttara</td>
  </tr>
  <tr>
   <td>Mr.Noor Alam</td>
    <td>Serior Account Officer</td>
    <td>1003</td>
    <td>01030040</td>
    <td>Basumdhara</td>
  </tr>
  <tr>
   <td>Mr.Ayshik Khan</td>
    <td>Clerk</td>
    <td>10201</td>
    <td>01003070</td>
    <td>Kuratoli</td>
  </tr>
  <tr>
    <td>Mr.Saad</td>
    <td>Barch Incharge</td>
    <td>100034</td>
    <td>0100001200</td>
    <td>Mirpur</td>
  </tr>
  <tr>
    <td>Mr.karim Uddin</td>
    <td>Account Officer</td>
    <td>10005</td>
    <td>01000100</td>
    <td>Uttara</td>
  </tr>
</table>

</body>
</html>
