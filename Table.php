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
    <div class="table">
       <table>
  <tr>
    <th>ID of reporter</th>
    <th>Type of issue</th>
    <th>PC station number</th>
    <th>Description</th>
    <th>Asignee</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>testovaci issue</td>
    <td>SW</td>
    <td>4</td>
    <td>Aplikace MS Word není nainstalovaná na této stanici</td>
    <td>none</td>
    <td>
    
<div class="dropup">
  <button class="dropbtn">Dropup</button>
  <div class="dropup-content">
    <a href="#">Pending</a>
    <a href="#">Work in progress</a>
    <a href="#">Pending approval</a>
    <a href="#">Resolved</a>
  </div>
</div>
      </td>
  </tr>
  <tr>
   <?php 
        $sql = "select admin.jmeno as jmeno from admin";
              
        $result = $conn->query($sql);  
        $result->setFetchMode(PDO::FETCH_ASSOC);
      ?> 
        
        <?php while ($row = $result->fetch()): ?>        
         <tr>
         <td><?php echo ($row['jmeno']) ?><td>
         <td><?php echo ($row['admin.prijmeni']) ?><td>
         <td><?php echo ($row['admin.heslo']) ?><td>
          <td><?php echo ($row['admin.username'])?><td>
         </tr>        
        <?php endwhile; ?> 
      
 </tr>
</table>
    </div>
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
  
</html>
