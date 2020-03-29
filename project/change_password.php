<?php
session_start()

?>

<?php
if(isset($_SESSION["id"])){
    $id =  $_SESSION["id"] ;

}
?>

<?php
// including the database connection file
include_once("db.php");
 
if(isset($_POST['Submit'])) { 
  $id = $_POST['id'];

    $password1 = $_POST['password1'];
    $password = $_POST['password'];
    
        
    // checking empty fields
    if(empty($password1)||  empty($password)) { 

     if(empty($password1)) {
            echo "<font color='red'>Id field is empty.</font><br/>";
        }

       
        
        if(empty($password)) {
            echo "<font color='red'>password field is empty.</font><br/>";
        }
      if ($password != $password1) {
        echo "<font color='red'>both password need to be same.</font><br/>";
        # code...
      }
        
         echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        exit();
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE user SET password='$password' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: home.php");
    }
}
?>
<?php
//getting id from url

 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $password = $res['password'];
    
}
?>
<html>
<head>    
    <title>Change Password</title>
</head>
 
<body>
    <a href="home.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
 <tr>
                <td>Id</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password1"></td>
            </tr>
           
            </tr>   <tr>             <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>