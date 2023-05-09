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
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <link rel="stylesheet" type="text/css" href="Issue.css"> <meta name="viewport" content="width=device-width, initial-scale=1"><title>Hood IT Support</title></head>
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
  <div class="form">
    <form method="POST" action= "<?php echo $_SERVER['PHP_SELF'];?>">
	
            <form style="text-align:center;" method="post" action="<?php $_SERVER['PHP_SELF'];?>" >
                <p>
             <input type="text" name="name"  placeholder="username of reporter..." autofocus />                         
                </p>
                 <input type="number" name="id"  placeholder="id of reporter..." autofocus />    
                <p>
               <input type="text" name="type" placeholder="Type of issue(SW or HW)..." />                 
                </p> 
                <p>
              <input type="number" name="pc_number" placeholder="Number of PC station..."  />                 
                </p>
                <!---
vypnuto kvůli idee s kradením dat přímo z Pc
    <label for="datum">Date:</label><br><input type="text" id="datum" name="datum"><br>

  </--->
                <p>
                 <textarea id="freeform" name="description" placeholder="Description..." rows="4" cols="50"></textarea>                      
                </p>
                <p>
                <input type="submit" name="submit" value="Submit">
                <input type="reset" name="reset" value="Reset">  
                </p>
            </form>

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

        
      		<?php
             
            
                $id = $_POST['id'];
                $username = $_POST['username'];
                $type = $_POST['type'];
                $pc_number=$_POST['pc_number']
                $description = $_POST['Description'];
                
                $hash = md5($id.date('YmdMS'));
                
                
                               
                              
                    $sql = "insert into issue (id,type,description,pc_number)
                            values ('".$id."',".$username",'".$type."','".$description"','".$pc_number"'))";
                    $conn->query($sql);
                    
                    echo "<script>alert('Zadání problému je úspěšné);</script>";
                                                              
            
            ?>
		
	