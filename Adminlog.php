<!DOCTYPE html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="issue-manager";

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
     <a href=index.php ><img src="Hood_logo.jpg" alt="Hood" height= 83.3px ></a>
      <span>Hood Inc's Issue manager</span>
    </div>

  </nav>
  <?php
  if(!isset($_POST['submit'])){
  ?>
    <div class="form">
    <form method="POST" action= "<?php echo $_SERVER['PHP_SELF'];?>">
        
  <label for="username"></label><br><input type="text" id="username" name="username"placeholder="Name.."><br>
 <label for="problem"></label><br><input type="password" id="password" name="password"placeholder="Password..."><br>
  <input type="submit" name="submit" value="Submit">
  </div>
  </form>
  <!-- add your content here -->
</body>
<footer>
<div class="footer">
<div class="row">
<ul>
<li>Contact  <a href="mailto:issueteam@hoodinc.com"></a></li>
<li><a href="#">Help</a></li>
</ul>
</div>
<div class="row">
Hood Incorporation (325 North St. Paul Street #2020 Dallas, TX 75201, USA) Copyright © 2022 Hood - All rights reserved 
</div>
</div>
    </footer>
<?php
            } else {       
            
                $username = $_POST['username'];
                $password = $_POST['password'];  
                      
                              
                    $sql = "insert into admin (username,heslo)
                            values ('".$username."','".$password."')";
                    $conn->query($sql);
                    
                    echo "<script>alert('Přihlášení do systému je úspěšné);</script>";
                                                              
            }
            ?>
</html>
