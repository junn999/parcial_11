<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">   
    <title>Login</title>
</head>
<body>
  <body background="libreria.jpg"> 
    <br><br>
  <div class="encab"> <h1>BookStore</h><br> </div><br><br>
      
    <div class="login">    
    <form id="login" method="get" action="{{ url('/home') }}">    
        <label><b>Usuario<br>     
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Contraseña<br>     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
        <input class="buttom" type="submit" name="log" id="log" value="Login" >     
        <br><br>    
       </form>  
       <form id="login" method="get" action="register.php"> 
              
</div>    
</body>   

</html>

