<?php
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
<style >
   .error {color: #FF0000;}

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
   <?php
$PasswordErr2 = $idErr  = "";
$password = $id  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
$valid = true;
{
  if (empty($_POST["password"])) {
    $valid = false;
    $PasswordErr2 = "Password is required";
  } else {
     $password = test_input($_POST["password"]);
    
  }
  
  if (empty($_POST["id"])) {
     $valid = false;
    $idErr = "account is required";
  } else {
     $id = test_input($_POST["id"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/^[0-9]*$/', $id)) {
       $valid = false;
      $idErr = "Only numbers allowed";
    }
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  ?>

<div class="bgimage">
<div class="menu">
  <div class="rightmenu">
    <ul>
  <a href="HOME.php"><li> home</li></a>
  <a href="login.php"><li id="fisrtlist"> Login</li> </a> 
  <a href="Online.php"><li> Internet Banking</li></a>

  </ul>
</div>
</div>

<div style="padding-left:16px">
   <h2><font color="white"> Login </font> </h2>
  <p><span class="error">* required field</span></p>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <table>
    <td>
      <tr><font color="white"><h4> ACCOUNT NO:</h4></font>  </tr><input type="text" name="id" placeholder="ENTER ACCOUNT NO HERE"> 
      <span class="error">* <?php echo $idErr;?></span> <br><br><br><br>
      <tr><font color="white"> <h4>Password </h4></font>  </tr><input type="password" name="password" placeholder="ENTER ACCOUNT NO HERE"> 
       <span class="error">* <?php echo $PasswordErr2;?></span> <br><br><br><br>
     </td>
   </table>
      <tr> 
                <td></td>
                <td><input type="Submit" name="Submit" value="Login" class="button"></td>
            </tr>

</div>

<?php
if(isset($_POST['Submit'])) { 
   
$id = $_POST['id']   ;
  
    $password = $_POST['password'];}
   
?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bank_management";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
       
      
       $sql = "SELECT * FROM user WHERE id = '".$_POST["id"]."' and password = '".$_POST["password"]."'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0)
      {
        $_SESSION["id"]=$_POST["id"];
        $_SESSION["login"]=true;
        while($res = mysqli_fetch_array($result)) {

          if ($res["user_type"]== 'manager') {
      $_SESSION["login"]=true;
        header("location: managerhome.php");
        }

        elseif ($res["user_type"]== 'employee') {
        $_SESSION["login"]=true;
        header("location: emphome.php");
        }

      elseif ($res["user_type"]== 'user') {
         $_SESSION["login"]=true;
        header("location: userhome.php");
      }
       
      }
        }
      else
        echo "wrong email or password";
   }
  ?>


  <a href="home.php"> back</a>
</body>

</html>