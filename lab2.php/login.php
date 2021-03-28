<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	$username=$_POST["username"];
	$passwore=$_POST["password"];
	if($username=="sadman"&& $password=="123"){
		header("Location:admin.php");
	}
		
}


?>
<html lang="en">
<head>
    <link href="logcss.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    
    <form action =""method="POST">
	<table>
        <div>
        
        <tr>
        
               <h3>Login From</h3>
            
        </tr>
		
		>
		
		
		
            <td>Name:</td>
            <td><input type="text" name="name" placeholder="name"required></td>
            
          
        </tr>
        <tr>
		
		
		
            <td>UserName:</td>
            <td><input type="text" name="username" placeholder="username"required></td>
            
          
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" placeholder="password"required></td>
        </tr>
        <tr class="sub">
          <td><input  type="submit"value="Login"/></td>  
            <!-- <td><input type="submit"value="Exit"/></td> -->
        
        
            
            
            
        </tr>      

    </table>
    </fieldset>
        </div>
       
    </form>
</body>
</html>