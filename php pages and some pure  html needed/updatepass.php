
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
	<!---	<link rel="icon" href="../../favicon.ico">	-->

    <title>Update your password.</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! 
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]
    <script src="assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body oncontextmenu="return false">

    
	
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
	  
		<h1>
			UPDATE YOUR PASS
					</h1>

<div style="width:30%;">
<form  id="form_id" method="post" name="myform" action="" >
<div class="form-group">
    <label for="exampleInputPassword1" style="color:blue;">Your login</label>
    <input type="text" class="form-control" name="myusername" id="exampleInputPassword" placeholder="Put here the username . . .">
  </div> 
 <div class="form-group">
    <label for="exampleInputPassword1" style="color:blue;">Old password</label>
    <input type="password" class="form-control" name="old_pass" id="exampleInputPassword0" placeholder="Old Password . . .">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:blue;">New password</label>
    <input type="password" class="form-control" name="new_pass" id="exampleInputPassword1" placeholder="New Password. . .">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:blue;">Type the new password again</label>
    <input type="password" class="form-control" name="re_pass" id="exampleInputPassword2" placeholder="Type new password again. . .">
  </div>
  <button onclick="verifyPassword()" type="submit" name="re_password" class="btn btn-primary"  value = "clickMe"/> <i class="glyphicon glyphicon-save" /></i>Alterar Senha</button>
</form>
</div>

      </div>
    </div>

<script>
//document.getElementById("clickMe").onclick = 
function verifyPassword() {  
var p = document.getElementById("exampleInputPassword").value;
  var pw = document.getElementById("exampleInputPassword0").value;
  var pw1 = document.getElementById("exampleInputPassword1").value;
  var pw2 = document.getElementById("exampleInputPassword2").value;
  //check empty password field  
  if(p=="" ||pw == "" || pw1 == "" || pw2 == "" ) {  
    alert("Please, fill all fields.");  
     return false;  
  }  
   
 //minimum password length validation  
  if(pw1.length < 3 || pw2.length < 3) {  
     alert( "The nwe password needs at least 03 characters");  
     return false;  
  }  
  
 // equal text    
  if(pw2 != pw1 ) {  
     alert( "New password and confirmation are not the same.");  
     return false;  
  }  
  
//maximum length of password validation  
  if(pw1.length > 10 || pw2.length > 10) {  
     alert("The password can't exceed 10 characters.");  
     return false;  
  } else {  
  var act = document.getElementById("form_id").action;
      if (act != "") {
		  const form = document.getElementById("form_id");
	 act = "change.php";
	 form.setAttribute("action", act);
          form.action = act;
   form.submit();
			
			 //alert("redirecting... " + act);
 return false;            
			}else{ alert("Please, fill all data. ");}
  }  
} 





function disableclick(e) 
  { 
    if(event.button == 2) 
    { 
      alert(status); 
      return false;  
    } 
  } 

</script>





    <footer class="footer">
     
    </footer>


    <!-- Bootstrap core JavaScript
    ==================================================
    <!-- Placed at the end of the document so the pages load faster 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>  -->
	
	
	
	
  </body>
</html>
