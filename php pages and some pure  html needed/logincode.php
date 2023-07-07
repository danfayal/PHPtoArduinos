<?php
 
include('connection.php'); 

    $username = $_POST['meulogin'];  
    $password = $_POST['minhasenha'];  
     
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
       $password = stripcslashes($password);  
       $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
	   
	   
     // $query = mysql_query("SELECT * FROM tbuser WHERE seuemail='".addSlashes($username)."' AND suasenha='".addSlashes($password)."'");
	 //  $res = mysql_num_rows($query);
        $sql = "SELECT * FROM your_table WHERE seuemail = '$username' AND suasenha = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
      
          if($count >= 1){  
		  if(isset($_POST['meulogin']) ){
			    echo "Active login...<br>";
	  echo "$username<br><br>";
	 
	   session_start();
	  $_SESSION['username'] = $username;
	  isset($_SESSION['username']);
	  
		  }
		  else {
			    
		
		exit();
			
		  }
		  
		 
		 

        }  
        else{  
	
       header("Location: forbid.html");
        } 
?>

<html>
<body oncontextmenu="return false">
<form name="controller" method="post" action="messages" ><br><br>
<button name="msg" type="submit" value="pd6On" >DIGITAL PORT 13 ON</button><br><br>
<button name="msg" type="submit" value="pd6Off" > DIGITAL PORT 13 OFF</button>

</form>



<script type="text/javascript">

	
 document.onmousedown = disableclick; 
  status = "Right Click Disabled"; 
  function disableclick(e) 
  { 
    if(event.button == 2) 
    { 
      alert(status); 
      return false;  
    } 
  } 
  


  </script>

  
  
  
 </script>
</body>
</html>
