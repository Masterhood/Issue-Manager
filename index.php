<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname "issue_manager";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8;", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <link rel="stylesheet" href="Issue.css"> <meta name="viewport" content="width=device-width, initial-scale=1"><title>Hood IT Support</title></head>
</head>
<body>
  <nav class="navbar">
    <div class="logo">
     <a href=issue_manager.html ><img src="Hood.jpg" alt="Hood"></a>
      <span>Hood Inc's Issue manager</span>
       </div>
      <a href=Help.html ><button class="help-btn">Help</button></a>
     <a href=Adminlog.html ><button class="login-btn">Login</button></a>
  </nav>
  <div class="form">
    <form method="POST" action= "<?php echo $_SERVER['PHP_SELF'];?>">
  <label for="jmeno">Name of reporter:</label><br><input type="text" id="jmeno" name="jmeno"><br>
<!---
vypnuto kvůli idee s kradením dat přímo z Pc
    <label for="datum">Date:</label><br><input type="text" id="datum" name="datum"><br>
   <label for="lokace">Localization:</label><br><input type="text" id="lokace" name="lokace"><br>
  </--->
    <label for="problem">Type of issue:</label><br><input type="text" id="problem" name="problem"><br>
  <label for="popis">Description:</label><br><textarea id="freeform" name="freeform" rows="4" cols="50"></textarea></br>
  <input type="submit" value="Submit">
  </div>
  </form>
  <footer>
  <div class="copy">
  <b>Copyright by Hood's Corporation.                            For internal use only, do not share. Sharing is forbidden.</b>
  </div>

    </footer>
  
  <?php
/*if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_POST['fname'];
if (empty(($name)){
echo "Name is empty";
}else{
echo $name;
}
}
  <!-- add your content here -->
</body>
</html>