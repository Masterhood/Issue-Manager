<!DOCTYPE html>
<html>
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
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <link rel="stylesheet" href="Issue.css"> <meta name="viewport" content="width=device-width, initial-scale=1"><title>Hood IT Support</title></head>
</head>
<body>
  <nav class="navbar">
    <div class="logo">
    <a href=index.php ><img src="Hood_logo.jpg" alt="Hood" height= 83.3px ></a>
      <span>Hood Inc's Issue manager</span>
       </div>
      <a href=Help.php ><button class="help-btn">Help</button></a>
     <a href=Adminlog.php ><button class="login-btn">Login</button></a>
  </nav>
   <div class="help">
        <p style= background-color:#dddddd >
           FAQ: <br><br>
Into tyle "Name of reporter" write your full name in "lastname firstname" format. For example "McKeon John"<br><br>
Into tyle "Type of issue" write what kind of issue it is (Software or Hardware) use shorts (SW and HW)<br><br>
Into "description" write some basic description of what happened.<br> [For example your Microsoft Word stopped functioning, or you mouse broke] <br><br>
If there is need for better description and Admin solving reported issue will contact you for better and more detail description.<br><br>
            
YOU WON'T BE ABLE TO LOGIN INTO THIS SITE IF YOURE NOT AN HELPDESK ADMIN.

        </p>
</div>
  <!-- add your content here -->
</body>
<footer >
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
</html>
