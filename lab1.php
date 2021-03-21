<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	$username=$_POST["username"];
	$passwore=$_POST["password"];
	if($username=="sadman"&& $password=="123"){
		header("Location:Dashboard.php");
	}
		
}


?>

<html lang="en">

<body>
    
    <form action =""method="POST">
	<table>
        <h1 class="log"></h1>
        <div>
        
        <tr>
        
               <h3>Login From</h3>
            
        </tr>
        <tr>
            <td>UserName:</td>
            <td><input type="text" name="username" placeholder="username"required></td>
            
            <!-- <td>Password:</td> -->
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