<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Acesso</title>
        <meta charset="utf-8">
		<content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href="../css/all.css">
		
        <style>
html, body {
  width: 100%;
  height: 100%;
  margin: 0;
  font-family: Helvetica, Arial, sans-serif;
  overflow: hidden;
}

.ghost {
  position: absolute;
  left: -100%;
}

.framed {
  position: absolute;
  top: 50%; left: 50%;
  width: 15rem;
  margin-left: -7.5rem;
}

.logo {
  margin-top: -9em;
  cursor: default;
}

.form {
  margin-top: -4.5em;
  transition: 1s ease-in-out;
}

.input {
  -moz-box-sizing: border-box;
       box-sizing: border-box;
  font-size: 1.125rem;
  line-height: 3rem;
  width: 100%; height: 3rem;
  color: #444;
  background-color: rgba(255,255,255,.9);
  border: 0;
  border-top: 1px solid rgba(255,255,255,0.7);
  padding: 0 1rem;
  font-family: 'Open Sans', sans-serif;
}
  .input:focus {
    outline: none;
  }
  .input--top {
    border-radius: 0.5rem 0.5rem 0 0;
    border-top: 0;
  }
  .input--top2 {
    border-radius: 0.11rem 0.11rem 0 0;
    border-top: 0;
  }
  
  .input--submit {
    background-color: rgba(92,168,214,0.9);
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    border-top: 0;
    border-radius: 0 0 0.5rem 0.5rem;
    margin-bottom: 1rem;
  }

.text {
  color: #0000ff;
  text-shadow: 0 1px 1px rgba(0,0,0,0.8);
  text-decoration: none;
}
  .text--small {
    opacity: 0.85;
    font-size: 0.75rem;
    cursor: pointer;
  }
    .text--small:hover {
      opacity: 1;
    }
  .text--omega {
    width: 200%;
    margin: 0 0 1rem -50%;
    font-size: 1.5rem;
    line-height: 1.125;
    font-weight: normal;
  }
  .text--centered {
    display: block;
    text-align: center;
  }
  .text--border-right {
    border-right: 1px solid rgba(255,255,255,0.5);
    margin-right: 0.75rem;
    padding-right: 0.75rem;
  }

.legal {
  position: absolute;
  bottom: 1.125rem; left: 1.125rem;
}

.photo-cred {
  position: absolute;
  right: 1.125rem; bottom: 1.125rem;
}

.fullscreen-bg {
  position: fixed;
  z-index: -1;
  top:0; right:0; bottom:0; left:0;
  /* background: url(https://36.media.tumblr.com/3cae448eafe6cdd27c210b4da274cfe7/tumblr_ns9p18pY5a1qzwmsso1_1280.jpg) center; */
  background-image: url("tech2.png");
  background-size: cover;
}

#toggle--login:checked ~ .form--signup { left:200%; visibility:hidden; }
#toggle--signup:checked ~ .form--login { left:-100%; visibility:hidden; }

@media (height:300px){.legal,.photo-cred{display:none}}
        </style>
        
        
    </head>

	
	
    <body oncontextmenu="return false">

<input type="radio" checked id="toggle--login" name="toggle" class="ghost" />
  <input type="radio" id="toggle--signup" name="toggle" class="ghost" />

 

  <form name = "f1" class="form form--login framed" method="POST" action = "logincode"  onsubmit = "return validation()" / >
    <input type="email" placeholder="E-mail"  name="meulogin" class="input input--top" />
    <input type="password" placeholder="Senha" name="minhasenha" class="input" />
   
  <input type="submit" value="Logar" class="input input--submit" /><br><br>
<a href="./atualiza"> ---->Clique aqui e mude a senha </a>
  </form>
  
 

  <div class="fullscreen-bg"></div>

 
 
 
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
  
   function validation()  
            {  
                var id=document.f1.meulogin.value;  
                var ps=document.f1.minhasenha.value;  
				
                if(id.length=="" && ps.length=="" ) {  
                    alert("user and password can't be empty.");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("user field is empty.");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("password field is empty.");  
                    return false;  
                    }  
					
					
                }                             
            }  





 </script>

 
    </body>
	
</html>
